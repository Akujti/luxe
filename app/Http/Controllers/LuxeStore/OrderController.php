<?php

namespace App\Http\Controllers\LuxeStore;

use App\Http\Controllers\Controller;
use App\Http\Requests\LuxeStore\Order\AddOrderRequest;
use App\Http\Requests\LuxeStore\Order\AddToCartRequest;
use App\Mail\AdminOrderCompletedMail;
use App\Mail\CouponUsedMailTemplate;
use App\Mail\NewOrderCreated;
use App\Mail\OrderCompleted;
use App\Mail\OrderMailTemplate;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\LuxeStoreProductForm;
use App\Models\LuxeStore\LuxeStoreProductVariantValues;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\LuxeStore\Order\LuxeStoreOrderFormInputs;
use App\Models\LuxeStore\Order\LuxeStoreOrderProduct;
use App\Models\MarketingMenu;
use App\Models\Notification;
use App\Models\User;
use App\Models\UserCheckoutInformation;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function admin_index(Request $request)
    {
        $filters = [
            'name' => $request->get('name'),
            'status' => $request->get('status'),
            'date' => $request->get('date'),
            'price' => $request->get('price'),
            'product' => $request->get('product'),
        ];
        $products = LuxeStoreProduct::orderBy('name')->get();
        $marketing_menu_category = LuxeStoreCategory::where('slug', 'marketing-menu')->firstOrFail();
        $orders = LuxeStoreOrder::whereHas('products', function ($q) use ($marketing_menu_category) {
            $q->whereHas('product', function ($q) use ($marketing_menu_category) {
                $q->whereHas('categories', function ($q) use ($marketing_menu_category) {
                    $q->where('luxe_store_categories.id', '!=', $marketing_menu_category->id);
                });
            });
        })->where(function ($query) use ($filters) {
            if ($filters['status']) {
                $query->where('status', $filters['status']);
            }
            if ($filters['date']) {
                $query->whereDate('created_at', '=', $filters['date']);
            }
        })->with(['products', 'billing_details', 'payment', 'inputs', 'user'])
            ->when($filters['name'], function ($q, $name) {
                $q->whereHas('user.profile', function ($q) use ($name) {
                    $q->where('fullname', 'like', $name . '%');
                });
            })
            ->when($filters['price'], function ($q, $price) {
                $q->whereHas('payment', function ($q) use ($price) {
                    $q->where('total_price', $price);
                });
            })
            ->when($filters['product'], function ($q, $product) {
                $q->whereHas('products', function ($q) use ($product) {
                    $q->whereHas('product', function ($q) use ($product) {
                        $q->where('id', $product);
                    });
                });
            })->latest()->paginate(20);
        // $orders = LuxeStoreOrder::whereHas('products', function ($q) use ($marketing_menu_category) {
        //     $q->whereHas('product', function ($q) use ($marketing_menu_category) {
        //         $q->when('categories', function ($q) use ($marketing_menu_category) {
        //             $q->where('luxe_store_categories.id', '!=', $marketing_menu_category->id);
        //         });
        //     });
        // })->latest()->paginate(20);
        // $orders = LuxeStoreOrder::latest()->paginate(20);

        return view('admin.orders.index', compact('orders', 'products'));
    }

    public function marketing_menu_index(Request $request)
    {
        $filters = [
            'name' => $request->get('name'),
            'status' => $request->get('status'),
            'date' => $request->get('date'),
            'price' => $request->get('price'),
            'product' => $request->get('product'),
        ];
        $marketing_menu_category = LuxeStoreCategory::where('slug', 'marketing-menu')->firstOrFail();
        $products = LuxeStoreProduct::whereHas('categories', function ($q) use ($marketing_menu_category) {
            $q->where('luxe_store_categories.id', $marketing_menu_category->id);
        })->orderBy('name')->get();
        $orders = LuxeStoreOrder::whereHas('products', function ($q) use ($marketing_menu_category) {
            $q->whereHas('product', function ($q) use ($marketing_menu_category) {
                $q->whereHas('categories', function ($q) use ($marketing_menu_category) {
                    $q->where('luxe_store_categories.id', $marketing_menu_category->id);
                });
            });
        })->where(function ($query) use ($filters) {
            if ($filters['status']) {
                $query->where('status', $filters['status']);
            }
            if ($filters['date']) {
                $query->whereDate('created_at', '=', $filters['date']);
            }
        })->with(['products', 'billing_details', 'payment', 'inputs', 'user'])
            ->when($filters['name'], function ($q, $name) {
                $q->whereHas('user.profile', function ($q) use ($name) {
                    $q->where('fullname', 'like', $name . '%');
                });
            })
            ->when($filters['price'], function ($q, $price) {
                $q->whereHas('payment', function ($q) use ($price) {
                    $q->where('total_price', $price);
                });
            })
            ->when($filters['product'], function ($q, $product) {
                $q->whereHas('products', function ($q) use ($product) {
                    $q->whereHas('product', function ($q) use ($product) {
                        $q->where('id', $product);
                    });
                });
            })->latest()->paginate(20);
        $page_title = "Marketing Menu Orders";
        return view('admin.orders.index', compact('orders', 'products', 'page_title'));
    }

    public function show($id)
    {
        $order = LuxeStoreOrder::with(['products', 'billing_details', 'payment', 'inputs', 'user'])->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function my_orders()
    {
        $orders = LuxeStoreOrder::with(['products', 'billing_details', 'payment', 'inputs', 'user'])->where('user_id', auth()->id())->latest()->paginate(20);
        $marketing_orders = MarketingMenu::where('user_id', auth()->user()->id)->latest()->paginate(20);
        return view('auth.orders.index', compact('orders', 'marketing_orders'));
    }

    public function show_agent($id)
    {
        $order = LuxeStoreOrder::with(['products', 'billing_details', 'payment', 'inputs', 'user'])->findOrFail($id);
        return view('auth.orders.show', compact('order'));
    }

    public function edit_show($id)
    {
        $order = LuxeStoreOrder::with(['products', 'billing_details', 'payment', 'inputs', 'user'])->findOrFail($id);
        return view('auth.orders.edit', compact('order'));
    }

    public function update_request_info(Request $req, $row)
    {
        // DB::beginTransaction();
        $row = LuxeStoreOrder::find($row);

        if ($row->status == 'Request Info') {
            $row->request_info_response = $req->request_info_response;
            $row->status = 'Updated Info';
        }

        $row->save();

        if ($req->has('custom')) {
            foreach ($req->custom as $custom) {
                $rowEl = LuxeStoreOrderFormInputs::find($custom['id']);
                if ($rowEl) {
                    $rowEl->input_name = $custom['input_name'];
                    $rowEl->input_value = $custom['input_value'];
                    $rowEl->save();
                }
            }
        }

        $billing = [
            'agent_name' => $req->billing_first_name,
            'agent_surname' => $req->billing_last_name,
            'street_address' => $req->billing_street_address,
            'city' => $req->billing_city,
            'zip_code' => $req->billing_zip_code,
            'email' => $req->billing_email,
            'phone' => $req->billing_phone,
        ];
        $row->billing_details()->update($billing);

        $shipping = [
            'agent_name' => $req->shipping_first_name,
            'agent_surname' => $req->shipping_last_name,
            'street_address' => $req->shipping_street_address,
            'city' => $req->shipping_city,
            'zip_code' => $req->shipping_zip_code,
            'email' => $req->shipping_email,
            'phone' => $req->shipping_phone,
        ];

        $row->shipping_details()->update($shipping);

        $details['order'] = $row;

        $notification = Notification::where('title', 'Order Status Update')->first();
        $emails = $notification->getEmails();
        $bcc = $notification->getBccEmails();

        Mail::to($emails)->bcc($bcc)->send(new OrderCompleted($details));

        return redirect()->route('my_orders.show', $row->id)->with('message', 'Successfully Updated!');
    }

    /**
     * @throws \Throwable
     */
    public function create(AddOrderRequest $req)
    {
        DB::beginTransaction();
        try {
            $row = new LuxeStoreOrder;

            $user_email = User::whereEmail($req->billing['email'])->first();
            $row->user_id = auth()->id() ? auth()->id() : ($user_email ? $user_email->id : null);
            $row->status = 'Not Paid';

            $notify_emails = [];

            $notify_emails = [];

            $row->save();

            if (auth()->id()) {
                UserCheckoutInformation::updateOrCreate([
                    'user_id' => auth()->id()
                ], [
                    "agent_name" => $req->billing['agent_name'],
                    "agent_surname" => $req->billing['agent_surname'],
                    "street_address" => $req->billing['street_address'],
                    "city" => $req->billing['city'],
                    "state" => $req->billing['state'],
                    "zip" => $req->billing['zip_code'],
                    "phone" => $req->billing['phone'],
                    "email" => $req->billing['email'],
                    "shipping_agent_name" => $req->shipping['agent_name'],
                    "shipping_agent_surname" => $req->shipping['agent_surname'],
                    "shipping_street_address" => $req->shipping['street_address'],
                    "shipping_city" => $req->shipping['city'],
                    "shipping_state" => $req->shipping['state'],
                    "shipping_zip" => $req->shipping['zip_code'],
                    "shipping_phone" => $req->shipping['phone'],
                    "shipping_email" => $req->shipping['email']
                ]);
            }

            $sub_total = 0;
            $total_price = 0;
            $is_marketing_menu_order = false;
            if (Session::get('shopping_cart')) {
                $cart_data = Session::get('shopping_cart')[0];
                if (count($cart_data) == 0) {
                    if ($req->wantsJson()) {
                        return response()->json([
                            'error' => 'Something went  wrong! Please try again.'
                        ], 500);
                    }
                    return redirect()->back()->with('error', 'Something went  wrong! Please try again.');
                }

                foreach ($cart_data as $product) {
                    $productDb = LuxeStoreProduct::findOrFail($product['item_id']);
                    if ($productDb->notify_email) {
                        $notify_emails[] = $productDb->notify_email;
                    }
                    $marketing_menu_category = LuxeStoreCategory::whereName('Marketing Menu')->first();
                    if ($marketing_menu_category) {
                        $is_marketing_menu_product = $productDb->categories()->where('luxe_store_categories.id', $marketing_menu_category->id)->exists();
                        $is_marketing_menu_order = $is_marketing_menu_order || $is_marketing_menu_product;
                    }
                    if (isset($product['item_variant'])) {
                        $orderProductVariant = LuxeStoreProductVariantValues::find($product['item_variant'][0]['choosed_id']);
                        $orderProductVariant->stock = $orderProductVariant->stock - $product['item_quantity'];
                        $orderProductVariant->save();
                    } else {
                        $productDb->stock = $productDb->stock - $product['item_quantity'];
                        $productDb->save();
                    }
                    $sub_total += $product['item_price'] * $product['item_quantity'];

                    $productModels = [
                        'product_id' => $product['item_id'],
                        'price' => $product['item_price'] ? $product['item_price'] : 0,
                        'quantity' => (int)$product['item_quantity'],
                        'variant_name' => (isset($product['item_variant'])) ? $product['item_variant'][0]['variant_name'] : null,
                        'variant_value' => (isset($product['item_variant'])) ? $product['item_variant'][0]['choosed']['value'] : null
                    ];

                    $order_product = $row->products()->createMany([$productModels]);

                    $orderProduct = LuxeStoreOrderProduct::find($order_product[0]->id);
                    $formInputsModels = [];
                    if ($product['item_form']) {
                        foreach ($product['item_form'] as $input) {
                            $formInputsModels[] = [
                                'product_id' => $orderProduct->id,
                                'input_name' => $input['input']['input_name'],
                                'input_value' => $input['value'],
                                'is_file' => $input['is_file'] ?? 0
                            ];
                        }
                        $row->inputs()->createMany($formInputsModels);
                    }
                }
            } else {
                if ($req->wantsJson()) {
                    return response()->json([
                        'error' => 'Something went  wrong! Please try again.'
                    ], 500);
                }
                return redirect()->back()->with('error', 'Something went  wrong! Please try again.');
            }

            $coupon_code = null;
            $total_price = $sub_total;
            $couponDb = null;
            if (Session::get('coupon_code')) {
                $coupon_code = Session::get('coupon_code');
                $total_price -= $coupon_code['price'];
                $couponDb = LuxeStoreCouponCode::where('code', $coupon_code['code'])->firstOrFail();
                $couponDb->expired = 1;
                $couponDb->save();
            }

            $row->payment()->create([
                'sub_total' => $sub_total,
                'coupon_code' => $coupon_code ? $coupon_code['price'] : 0,
                'total_price' => $total_price
            ]);

            $row->billing_details()->create($req->billing);

            if ($req->same_as_billing) {
                $row->shipping_details()->create($req->billing);
            } else {
                $row->shipping_details()->create($req->shipping);
            }

            Session::forget('shopping_cart');
            Session::forget('coupon_code');
            Session::save();

            $cc = [];
            $details = $row;
            $details['type'] = 'admin';
            $details['data'] = $row;
            $details['is_marketing_menu_order'] = $is_marketing_menu_order;
            $details['products'] = $row->products()->get();

            $emails = [];
            $bcc = [];

//            $emails = ['operations@luxeknows.com', 'email@luxeknows.com'];
            $notification = Notification::where('title', 'Coupon Used')->first();
            if ($notification) {
                $emails = $notification->getEmails();
                $bcc = $notification->getBccEmails();
            }
            if ($couponDb) {
                try {
                    $details['coupon'] = $couponDb;
                    $details['email'] = $req->billing['email'];
                    $details['order'] = $row;
                    Mail::to($emails)->bcc($bcc)->send(new CouponUsedMailTemplate($details));
                } catch (\Throwable $th) {
                }
            }

            $emails = [];
            $bcc = [];
            $notification_emails = [];

            try {
                if ($is_marketing_menu_order) {
                    $notification = Notification::where('title', 'Order Created Marketing')->first();
                    if ($notification) {
                        $emails = $notification->getEmails();
                        $bcc = $notification->getBccEmails();
                    }
//                    $emails[] = 'designs@luxeknows.com';
                } else {
                    $notification = Notification::where('title', 'Order Created')->first();
                    if ($notification) {
                        $notification_emails = $notification->getEmails();
                        $bcc = $notification->getBccEmails();
                    }


                    $emails = array_merge($notification_emails, $notify_emails);

//                    $emails[] = 'support@luxeknows.com';
                }

                Mail::to($emails)->bcc($bcc)->send(new NewOrderCreated($row, null, 'LUXE Properties - New Order - Marketplace'));
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
            }

            $details['type'] = 'agent';
            $details['data'] = $row;
            $details['products'] = $row->products()->get();
            $details['form_title'] = 'New Order';

            try {
                if ($req->billing['email']) {
                    Mail::to($req->billing['email'])->cc($cc)->send(new OrderMailTemplate($details));
                }
            } catch (\Throwable $th) {
                Log::error($th->getMessage());
            }

            DB::commit();

            $order = LuxeStoreOrder::find($row->id);

            if (!$total_price && $order) {
                $order->updateQuietly([
                    'status' => 'Paid'
                ]);
            }

            if ($req->wantsJson()) {
                return response()->json([
                    'order_id' => $row->id,
                ]);
            }
            return redirect()->route('luxe_store.thank_you')->with('message', 'Successfully ordered!');
        } catch (\Throwable $th) {
            DB::rollBack();
            if ($req->wantsJson()) {
                return response()->json([
                    'error' => 'Something went wrong!'
                ], 500);
            }
            throw $th;
        }
    }

    public function complete(LuxeStoreOrder $order)
    {
        $order->update(['status' => 'Completed']);
        $details['order'] = $order;
        Mail::to($order->user->email)->send(new OrderCompleted($details));
        return back()->with('message', 'Order Completed');
    }

    public function update_status(Request $req, LuxeStoreOrder $order)
    {
        $order->update(['status' => $req->status, 'request_info' => $req->request_info]);
        $details['order'] = $order;
        Mail::to($order->user->email)->send(new OrderCompleted($details));

        $notification = Notification::where('title', 'Order Status Update')->first();
        if ($notification) {
            $emails = $notification->getEmails();
            $bcc = $notification->getBccEmails();

            Mail::to($emails)->bcc($bcc)->send(new AdminOrderCompletedMail($order));
        }
        return back()->with('message', 'Order Status Changed');
    }

    public function update(Request $req)
    {
        $key = $req->key;
        $quantity = $req->quantity;

        if (Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart');

            if (isset($cart_data[0][$key]['item_variant'])) {
                $checkStock = LuxeStoreProductVariantValues::findOrFail($cart_data[0][$key]['item_variant'][0]['choosed_id']);
            } else {
                $checkStock = LuxeStoreProduct::findOrFail($cart_data[0][$key]['item_id']);
            }

            if ($checkStock->stock >= $quantity) {
                $cart_data[0][$key]["item_quantity"] = $quantity;

                Session::forget('shopping_cart');
                Session::save();
                Session::put('shopping_cart', $cart_data);
                return true;
            } else {
                return $checkStock->stock;
            }
        }
    }

    public function addtocart(AddToCartRequest $req)
    {
        $prod_id = $req->input('product_id');
        $quantity = $req->input('quantity');
        $variant_value = $req->input('variant_value', null);

        if ($req->form) {
            $form = $req->form;
        } else {
            $form = null;
        }

        if ($req->form) {
            $form = $req->form;
        } else {
            $form = null;
        }

        if (Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];
        } else {
            $cart_data = array();
        }
        $product = LuxeStoreProduct::find($prod_id);

        $item_id_list = array_column($cart_data, 'item_id');

        if (in_array($prod_id, $item_id_list) && $product->variants->count() == 0) {
            $key = array_search($prod_id, array_column($cart_data, 'item_id'));
            $cart_data[$key]["item_quantity"] = $cart_data[$key]["item_quantity"] + $req->input('quantity');

            $checkStock = LuxeStoreProduct::findOrFail($cart_data[$key]["item_id"]);

            if ($checkStock->stock >= $cart_data[$key]["item_quantity"]) {
                $item_data = $cart_data;

                Session::forget('shopping_cart');
                Session::save();
                Session::push('shopping_cart', $item_data);

                return back()->with('message', '"' . $cart_data[$key]["item"]["name"] . '" Already Added to Cart');
            } else {
                return back()->with('error', 'Max stock');
            }
        } else if (in_array($prod_id, $item_id_list) && $product->variants->count() > 0) {
            foreach ($cart_data as $key => $value) {
                $value_from_req = $product->variants[0]->values()->where('value', $variant_value)->firstOrFail();
                if ($cart_data[$key]["item_variant"][0]["choosed_id"] == $value_from_req->id) {
                    $cart_data[$key]["item_quantity"] = $cart_data[$key]["item_quantity"] + $req->input('quantity');

                    $checkStock = LuxeStoreProduct::findOrFail($cart_data[$key]["item_id"]);

                    if ($checkStock->stock >= $cart_data[$key]["item_quantity"]) {
                        $item_data = $cart_data;
                        Session::forget('shopping_cart');
                        Session::save();
                        Session::push('shopping_cart', $item_data);
                        return back()->with('message', '"' . $cart_data[$key]["item"]["name"] . '" Already Added to Cart');
                    } else {
                        return back()->with('error', 'Max stock');
                    }
                }
            }
        }

        $product = LuxeStoreProduct::find($prod_id);

        if ($product) {
            $form_inputs = null;
            if ($product->inputs->count()) {
                $form_inputs = [];
                if ($form)
                    foreach ($form as $key => $value) {
                        $is_file = false;
                        if ($value instanceof UploadedFile) {
                            $name = time() . Str::random(10) . '.' . $value->getClientOriginalExtension();
                            $path = $value->storeAs('/order_images', $name, 'public');
                            $value = $path;
                            $is_file = true;
                        }
                        $form_inputs[] = ['input' => LuxeStoreProductForm::select('id', 'input_name')->where('input_value', $key)->firstOrFail()->toArray(), 'value' => $value, 'is_file' => $is_file];
                    }
            }

            $variant_input = null;
            $price = 0;
            $name = $product->name;

            if ($product->sale_price) {
                $price = $product->sale_price;
            } else {
                $price = $product->price;
            }
            if ($product->variants->count()) {
                $choosed = $product->variants[0]->values()->where('value', $variant_value)->firstOrFail();
                $name .= ' - ' . $choosed->value;
                $variant_input[] = ['variant_name' => $product->variants[0]->variant_name, 'choosed' => $choosed->toArray(), 'choosed_id' => $choosed->id];

                if ($choosed->sale_price) {
                    $price = $choosed->sale_price;
                } else {
                    $price = $choosed->price;
                }
            }

            $item_array = array(
                'item_id' => $product->id,
                'item' => LuxeStoreProduct::without(['images', 'variants', 'inputs'])->findOrFail($product->id)->toArray(),
                'item_quantity' => $quantity,
                'item_variant' => $variant_input,
                'item_form' => $form_inputs,
                'item_price' => $price,
                'item_name' => $name
            );
            $cart_data[] = $item_array;

            Session::forget('shopping_cart');
            Session::save();
            Session::push('shopping_cart', $cart_data);

            return back()->with('message', '"' . $product->name . '" Added to Cart');
        }
    }


    public function cartload()
    {
        // return redirect('/home');
        $sub_total = 0;
        $total_price = 0;
        $coupon_code = null;
        if (Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            foreach ($cart_data as $product) {
                $sub_total += ($product['item_quantity'] * $product['item_price']);
            }
            $total_price = $sub_total;
            if (Session::get('coupon_code')) {
                $coupon_code = Session::get('coupon_code');
                $total_price -= $coupon_code['price'];
            }
            return view('luxe_store.cart', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
        }

        $cart_data = array();
        return view('luxe_store.cart', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
    }

    public function checkout()
    {
        $sub_total = 0;
        $total_price = 0;
        $coupon_code = null;
        if (Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            foreach ($cart_data as $product) {
                $sub_total += ($product['item_quantity'] * $product['item_price']);
            }
            $total_price = $sub_total;

            if (Session::get('coupon_code')) {
                $coupon_code = Session::get('coupon_code');
                $total_price -= $coupon_code['price'];
            }
            return view('luxe_store.checkout', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
        }

        $cart_data = array();
        return view('luxe_store.checkout', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
    }

    public function deleteproductcart(Request $req)
    {
        if (Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            unset($cart_data[$req->key]);

            Session::forget('shopping_cart');
            Session::save();
            Session::push('shopping_cart', $cart_data);
        }

        return back()->with('message', 'Deleted Successfully');
    }
}

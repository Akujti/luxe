<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\LuxeStoreCouponCode;
use App\Models\LuxeStore\LuxeStoreProductForm;
use App\Models\LuxeStore\Order\LuxeStoreOrder;
use App\Models\LuxeStore\Order\LuxeStoreOrderProduct;
use App\Http\Requests\LuxeStore\Order\AddOrderRequest;
use App\Http\Requests\LuxeStore\Order\AddToCartRequest;

class OrderController extends Controller
{
    public function admin_index() {
        $orders = LuxeStoreOrder::with(['products', 'billing_details', 'payment', 'inputs'])->latest()->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }

    public function create(AddOrderRequest $req) {
        DB::beginTransaction();
        try {
            $row = new LuxeStoreOrder;

            $row->email = $req->billing['email'];
            $row->phone = $req->billing['phone'];
            $row->agent_name = $req->billing['agent_name'];
            $row->agent_surname = $req->billing['agent_surname'];
            $row->status = 'Paid';

            $row->save();
            
            $sub_total = 0;
            $total_price = 0;
            if(Session::get('shopping_cart')) {
                $cart_data = Session::get('shopping_cart')[0];

                foreach($cart_data as $product) {
                    $productDb = LuxeStoreProduct::findOrFail($product['item_id']);

                    $productDb->stock = $productDb->stock - $product['item_quantity'];
                    $productDb->save();
                    $sub_total += $product['item_price'] * $product['item_quantity'];
                    
                    $productModels = [
                        'product_id' => $product['item_id'],
                        'price' => $product['item_price'],
                        'quantity' => (int) $product['item_quantity'],
                        'variant_name' => (isset($product['item_variant'])) ? $product['item_variant'][0]['variant_name'] : null,
                        'variant_value' => (isset($product['item_variant'])) ? $product['item_variant'][0]['choosed']['value'] : null
                    ];
                    $order_product = $row->products()->createMany([$productModels]);

                    $orderProduct = LuxeStoreOrderProduct::find($order_product[0]->id);
                    $formInputsModels = [];
                    if($product['item_form']) {
                        foreach($product['item_form'] as $input) {
                            $formInputsModels[] = [
                                'product_id' => $orderProduct->id,
                                'input_name' => $input['input']['input_name'],
                                'input_value' => $input['value']
                            ];
                        }
                        $row->inputs()->createMany($formInputsModels);
                    }
                }
            }

            $coupon_code = null;
            $total_price = $sub_total;
            if(Session::get('coupon_code')) {
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

            if($req->same_as_billing) {
                $row->shipping_details()->create($req->billing);
            } else {
                $row->shipping_details()->create($req->shipping);
            }

            Session::flush('shopping_cart');
            Session::flush('coupon_code');

            
            DB::commit();
            return redirect()->route('luxe_store.thank_you')->with('message', 'Successfully ordered!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update(Request $req) {
        $key = $req->key;
        $quantity = $req->quantity;

        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart');
            $checkStock = LuxeStoreProduct::findOrFail($cart_data[0][$key]['item_id']);

            if($checkStock->stock >= $quantity) {
                $cart_data[0][$key]["item_quantity"] = $quantity;
    
                Session::flush('shopping_cart');
                Session::put('shopping_cart', $cart_data);
                return true;
            } else {
                return $checkStock->stock;
            }
        }
    }

    public function addtocart(AddToCartRequest $req) {
        $prod_id = $req->input('product_id');
        $quantity = $req->input('quantity');
        $variant_value = $req->input('variant_value', null);
        $form = $req->input('form', null);

        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];
        } else {
            $cart_data = array();
        }
        $product = LuxeStoreProduct::find($prod_id);

        $item_id_list = array_column($cart_data, 'item_id');

        if(in_array($prod_id, $item_id_list) && $product->variants->count() == 0) {
            $key = array_search($prod_id, array_column($cart_data, 'item_id'));
            $cart_data[$key]["item_quantity"] = $cart_data[$key]["item_quantity"] + $req->input('quantity');

            $checkStock = LuxeStoreProduct::findOrFail($cart_data[$key]["item_id"]);

            if($checkStock->stock >= $cart_data[$key]["item_quantity"]) {
                $item_data = $cart_data;
    
                Session::flush('shopping_cart');
                Session::push('shopping_cart', $item_data);
               
                return back()->with('message', '"'.$cart_data[$key]["item"]["name"].'" Already Added to Cart');
            } else {
                return back()->with('error', 'Max stock');
            }
        } else if(in_array($prod_id, $item_id_list) && $product->variants->count() > 0) {
            foreach($cart_data as $key => $value) {
                $value_from_req = $product->variants[0]->values()->where('value', $variant_value)->firstOrFail();
                if($cart_data[$key]["item_variant"][0]["choosed_id"] == $value_from_req->id) {

                    $cart_data[$key]["item_quantity"] = $cart_data[$key]["item_quantity"] + $req->input('quantity');

                    $checkStock = LuxeStoreProduct::findOrFail($cart_data[$key]["item_id"]);

                    if($checkStock->stock >= $cart_data[$key]["item_quantity"]) {
                        $item_data = $cart_data;
                        Session::flush('shopping_cart');
                        Session::push('shopping_cart', $item_data);
                        return back()->with('message', '"'.$cart_data[$key]["item"]["name"].'" Already Added to Cart');
                    } else {
                        return back()->with('error', 'Max stock');
                    }
                }
            }
        }

        $product = LuxeStoreProduct::find($prod_id);
            
        if($product) {
            $form_inputs = null;
            if($product->inputs->count()) {
                $form_inputs = [];
                
                foreach($form as $key => $value) {
                    $form_inputs[] = ['input' => LuxeStoreProductForm::select('id', 'input_name')->where('input_value', $key)->firstOrFail()->toArray(), 'value' => $value];
                }
            }
            
            $variant_input = null;
            $price = 0;
            $name = $product->name;

            if($product->sale_price) {
                $price = $product->sale_price;
            } else {
                $price = $product->price;
            }
            if($product->variants->count()) {
                $choosed = $product->variants[0]->values()->where('value', $variant_value)->firstOrFail();
                $name .= ' - '.$choosed->value;
                $variant_input[] = ['variant_name' => $product->variants[0]->variant_name, 'choosed' => $choosed->toArray(), 'choosed_id' => $choosed->id];

                if($choosed->sale_price) {
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
            Session::flush('shopping_cart');
            Session::push('shopping_cart', $cart_data);

            return back()->with('message', '"'.$product->name.'" Added to Cart');
        }
    }
    

    public function cartload()
    {
        $sub_total = 0;
        $total_price = 0;
        $coupon_code = null;
        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            foreach($cart_data as $product) {
                $sub_total += ($product['item_quantity'] * $product['item_price']);
            }
            $total_price = $sub_total;
            if(Session::get('coupon_code')) {
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
        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            foreach($cart_data as $product) {
                $sub_total += ($product['item_quantity'] * $product['item_price']);
            }
            $total_price = $sub_total;

            if(Session::get('coupon_code')) {
                $coupon_code = Session::get('coupon_code');
                $total_price -= $coupon_code['price'];
            }
            return view('luxe_store.checkout', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
        }

        $cart_data = array();
        return view('luxe_store.checkout', compact('cart_data', 'sub_total', 'total_price', 'coupon_code'));
    }

    public function deleteproductcart(Request $req) {
        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            unset($cart_data[$req->key]);

            Session::flush('shopping_cart');
            Session::push('shopping_cart', $cart_data);
        }

        return back()->with('message', 'Deleted Successfully');
    }
}

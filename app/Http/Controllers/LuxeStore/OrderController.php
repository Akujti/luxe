<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\LuxeStoreProductForm;
use App\Models\LuxeStore\LuxeStoreProductVariants;
use App\Http\Requests\LuxeStore\Order\AddToCartRequest;
use App\Models\LuxeStore\LuxeStoreProductVariantValues;

class OrderController extends Controller
{
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
            $item_data = $cart_data;

            Session::flush('shopping_cart');
            Session::push('shopping_cart', $item_data);
           
            return back()->with('message', '"'.$cart_data[$key]["item"]["name"].'" Already Added to Cart');
        } else if(in_array($prod_id, $item_id_list) && $product->variants->count() > 0) {
            foreach($cart_data as $key => $value) {
                $value_from_req = $product->variants[0]->values()->where('value', $variant_value)->firstOrFail();
                if($cart_data[$key]["item_variant"][0]["choosed_id"] == $value_from_req->id) {

                    $cart_data[$key]["item_quantity"] = $cart_data[$key]["item_quantity"] + $req->input('quantity');

                    $item_data = $cart_data;
                    Session::flush('shopping_cart');
                    Session::push('shopping_cart', $item_data);
                    return back()->with('message', '"'.$cart_data[$key]["item"]["name"].'" Already Added to Cart');
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
        if(Session::get('shopping_cart')) {
            $cart_data = Session::get('shopping_cart')[0];

            $total_price = 0;
            foreach($cart_data as $product) {
                $total_price += ($product['item_quantity'] * $product['item_price']);
            }
            return view('luxe_store.cart', compact('cart_data', 'total_price'));
        }

        $cart_data = array();
        return view('luxe_store.cart', compact('cart_data'));
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

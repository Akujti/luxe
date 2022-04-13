<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\LuxeStore\LuxeStoreProduct;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Http\Requests\LuxeStore\Product\AddRequest;
use App\Http\Requests\LuxeStore\Product\DeleteRequest;
use App\Http\Requests\LuxeStore\Product\UpdateRequest;
use App\Models\LuxeStore\LuxeStoreProductVariants;

class StoreController extends Controller
{
    public function index() {
        $categories = LuxeStoreCategory::with('products')->latest()->get(); 
        return view('luxe_store.index', compact('categories'));
    }

    public function products_index($category_slug) {
        $category = LuxeStoreCategory::with('products')->where('slug', $category_slug)->firstOrFail();
        return view('luxe_store.products', compact('category'));
    }

    public function single_product_index($product_slug) {
        $product = LuxeStoreProduct::with('inputs')->where('slug', $product_slug)->firstOrFail();
        return view('luxe_store.single-product', compact('product'));
    }

    public function create(AddRequest $req)
    {
        $row = new LuxeStoreProduct;

        $row->name = $req->name;
        $row->description = $req->description;
        $row->description_2 = $req->description_2;
        $row->price = $req->price;
        $row->stock = $req->stock;

        
        if($req->preview_image) {
            $name = time() . Str::random(10) . '.' . $req->preview_image->getClientOriginalExtension();
            $path = $req->preview_image->storeAs('/luxe_store', $name, 'public');
            $row->preview_image = $path;
        }
        $row->save();
        
        foreach($req->categories as $category) {
            $row->categories()->attach($category);
        }

        if($req->has('variant_name')) {
            $variant = LuxeStoreProductVariants::create([
                'variant_name' => $req->variant_name,
                'product_id' => $row->id
            ]);

            if($req->has('variant_values')) {
                $valueModels = [];
                foreach($req->variant_values as $value) {
                    $valueModels[] = $value;
                }

                $variant->values()->createMany($valueModels);
            }
        }

        if($req->has('form')) {
            $formModels = [];
            foreach($req->form as $form) {
                $formModels[] = ['input_name' => $form];
            }

            $row->inputs()->createMany($formModels);
        }

        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $row = LuxeStoreCategory::find($req->id);

        $row->name = $req->name;

        if($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $path = $req->image->storeAs('/luxe_store', $name, 'public');
            $row->image = $path;
        }
        $row->save();

        return back()->with('message', 'Created successfully');
    }

    public function delete(DeleteRequest $req) {
        $row = LuxeStoreProduct::find($req->id);

        if($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }
}

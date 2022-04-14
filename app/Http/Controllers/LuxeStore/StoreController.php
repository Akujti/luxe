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
        $categories = LuxeStoreCategory::with('products')->latest()->paginate(8); 
        return view('luxe_store.index', compact('categories'));
    }

    public function products_index($category_slug) {
        $category = LuxeStoreCategory::where('slug', $category_slug)->firstOrFail();
        
        $products = $category->products()->paginate(8);
        return view('luxe_store.products', compact('category', 'products'));
    }

    public function single_product_index($product_slug) {
        $product = LuxeStoreProduct::with('inputs')->where('slug', $product_slug)->firstOrFail();
        return view('luxe_store.single-product', compact('product'));
    }

    public function new_product($id = null) {
        $product = null;
        if($id) {
            $product = LuxeStoreProduct::with('inputs')->where('id', $id)->firstOrFail();
        }
        $categories = LuxeStoreCategory::latest()->get();
        return view('admin.store.add-edit-product', compact('categories', 'product'));
    }

    public function admin_products() {
        $products = LuxeStoreProduct::latest()->paginate(15);
        return view('admin.store.products', compact('products'));
    }

    public function create(AddRequest $req)
    {
        $row = new LuxeStoreProduct;

        $row->name = $req->name;
        $row->description = $req->description;
        $row->description_2 = $req->description_2;
        $row->price = $req->price;
        $row->sale_price = $req->sale_price;
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

        if($req->has('images')) {
            $formModels = [];
            foreach($req->images as $image) {
                $name = time() . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('/luxe_store', $name, 'public');
                $formModels[] = ['image' => $path];
            }

            $row->images()->createMany($formModels);
        }

        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $row = LuxeStoreProduct::find($req->id);

        $row->name = $req->name;
        $row->description = $req->description;
        $row->description_2 = $req->description_2;
        $row->price = $req->price;
        $row->sale_price = $req->sale_price;
        $row->stock = $req->stock;

        
        if($req->preview_image) {
            $name = time() . Str::random(10) . '.' . $req->preview_image->getClientOriginalExtension();
            $path = $req->preview_image->storeAs('/luxe_store', $name, 'public');
            $row->preview_image = $path;
        }
        $row->save();
        
        
        $row->categories()->detach();
        foreach($req->categories as $category) {
            $row->categories()->attach($category);
        }

        $row->variants()->delete();
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

        $row->inputs()->delete();
        if($req->has('form')) {
            $formModels = [];
            foreach($req->form as $form) {
                $formModels[] = ['input_name' => $form];
            }

            $row->inputs()->createMany($formModels);
        }

        $row->images()->delete();
        if($req->has('images')) {
            $formModels = [];
            foreach($req->images as $image) {
                $name = time() . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('/luxe_store', $name, 'public');
                $formModels[] = ['image' => $path];
            }

            $row->images()->createMany($formModels);
        }

        return back()->with('message', 'Updated successfully');
    }

    public function delete(DeleteRequest $req) {
        $row = LuxeStoreProduct::find($req->id);

        if($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }
}

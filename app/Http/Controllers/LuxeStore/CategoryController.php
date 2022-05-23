<?php

namespace App\Http\Controllers\LuxeStore;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\LuxeStore\LuxeStoreCategory;
use App\Http\Requests\LuxeStore\Category\AddRequest;
use App\Http\Requests\LuxeStore\Category\DeleteRequest;
use App\Http\Requests\LuxeStore\Category\UpdateRequest;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function index() {
        $categories = LuxeStoreCategory::latest()->paginate(15);

        return view('admin.store.index', compact('categories'));
    }

    public function index_products($category_id) {
        $category = LuxeStoreCategory::find($category_id);

        return view('admin.store.products', compact('category'));
    }

    public function create(AddRequest $req)
    {
        $row = new LuxeStoreCategory;

        $row->name = $req->name;

        if($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $img = Image::make($req->image);

            $img->fit(304, 303, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(storage_path('app/public/luxe_store/' . $name));
            $row->image = 'luxe_store/'.$name;
        }
        $row->save();

        return back()->with('message', 'Created successfully');
    }

    public function update(UpdateRequest $req)
    {
        $row = LuxeStoreCategory::find($req->id);

        $row->name = $req->name;

        if($req->image) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $img = Image::make($req->image);

            $img->fit(304, 303, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(storage_path('app/public/luxe_store/' . $name));
            $row->image = 'luxe_store/'.$name;
        }
        $row->save();

        return back()->with('message', 'Created successfully');
    }

    public function delete(DeleteRequest $req) {
        $row = LuxeStoreCategory::find($req->id);

        if($row) {
            $row->delete();
        }
        return back()->with('message', 'Deleted successfully');
    }
}

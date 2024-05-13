<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use App\Models\PhotographerProperty;
use App\Models\PhotographerPropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PhotographerImageController extends Controller
{
    public function index(Photographer $photographer, PhotographerProperty $property)
    {
        $property->load('images');
        return view('admin.photographers.properties.images.index', compact('property'));
    }

    public function store(Request $request, Photographer $photographer, PhotographerProperty $property)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240'
        ]);
        $file = $request->image;

        $img = Image::make($file)->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 80);
        $name = 'small_' . time() . Str::random(10) . '.jpg';
        $path_small = 'photographers/' . $name;
        Storage::disk('public')->put($path_small, (string)$img->encode());

        $img = Image::make($file)->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 80);
        $name = 'medium_' . time() . Str::random(10) . '.jpg';
        $path_medium = 'photographers/' . $name;
        Storage::disk('public')->put($path_medium, (string)$img->encode());

        $img = Image::make($file)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 80);
        $name = 'large_' . time() . Str::random(10) . '.jpg';
        $path_large = 'photographers/' . $name;
        Storage::disk('public')->put($path_large, (string)$img->encode());

        $property->images()->create([
            'small' => $path_small,
            'medium' => $path_medium,
            'large' => $path_large
        ]);
        return back()->with('message', 'Image Uploaded');
    }

    public function destroy(Request $request, Photographer $photographer, PhotographerProperty $property, PhotographerPropertyImage $image)
    {
        $image->delete();
        return back()->with('message', 'Image Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotographerController extends Controller
{
    public function index()
    {
        $photographers = Photographer::orderby('name')->paginate(20);
        return view('admin.photographers.index', compact('photographers'));
    }

    public function create()
    {
        return view('admin.photographers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $path = null;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $resizedImage = Image::make($image)->fit(500, 500, function ($constraint) {
                $constraint->upsize();
            });
            $path = "images/photographers/{$filename}";
            Storage::disk('public')->put($path, (string)$resizedImage->encode());
        }

        Photographer::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $path,
        ]);

        return redirect()->route('admin.photographers.index')->with('message', 'Photographer Created');
    }
}

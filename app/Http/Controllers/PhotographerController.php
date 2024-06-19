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

    public function indexUser()
    {
        $photographers = Photographer::with('properties', 'properties.images')->orderby('name')->get();
        return view('pages.photographers', compact('photographers'));
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
            'link' => 'nullable',
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
            'link' => $request->link,
            'avatar' => $path,
        ]);

        return redirect()->route('admin.photographers.index')->with('message', 'Photographer Created');
    }

    public function update(Request $request)
    {
        $request->validate([
            'photographer_id' => 'required|exists:photographers,id',
            'name' => 'required',
            'email' => 'required|email',
            'link' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $photographer = Photographer::find($request->photographer_id);
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

        $photographer->update([
            'name' => $request->name,
            'email' => $request->email,
            'link' => $request->link,
            'avatar' => $path,
        ]);

        return redirect()->route('admin.photographers.index')->with('message', 'Photographer Updated');
    }

    public function destroy(Photographer $photographer)
    {
        $photographer->delete();
        return back()->with('message', 'Photographer Deleted');
    }
}

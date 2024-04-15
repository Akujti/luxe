<?php

namespace App\Http\Controllers;

use App\Models\AppointmentAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class AppointmentAddressController extends Controller
{
    public function index()
    {
        $addresses = AppointmentAddress::get();
        return view('appointments.addresses.index', compact('addresses'));
    }

    public function all()
    {
        return response()->json(AppointmentAddress::get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'email' => 'required|email',
            'beds' => 'nullable|string',
            'baths' => 'nullable|string',
            'price' => 'nullable',
            'agent_name' => 'nullable|string',
            'image' => 'nullable|image',
        ]);
        $path = null;
        if ($request->image) {
            $img = Image::make($request->image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg', 80);
            $name = time() . Str::random(10) . '.jpg';
            $path = 'open-house/' . $name;
            Storage::disk('public')->put($path, (string)$img->encode());
        }
        AppointmentAddress::create([
            'title' => $request->title,
            'email' => $request->email,
            'price' => $request->price,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'agent_name' => $request->agent_name,
            'image' => $path
        ]);
        return back()->with('message', 'Address Created');
    }

    public function update(Request $request, AppointmentAddress $appointmentAddress)
    {
        $request->validate([
            'title' => 'required|string',
            'email' => 'required|email',
            'beds' => 'nullable|string',
            'baths' => 'nullable|string',
            'price' => 'nullable',
            'agent_name' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $path = null;
        if ($request->image) {
            $img = Image::make($request->image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg', 80);
            $name = time() . Str::random(10) . '.jpg';
            $path = 'open-house/' . $name;
            Storage::disk('public')->put($path, (string)$img->encode());
        }

        $appointmentAddress->update([
            'title' => $request->title,
            'email' => $request->email,
            'price' => $request->price,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'agent_name' => $request->agent_name,
            'image' => $path ?? $appointmentAddress->image
        ]);
        return back()->with('message', 'Address Updated');
    }

    public function destroy(AppointmentAddress $appointmentAddress)
    {
        $appointmentAddress->delete();
        return back()->with('message', 'Address Deleted');
    }
}

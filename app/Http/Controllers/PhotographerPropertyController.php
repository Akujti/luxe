<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use App\Models\PhotographerProperty;
use Illuminate\Http\Request;

class PhotographerPropertyController extends Controller
{
    public function index(Photographer $photographer)
    {
        $photographer->load('properties');
        return view('admin.photographers.properties.index', compact('photographer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photographer_id' => 'required|exists:photographers,id',
            'address' => 'required'
        ]);
        $photographer = Photographer::find($request->photographer_id);
        $photographer->properties()->create(['address' => $request->address]);
        return back()->with('message', 'Property Created');
    }

    public function update(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:photographer_properties,id',
            'address' => 'required'
        ]);
        $property = PhotographerProperty::find($request->property_id);
        $property->update(['address' => $request->address]);
        return redirect()->route('admin.photographers.properties.index', $property->photographer_id)
            ->with('message', 'Property Updated');
    }

    public function destroy(PhotographerProperty $property)
    {
        $property->delete();
        return back()->with('message', 'Property Deleted');
    }
}

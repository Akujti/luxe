<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Listing;
use App\Notifications\CollectionShareNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = auth()->user()->collections()->withCount('listings')->get();
        return view('collections.index', compact('collections'));
    }

    public function create()
    {
        return view('collections.create');
    }

    public function show(Collection $collection)
    {
        $collection->load('listings');
        return view('collections.show', compact('collection'));
    }

    public function store(Request $request)
    {
        $collection = Collection::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_id' => $request->user()->id,
        ]);


        $listings = $collection->listings()->createMany($request->listings);
        Notification::route('mail', $request->email)->notify(new CollectionShareNotification($collection));

        return response()->json($collection, 201);
    }

    public function update(Collection $collection, Request $request)
    {
        $collection->update($request->all());
        if ($collection->email !== $request->email)
            Notification::route('mail', $request->email)->notify(new CollectionShareNotification($collection));

        return response()->json($collection, 200);
    }

    public function destroy(Collection $collection)
    {
        if ($collection->user_id !== auth()->id()) {
            $collection->delete();
        }
        return response()->json($collection, 200);
    }
}

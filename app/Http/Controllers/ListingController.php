<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::where('list_date', '>', Carbon::parse('Now -7 days'))->get();
        return view('listings.index', compact('listings'));
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'address' => 'required',
            'price' => 'required',
            'baths' => 'required',
            'beds' => 'required',
            'living_area' => 'required',
            'lot_size' => 'required',
            'list_date' => 'required',
            'main_image' => 'required|image',
            'images' => 'nullable',
        ]);
        try {
            $coordinates = $this->getAddressCoordinates($request->address);
            $details = [];
            $main_image = null;
            if ($request->hasFile("main_image")) {
                $file = $request->main_image;
                $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('/new-storage/images/marketing'), $name);
                $main_image = 'new-storage/images/marketing/' . $name;
            }
            if ($request->hasFile("images")) {
                foreach ($request->images as $file) {
                    $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('/new-storage/images/marketing'), $name);
                    $val = 'new-storage/images/marketing/' . $name;
                    array_push($details, $val);
                }
            }
            Listing::create(
                [
                    'user_id' => auth()->user()->id,
                    'type' => $request->type,
                    'address' => $request->address,
                    'price' => $request->price,
                    'baths' => $request->baths,
                    'beds' => $request->beds,
                    'living_area' => $request->living_area,
                    'lot_size' => $request->lot_size,
                    'list_date' => $request->list_date,
                    'main_image' => $main_image,
                    'images' => json_encode($details),
                    'lng' => $coordinates['lng'],
                    'lat' => $coordinates['lat'],
                ]
            );
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('message', 'Listing has been created');
    }

    private function getAddressCoordinates($address)
    {
        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=' . env('GOOGLE_MAPS_API_KEY'));
        if ($response['results'] && $response['results'][0]) {
            $res = $response['results'][0]['geometry']['location'];
            return $res;
        }
        throw new Exception("Address couldn\'t be located on Google Maps");
    }

    public function show(Listing $listing)
    {
        return view('listings.show', compact('listing'));
    }
}

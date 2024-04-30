<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'price' => $request->get('price'),
            'zip' => $request->get('zip'),
            'type' => $request->get('type'),
        ];
        $listings = Listing::where(function ($query) use ($filters) {
            if ($filters['price']) {
                $query->where('price', $filters['price']);
            }
            if ($filters['zip']) {
                $query->where('address', 'like', '%' . $filters['zip'] . '%');
            }
            if ($filters['type']) {
                $query->where('type', $filters['type']);
            }
        })->with('user', 'user.profile')->latest()->paginate(20);
        $listings_all = Listing::with('user', 'user.profile')->get();
        return view('listings.index', compact('listings', 'listings_all'));
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'agent_email' => 'nullable|exists:users,email',
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
                $main_image = $this->uploadImage($file);
            }
            if ($request->hasFile("images")) {
                foreach ($request->images as $file) {
                    $val = $this->uploadImage($file);
                    array_push($details, $val);
                }
            }
            Listing::create(
                [
                    'user_id' => $request->agent_email ? User::whereEmail($request->agent_email)->first()->id : auth()->user()->id,
                    'type' => $request->type,
                    'address' => $request->address,
                    'price' => $request->price,
                    'rental' => boolval($request->rental),
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

    public function edit(Request $request, Listing $listing)
    {
        if (auth()->user()->id == $listing->user->id || auth()->user()->isAdmin) {
            return view('listings.edit', compact('listing'));
        }
        return redirect()->back()->with('error', 'You don\'t have access');
    }

    public function update(Request $request, Listing $listing)
    {

        $request->validate([
            'agent_email' => 'nullable|exists:users,email',
            'type' => 'required',
            'address' => 'required',
            'price' => 'required',
            'baths' => 'required',
            'beds' => 'required',
            'living_area' => 'required',
            'lot_size' => 'required',
            'list_date' => 'required',
            'main_image' => 'image',
            'images' => 'nullable',
        ]);
        try {
            $coordinates = $this->getAddressCoordinates($request->address);
            $details = [];
            $main_image = null;
            if ($request->hasFile("main_image")) {
                $file = $request->main_image;
                $main_image = $this->uploadImage($file);
            }
            if ($request->hasFile("images")) {
                foreach ($request->images as $file) {
                    $val = $this->uploadImage($file);
                    array_push($details, $val);
                }
            }
            $listing->update(
                [
                    'user_id' => $request->agent_email ? User::whereEmail($request->agent_email)->first()->id : auth()->user()->id,
                    'type' => $request->type,
                    'address' => $request->address,
                    'price' => $request->price,
                    'rental' => boolval($request->rental),
                    'baths' => $request->baths,
                    'beds' => $request->beds,
                    'living_area' => $request->living_area,
                    'lot_size' => $request->lot_size,
                    'list_date' => $request->list_date,
                    'main_image' => $main_image ? $main_image : $listing->main_image,
                    'images' => count($details) ? json_encode($details) : $listing->images,
                    'lng' => $coordinates['lng'],
                    'lat' => $coordinates['lat'],
                ]
            );
            return redirect()->route('listings.show', $listing)->with('message', 'Listing has been updates');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy(Listing $listing)
    {
        if (auth()->user()->isAdmin) {
            $listing->delete();
            return redirect()->route('listings.index')->with('message', 'Deleted Successfully');
        }
        return redirect()->route('listings.index')->with('error', 'You do not have permission');
    }

    private function uploadImage($file)
    {
        $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $img = Image::make($file);

        $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path('/new-storage/images/marketing/' . $name));
        $val = 'new-storage/images/marketing/' . $name;
        return $val;
    }

    public function subscribe()
    {
        auth()->user()->update(
            ['coming_soon_notifications' => !auth()->user()->coming_soon_notifications]
        );
        return back()->with('message', 'You have been signed ' . (auth()->user()->coming_soon_notifications ? 'up' : 'out') . ' for email alerts');
    }
}

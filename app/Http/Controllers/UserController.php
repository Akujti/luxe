<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\UserNote;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\AddRequest;
use App\Http\Requests\User\NoteRequest;
use App\Http\Requests\User\DeleteRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Mail\ShowingAgentRequestMailTemplate;
use App\Models\CustomSection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function get(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        return $user;
    }

    public function update_form($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.form.update', compact('user'));
    }

    public function login()
    {
        $user_wp = Auth::guard('wordpress')->attempt([
            'user_email' => 'art.kujtimi@hotmail.com',
            'user_pass' => 'artartart'
        ]);
        if ($user_wp) {
            $user = Auth::guard('wordpress')->user();
            dd($user);
            $user->save();
            $user->login();
            return redirect()->intended('/user/links');
        }
    }

    public function admin_index(Request $request)
    {
        $filters = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
        ];
        $users = User::query();
        if ($filters['email']) {
            $users = User::where('email', 'like', $filters['email'] . '%')->with('profile')->orderBy(UserProfile::select('fullname')->whereColumn('user_profile.user_id', 'users.id'))->paginate(50);
        } else if ($filters['name']) {
            $users = User::whereHas('profile', function ($query) use ($filters) {
                $query->where('fullname', 'like', $filters['name'] . '%');
            })->orderBy(UserProfile::select('fullname')->whereColumn('user_profile.user_id', 'users.id'))->paginate(50);
        } else {
            $users = User::with('profile')->orderBy(UserProfile::select('fullname')->whereColumn('user_profile.user_id', 'users.id'))->paginate(50);
        }

        return view('admin.users.index', compact('users'));
    }

    public function my_profile(Request $request)
    {
        if ($request->wantsJson()) {
            return response()->json(['user' => $request->user()->load('profile')]);
        }
        return view('auth.profile.index');
    }

    public function view_profile($id)
    {
        $user = User::with('profile')->find($id);
        $orders = $user->orders()->latest()->get()->take(3);
        $notes = $user->notes()->latest()->get()->take(3);
        return view('admin.users.view-profile', compact('user', 'orders', 'notes'));
    }

    public function view_notes(Request $req, $id)
    {
        $user = User::with('profile')->find($id);
        $notes = $user->notes()->latest()->paginate(20);
        if ($req->staff) {
            return view('pages.notes', compact('user', 'notes'));
        }
        return view('admin.users.notes', compact('user', 'notes'));
    }

    public function agent_profile($id)
    {
        $user = User::with('profile')->find($id);
        $orders = $user->orders()->latest()->get()->take(3);
        $notes = $user->notes()->latest()->get()->take(3);
        return view('pages.agent-profile', compact('user', 'orders', 'notes'));
    }

    public function agent_list()
    {
        $users = User::where('role', 'agent')->latest()->paginate(20);

        return view('pages.list-of-agents', compact('users'));
    }

    public function create(AddRequest $req)
    {
        try {
            $row = new User;

            $row->email = $req->email;
            $row->password = Hash::make($req->password);
            $row->isAdmin = ($req->role == 'admin') ? 1 : 0;
            $row->role = $req->role;
            $row->status = $req->status;
            $row->save();

            $image = null;
            if (isset($req->profile['avatar'])) {
                if ($req->profile['avatar']) {
                    $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                    $img = Image::make($req->profile['avatar']);

                    $img->fit(205, 205, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save(storage_path('app/public/users/' . $name));
                    $image = 'users/' . $name;
                }
            }
            $languageJson = [];
            if ($req->has('languages') && $req->languages) {
                foreach ($req->languages as $language) {
                    array_push($languageJson, $language);
                }
            }
            $row->profile()->create([
                'fullname' => $req->profile['fullname'],
                'address' => $req->profile['address'],
                'phone' => $req->profile['phone'],
                'languages' => json_encode($languageJson),
                'avatar' => $image,
                'support_specialists' => $req->profile['support_specialists'],
                'loan_officer' => $req->profile['loan_officer'],
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

        return redirect()->route('admin.users.index')->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req)
    {
        try {
            $row = User::find($req->id);
            $row->app_link = $req->app_link;
            $row->email = $req->email;
            if ($req->password) {
                $row->password = Hash::make($req->password);
            }
            $row->isAdmin = ($req->role == 'admin') ? 1 : 0;
            $row->role = $req->role;
            $row->status = $req->status;
            $row->showing_agent = $req->showing_agent;
            $row->optin = $req->optin;

            $row->save();

            if (isset($req->profile)) {
                $image = $row->profile->avatar;
                if (isset($req->profile['avatar'])) {
                    $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                    $img = Image::make($req->profile['avatar']);

                    $img->fit(205, 205, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save(storage_path('app/public/users/' . $name));
                    $image = 'users/' . $name;
                }
                $languageJson = [];
                if ($req->has('languages') && $req->languages) {
                    if ($req->wantsJson()) {
                        foreach (explode(",", $req->languages) as $language) {
                            array_push($languageJson, trim($language));
                        }
                    } else {
                        foreach ($req->languages as $language) {
                            array_push($languageJson, $language);
                        }
                    }
                }
                $row->profile()->updateOrCreate(['user_id' => $row->id], [
                    'fullname' => $req->profile['fullname'],
                    'address' => $req->profile['address'],
                    'service_areas' => $req->profile['service_areas'],
                    'phone' => $req->profile['phone'],
                    'languages' => json_encode($languageJson),
                    'avatar' => $image,
                    'support_specialists' => $req->profile['support_specialists'] ? $req->profile['support_specialists'] : $row->profile->support_specialists,
                    'loan_officer' => $req->profile['loan_officer'] ? $req->profile['loan_officer'] : $row->profile->loan_officer,
                ]);
                $this->updateAddressCoordinates($row, $req->profile['address']);
            }
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

        if ($req->wantsJson()) {
            return response()->json('Success');
        }

        return redirect()->route('admin.users.index')->with('message', 'Successfully Updated');
    }

    public function update_profile(UpdateProfileRequest $req)
    {
        try {
            $languageJson = [];
            $row = User::find($req->id);
            $image = $row->profile->avatar;
            if ($req->remove_image == 1) {
                $image = null;
            }
            if (isset($req->profile['avatar'])) {
                $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                $img = Image::make($req->profile['avatar']);

                $img->fit(205, 205, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save(storage_path('app/public/users/' . $name));
                $image = 'users/' . $name;
            }
            if ($req->wantsJson()) {
                if (!empty($req->profile['languages']) && is_string($req->profile['languages'])) {
                    foreach (explode(",", $req->profile['languages']) as $language) {
                        array_push($languageJson, trim($language));
                    }
                }
            } else {
                if (!empty($req->languages)) {
                    foreach ($req->languages as $language) {
                        array_push($languageJson, $language);
                    }
                }
            }
            $row->profile()->update([
                'address' => $req->profile['address'],
                'service_areas' => isset($req->profile['service_areas']) ? $req->profile['service_areas'] : ($row->profile->service_areas ? $row->profile->service_areas : ''),
                'phone' => $req->profile['phone'],
                'languages' => json_encode($languageJson),
                'avatar' => $image,
            ]);
            $this->updateAddressCoordinates($row, $req->profile['address']);
            if ($req->wantsJson()) {
                return response()->json($row);
            }
        } catch (Exception $e) {
            Log::error($e);
            if ($req->wantsJson()) {
                return response()->json($e, 500);
            }
            return back()->with('error', 'Something went wrong');
        }
        return back()->with('message', 'Successfully Updated');
    }

    private function updateAddressCoordinates(User $user, $address)
    {
        // Log::info([!empty($address), $address != null, $address != $user->profile->address]);
        if (!empty($address) && $address != null && $address != $user->profile->address) {
            $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=' . env('GOOGLE_MAPS_API_KEY'));
            if ($response['results'] && $response['results'][0]) {
                // Log::info($response['results'][0]['geometry']['location']);
                $res = $response['results'][0]['geometry']['location'];
                $user->profile->lat = $res['lat'];
                $user->profile->lng = $res['lng'];
                $user->profile->save();
            }
        }
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image'
        ]);
        $name = time() . Str::random(10) . '.' . $request->avatar->getClientOriginalExtension();
        $img = Image::make($request->avatar);

        $img->fit(205, 205, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(storage_path('app/public/users/' . $name));
        $image = 'users/' . $name;
        $request->user()->profile()->update([
            'avatar' => $image,
        ]);
        return response()->json(['avatar' => $request->user()->avatar]);
    }

    public function delete(DeleteRequest $req)
    {
        try {
            $row = User::find($req->id);
            $row->delete();
        } catch (Exception $e) {
            Log::error($e);
            return back()->with('error', 'Something went wrong! User has not been deleted');
        }

        return back()->with('message', 'Successfully Deleted');
    }

    public function search(Request $req)
    {
        if ($req->search) {
            $users = UserProfile::where('fullname', 'like', '%' . $req->search . '%')->get();

            return response()->json([
                'users' => $users
            ]);
        }
    }

    public function create_note(NoteRequest $req)
    {
        $row = new UserNote;

        $row->body = $req->body;
        $row->user_id = $req->user_id;
        $row->author = auth()->id();
        $row->save();

        return back()->with('message', 'Successfully Added!');
    }

    public function delete_note(Request $req)
    {
        $id = $req->input('id', null);
        if ($id) {
            $row = UserNote::find($id);
            if ($row->author == auth()->id()) {
                $row->delete();
            }
        }
        return back()->with('message', 'Successfully deleted');
    }

    // public function delete_note(UserNote $note)
    // {
    //     if ($note->author == auth()->user()->id) {
    //         $note->delete();
    //         return redirect()->back()->with('message', 'Deleted');
    //     } else {
    //         return redirect()->back()->with('error', 'You do not have access');
    //     }
    // }

    public function update_role()
    {
        User::where('isAdmin', 1)->update(['role' => 'admin']);
        User::where('isAdmin', 0)->update(['role' => 'agent']);
        return back();
    }

    public function showing_agents(Request $request)
    {
        $agents = UserProfile::when($request->name, function ($query) use ($request) {
            $query->where('fullname', 'like', $request->name . '%');
        })->whereNotNull('address')->whereHas('user', function ($query) {
            $query->where('showing_agent', true);
        })->orderBy('fullname')->paginate(20);

        $agents_list = User::where('showing_agent', true)->whereHas('profile', function ($query) {
            $query->whereNotNull('address');
        })->get();
        $custom_section = CustomSection::whereTitle('Showing Agents')->first();
        return view('showing-agents.index', compact('agents', 'custom_section', 'agents_list'));
    }

    public function request_showing_agents(User $user)
    {
        $details = [];
        $details['agent'] = request()->user();
        $details['showing_agent'] = $user;
        $details['service'] = request()->service;
        $details['address'] = request()->address;
        $details['date'] = request()->date;

        $to = ['operations@luxeknows.com', $user->email, request()->user()->email];
        try {
            Mail::to($to)->send(new ShowingAgentRequestMailTemplate($details));
        } catch (\Exception $exception) {
            Log::alert($exception);
            return redirect()->back()->with('error', 'Request Failed');
        }
        return redirect()->back()->with('message', 'Request Submitted');
    }

    public function setUserCoordinates()
    {
        $users = User::whereHas('profile', function ($query) {
            $query->whereNotNull('address');
        })->get();
        $counter = 0;
        foreach ($users as $user) {
            echo($user->id . ' - ' . $user->profile->address);

            if ($user->profile->lat == null) {
                $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json?address=' . $user->profile->address . '&key=' . env('GOOGLE_MAPS_API_KEY'));
                if ($response['results'] && $response['results'][0]) {
                    $res = $response['results'][0]['geometry']['location'];
                    // $user->profile->save(
                    //     [
                    //         'lat' => $res['lat'], 'lng' => $res['lng'],
                    //     ]
                    // );
                    $user->profile->lat = $res['lat'];
                    $user->profile->lng = $res['lng'];
                    $user->profile->save();
                    echo $res['lat'] . ' * ' . $res['lng'];
                    sleep(1);
                    $counter++;
                }
            }
            echo "-------------";
        }
        return $counter;
    }
}

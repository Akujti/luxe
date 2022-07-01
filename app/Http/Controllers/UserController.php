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
use Illuminate\Support\Facades\Log;
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
        // $agents = User::whereHas('profile', function ($query) use ($filters) {
        //     if ($filters['address']) {
        //         $query->where('address', 'like', '%' . $filters['address'] . '%');
        //     } else if ($filters['language']) {
        //         $query->where('languages', 'like', "%\"{$filters['language']}\"%");
        //     }
        // })->whereOptin(true)->paginate(20);
        // dd($users = User::orWhere('email', 'like', $filters['email'] . '%')->with('profile')->orWhereHas('profile', function ($query) use ($filters) {
        //     $query->where('fullname', 'like', $filters['name'] . '%');
        // })->orderBy(UserProfile::select('fullname')->whereColumn('user_profile.user_id', 'users.id'))->toSql());
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

    public function my_profile()
    {
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

            $row->email = $req->email;
            if ($req->password) {
                $row->password = Hash::make($req->password);
            }
            $row->isAdmin = ($req->role == 'admin') ? 1 : 0;
            $row->role = $req->role;

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
                    'phone' => $req->profile['phone'],
                    'languages' => json_encode($languageJson),
                    'avatar' => $image,
                    'support_specialists' => $req->profile['support_specialists'] ? $req->profile['support_specialists'] : $row->profile->support_specialists,
                    'loan_officer' => $req->profile['loan_officer'] ? $req->profile['loan_officer'] : $row->profile->loan_officer,
                ]);
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
            $row->update(['optin' => $req->optin ? true : false]);
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
                foreach (explode(",", $req->profile['languages']) as $language) {
                    array_push($languageJson, trim($language));
                }
            } else {
                foreach ($req->languages as $language) {
                    array_push($languageJson, $language);
                }
            }
            $row->profile()->update([
                'address' => $req->profile['address'],
                'phone' => $req->profile['phone'],
                'languages' => json_encode($languageJson),
                'avatar' => $image,
            ]);
            if ($req->wantsJson()) {
                return response()->json($row);
            }
        } catch (Exception $e) {
            if ($req->wantsJson()) {
                return response()->json($e, 500);
            }
            return back()->with('error', 'Something went wrong');
        }
        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req)
    {
        try {
            $row = User::find($req->id);
            $row->delete();
        } catch (Exception $e) {
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
        if($id) {
            $row = UserNote::find($id);
            if($row->author == auth()->id()) {
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
}

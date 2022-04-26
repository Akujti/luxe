<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\AddRequest;
use App\Http\Requests\User\DeleteRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\UpdateProfileRequest;
use App\Models\UserProfile;

class UserController extends Controller
{
    public function get(Request $request)
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        return $user;
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

    public function admin_index() {
        $users = User::with('profile')->orderBy(UserProfile::select('fullname')->whereColumn('user_profile.user_id', 'users.id'))->paginate(50);

        return view('admin.users.index', compact('users'));
    }

    public function my_profile() {
        return view('auth.profile.index');
    }

    public function view_profile($id) {
        $user = User::with('orders')->find($id);

        return view('admin.users.view-profile', compact('user'));
    }

    public function create(AddRequest $req) {
        try {
            $row = new User;
    
            $row->email = $req->email;
            $row->password = Hash::make($req->password);
            $row->isAdmin = ($req->role == 'admin') ? 1 : 0;
            $row->role = $req->role;
            $row->save();
    
            $image = null;
            if(isset($req->profile['avatar'])) {
                if($req->profile['avatar']) {
                    $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                    $path = $req->profile['avatar']->storeAs('/users', $name, 'public');
                    $image = $path;
                }
            }
            $languageJson = [];
            foreach($req->languages as $language) {
                array_push($languageJson, $language);
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

        return back()->with('message', 'Successfully Created');
    }

    public function update(UpdateRequest $req) {
        try {
            $row = User::find($req->id);
    
            $row->email = $req->email;
            if($req->password) {
                $row->password = Hash::make($req->password);
            }
            $row->isAdmin = ($req->role == 'admin') ? 1 : 0;
            $row->role = $req->role;
    
            $row->save();
            
            if(isset($req->profile)) {
                $image = $row->profile->avatar;
                if(isset($req->profile['avatar'])) {
                    $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                    $path = $req->profile['avatar']->storeAs('/users', $name, 'public');
                    $image = $path;
                }
                $languageJson = [];
                foreach($req->languages as $language) {
                    array_push($languageJson, $language);
                }
                $row->profile()->update([
                    'fullname' => $req->profile['fullname'],
                    'address' => $req->profile['address'],
                    'phone' => $req->profile['phone'],
                    'languages' => json_encode($languageJson),
                    'avatar' => $image,
                    'support_specialists' => $req->profile['support_specialists'],
                    'loan_officer' => $req->profile['loan_officer'],
                ]);
            }
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

        return back()->with('message', 'Successfully Updated');
    }

    public function update_profile(UpdateProfileRequest $req) {
        try {
            $row = User::find($req->id);
            if(isset($req->profile)) {

                $image = $row->profile->avatar;
                if($req->remove_image == 1) {
                    $image = null;
                }
                if(isset($req->profile['avatar'])) {
                    $name = time() . Str::random(10) . '.' . $req->profile['avatar']->getClientOriginalExtension();
                    $path = $req->profile['avatar']->storeAs('/users', $name, 'public');
                    $image = $path;
                }
                $languageJson = [];
                foreach($req->languages as $language) {
                    array_push($languageJson, $language);
                }
                $row->profile()->update([
                    'fullname' => $req->profile['fullname'],
                    'address' => $req->profile['address'],
                    'phone' => $req->profile['phone'],
                    'languages' => json_encode($languageJson),
                    'avatar' => $image
                ]);
            }
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong');
        }

        return back()->with('message', 'Successfully Updated');
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = User::find($req->id);

            $row->delete();
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong! User has not been deleted');
        }
        

        return back()->with('message', 'Successfully Deleted');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a open-house controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_email = $request->email;
        $user_pass = $request->password;
        $user_wp_attempt = false;
        $check_user = User::where('email', $user_email)->where('password', '!=', null)->first();
        if ($check_user)
            $user_wp_attempt = true;
        else
            $user_wp_attempt = Auth::guard('wordpress')->attempt([
                'user_email' => $user_email,
                'user_pass' => $user_pass
            ]);
        if ($user_wp_attempt) {
            $exist_user = User::where('email', $user_email)->first();
            if ($check_user && Auth::attempt(['email' => $user_email, 'password' =>  Hash::make($user_pass)]))
                Auth::login($check_user);
            else if ($exist_user != null && $exist_user->count()) {
                $exist_user->password = Hash::make($user_pass);
                $exist_user->save();
                Auth::login($exist_user);
            } else {
                $user_wp = Auth::guard('wordpress')->user();
                $new_user = new User();
                $response = Http::get('https://myluxehub.com/wp-json/wp/v2/users/' . $user_wp->ID);
                $new_user->email = $user_wp->user_email;
                $new_user->password = Hash::make($user_pass);
                $new_user->wp_id = $user_wp->ID;
                $new_user->isAdmin = key_exists('slug', $response->json());
                $new_user->save();
                Auth::login($new_user);
            }
            if ($request->wantsJson()) {
                return response()->json(['token' => $exist_user->createToken('API Token')->plainTextToken, 'user' => $exist_user]);
            }
            return redirect(Redirect::intended('/home')->getTargetUrl());
        }

        return redirect()->back()->with('error', 'These credentials do not match our records.');
    }
}

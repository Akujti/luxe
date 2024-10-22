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
        $check_user = User::where('email', $user_email)->where('password', '!=', null)->first();

        $exist_user = User::where('email', $user_email)->first();
        if ($check_user) {
            if (Auth::attempt(['email' => $user_email, 'password' =>  $user_pass])) {
                Auth::login($check_user);
            } else {
                return redirect()->back()->with('error', 'These credentials do not match our records.');
            }
        }
        if ($request->wantsJson()) {
            return response()->json(['token' => $exist_user->createToken('API Token')->plainTextToken, 'user' => $exist_user]);
        }
        return redirect(Redirect::intended('/home')->getTargetUrl());

        return redirect()->back()->with('error', 'These credentials do not match our records.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

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
}

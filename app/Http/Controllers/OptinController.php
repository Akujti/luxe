<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OptinController extends Controller
{
    public function index(Request $request)
    {
        $filters = [
            'address' => $request->get('address'),
            'language' => $request->get('language'),
        ];
        $agents = User::whereHas('profile', function ($query) use ($filters) {
            $query->whereNotNull('address');
            if ($filters['address']) {
                $query->where('address', 'like', '%' . $filters['address'] . '%');
            } else if ($filters['language']) {
                $query->where('languages', 'like', "%\"{$filters['language']}\"%");
            }
        })->whereOptin(true)->paginate(15);

        $agents_list = User::whereHas('profile', function ($query) use ($filters) {
            $query->whereNotNull('address');
            if ($filters['address']) {
                $query->where('address', 'like', '%' . $filters['address'] . '%');
            } else if ($filters['language']) {
                $query->where('languages', 'like', "%\"{$filters['language']}\"%");
            }
        })->whereOptin(true)->with('profile')->get();

        if ($request->wantsJson()) {
            return response()->json(['agents' => $agents]);
        }
        return view('optin.index', compact('agents', 'agents_list'));
    }
}

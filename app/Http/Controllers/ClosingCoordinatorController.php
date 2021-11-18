<?php

namespace App\Http\Controllers;

use App\Models\ClosingCoordinator;
use Illuminate\Http\Request;

class ClosingCoordinatorController extends Controller
{
    public function index()
    {
        $coordinators = ClosingCoordinator::get();
        return view('pages/form/other/closing-coordinators-agents', compact('coordinators'));
    }

    public function agent($id)
    {
        $coordinator = ClosingCoordinator::findOrFail($id);
        return view('pages/form/other/closing-coordinators', compact('coordinator'));
    }

    public function change_status(Request $request)
    {
        $coordinator = ClosingCoordinator::findOrFail($request->id);
        $coordinator->status = !$coordinator->status;
        $coordinator->update();
        return redirect()->back()->with('Status Changed');
    }
}

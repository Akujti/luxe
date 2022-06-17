<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EmailBlastHomePage;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailBlastHomePage\AddRequest;
use App\Http\Requests\EmailBlastHomePage\DeleteRequest;
use App\Http\Requests\EmailBlastHomePage\UpdateRequest;

class EmailBlastHomePageController extends Controller
{
    public function admin_index() {
        $rows = EmailBlastHomePage::orderBy('order', 'asc')->get();

        return view('admin.email-blasts.index', compact('rows'));
    }
    public function create(AddRequest $req) {
        $row = new EmailBlastHomePage;

        $row->title = $req->title;
        $row->order = $req->order;
        $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
        $path = $req->image->storeAs('/home-page', $name, 'public');
        $row->image = $name;
        $row->save();

        return redirect()->back()->with('message', 'Successfully created!');
    }
    
    public function update(UpdateRequest $req) {
        $row = EmailBlastHomePage::findOrFail($req->id);

        $row->title = $req->title;
        $row->order = $req->order;
        if($req->hasFile('image')) {
            $name = time() . Str::random(10) . '.' . $req->image->getClientOriginalExtension();
            $path = $req->image->storeAs('/home-page', $name, 'public');
            $row->image = $name;
        }
        $row->save();

        return redirect()->back()->with('message', 'Successfully updated!');
    }

    public function delete(DeleteRequest $req) {
        $row = EmailBlastHomePage::findOrFail($req->id);
        $row->delete();

        return redirect()->back()->with('message', 'Successfully deleted!');
    }
}

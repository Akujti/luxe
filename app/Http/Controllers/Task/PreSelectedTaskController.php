<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\PreSelectedTask\AddRequest;
use App\Http\Requests\Task\PreSelectedTask\DeleteRequest;
use App\Http\Requests\Task\PreSelectedTask\UpdateRequest;
use App\Models\Task\PreSelectedTask;
use Exception;

class PreSelectedTaskController extends Controller
{
    public function index() {
        $tasks = PreSelectedTask::orderBy('title', 'asc')->paginate(30);
        return view('admin.contracts.pre-selected-tasks.index', compact('tasks'));
    }
    public function create(AddRequest $req) {
        try {
            $row = new PreSelectedTask;
    
            $row->fill($req->only(['title', 'description', 'start_date']));
            $row->author_id = auth()->id();
            $row->save();
    
            return back()->with('message', 'Successfully Created!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function update(UpdateRequest $req) {
        try {
            $row = PreSelectedTask::findOrFail($req->id);
    
            $row->fill($req->only(['title', 'description', 'start_date']));
            $row->author_id = auth()->id();
            $row->save();
    
            return back()->with('message', 'Successfully Updated!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = PreSelectedTask::findOrFail($req->id);

            $row->delete();
            return back()->with('message', 'Successfully Deleted!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }
}

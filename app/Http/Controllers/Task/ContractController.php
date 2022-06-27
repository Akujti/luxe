<?php

namespace App\Http\Controllers\Task;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Task\Contract;
use App\Http\Controllers\Controller;
use App\Http\Requests\Task\Contract\AddRequest;
use App\Http\Requests\Task\Contract\DeleteRequest;
use App\Http\Requests\Task\Contract\UpdateRequest;

class ContractController extends Controller
{
    public function index() {
        $contracts = Contract::with(['documents', 'tasks', 'client_information', 'property_information'])->orderBy('created_at', 'desc')->get();
        return view('tasks.index', compact('contracts'));
    }
    public function store(AddRequest $req) {
        try {
            $row = new Contract;

            $row->fill($req->only(['name', 'description', 'status']));
            $row->author_id = auth()->id();
            $row->save();

            if($req->has('client_information')) {
                $clientInfoModels = $req->client_information;
                $row->client_information()->create($clientInfoModels);
            }

            if($req->has('property_information')) {
                $propertyInfoModels = $req->property_information;
                $row->property_information()->create($propertyInfoModels);
            }
            $taskModels = getPreSelectedTasks();

            if($taskModels) {
                if($req->has('tasks')) {
                    
                    foreach($req->tasks as $task) {
                        $taskModels[] = $task;
                    }
                }
                $row->tasks()->createMany($taskModels);
            }

            if($req->hasFile('documents')) {
                $documents = $req->file('documents');
                $documentModels = [];
                foreach($documents as $document) {
                    $name = time() . Str::random(10) . '.' . $document->getClientOriginalExtension();
                    $type = $document->getClientOriginalExtension();
                    $document->storeAs('/contracts', $name, 'public');
                    
                    $documentModels[] = ['path' => $name, 'type' => $type];
                }
                $row->documents()->createMany($documentModels);
            }

            return back()->with('message', 'Successfully created!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function update(UpdateRequest $req) {
        try {
            $row = Contract::findOrFail($req->id);

            $row->fill($req->only(['name', 'description', 'status']));
            $row->author_id = auth()->id();
            $row->save();

            if($req->has('client_information')) {
                $row->client_information()->delete();
                $clientInfoModels = [];
                foreach($req->client_information as $client_info) {
                    $clientInfoModels[] = $client_info;
                }
                $row->client_information()->createMany($clientInfoModels);
            }

            if($req->has('property_information')) {
                $row->property_information()->delete();
                $propertyInfoModels = [];
                foreach($req->property_information as $property_info) {
                    $propertyInfoModels[] = $property_info;
                }
                $row->property_information()->createMany($propertyInfoModels);
            }
            // if($req->has('documents')) {
            //     $documentModels = [];
            //     foreach($req->documents as $document) {
            //         $documentModels[] = $document;
            //     }
            //     $row->property_information()->createMany($documentModels);
            // }

            return back()->with('message', 'Successfully updated!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function delete(DeleteRequest $req) {
        try {
            $row = Contract::findOrFail($req->id);
            $row->delete();

            return back()->with('message', 'Successfully deleted!');
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }
}

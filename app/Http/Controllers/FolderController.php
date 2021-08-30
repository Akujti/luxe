<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

class FolderController extends Controller
{
    public function index(Request $request)
    {
        $folder_id = $request->id;
        $filters = [
            'id' => $request->get('id'),
        ];
        $folders = Folder::where(function ($query) use ($filters) {
            if ($filters['id']) {
                $query->where('parent_id', $filters['id']);
            } else {
                $query->whereNull('parent_id');
            }
        })->latest()->get();
        $files = File::where(function ($query) use ($filters) {
            if ($filters['id']) {
                $query->where('folder_id', $filters['id']);
            } else {
                $query->whereNull('folder_id');
            }
        })->latest()->get();
        return view('pages.files.index', compact('folders', 'files', 'folder_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $folder_id = $request->folder_id;
        $current_folder = Folder::find($folder_id);
        return view('pages.files.upload', compact('folder_id', 'current_folder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->file_type;
        $title = $request->title;
        $file = File::create(
            [
                'title' => $request->title,
                'file' => $request->file_type,
                'type' => $request->file_type,
                'folder_id' => $request->folder_id ?? null,
            ]
        );
        if (isset($request->file)) {
            $name = time() . Str::random(10) . '.' . $request->file->getClientOriginalExtension();
            $path = $request->file->storeAs('/files', $name, 'public');;
            $file->file = $path;
            $file->save();
        }

        toastr()->success('File has been uploaded');
        return redirect()->route('files.index', ['id' => $request->folder_id]);
    }

    public function folder_destroy($id)
    {
        $folder = Folder::find($id);
        $folder->delete();
        toastr()->success('Directory has been deleted!');
        return back();
    }

    public function file_destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        toastr()->success('File has been deleted!');
        return back();
    }

    public function create_directory(Request $request)
    {
        $folder = new Folder();
        $folder->title = $request->title;
        if ($request->current_directory) {
            $folder->parent_id = $request->current_directory;
        }
        $folder->save();
        return back();
    }
}

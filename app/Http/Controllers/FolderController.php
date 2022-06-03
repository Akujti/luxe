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
        $folders = Folder::with(['files', 'children'])->where('title', '!=', 'XNV34gFFFa')->where('title', '!=', 'XNvgkxNbjU')->where(function ($query) use ($filters) {
            if ($filters['id']) {
                $query->where('parent_id', $filters['id']);
            } else {
                $query->whereNull('parent_id');
            }
        })->orderBy('title', $request->input('sort', 'asc'))->get();
        $files = File::where(function ($query) use ($filters) {
            if ($filters['id']) {
                $query->where('folder_id', $filters['id']);
            } else {
                $query->whereNull('folder_id');
            }
        })->orderBy('title', $request->input('sort', 'asc'))->get();

        if (request()->wantsJson()) {
            return response()->json(['folders' => $folders, 'files' => $files]);
        }
        return view('pages.files.index', compact('folders', 'files', 'folder_id'));
    }

    /**
     * Show the form for creating a open-house resource.
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->file_type;
        $title = $request->title;
        $request->validate([
            'file' => 'required|max:204800',
        ]);
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
        if (isset($request->thumbnail)) {
            $name = time() . Str::random(10) . '.' . $request->thumbnail->getClientOriginalExtension();
            $path = $request->thumbnail->storeAs('/files', $name, 'public');
            $file->thumbnail = $path;
            $file->save();
        }
        return redirect()->route('files.index', ['id' => $request->folder_id])->with('message', 'File has been uploaded');
    }

    public function folder_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $folder = Folder::findOrFail($request->folder_id);
        $folder->title = $request->title;
        $folder->save();
        return back()->with('message', 'Directory has been updated!');
    }

    public function file_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $file = File::findOrFail($request->file_id);
        $file->title = $request->title;
        if (isset($request->thumbnail)) {
            $name = time() . Str::random(10) . '.' . $request->thumbnail->getClientOriginalExtension();
            $path = $request->file('thumbnail')->storeAs('/files', $name, 'public');
            $file->thumbnail = $path;
        }
        $file->save();
        return back()->with('message', 'File has been updated!');
    }

    public function folder_destroy($id)
    {
        $folder = Folder::findOrFail($id);
        $folder->delete();
        return back()->with('message', 'Directory has been deleted!');
    }

    public function file_destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return back()->with('message', 'File has been deleted!');
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

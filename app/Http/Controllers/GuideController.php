<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuideController extends Controller
{
    public function index()
    {

        $folder_id = Folder::where('title', 'XNvgkxNbjU')->firstOrFail()->id;
//        dd($folder_id);
        $files = File::where('folder_id', $folder_id)->latest()->get();
        return view('pages.guides.index', compact('files', 'folder_id'));
    }

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
        return redirect()->route('guides.index', ['id' => $request->folder_id])->with('message', 'File has been uploaded');
    }

    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return back()->with('message', 'File has been deleted!');
    }
}

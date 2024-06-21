<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class FolderController extends Controller
{
    public function index(Request $request)
    {
        // Delete records older than 6 months
        $sixMonthsAgo = Carbon::now()->subMonths(6);

        File::where('folder_id', 96)->where('created_at', '<', $sixMonthsAgo)->delete();

        $folder_id = $request->id;
        $filters = [
            'id' => $request->get('id'),
        ];
        $folders = Folder::with(['files', 'children'])->where('title', '!=', 'XNV34gFFFa')->where('title', '!=', 'XNvgkxNbjU')->where('title', '!=', '5KK08TSWXF')->where(function ($query) use ($filters) {
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
        });

        if ($filters['id'] && $filters['id'] == 96) {
            $files->orderBy('created_at', 'desc');
        } else {
            $files->orderBy('title', $request->input('sort', 'asc'));
        }


        if (request()->wantsJson()) {
            $files = $files->get();
            return response()->json(['folders' => $folders, 'files' => $files]);
        }
        $files = $files->paginate(20);
        return view('pages.files.index', compact('folders', 'files', 'folder_id'));
    }

    public function create(Request $request)
    {
        $folder_id = $request->folder_id;
        $current_folder = Folder::find($folder_id);
        return view('pages.files.upload', compact('folder_id', 'current_folder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_names' => 'required',
            'file_names.*' => 'required|string',
            'file_types' => 'required',
            'file_types.*' => 'required|string',
            'uploadedFiles' => 'required',
            'uploadedFiles.*' => 'required|file|max:204800',
            'thumbnails' => 'nullable',
            'thumbnails.*' => 'required|file|image',
        ]);

        $files = $request->uploadedFiles;
        $thumbnails = $request->thumbnails;
        for ($i = 0; $i < count($files); $i++)
            $this->uploadFile($request->file_names[$i], $request->file_types[$i], $request->folder_id, $files[$i], $thumbnails[$i] ?? null);

        return redirect()->route('files.index', ['id' => $request->folder_id])->with('message', 'File has been uploaded');
    }

    private function uploadFile($title, $type, $folder_id, $file, $thumbnail)
    {
        $name = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('/files', $name, 'public');

        $thumbnail_path = null;
        if ($thumbnail) {
            $thumbnail_name = time() . Str::random(10) . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail_path = $thumbnail->storeAs('/files', $thumbnail_name, 'public');
        } else {
            if ($type == 'img') {
                try {
                    $img = Image::make('storage/' . $path);
                    $img->fit(200);
                    $thumbnail_path = 'thumb_' . $name;
                    Storage::disk('public')->put('thumb_' . $name, (string)$img->encode());
                } catch (\Exception $e) {
                    $thumbnail_path = null;
                }
            }
        }
        return File::create(
            [
                'title' => $title,
                'file' => $path,
                'thumbnail' => $thumbnail_path,
                'type' => $type,
                'folder_id' => $folder_id,
            ]
        );
    }

    public function folder_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $folder = Folder::findOrFail($request->folder_id);
        $folder->title = $request->title;
        $folder->show_titles = $request->show_titles;
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
        $folder->show_titles = $request->show_titles;
        if ($request->current_directory) {
            $folder->parent_id = $request->current_directory;
        }
        $folder->save();
        return back();
    }
}

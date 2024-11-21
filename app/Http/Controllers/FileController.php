<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\FileDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download(File $file)
    {
        $name = $file->title . '.' . $file->type_file;
        $filePath = '/storage/' . $file->file;
        try {
            $auth_id = auth()->id();
            FileDownload::create([
                'file_id' => $file->id,
                'user_id' => $auth_id,
            ]);
        } catch (\Throwable $th) {
            Log::error($th->getTraceAsString());
        }

        return response()->download(public_path($filePath), $name);
    }

    public function admin_index(Request $request)
    {
        $files = File::when($request->title, fn($q) => $q->where('title', 'like', '%' . $request->title . '%'))
            ->with('folder')->withCount('downloads')
            ->orderBy('downloads_count', 'desc')->paginate(20);
        return view('admin.downloads', compact('files'));
    }
}

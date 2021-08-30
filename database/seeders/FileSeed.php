<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;

class FileSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::create([
            'title' => 'Luxe Team.doc',
            'file' => '/files/document.docx',
            'type' => 'doc'
        ]);
        File::create([
            'title' => 'Presentation 1.pdf',
            'file' => '/files/document.pdf',
            'type' => 'pdf',
            'folder_id' => 1,
        ]);
        File::create([
            'title' => 'Flyer 1.jpg',
            'file' => '/files/document.png',
            'type' => 'img',
            'folder_id' => 1,
        ]);
    }
}

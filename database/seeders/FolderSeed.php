<?php

namespace Database\Seeders;

use App\Models\Folder;
use Illuminate\Database\Seeder;

class FolderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = Folder::create(
            [
                'title' => 'Desktop'
            ]
        );

        $child_1 =
            Folder::create(
                [
                    'title' => 'Document PDF',
                    'parent_id' => $parent->id
                ]
            );
        $child_2 =
            Folder::create(
                [
                    'title' =>
                    'Document DOC',
                    'parent_id' => $parent->id
                ]
            );
    }
}

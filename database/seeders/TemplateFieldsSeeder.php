<?php

namespace Database\Seeders;

use App\Models\TemplateField;
use Illuminate\Database\Seeder;

class TemplateFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TemplateField::create([
            'name' => 'Title',
            'type' => 'text',
            'template_id' => 1,
        ]);
        TemplateField::create([
            'name' => 'Image',
            'type' => 'file',
            'template_id' => 1,
        ]);
    }
}

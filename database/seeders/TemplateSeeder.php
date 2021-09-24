<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'category_id' => 3,
            'title' => 'Door Hanger 1',
            'image' => 'https://myluxehub.com/wp-content/uploads/2021/09/2stack-3-01.png'
        ]);
        Template::create([
            'category_id' => 3,
            'title' => 'Door Hanger 2',
            'image' => 'https://myluxehub.com/wp-content/uploads/2020/09/021212-2.png'
        ]);
        Template::create([
            'category_id' => 3,
            'title' => 'Door Hanger 3',
            'image' => 'https://myluxehub.com/wp-content/uploads/2021/08/021212-1.jpg'
        ]);
        Template::create([
            'category_id' => 3,
            'title' => 'Door Hanger 4',
            'image' => 'https://myluxehub.com/wp-content/uploads/2021/08/021212-1.jpg'
        ]);
    }
}

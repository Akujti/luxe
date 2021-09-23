<?php

namespace Database\Seeders;

use App\Models\MarketingCategory;
use Illuminate\Database\Seeder;

class MarketingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MarketingCategory::create([
            'title' => 'Social Media Posts',
            'image' => 'https://myluxehub.com/wp-content/uploads/2018/10/1.png'
        ]);
        MarketingCategory::create([
            'title' => 'Email Blast',
            'image' => 'https://myluxehub.com/wp-content/uploads/2018/11/5-1.png'
        ]);
        MarketingCategory::create([
            'title' => 'Door Hangers',
            'image' => 'https://myluxehub.com/wp-content/uploads/2018/11/2-1.png'
        ]);
        MarketingCategory::create([
            'title' => 'Flyers',
            'image' => 'https://myluxehub.com/wp-content/uploads/2018/11/4-1.png'
        ]);
        MarketingCategory::create([
            'title' => 'Presentation Booklet',
            'image' => 'https://myluxehub.com/wp-content/uploads/2018/11/8-1.png'
        ]);
    }
}

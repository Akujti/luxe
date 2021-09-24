<?php

namespace Database\Seeders;

use App\Models\Folder;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // MarketingCategorySeeder::class,
            // TemplateSeeder::class,
            // TemplateFieldsSeeder::class
        ]);
        //        User::create([
        //            'name' => 'Luxe Admin',
        //            'email' => 'email@company.com',
        //            'password' => bcrypt('password'),
        //        ]);
    }
}

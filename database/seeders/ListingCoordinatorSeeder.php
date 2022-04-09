<?php

namespace Database\Seeders;

use App\Models\ListingCoordinator;
use Illuminate\Database\Seeder;

class ListingCoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListingCoordinator::create([
            'name' => 'Victoria Lettieri',
            'email' => 'victoria@luxeknows.com',
            'image' => 'images/agents/victoria.jpg',
            // 'sentence' => 'Senior Closing Coordinator - Basic Package $300 - VIP Package $500',
            'status' => 1
        ]);
        ListingCoordinator::create([
            'name' => 'Tatiana Bravo',
            'email' => 'tatiana@luxeknows.com',
            'image' => 'images/agents/tatiana.jpg',
            // 'sentence' => 'Senior Closing Coordinator - Basic Package $300 - VIP Package $500',
            'status' => 1
        ]);
        ListingCoordinator::create([
            'name' => 'Gabriela Suarez',
            'email' => 'gabrielas@luxeknows.com',
            'image' => 'images/agents/gabriela.jpg',
            // 'sentence' => 'Senior Closing Coordinator - Basic Package $300 - VIP Package $500',
            'status' => 1
        ]);
    }
}

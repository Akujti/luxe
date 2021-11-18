<?php

namespace Database\Seeders;

use App\Models\ClosingCoordinator;
use Illuminate\Database\Seeder;

class ClosingCoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClosingCoordinator::create([
            'name' => 'Denisse Uyema',
            'email' => 'denisse@luxeknows.com',
            'image' => 'images/agents/dennise.jpg',
            'sentence' => 'Senior Closing Coordinator - Basic Package $300 - VIP Package $500',
            'status' => 1
        ]);

        ClosingCoordinator::create([
            'name' => 'Victoria Lettieri',
            'email' => 'victoria@luxeknows.com',
            'image' => 'images/agents/victoria.jpg',
            'sentence' => 'Closing Coordinator - Basic Package $200 - VIP Package $325',
            'status' => 1
        ]);

        ClosingCoordinator::create([
            'name' => 'Maribel Gonzalez',
            'email' => 'theclosinggenie@gmail.com',
            'image' => 'images/agents/maribel.jpg',
            'sentence' => 'Senior Closing Coordinator - Standard Package $399',
            'status' => 1
        ]);
    }
}

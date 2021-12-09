<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name' => 'Homestead Conference Room'
        ]);
        Room::create([
            'name' => 'Coral Gables Conference Room'
        ]);
        //        Room::create([
        //            'name' => 'Kendall Conference Room'
        //        ]);
        //        Room::create([
        //            'name' => 'Midtown Conference Room'
        //        ]);
        //        Room::create([
        //            'name' => 'Miami Lakes Conference Room'
        //        ]);
        //        Room::create([
        //            'name' => 'Hollywood Conference Room'
        //        ]);
    }
}

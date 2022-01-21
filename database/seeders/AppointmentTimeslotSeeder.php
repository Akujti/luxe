<?php

namespace Database\Seeders;

use App\Models\AppointmentTimeslot;
use Illuminate\Database\Seeder;

class AppointmentTimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppointmentTimeslot::create(['title' => '11:00 am']);
        AppointmentTimeslot::create(['title' => '2:00 pm']);
    }
}

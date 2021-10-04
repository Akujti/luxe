<?php

namespace Database\Seeders;

use App\Models\WrittenEmailTemplate;
use Illuminate\Database\Seeder;

class WrittenEmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WrittenEmailTemplate::create([
            'title' => 'Listing Presentations'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Sending Buyer Offers'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Sending Rental Offers'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Negotiations Appraisal'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Negotiations Inspection'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Lead Conversion'
        ]);
        WrittenEmailTemplate::create([
            'title' => 'Lead Follow Up'
        ]);
    }
}

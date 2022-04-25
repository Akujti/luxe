<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = Form::create([
            'title' => 'Agent Form'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'monica@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'FLEX Agent Form'
        ]);
        $parent->emails()->createMany([
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'kristy@luxeknows.com'],
            ['email' => 'shanut@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'monica@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Refer An Agent'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'yesenia@luxeknows.com'],
        ]);
        
        $parent = Form::create([
            'title' => 'Request Escrow Letter'
        ]);
        $parent->emails()->createMany([
            ['email' => 'support@luxeknows.com'],
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Request Store - Rental Escrow Disbursement'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Join Zillow'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'zillowluxe@gmail.com'],
            ['email' => 'jkirkwood316@gmail.com'],
        ]);

        $parent = Form::create([
            'title' => 'Opcity Leads'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Team Flex - Pause Request'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'zillowluxe@gmail.com'],
            ['email' => 'irais@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Prime Street Leads'
        ]);
        $parent->emails()->createMany([
            ['email' => 'denisse@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Request 25 CINC Leads'
        ]);
        $parent->emails()->createMany([
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Request Zillow Nurtures'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'zillowluxe@gmail.com'],
            ['email' => 'irais@luxeknows.com'],
            ['email' => 'jkirkwood316@gmail.com'],
        ]);

        $parent = Form::create([
            'title' => 'Team Dade - Pause Request'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'jkirkwood316@gmail.com'],
            ['email' => 'gabrielas@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'TEAM DADE - ZILLOW LEADS WEEKLY UPDATE'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'irais@luxeknows.com'],
            ['email' => 'jkirkwood316@gmail.com'],
            ['email' => 'gabrielasuarez@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'TEAM FLEX - ZILLOW LEADS WEEKLY UPDATE'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'irais@luxeknows.com'],
            ['email' => 'zillowluxe@gmail.com'],
        ]);

        $parent = Form::create([
            'title' => 'CLOSING COORDINATORS - Accept Params'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Logo Creation Request'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'designs@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Photoshoots For Listings'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'WIRE INSTRUCTIONS REQUEST'
        ]);
        $parent->emails()->createMany([
            ['email' => 'marketing@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
            ['email' => 'receptionist@luxeknows.com'],
            ['email' => 'email@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => '2022 Business Plan'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'Follow-Up Business Plan'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);

        $parent = Form::create([
            'title' => 'New Agent Business Plan'
        ]);
        $parent->emails()->createMany([
            ['email' => 'email@luxeknows.com'],
            ['email' => 'operations@luxeknows.com'],
            ['email' => 'support@luxeknows.com'],
        ]);
    }
}

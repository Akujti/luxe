<?php

namespace Database\Seeders;

use App\Models\AgreementAgent;
use Illuminate\Database\Seeder;

class AgreementAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgreementAgent::create(
            [
                'name' => 'Sheri Garzia',
                'email' => 'sheri@luxeknows.com',
                'agreement_page' => 'basic.web',
                'image' => 'sheri.jpg',
            ]
        );
        AgreementAgent::create(
            [
                'name' => 'Ana Gonzalez',
                'email' => 'ana.gonzalez@luxeknows.com',
                'agreement_page' => 'basic.web',
                'image' => 'ana.jpg',
            ]
        );
        AgreementAgent::create(
            [
                'name' => 'Joyce Sierra',
                'email' => 'joyce@luxeknows.com',
                'agreement_page' => 'basic.web',
                'image' => 'joyce.jpg',
            ]
        );
    }
}

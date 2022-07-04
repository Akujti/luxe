<?php

namespace Database\Seeders;

use App\Models\ReferralPartner;
use Illuminate\Database\Seeder;

class ReferralPartnerMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner = ReferralPartner::whereTitle('Contact Information')->first();
        if ($partner) {
            $partner->meta_items()->create([
                'name' => 'LUXE Lending',
                'type' => 'general'
            ]);

            $partner->meta_items()->create([
                'name' => '305.907.7081',
                'type' => 'tel',
                'path' => 'tel: (305) 907 7081',
            ]);

            $partner->meta_items()->create([
                'name' => 'info@luxehomelean.com',
                'type' => 'email',
                'path' => 'mailto:info@luxehomelean.com'
            ]);
        }

        $partner = ReferralPartner::whereTitle('Kelly Guerra Company')->first();
        if ($partner) {
            $partner->meta_items()->create([
                'name' => 'KLG Insurance Group',
                'type' => 'general',
                'path' => '#'
            ]);

            $partner->meta_items()->create([
                'name' => 'kelly@klginsurancegroup.com',
                'type' => 'email',
                'path' => 'mailto:kelly@klginsurancegroup.com'
            ]);

            $partner->meta_items()->create([
                'name' => '7154 Pembroke Rd, Miramar, FL 33023',
                'type' => 'address',
                'path' => '#',
            ]);

            $partner->meta_items()->create([
                'name' => 'www.klginsurancegroup.com',
                'type' => 'web',
                'path' => 'http://www.klginsurancegroup.com/',
            ]);

            $partner->meta_items()->create([
                'name' => 'C: 305.984.4352',
                'type' => 'tel',
                'path' => 'tel: (305) 984 4352',
            ]);

            $partner->meta_items()->create([
                'name' => 'O: 954.893.0005',
                'type' => 'tel',
                'path' => 'tel: (954) 893 0005',
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\ReferralPartnerCategory;
use Illuminate\Database\Seeder;

class ReferralPartnerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReferralPartnerCategory::create(['title' => 'Lending Services']);
        ReferralPartnerCategory::create(['title' => 'Title']);
        ReferralPartnerCategory::create(['title' => 'Insurance']);
        ReferralPartnerCategory::create(['title' => 'Home Inspectors']);
        ReferralPartnerCategory::create(['title' => 'Accountant']);
        ReferralPartnerCategory::create(['title' => 'Moving Company']);
        ReferralPartnerCategory::create(['title' => 'Staging Company']);
        ReferralPartnerCategory::create(['title' => 'Marketing Company']);
        ReferralPartnerCategory::create(['title' => 'Contractors']);
        ReferralPartnerCategory::create(['title' => 'Permit Runners']);
        $attorneys = ReferralPartnerCategory::create(['title' => 'Attorneys']);
        ReferralPartnerCategory::create(['title' => 'Evictions', 'parent_id' => $attorneys->id]);
        ReferralPartnerCategory::create(['title' => 'Probates', 'parent_id' => $attorneys->id]);
        ReferralPartnerCategory::create(['title' => 'Cleaning Company']);
    }
}

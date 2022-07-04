<?php

namespace Database\Seeders;

use App\Models\ReferralPartnerCategory;
use Illuminate\Database\Seeder;

class ReferralPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ReferralPartnerCategory::whereTitle('Lending Services')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Pre-Approval Form', 'path' => 'form']);
            $category->referral_partners()->create(['title' => 'Contact Information']);
        }
        $category = ReferralPartnerCategory::whereTitle('Title')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Capital Title Group']);
            $category->referral_partners()->create(['title' => 'Law Offices of Adorno-Cunill & Damas, PL']);
            $category->referral_partners()->create(['title' => 'Title Answers']);
            $category->referral_partners()->create(['title' => 'Home Sweet Home Title']);
        }
        $category = ReferralPartnerCategory::whereTitle('Insurance')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Florida First Insurance']);
            $category->referral_partners()->create(['title' => 'EnTrust Insurance']);
            $category->referral_partners()->create(['title' => 'Kelly Guerra Company']);
        }
        $category = ReferralPartnerCategory::whereTitle('Home Inspectors')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Truview Inspections']);
        }
        $category = ReferralPartnerCategory::whereTitle('Accountant')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Allegiant Accounting & Tax']);
        }
        $category = ReferralPartnerCategory::whereTitle('Moving Company')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'ETG Moving & Delivery LLC']);
        }
        $category = ReferralPartnerCategory::whereTitle('Staging Company')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Elite Home Staging']);
        }
        $category = ReferralPartnerCategory::whereTitle('Marketing Company')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Planet Marketing']);
            $category->referral_partners()->create(['title' => 'Print4Humans']);
            $category->referral_partners()->create(['title' => 'Live Colors']);
        }
        $category = ReferralPartnerCategory::whereTitle('Evictions')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Alex E Borel']);
            $category->referral_partners()->create(['title' => 'Law Offices of Samir Masri']);
            $category->referral_partners()->create(['title' => 'Pensky & Kim PA']);
        }
        $category = ReferralPartnerCategory::whereTitle('Probates')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Barbara Sanjurjo']);
            $category->referral_partners()->create(['title' => 'Justin Stivers']);
            $category->referral_partners()->create(['title' => 'Chevallier law']);
        }
        $category = ReferralPartnerCategory::whereTitle('Cleaning Company')->first();
        if ($category) {
            $category->referral_partners()->create(['title' => 'Miami Top Cleaning Service (commercial)']);
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralPartnerMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_partner_metas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('referral_partner_id')->nullable()->constrained('referral_partners')->cascadeOnDelete();
            $table->string('name');
            $table->string('type');
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_partner_metas');
    }
}

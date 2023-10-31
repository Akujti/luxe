<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLisingCoordinatorPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_coordinator_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_coordinator_id')->nullable()->constrained('listing_coordinators')->nullOnDelete();
            $table->string('package');
            $table->integer('price');
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
        Schema::dropIfExists('listing_coordinator_packages');
    }
}

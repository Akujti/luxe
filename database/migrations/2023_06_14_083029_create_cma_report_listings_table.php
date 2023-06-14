<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmaReportListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cma_report_listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cma_report_id')->unsigned();
            $table->foreign('cma_report_id')->references('id')->on('cma_report')->onDelete('cascade');
            $table->string('listing_id');
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
        Schema::dropIfExists('cma_report_listings');
    }
}

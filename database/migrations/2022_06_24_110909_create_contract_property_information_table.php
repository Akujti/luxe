<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPropertyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_property_information', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 16, 5)->nullable();
            $table->text('other_details')->nullable();
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
        Schema::dropIfExists('contract_property_information');
    }
}

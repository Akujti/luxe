<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographerImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer_property_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photographer_property_id')->constrained('photographer_properties')->cascadeOnDelete();
            $table->string('small');
            $table->string('medium');
            $table->string('large');
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
        Schema::dropIfExists('photographer_property_images');
    }
}

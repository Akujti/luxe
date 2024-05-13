<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventGalleryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_gallery_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_gallery_id')->constrained('event_galleries')->cascadeOnDelete();
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
        Schema::dropIfExists('event_gallery_images');
    }
}

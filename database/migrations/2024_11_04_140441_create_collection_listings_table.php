<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collection_id')->constrained('collections')->cascadeOnDelete();
            $table->string('address');
            $table->string('source')->nullable();
            $table->text('main_image_url')->nullable();
            $table->string('type')->nullable();
            $table->double('living_area')->nullable();
            $table->double('price')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('garages')->nullable();
            $table->date('list_date')->nullable();
            $table->boolean('pool')->nullable();
            $table->boolean('waterfront')->nullable();
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
        Schema::dropIfExists('collection_listings');
    }
}

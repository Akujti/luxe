<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('type')->nullable();
            $table->string('address')->nullable();
            $table->string('price')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('beds')->nullable();
            $table->double('living_area')->nullable();
            $table->double('lot_size')->nullable();
            $table->string('main_image')->nullable();
            $table->json('images')->nullable();
            $table->date('list_date')->nullable();
            $table->double('lng')->nullable();
            $table->double('lat')->nullable();
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
        Schema::dropIfExists('listings');
    }
}

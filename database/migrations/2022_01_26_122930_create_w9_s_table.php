<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateW9STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w9_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('text_1')->nullable();
            $table->string('text_2')->nullable();
            $table->string('text_3')->nullable();
            $table->string('text_3_1')->nullable();
            $table->string('select_1')->nullable();
            $table->string('text_4')->nullable();
            $table->string('text_4_1')->nullable();
            $table->string('text_5')->nullable();
            $table->string('text_6')->nullable();
            $table->string('text_7')->nullable();
            $table->string('text_8')->nullable();
            $table->string('text_9')->nullable();
            $table->string('text_10')->nullable();
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
        Schema::dropIfExists('w9_s');
    }
}

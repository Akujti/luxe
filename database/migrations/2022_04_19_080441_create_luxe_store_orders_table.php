<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_orders', function (Blueprint $table) {
            $table->id();
            $table->text('information_seller')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('agent_name');
            $table->string('agent_surname');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('luxe_store_orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreOrderShippingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_order_shipping_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('luxe_store_orders')->cascadeOnDelete();
            $table->string('agent_name')->nullable();
            $table->string('agent_surname')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('instructions')->nullable();
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
        Schema::dropIfExists('luxe_store_order_shipping_details');
    }
}

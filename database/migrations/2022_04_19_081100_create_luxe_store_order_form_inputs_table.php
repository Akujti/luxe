<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreOrderFormInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_order_form_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('luxe_store_orders')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('luxe_store_order_products')->cascadeOnDelete();
            $table->string('input_name');
            $table->string('input_value');
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
        Schema::dropIfExists('luxe_store_order_form_inputs');
    }
}

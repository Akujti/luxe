<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreOrderPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_order_payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('luxe_store_orders')->cascadeOnDelete();
            $table->double('sub_total', 16, 5);
            $table->double('coupon_code', 16, 5)->nullable();
            $table->double('total_price', 16, 5);
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
        Schema::dropIfExists('luxe_store_order_payment');
    }
}

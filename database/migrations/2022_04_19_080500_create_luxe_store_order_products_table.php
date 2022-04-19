<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('luxe_store_orders')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('luxe_store_products')->cascadeOnDelete();
            $table->double('price', 16, 5);
            $table->string('variant_name')->nullable();
            $table->string('variant_value')->nullable();
            $table->integer('quantity');
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
        Schema::dropIfExists('luxe_store_order_products');
    }
}

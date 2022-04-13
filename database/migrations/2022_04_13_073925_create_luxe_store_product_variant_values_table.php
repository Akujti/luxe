<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuxeStoreProductVariantValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxe_store_product_variant_values', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('image')->nullable();
            $table->double('price', 16, 5)->nullable();
            $table->double('sale_price', 16, 5)->nullable();
            $table->foreignId('variant_id')->constrained('luxe_store_product_variants')->cascadeOnDelete();
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
        Schema::dropIfExists('luxe_store_product_variant_values');
    }
}

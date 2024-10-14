<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMinStockColumn extends Migration
{
    public function up()
    {
        Schema::table('luxe_store_products', function (Blueprint $table) {
            $table->integer('min_stock')->after('stock')->nullable();
        });
        Schema::table('luxe_store_product_variant_values', function (Blueprint $table) {
            $table->integer('min_stock')->after('stock')->nullable();
        });
    }

    public function down()
    {
        Schema::table('luxe_store_products', function (Blueprint $table) {
            $table->dropColumn('min_stock');
        });
        Schema::table('luxe_store_product_variant_values', function (Blueprint $table) {
            $table->dropColumn('min_stock');
        });
    }
}

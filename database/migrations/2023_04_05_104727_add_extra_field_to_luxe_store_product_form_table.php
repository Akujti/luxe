<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToLuxeStoreProductFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luxe_store_product_form', function (Blueprint $table) {
            $table->boolean('is_file')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luxe_store_product_form', function (Blueprint $table) {
            $table->dropColumn(['is_file']);
        });
    }
}

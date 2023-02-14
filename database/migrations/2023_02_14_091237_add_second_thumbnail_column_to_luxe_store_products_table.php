<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSecondThumbnailColumnToLuxeStoreProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luxe_store_products', function (Blueprint $table) {
            $table->string('second_thumbnail')->nullable()->after('preview_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luxe_store_products', function (Blueprint $table) {
            $table->dropColumn('second_thumbnail');
        });
    }
}

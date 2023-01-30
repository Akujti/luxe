<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRequestInfoToLuxeStoreOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luxe_store_orders', function (Blueprint $table) {
            $table->text('request_info')->nullable();
            $table->text('request_info_response')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luxe_store_orders', function (Blueprint $table) {
            $table->dropColumn('request_info');
            $table->dropColumn('request_info_response');
        });
    }
}

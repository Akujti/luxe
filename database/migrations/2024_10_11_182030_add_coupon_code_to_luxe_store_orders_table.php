<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCouponCodeToLuxeStoreOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('luxe_store_orders', function (Blueprint $table) {
            $table->string('coupon_code')->after('status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('luxe_store_orders', function (Blueprint $table) {
            $table->dropColumn('coupon_code');
        });
    }
}

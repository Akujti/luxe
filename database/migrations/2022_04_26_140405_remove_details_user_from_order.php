<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDetailsUserFromOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luxe_store_orders', function (Blueprint $table) {
            $table->dropColumn(['email', 'phone', 'agent_name', 'agent_surname']);
            $table->unsignedBigInteger('user_id')->nullable();
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
            $table->string('email');
            $table->string('phone');
            $table->string('agent_name');
            $table->string('agent_surname');
            $table->dropColumn('user_id');
        });
    }
}

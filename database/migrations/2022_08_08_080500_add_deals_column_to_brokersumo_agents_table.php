<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDealsColumnToBrokersumoAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brokersumo_agents', function (Blueprint $table) {
            $table->integer('deals')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brokersumo_agents', function (Blueprint $table) {
            $table->dropColumn('deals')->nullable();
        });
    }
}

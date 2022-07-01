<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBrokersumoAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brokersumo_agents', function (Blueprint $table) {
            $table->double('yearly_sales_volumes')->nullable();
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
            $table->dropColumn('yearly_sales_volumes');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAppointmentAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointment_addresses', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('baths')->nullable();
            $table->string('beds')->nullable();
            $table->string('price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointment_addresses', function (Blueprint $table) {
            $table->dropColumn([
                'image', 'agent_name', 'baths', 'beds', 'price'
            ]);
        });
    }
}

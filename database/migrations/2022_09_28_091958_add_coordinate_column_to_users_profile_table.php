<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoordinateColumnToUsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->double('lng')->nullable();
            $table->double('lat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->dropColumn('lng');
            $table->dropColumn('lat');
        });
    }
}

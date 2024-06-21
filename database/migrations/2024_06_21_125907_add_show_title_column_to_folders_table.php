<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShowTitleColumnToFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->boolean('show_title')->default(true);
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropColumn('show_title');
        });
    }
}

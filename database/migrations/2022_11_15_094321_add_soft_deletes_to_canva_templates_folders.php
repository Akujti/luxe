<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeletesToCanvaTemplatesFolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketing_canva_templates', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('marketing_canva', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('marketing_canva_categories', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('canva_templates_folders', function (Blueprint $table) {
            //
        });
    }
}

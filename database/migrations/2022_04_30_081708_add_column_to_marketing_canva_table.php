<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToMarketingCanvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketing_canva', function (Blueprint $table) {
            $table->foreignId('parent_id')->nullable()->constrained('marketing_canva')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marketing_canva', function (Blueprint $table) {
            $table->dropColumn('parent_id');
        });
    }
}

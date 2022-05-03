<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveTemplateIdFromMarketingCanvaTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marketing_canva_templates', function (Blueprint $table) {
            $table->dropConstrainedForeignId('template_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marketing_canva_templates', function (Blueprint $table) {
            $table->foreignId('template_id')->nullable()->constrained('marketing_canva_categories')->cascadeOnDelete();
        });
    }
}
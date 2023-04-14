<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->string('verbiages_title')->nullable();
            $table->text('verbiages_text')->nullable();
            $table->text('after_submit_verbiages_text')->nullable();
            $table->text('after_submit_verbiages_title')->nullable();
            $table->text('email_verbiages_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn(['verbiages_title', 'verbiages_text', 'after_submit_verbiages_text','after_submit_verbiages_title', 'email_verbiages_text']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBccColumnToEmailsOfFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emails_of_form', function (Blueprint $table) {
            $table->boolean('bcc')->default(false)->after('form_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emails_of_form', function (Blueprint $table) {
            $table->dropColumn('bcc');
        });
    }
}

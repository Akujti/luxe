<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents_transactions', function (Blueprint $table) {
            $table->id();
            $table->text('agent_name')->nullable();
            $table->integer('agent_gross')->nullable();
            $table->integer('agent_net')->nullable();
            $table->text('agent_office')->nullable();
            $table->text('company_name')->nullable();
            $table->integer('sales_price')->nullable();
            $table->integer('transaction_id')->nullable();
            $table->integer('brokerage_gross_commission')->nullable();
            $table->text('lead_source')->nullable();
            $table->text('address')->nullable();
            $table->text('transaction_type')->nullable();
            $table->integer('net_amount_due_to_brokerage')->nullable();
            $table->text('sales_date')->nullable();
            $table->integer('listing_percent')->nullable();
            $table->integer('listing_flat_fee')->nullable();
            $table->integer('selling_percent')->nullable();
            $table->integer('selling_flat_fee')->nullable();
            $table->text('mls')->nullable();
            $table->text('transaction_status')->nullable();
            $table->text('escrow_agent')->nullable();
            $table->text('escrow')->nullable();
            $table->text('commission_type')->nullable();
            $table->integer('closing_fees')->nullable();
            $table->integer('credits')->nullable();
            $table->integer('debits')->nullable();
            $table->integer('total_points')->nullable();
            $table->integer('new_point')->nullable();
            $table->text('agent_image')->nullable();
            $table->integer('total_listing')->nullable();
            $table->text('data_arrays')->nullable();
            $table->integer('total_amounts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('broker_sumos');
    }
}

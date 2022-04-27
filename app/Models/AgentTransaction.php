<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentTransaction extends Model
{
    use HasFactory;

    protected $table = 'agents_transactions';

    protected $fillable = [
        'agent_name',
        'agent_gross',
        'agent_net',
        'agent_office',
        'company_name',
        'sales_price',
        'transaction_id',
        'brokerage_gross_commission',
        'lead_source',
        'address',
        'transaction_type',
        'net_amount_due_to_brokerage',
        'sales_date',
        'listing_percent',
        'listing_flat_fee',
        'selling_percent',
        'selling_flat_fee',
        'mls',
        'transaction_status',
        'escrow_agent',
        'escrow',
        'commission_type',
        'closing_fees',
        'credits',
        'debits',
        'total_points',
        'new_point',
        'agent_image',
        'total_listing',
        'data_arrays',
        'total_amounts',
    ];
}

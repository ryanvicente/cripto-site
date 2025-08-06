<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    'user_id', 'transaction_type', 'symbol', 'base_asset', 'quote_asset',
    'amount', 'price', 'total', 'fiat_value', 'fiat_currency',
    'fee', 'fee_asset', 'pnl', 'description', 'external_id', 'executed_at'
    ];
    
}

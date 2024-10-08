<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'buyer_id', 'seller_id', 'broker_id', 'property_id', 'amount', 
        'transaction_date', 'status'
    ];

    // Relationships
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function broker()
    {
        return $this->belongsTo(User::class, 'broker_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

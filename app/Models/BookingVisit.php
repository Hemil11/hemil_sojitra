<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingVisit extends Model
{
    use HasFactory;

    protected $table = 'bookings_visits';

    protected $fillable = [
        'user_id', 'property_id', 'visit_date', 'status'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

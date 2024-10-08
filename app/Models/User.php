<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'role', 'address', 'profile_picture'
    ];

    // Relationships
    public function properties()
    {
        return $this->hasMany(Property::class, 'owner_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }

    public function favorites()
    {
        return $this->hasMany(FavoritesWishlist::class);
    }

    public function reviews()
    {
        return $this->hasMany(ReviewFeedback::class);
    }

    public function bookings()
    {
        return $this->hasMany(BookingVisit::class);
    }
}

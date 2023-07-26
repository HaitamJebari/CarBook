<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'car_id',
        'user_id',
        'start_date',
        'end_date',
        'total_amount',
        // Add more properties here if needed
    ];

    // Define relationships here, if any
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

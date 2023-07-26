<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'pickup_date',
        'return_date',
        'total_cost',
        'booking_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function calculateCost()
    {
        $startDate = Carbon::parse($this->pickup_date);
        $endDate = Carbon::parse($this->return_date);

        $numberOfDays = $startDate->diffInDays($endDate) + 1; // Include the end date as well
        $dailyRentalPrice = $this->car->rental_price;
        $totalCost = $numberOfDays * $dailyRentalPrice;

        $this->total_amount = $totalCost;
    }
    }

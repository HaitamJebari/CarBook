<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function marque()
    {
        return $this->belongsTo(MarqueCar::class, 'marque_id');
    }

    public function model()
    {
        return $this->belongsTo(ModelCar::class, 'model_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function taxCar()
    {
        return $this->hasOne(TaxCar::class);
    }

    public function entretienCars()
    {
        return $this->hasMany(EntretienCar::class);
    }
    public function rents()
    {
        return $this->hasMany(Rent::class, 'car_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'tax_rate',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

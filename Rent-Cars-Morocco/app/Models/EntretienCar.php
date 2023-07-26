<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntretienCar extends Model
{
    protected $table = 'entretien_car';
    use HasFactory;
    protected $fillable = [
        'car_id',
        'maintenance_description',
        'maintenance_date',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

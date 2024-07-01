<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_brand_id',
        'car_model_id',
        'user_id',
        'year_of_manufacture',
        'mileage',
        'color'
    ];

}

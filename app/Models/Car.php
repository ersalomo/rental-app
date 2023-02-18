<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $with = [
        'review'
    ];
    public function review()
    {
        return $this->hasMany(ReviewCar::class, 'car_id');
    }
}

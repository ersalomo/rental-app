<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewCar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public $with = ['user'];
    public function user()
    {
        // return $this->hasOne(User::class, 'id');
        return $this->belongsTo(User::class, 'user_id');
    }
    // public function car()
    // {
    //     return $this->hasMany(Car::class, 'id');
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ["city_id","name","address","description"];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

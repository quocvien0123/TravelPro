<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'location',
        'quantity',
        'status',
        'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Transaction::class);
    }
}

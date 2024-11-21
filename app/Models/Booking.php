<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'destination_id',
        'booking_date',
        'start_date',
        'end_date',
        'number_of_people',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

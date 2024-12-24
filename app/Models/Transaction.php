<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
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
        'code',
        'transaction_id',
        'order_code',
        'status',
        'amount_paid',
        'note',
    ];

    // Định nghĩa quan hệ với User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Định nghĩa quan hệ với Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Định nghĩa quan hệ với Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}

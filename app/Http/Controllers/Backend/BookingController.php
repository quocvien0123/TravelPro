<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function getBooking()
    {

        return view("booking");
    }
    public function show($id)
    {
        $destination = Destination::findOrFail($id); // Lấy thông tin điểm đến theo ID
        return view('booking', [
            'destination' => $destination,
            'current_date' => now()->format('Y-m-d'), // Lấy ngày hiện tại
        ]);
    }
}

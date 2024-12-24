<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Destination;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    function getBooking()
    {

        return view("booking");
    }
    public function show($id)
    {
        // Lấy điểm đến từ DB
        $destination = Destination::findOrFail($id);

        // Lấy tất cả các dịch vụ
        $services = Service::all();

        // Lưu thông tin cần thiết vào session
        session([
            'user_id' => Auth::id(), // ID người dùng đăng nhập
            'destination_id' => $id,
            'booking_date' => now()->format('Y-m-d'), // Ngày đặt
        ]);

        // Truyền dữ liệu vào view
        return view("booking", compact('destination', 'services'));
    }

    public function createBookingForm()
    {
        // Lấy tất cả dịch vụ từ bảng services
        $services = Service::all();

        // Trả về view cùng với dữ liệu dịch vụ
        return view('home', compact('services'));
    }
}

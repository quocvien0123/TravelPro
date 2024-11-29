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

        $destination = Destination::findOrFail($id);  // Lấy điểm đến từ DB

        // Lấy tất cả các dịch vụ và điểm đến
        $destinations = Destination::all();

        $services = Service::all();


        // Truyền dữ liệu vào view
        return view('booking', [
            'destination' => $destination,  // Truyền điểm đến
            'destinations' => $destinations,  // Truyền tất cả điểm đến
            'services' => $services,  // Truyền các dịch vụ
            'current_date' => now()->format('Y-m-d'),  // Ngày hiện tại
        ]);
    }


    public function store(Request $request)
    {
        try {
            // Validate dữ liệu form
            $request->validate([
                'start_date' => 'required|date|after_or_equal:today',
                'end_date' => 'required|date|after:start_date',
                'number_of_people' => 'required|integer|min:1',
                'destination_id' => 'required|exists:destinations,id',
                'service_id' => 'required|exists:services,id', // Validate dịch vụ
                // 'price' => 'required|numeric|min:0',
            ]);

            // Kiểm tra thông tin điểm đến và tính tổng giá
            $destination = Destination::find($request->destination_id);
            $service = Service::find($request->service_id);
            $totalPrice = $destination->price * $request->number_of_people; // Giá tour cho số người

            // Kiểm tra nếu có dịch vụ thì tính thêm
            if ($service) {
                $totalPrice += $service->price * $request->number_of_people; // Cộng giá dịch vụ
            }


            // Lưu booking vào cơ sở dữ liệu
            $booking = new Booking();
            $booking->user_id = Auth::id(); // ID người dùng đăng nhập
            $booking->destination_id = $request->destination_id;
            $booking->service_id = $request->service_id; // Lưu dịch vụ đã chọn
            $booking->booking_date = now()->format('Y-m-d'); // Ngày đặt
            $booking->start_date = $request->start_date;
            $booking->end_date = $request->end_date;
            $booking->number_of_people = $request->number_of_people;
            $booking->total_price = $totalPrice; // Tính toán tổng giá
            $booking->status = 0; // Mặc định chưa xác nhận
            $booking->save();

            return redirect()->back()->with('success', 'Đặt tour thành công!');
        } catch (\Exception $e) {
            Log::error('Error while saving booking: ' . $e->getMessage());  // Lưu lỗi vào log
            return redirect()->back()->with('error', 'Có lỗi xảy ra. Vui lòng thử lại! Lỗi: ' . $e->getMessage());
        }
    }

    public function createBookingForm()
    {
        // Lấy tất cả dịch vụ từ bảng services
        $services = Service::all();

        // Trả về view cùng với dữ liệu dịch vụ
        return view('home', compact('services'));
    }
}

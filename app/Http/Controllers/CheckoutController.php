<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Destination;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckOut()
    {
        return view("checkout");
    }

    public function showCancel(Request $request)
    {
        $transactionId = $request->input('transactionId');
        $status = $request->input('status');
        $code = $request->query('code');
        $transactionId = $request->query('id');
        $status = $request->query('status');
        $orderCode = $request->query('orderCode');

        $destination = Destination::find(session('destination_id'));
        $service = Service::find(session('service_id'));

        $totalPrice = $destination->price * session('number_of_people'); // Giá tour cho số người

        // Kiểm tra nếu có dịch vụ thì tính thêm
        if ($service) {
            $totalPrice += $service->price * session('number_of_people'); // Cộng giá dịch vụ
        }

        Transaction::create([
            'user_id' => session('user_id'),
            'service_id' => session('service_id'),
            'destination_id' => session('destination_id'),
            'booking_date' => session('booking_date'),
            'start_date' => session('start_date'),
            'end_date' => session('end_date'),
            'number_of_people' => session('number_of_people'),
            'total_price' => $totalPrice,
            'code' => $code,
            'transaction_id' => $transactionId,
            'order_code' => $orderCode,
            'status' => $status,
            'amount_paid' => $totalPrice,
            'note' => session('note'),
        ]);
        $destination->update([
            'status' => $destination->status - session('number_of_people') ,
        ]);


        return view("cancel");
    }

    public function showSuccess(Request $request)
    {
        $transactionId = $request->input('transactionId');
        $status = $request->input('status');
        $code = $request->query('code');
        $transactionId = $request->query('id');
        $status = $request->query('status');
        $orderCode = $request->query('orderCode');

        $destination = Destination::find(session('destination_id'));
        $service = Service::find(session('service_id'));

        $totalPrice = $destination->price * session('number_of_people'); // Giá tour cho số người

        // Kiểm tra nếu có dịch vụ thì tính thêm
        if ($service) {
            $totalPrice += $service->price * session('number_of_people'); // Cộng giá dịch vụ
        }

        Transaction::create([
            'user_id' => session('user_id'),
            'service_id' => session('service_id'),
            'destination_id' => session('destination_id'),
            'booking_date' => session('booking_date'),
            'start_date' => session('start_date'),
            'end_date' => session('end_date'),
            'number_of_people' => session('number_of_people'),
            'total_price' => $totalPrice,
            'code' => $code,
            'transaction_id' => $transactionId,
            'order_code' => $orderCode,
            'status' => $status,
            'amount_paid' => $totalPrice,
            'note' => session('note'),
        ]);
        $status = $destination->quantity - session('number_of_people');
        $destination->update([
            'status' => $status,
        ]);

        return view("success");
    }


    public function createPaymentLink(Request $request)
    {
        session([
            'service_id' => $request->service_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'number_of_people' => $request->number_of_people,
            'note' => $request->input('note')
        ]);
        $YOUR_DOMAIN = $request->getSchemeAndHttpHost();
        $data = [
            "orderCode" => intval(substr(strval(microtime(true) * 10000), -6)),
            "amount" => 2000,
            "description" => "Thanh toán đơn hàng",
            "returnUrl" => $YOUR_DOMAIN . route('success', [], false),
            "cancelUrl" => $YOUR_DOMAIN . route('cancel', [], false)

        ];
        error_log($data['orderCode']);

        try {
            $response = $this->payOS->createPaymentLink($data);
            return redirect($response['checkoutUrl']);
        } catch (\Throwable $th) {
            return $this->handleException($th);
        }
    }
}

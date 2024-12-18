<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckOut()
    {
        return view("checkout");
    }

    public function showCancel()
    {
        return view("cancel");
    }

    public function showSuccess()
    {
        return view("success");
    }


    public function createPaymentLink(Request $request)
    {
        $YOUR_DOMAIN = $request->getSchemeAndHttpHost();
        $data = [
            "orderCode" => intval(substr(strval(microtime(true) * 10000), -6)),
            "amount" => 2000,
            "description" => "Thanh toán đơn hàng",
            "returnUrl" => $YOUR_DOMAIN . route('success', [], false),
            "cancelUrl" => $YOUR_DOMAIN . route('cancel', [], false),

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

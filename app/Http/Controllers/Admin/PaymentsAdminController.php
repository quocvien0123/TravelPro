<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsAdminController extends Controller
{
    public function getPaymentsAdmin()
    {
        return view('admin.payments');
    }
}

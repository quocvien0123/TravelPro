<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function getAdmin()
    {
        return view('admin.dashboard');
    }
    public function paymentsAdmin()
    {
        // Lấy danh sách giao dịch từ bảng `transactions` với phân trang
        $transactions = Transaction::paginate(10);

        // Truyền biến $transactions sang view
        return view('admin.payments', compact('transactions'));
    }
}

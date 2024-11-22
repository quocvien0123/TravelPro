<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quantriController extends Controller
{
    public function getQuantri()
    {
        return view('admin.phanquyen');
    }
}

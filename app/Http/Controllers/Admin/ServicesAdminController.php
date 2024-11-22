<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesAdminController extends Controller
{
    public function getServicesAdmin()
    {
        return view('admin.service');
    }
}

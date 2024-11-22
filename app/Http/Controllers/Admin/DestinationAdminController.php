<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationAdminController extends Controller
{
    public function getDestinationAdmin()
    {
        return view('admin.destination');
    }
}

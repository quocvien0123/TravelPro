<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    public function getBlogAdmin()
    {
        return view('admin.blog');
    }
}

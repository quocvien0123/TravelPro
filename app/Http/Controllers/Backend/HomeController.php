<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getHome(){
        $destinations = Destination::take(6)->get();
        return view("home", compact("destinations"));
    }

}

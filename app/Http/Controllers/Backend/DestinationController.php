<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function getDestination()
{
    $destinations = Destination::where('status', '>', 0)->paginate(6);
    
    return view("destination", compact("destinations"));
}

}

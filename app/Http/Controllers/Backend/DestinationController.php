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
        $query = "";
        return view("destination", compact("destinations", 'query'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        if (is_numeric($query)) {
            $destinations = Destination::where('price', $query)->paginate(6);
            toastr()->success('Tìm được ' . $destinations->count() . ' kết quả.');
        } else {
            $destinations = Destination::where('name', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->orWhere('location', 'LIKE', "%{$query}%")
                ->paginate(6);
            toastr()->success('Tìm được ' . $destinations->count() . ' kết quả.');
        }
        return view('destination', compact('destinations', 'query'));
    }
}

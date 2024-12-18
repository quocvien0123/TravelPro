<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationAdminController extends Controller
{
    public function getDestinationAdmin()
    {
        $destinations = Destination::paginate(10); // 10 là số bản ghi mỗi trang

        return view('admin.destination', compact('destinations'));
    }
    public function showAddForm()
    {
        return view('admin.destination.add'); // Chỉ định view để hiển thị form thêm điểm đến
    }
    public function createDestination(Request $request)
    {


        // Lấy dữ liệu từ request
        $name = $request->input('name');
        $description = $request->input('description');
        $image_url = $request->input('image_url');
        $location = $request->input('location');
        $price = $request->input('price');

        // Cập nhật dữ liệu cho điểm đến
        Destination::create([
            'name' => $name,
            'description' => $description,
            'image_url' => $image_url,
            'location' => $location,
            'price' => $price
        ]);
        toastr()->success("Đã thêm thành công!");
        // Điều hướng đến trang quản trị điểm đến với thông báo thành công
        return redirect()->route('destinationAdmin');
    }
    public function editDestination($id)
    {
        // Tìm điểm đến theo ID
        $destination = Destination::findOrFail($id);

        // Trả về view edit với điểm đến hiện tại
        return view('admin.destination.edit', compact('destination'));
    }

    public function updateDestination(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);

        // Lấy dữ liệu từ request
        $data = $request->only([
            'name',
            'description',
            'image_url',
            'location',
            'price',
        ]);

        // Cập nhật dữ liệu cho điểm đến
        $destination->update($data);
        toastr()->success("Đã cập nhật điểm đến !");
        // Điều hướng đến trang quản trị điểm đến với thông báo thành công
        return redirect()->route('destinationAdmin');
    }


    public function deleteDestination($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();
        toastr()->success('Đã xóa điểm đến');
        return redirect()->back();
    }
}

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
        $imagePath = $imagePath ?? $request->input('image_url'); // Nếu không có ảnh tải lên, giữ giá trị từ form
        $location = $request->input('location');
        $price = $request->input('price');

        // Kiểm tra nếu có ảnh được tải lên
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(resource_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
        } else {
            $imagePath = null;
        }
        // Cập nhật dữ liệu cho điểm đến
        Destination::create([
            'name' => $name,
            'description' => $description,
            'image_url' => $imagePath,
            'location' => $location,
            'price' => $price
        ]);
        toastr()->success("Đã thêm thành công!");
        return redirect()->route('destinationAdmin');
    }
    public function editDestination($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destination.edit', compact('destination'));
    }

    public function updateDestination(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);


        $name = $request->input('name');
        $description = $request->input('description');
        $location = $request->input('location');
        $price = $request->input('price');
        $imagePath = $destination->image_url;  // Giữ giá trị ảnh cũ nếu không có ảnh mới

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(resource_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;  // Cập nhật đường dẫn ảnh mới
        }

        // Cập nhật dữ liệu cho điểm đến
        $destination->update([
            'name' => $name,
            'description' => $description,
            'image_url' => $imagePath,  // Cập nhật ảnh mới nếu có
            'location' => $location,
            'price' => $price
        ]);

        toastr()->success("Đã cập nhật điểm đến!");
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

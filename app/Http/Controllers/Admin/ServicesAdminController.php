<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesAdminController extends Controller
{
    public function getServicesAdmin()
    {

        $services = Service::paginate(10);
        return view('admin.service', compact('services'));
    }
    public function addServiceForm()
    {
        return view('admin.services.add_service');  // Chỉ định đúng vị trí của view
    }

    public function addService(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();

        toastr()->success("Đã thêm thành công!");
        return redirect()->route('servicesAdmin');
    }
    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit_service', compact('service'));
    }
    public function updateService(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Tìm dịch vụ theo ID và cập nhật thông tin
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();

        toastr()->success("Dịch vụ đã được cập nhật thành công!");
        return redirect()->route('servicesAdmin');
    }

    public function deleteService($id)
    {

        $service = Service::findOrFail($id);
        $service->delete();
        toastr()->success("Dịch vụ đã được xóa thành công!");
        return redirect()->route('servicesAdmin');
    }
}

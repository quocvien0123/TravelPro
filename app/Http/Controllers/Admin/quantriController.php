<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class quantriController extends Controller
{
    public function getQuantri()
    {
        $users = User::where('is_admin', true)->paginate(10);
        return view('admin.phanquyen', compact('users'));
    }

    public function removeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_admin' => false]);
        toastr()->success('Đã hủy quyền quản trị của ' . $user->username . '.');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function getUser()
    {
        $users = User::where('is_admin', false)->paginate(10);
        return view('admin.user', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        toastr()->success('Đã xóa tài khoản của ' . $user->username . '.');
        return redirect()->back();
    }

    public function addAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_admin' => true]);
        toastr()->success('Đã cấp quyền quản trị cho ' . $user->username . '.');
        return redirect()->back();
    }
}

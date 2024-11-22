<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {
            toastr()->success('Đăng nhập thành công!');
            $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->route('admin');
            }
            return redirect()->route('home');
        }

        toastr()->error('Email hoặc mật khẩu không chính xác!');
        return redirect()->route('login');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function register(Request $request) {}
}

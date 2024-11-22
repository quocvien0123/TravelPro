<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
<<<<<<< HEAD
use App\Models\User;
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 9fbfc751eaf8de63733e10682172e17ee6f5a0f6

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

<<<<<<< HEAD

=======
>>>>>>> 9fbfc751eaf8de63733e10682172e17ee6f5a0f6
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

<<<<<<< HEAD
    public function register(Request $request) {}
=======
    public function register(Request $request)
    {


        if (User::where('username', $request->input('username'))->exists()) {
            toastr()->error('Tên đăng nhập đã tồn tại!');
            return redirect()->back()->withInput();
        }

        // Kiểm tra xem email có tồn tại không
        if (User::where('email', $request->input('email'))->exists()) {
            toastr()->error('Email đã được sử dụng!');
            return redirect()->back()->withInput();
        }
        try {

            // Create user
            $user = User::create([
                'username' => $request->input(key: 'username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'is_admin' => 0,
            ]);


            // Redirect or respond
            toastr('success', 'Tạo tài khoản thành công!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            toastr()->error('Có lỗi xảy ra, vui lòng thử lại!');
            return redirect()->back()->withInput();
        }
    }
>>>>>>> 9fbfc751eaf8de63733e10682172e17ee6f5a0f6
}

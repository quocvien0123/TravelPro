<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            toastr()->error("Bạn phải đăng nhập!");
            return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập
        }

        $user = Auth::user();

        // Kiểm tra nếu người dùng là admin
        if ($user->is_admin) {
            if ($request->route()->getName() !== 'admin') {
                return redirect()->route('admin'); // Chuyển hướng đến trang admin nếu không phải là route admin
            }
        } else {
            if ($request->route()->getName() !== 'home') {
                return redirect()->route('home'); // Chuyển hướng đến trang home nếu không phải là route home
            }
        }

        return $next($request); // Tiếp tục xử lý request
    }
}

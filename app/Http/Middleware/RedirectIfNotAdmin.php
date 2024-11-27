<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin) {
            if ($request->route()->getName() !== 'admin') {
                return redirect()->route('admin');
            }
        } else {
            if ($request->route()->getName() !== 'home') {
                return redirect()->route('home');
            }
        }

        return $next($request);
    }
}

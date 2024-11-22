<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('/travelpro')->group(function () {
    Route::get('/trangchu', [HomeController::class, 'getHome'])->name('home');
    Route::get('/diemden', [DestinationController::class, 'getDestination'])->name('destination');
    Route::get('/gioithieu', [AboutController::class, 'getAbout'])->name('about');
    Route::get('/baidang', [BlogController::class, 'getBlog'])->name('blog');
    Route::get('/lienhe', [ContactController::class, 'getContact'])->name('contact');
    Route::get('/dattour', [BookingController::class, 'getBooking'])->name('booking');
    Route::get('/dangnhap', [LoginController::class, 'getLogin'])->name('login');
    Route::get('/admin', [AdminController::class, 'getAdmin'])->name('admin');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('auth', [LoginController::class, 'authenticate'])->name('auth');
    Route::post('register', [LoginController::class, 'register'])->name('register');

});

<?php

use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\DestinationAdminController;
use App\Http\Controllers\Admin\PaymentsAdminController;
use App\Http\Controllers\Admin\quantriController;
use App\Http\Controllers\Admin\ServicesAdminController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;


Route::prefix('/travelpro')->group(function () {
    // Route::get('/', [HomeController::class, 'getHome'])->name('home');
    Route::get('/diemden', [DestinationController::class, 'getDestination'])->name('destination');
    Route::get('/gioithieu', [AboutController::class, 'getAbout'])->name('about');
    Route::get('/baidang', [BlogController::class, 'getBlog'])->name('blog');
    Route::get('/lienhe', [ContactController::class, 'getContact'])->name('contact');
    Route::get('/dattour', [BookingController::class, 'getBooking'])->name('booking');
    Route::get('/dangnhap', [LoginController::class, 'getLogin'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('auth', [LoginController::class, 'authenticate'])->name('auth');
    Route::post('/register', [LoginController::class, 'register'])->name('register');

    Route::get('password/forgot', [PasswordController::class, 'showForgotForm'])->name('password.forgot');
    Route::post('password/forgot', [PasswordController::class, 'sendResetLink'])->name('password.sendResetLink');
    Route::get('password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [PasswordController::class, 'resetPassword'])->name('password.update');
});
Route::prefix('/travelpro')->group(function () {
    Route::get('/diemden_admin', [DestinationAdminController::class, 'getDestinationAdmin'])->name('destinationAdmin');
    Route::get('/dichvu_admin', [ServicesAdminController::class, 'getServicesAdmin'])->name('servicesAdmin');
    Route::get('/thanhtoan_admin', [PaymentsAdminController::class, 'getPaymentsAdmin'])->name('paymentsAdmin');
    Route::get('/blog_admin', [BlogAdminController::class, 'getBlogAdmin'])->name('blogAdmin');
    Route::get('/user', [userController::class, 'getUser'])->name('user');
    Route::get('/quantri', [quantriController::class, 'getQuantri'])->name('quantri');


    Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.show');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store'); // Lưu dữ liệu


    Route::get('/user/{id}/add_admin', [userController::class, 'addAdmin'])->name('addAdmin');

    Route::get('/user/{id}/remove_admin', [quantriController::class, 'removeAdmin'])->name('removeAdmin');
    Route::get('/user/{id}/delete', [userController::class, 'deleteUser'])->name('deleteUser');
});




Route::prefix('/travelpro')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/trangchu', [HomeController::class, 'getHome'])->name('home');

        Route::group(['middleware' => 'admin'], function () {
            Route::get('/admin', [AdminController::class, 'getAdmin'])->name('admin');
        });
    });
});

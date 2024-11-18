<?php

use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('/travelpro')->group(function () {
    Route::get('/trangchu', [HomeController::class, 'getHome'])->name('home');
    Route::get('/diemden', [DestinationController::class, 'getDestination'])->name('destination');
});

Route::prefix('/travelpro')->group(function () {
    Route::get('/dangnhap', [LoginController::class, 'getLogin'])->name('login');
});

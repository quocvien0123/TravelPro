<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/travelpro', [HomeController::class, 'getHome'])->name('login');

Route::prefix('/travelpro')->group(function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('login');    
});



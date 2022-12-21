<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('/admin/home', [HomeController::class, 'admin'])->middleware('is_admin')->name('admin.home');

<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/movie', [MovieController::class, 'index']);

Route::prefix('admins')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
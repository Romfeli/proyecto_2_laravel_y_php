<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);



Route::get('/dashboard', [DashboardController::class, 'index']);



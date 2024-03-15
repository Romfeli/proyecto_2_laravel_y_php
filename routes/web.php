<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);



Route::get('/dashboard', [DashboardController::class, 'index' ]);


Route::resource('expense_reports', 'App\Http\Controllers\ExpenseReportController');

Route::get('/expense_reports/{id}/confirmDelete','App\Http\Controllers\ExpenseReportController@confirmDelete');

Route::get('/expense_reports/{expense_report}/expenses/create', 'App\Http\Controllers\ExpenseController@create');
Route::post('/expense_reports/{expense_report}/expenses', 'App\Http\Controllers\ExpenseController@store');

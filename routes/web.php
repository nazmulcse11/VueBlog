<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\CategoryController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::get('/{url}', [App\Http\Controllers\HomeController::class, 'index'])->where('path','.*');
Route::post('/add-category', [CategoryController::class, 'addCategory']);
Route::get('/get-categories', [CategoryController::class, 'getCategories']);

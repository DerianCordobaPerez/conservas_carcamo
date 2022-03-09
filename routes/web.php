<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ProductsTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->as('dashboard.')->group(function () {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/home', 'home')->name('home');
    });

    Route::resource('products', ProductController::class);
});

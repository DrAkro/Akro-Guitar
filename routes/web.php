<?php

use App\Http\Controllers\AccController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    // Home Route for authenticated users
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Restricting Access to Admin for Items and Customers
    Route::middleware('role:admin')->group(function() {
    
        Route::resource('customers', CustomerController::class);
    });

    Route::resource('items', App\Http\Controllers\ItemController::class);
    Route::resource('transactions', TransactionController::class)->except(['show']);
    Route::patch('/transactions/{transaction}', [AccController::class, 'acc'])->name('transactions.acc');
    Route::get('/transactions/status-chart', [TransactionController::class, 'getTransactionStatusData']);
    Route::post('/transactions/apply-promo', [TransactionController::class, 'applyPromo'])->name('transactions.applyPromo');
    Route::resource('promos', PromoController::class);

});



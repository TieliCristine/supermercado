<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SaleController;

// Rota principal
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome'); // Ou outra view para visitantes não autenticados
});

// Rotas de autenticação
require __DIR__.'/auth.php';

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotas de recurso
    Route::resource('suppliers', SupplierController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('inventory', InventoryController::class);
    Route::resource('sales', SaleController::class);
});

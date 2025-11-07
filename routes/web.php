<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventory', [inventoryController::class, 'index'])->name('inventory.index');
Route::get('/inventory/create', [inventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [inventoryController::class, 'store'])->name('inventory.store');
Route::delete('/inventory/{id}', [inventoryController::class, 'delete'])->name('inventory.delete');

<?php

use App\Models\inventory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventory', [App\Http\Controllers\inventoryController::class, 'index'])->name('inventory.index');

Route::get('/inventory/create', [App\Http\Controllers\inventoryController::class, 'create'])-> name('inventory.create');

Route::post('/inventory', [App\Http\Controllers\inventoryController::class, 'store'])-> name('inventory.store');

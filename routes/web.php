<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [InventoryController::class, 'index'])->name('home');
Route::get('/users', [InventoryController::class, 'users'])->name('users');
Route::get('/categories', [InventoryController::class, 'categories'])->name('categories');
Route::get('/items', [InventoryController::class, 'items'])->name('items');
Route::get('/reports', [InventoryController::class, 'reports'])->name('reports');
Route::get('/', [InventoryController::class, 'index'])->name('home');

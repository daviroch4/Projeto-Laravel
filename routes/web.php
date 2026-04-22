<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products/new', [ProductsController::class, 'store']);
Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/', [ProductsController::class, 'update']);
Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);

Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/suppliers/new', [SupplierController::class, 'create']);
Route::post('/suppliers/new', [SupplierController::class, 'store']);
Route::get('/suppliers/update/{id}', [SupplierController::class, 'edit']);
Route::post('/suppliers/update', [SupplierController::class, 'update']);
Route::get('/suppliers/delete/{id}', [SupplierController::class, 'destroy']);

Route::get('/types', [TypeController::class, 'index']);
Route::get('/types/new', [TypeController::class, 'create']);
Route::post('/types/new', [TypeController::class, 'store']);
Route::get('/types/update/{id}', [TypeController::class, 'edit']);
Route::post('/types/update', [TypeController::class, 'update']);
Route::get('/types/delete/{id}', [TypeController::class, 'destroy']);
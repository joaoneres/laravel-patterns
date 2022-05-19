<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/cars')->group(function () {
    Route::get('/', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
    Route::get('/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
    Route::post('/store', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
    Route::get('/{id}/show', [App\Http\Controllers\CarController::class, 'show'])->name('cars.show');
    Route::get('/{id}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
    Route::put('/{id}/update', [App\Http\Controllers\CarController::class, 'update'])->name('cars.update');
    Route::delete('/{id}/delete', [App\Http\Controllers\CarController::class, 'delete'])->name('cars.delete');
});

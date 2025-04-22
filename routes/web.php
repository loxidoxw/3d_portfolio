<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', [App\Http\Controllers\WorkController::class, 'index'])->name('work.index');
Route::get('/work/create', [App\Http\Controllers\WorkController::class, 'create'])->name('work.create');
Route::get('/work/{id}', [App\Http\Controllers\WorkController::class, 'show'])->name('work.show');
Route::post('/work', [App\Http\Controllers\WorkController::class, 'store'])->name('work.store');

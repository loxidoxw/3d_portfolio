<?php


use App\Http\Controllers\Work\CreateController;
use App\Http\Controllers\Work\EditController;
use App\Http\Controllers\Work\IndexController;
use App\Http\Controllers\Work\ShowController;
use App\Http\Controllers\Work\StoreController;
use App\Http\Controllers\Work\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



    Route::get('/work', IndexController::class)->name('work.index');
    Route::get('/work/create', CreateController::class)->name('work.create');
    Route::get('/work/{work}', ShowController::class)->name('work.show');
    Route::get('/work/{work}/edit', EditController::class)->name('work.edit');
    Route::post('/work', StoreController::class)->name('work.store');
    Route::patch('/work/{work}', UpdateController::class)->name('work.update');



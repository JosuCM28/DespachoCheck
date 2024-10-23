<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    
});

Route::get('/counter/index', [CounterController::class, 'index'])->name('counter.index');
Route::get('/counter/create', [CounterController::class, 'create'])->name('counter.create');
Route::post('/counter/store', [CounterController::class, 'store'])->name('counter.store');
Route::get('/counter/{counter}', [CounterController::class, 'show'])->name('counter.show');
Route::get('/counter/edit/{counter}', [CounterController::class, 'edit'])->name('counter.edit');
Route::put('/counter/update/{counter}/', [CounterController::class, 'update'])->name('counter.update');
Route::delete('/counter/destroy/{counter}', [CounterController::class, 'destroy'])->name('counter.destroy');


Route::get('/client/index', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');




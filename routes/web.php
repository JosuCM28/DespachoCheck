<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\PDFMaker;
use App\Http\Controllers\FielSello;
use App\Http\Controllers\VerifyReceipt;
use App\Http\Controllers\ReceiptController;
use Filament\Pages\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomRegisterController;

Route::get('/', function () {
    return view('despacho');
    
});
Route::view('/despacho', 'despacho')->name('despacho');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {

        
    });
    Route::middleware(['auth','\App\Http\Middleware\CheckRole::class'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


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
        Route::get('/client/{client}', [ClientController::class, 'show'])->name('client.show');
        Route::get('/client/edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
        Route::put('/client/update/{client}/', [ClientController::class, 'update'])->name('client.update');
        Route::delete('/client/destroy/{client}', [ClientController::class, 'destroy'])->name('client.destroy');


        
        

        Route::get('/user', [ClientController::class, 'final'])->name('client.final');

        #SELLOS Y FIELES
        Route::get('/sello/fecha', [FielSello::class, 'indexsello'])->name('sello.indexsello');
        Route::get('/fiel/fecha', [FielSello::class, 'indexfiel'])->name('fiel.indexfiel');



        Route::get('/receipt',[ReceiptController::class,'index'])->name('receipt.index');
        Route::get('/receipt/create',[ReceiptController::class,'create'])->name('receipt.create');
        Route::post('/receipt/store',[ReceiptController::class,'store'])->name('receipt.store');
        Route::get('/receipt/edit/{receipt}',[ReceiptController::class,'edit'])->name('receipt.edit');
        Route::put('/receipt/update/{receipt}',[ReceiptController::class,'update'])->name('receipt.update');
        Route::get('/receipt/show/{identificator}',[ReceiptController::class,'show'])->name('receipt.show');
        Route::delete('/receipt/destroy/{receipt}',[ReceiptController::class,'destroydos'])->name('receipt.destroydos');

        #DOMPDF
        Route::get('/downloadPDF/{id}',[PDFMaker::class,'downloadPDF'])->name('downloadPDF');
        Route::get('/sendPDF/{id}',[PDFMaker::class,'sendPDF'])->name('sendPDF');

        
        });

        Route::delete('/file/destroy/{document}', [FileController::class, 'destroy'])->name('file.destroy');
        Route::post('/file/{client}', [FileController::class, 'store'])->name('file.store');
        Route::get('/file/download/{document}', [FileController::class, 'download'])->name('file.download');

    #Route::resource('counter', CounterController::class)->names('counter.home');
    Route::post('/register-token', [CustomRegisterController::class, 'store'])->name('register.token');
    

    #verificador de recibos
    Route::get('/receipt/verify/{identificator}',[VerifyReceipt::class,'__invoke'])->name('receipt.verify');

Route::get('/bot', [HomeController::class, 'index'])->name('sidebar'); 

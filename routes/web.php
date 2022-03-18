<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource("/bankdetails", BankController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

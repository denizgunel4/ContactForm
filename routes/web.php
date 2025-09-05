<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'create']);
Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');

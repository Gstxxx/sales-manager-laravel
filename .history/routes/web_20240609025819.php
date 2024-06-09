<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/storeQuote', [QuoteController::class, 'storeQuote'])->name('storeQuote');

addClient

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/addClient', [QuoteController::class, 'addClient'])->name('addClient');

addClient

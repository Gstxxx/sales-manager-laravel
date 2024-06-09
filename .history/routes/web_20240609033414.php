<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [QuoteController::class, 'index'];
})->name('home');

Route::post('/addClient', [ClientController::class, 'addClient'])->name('addClient');
Route::post('/addClient', [ClientController::class, 'addClient'])->name('addClient');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index'])->name('home');

Route::post('/addClient', [ClientController::class, 'addClient'])->name('addClient');
Route::post('/addClient', [ClientController::class, 'addClient'])->name('addClient');

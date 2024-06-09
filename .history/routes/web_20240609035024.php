<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ToastController;

Route::get('/toast/{message}', [ToastController::class, 'success']);

Route::get('/', [ClientController::class, 'index'])->name('home');

Route::post('/addClient', [ClientController::class, 'addClient'])->name('addClient');
Route::post('/removeClient', [ClientController::class, 'removeClient'])->name('removeClient');

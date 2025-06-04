<?php

use App\Http\Controllers\PATH\HomePathController;
use App\Http\Controllers\PATH\RegistroPathController;
use App\Http\Controllers\POST\AddUserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePathController::class,'index'])->name('home');

Route::get('/registro', [RegistroPathController::class,'index'])->name('home');

Route::post('/addUser', [AddUserPostController::class,'index']);

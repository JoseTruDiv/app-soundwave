<?php

use App\Http\Controllers\PATH\HomeRouterController;
use App\Http\Controllers\PATH\RegisterRouterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeRouterController::class,'index'])->name('home');

Route::get('/registro', [RegisterRouterController::class,'index'])->name('home');

<?php

use App\Http\Controllers\PATH\HomeRouterController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeRouterController::class,'index'])->name('home');

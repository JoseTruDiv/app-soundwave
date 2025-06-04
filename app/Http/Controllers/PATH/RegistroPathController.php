<?php

namespace App\Http\Controllers\PATH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegistroPathController extends Controller
{
    public function index(){
        return Inertia::render('auth/Register');
    }
}

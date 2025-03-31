<?php

namespace App\Http\Controllers\PATH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeRouterController extends Controller
{
    function index(){
        return Inertia::render('Home');
    }
}

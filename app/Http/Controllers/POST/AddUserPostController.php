<?php

namespace App\Http\Controllers\POST;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddUserPostController extends Controller
{
    public function index(Request $request){

        $result = $request->all();

        var_dump($result);

        return 'Hola estas en addUsers.';
    }
}

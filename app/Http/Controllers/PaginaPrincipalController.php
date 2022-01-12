<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrincipalController extends Controller
{
    public function paginaPrincipal(){
        return view('welcome');
    }
}

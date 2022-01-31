<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPrincipal;
use App\Models\Pousada;

class PaginaPrincipalController extends Controller
{
    public function paginaPrincipal(){

        $info = InfoPrincipal::first();
        $pousadas = Pousada::take(3)->get()->toArray();

        return view('welcome', compact('info', 'pousadas'));
    }

    public function listarPousadas(Request $request)
    {
        $todasPousadas = Pousada::get()->toArray();
        return view('componentes.todasPousadas', compact('todasPousadas'));
    }
}

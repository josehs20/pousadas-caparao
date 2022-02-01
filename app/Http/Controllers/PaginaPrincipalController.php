<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPrincipal;
use App\Models\Pousada;
use App\Models\PousadaReg;

class PaginaPrincipalController extends Controller
{
    public function paginaPrincipal(){

        $info = InfoPrincipal::first();
        $pousada = null;

        $pousadas = PousadaReg::all();
        $pousada = [];
        foreach ($pousadas as $value) {
            if (Pousada::where('pousada_reg_id', $value->id)->first()) {
                $pousada[] = Pousada::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }
        return view('welcome', compact('info', 'pousada'));
    }

    public function listarPousadas(Request $request)
    {
        $todasPousadas = Pousada::get()->toArray();
        return view('componentes.todasPousadas', compact('todasPousadas'));
    }
}

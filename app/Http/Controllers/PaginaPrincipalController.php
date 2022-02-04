<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPrincipal;
use App\Models\Imagem;
use App\Models\PousadaReg;

class PaginaPrincipalController extends Controller
{
    public function paginaPrincipal(){

        $info = InfoPrincipal::first();
        $pousada = null;

        $pousadasReg = PousadaReg::all();
        $pousadas = [];
        foreach ($pousadasReg as $value) {
            if (Imagem::where('pousada_reg_id', $value->id)->first()) {
                $pousadas[] = Imagem::with('pousadaReg')->where('pousada_reg_id', $value->id)->first();
            }
        }
        return view('welcome', compact('info', 'pousadas'));
    }
}
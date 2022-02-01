<?php

use App\Models\Pousada;

if (!function_exists('upImg')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function upImg($request, $reg)
    {
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            //pega nome da imagem
            $name = $request->file('image')->getClientOriginalName();

            //armazena na pasta
            $request->image->storeAs('public/imgPousadas', $name);
            
                $pousada = new Pousada();
                $pousada->imagem = "storage/imgPousadas/$name";
                $pousada->nome = $request->nome;
                $pousada->diaria = $request->diaria;
                $pousada->descricao = $request->descricao;
                $pousada->pousada_reg_id = $reg->id;
                $pousada->save();            
        }
    }
}
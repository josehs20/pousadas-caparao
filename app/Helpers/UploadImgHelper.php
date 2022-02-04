<?php

use App\Models\Imagem;

if (!function_exists('upImg')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function upImg($request, $reg)
    {
        
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            //pega nome da imagem
            $name = $request->file('imagem')->getClientOriginalName();
            
            //armazena na pasta
            $request->imagem->storeAs('public/imgPousadas', $name);
            
            $pousada = new Imagem();
            $pousada->imagem = "storage/imgPousadas/$name";
            $pousada->pousada_reg_id = $reg;
            $pousada->save();            
        }
    }
}
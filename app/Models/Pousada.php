<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pousada extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'diaria',
        'imagem',
        'pousada_reg_id',
        ];

        public function pousadaReg() {
            return $this->belongsTo('App\Models\PousadaReg');
        }

}

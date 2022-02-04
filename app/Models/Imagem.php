<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = 'imagens';
    protected $fillable = [
        'imagem',
        'pousada_reg_id',
        ];

        public function pousadaReg() {
            return $this->belongsTo('App\Models\PousadaReg');
        }

}

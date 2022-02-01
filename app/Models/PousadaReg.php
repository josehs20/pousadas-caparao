<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PousadaReg extends Model
{
    protected $table = 'pousadas_reg';
    protected $fillable = [
        'id',
        'nome',
        'cidade',
        'localizacao',
    ];

    public function pousada()
    {       
        return $this->hasMany('App\Models\Pousada');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPrincipal extends Model
{
    protected $table = 'info_Principal';
    protected $fillable = [
    'tituloPrincipal',
    'titulo',
    'subtitulo',
    'introducaoImage', 
    'titulointroducao',
    'introducao',
    'sobreNos', 
    ];

}

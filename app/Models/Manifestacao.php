<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Manifestacao extends Model
{
    use HasFactory;

    protected $table = "manifestacoes";
    
    protected $fillable = [
        "nome_autor",
        "codigo_rastreio",
        "data_envio",
        "categoria",
        "titulo",
        "descricao",
        "status",
        "tipo_usuario"
    ];
}

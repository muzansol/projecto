<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;
    protected $fillable = [

        'nome',
        'numero_serie',
        'matricula',
        'ano_fabrico',
        'capacidade',
        'estado',
        'modelo',
        'imagem',
        'id_categoria'
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}

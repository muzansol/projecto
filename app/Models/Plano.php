<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;
    protected $fillable = [
        'v_e',
        'v_c',
        'quilates',
        'tior',
        'racio',
        'preco',
        'receita_prevista',
        'descricao',
        'id_bloco'
    ];
    public function bloco(){
        return $this->belongsTo(Bloco::class,'id_bloco');
    }
}


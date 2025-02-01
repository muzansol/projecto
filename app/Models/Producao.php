<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    protected $fillable = [
        'area',
        'e_e',
        'e_c',
        'v_e',
        'v_c',
        'diluicao',
        'preparacaoprevia',
        'producao_ve',
        'producao_vc',
        'grau',
        'concentrado',
        'quilates',
        'teor',
        'pedra',
        'tamanhopedra',
        'pedra_maior',
        'sr',
        'id_bloco'

    ];
    public function bloco(){
        return $this->belongsTo(Bloco::class,'id_bloco');
    }
}

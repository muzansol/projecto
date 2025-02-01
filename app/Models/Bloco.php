<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloco extends Model
{
    use HasFactory;
    protected $fillable = [
        'latitude',
        'longitude',
        'area',
        'e_e',
        'e_c',
        'v_e',
        'v_c',
        'quilates',
        'teor',
        'tamanho_pedra',
        'racio',
        'preço',
        'id_sector'

    ];
    public function sector(){
        return $this->belongsTo(Sector::class,'id_sector');
    }
}

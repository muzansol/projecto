<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recolhatrincheira extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'diluicao',
        'empolamento',
         'tipo_rocha',
         'tipo_deposito',
         'ee',
         'ec',
         've',
         'vc',
         'area',
         'id_trincheira',
         'id_user',
          ];

        public function trincheira(){
            return $this->belongsTo(Trincheira::class, 'id_trincheira');
        }
        public function user(){
            return $this->belongsTo(User::class, 'id_user');
        }
}

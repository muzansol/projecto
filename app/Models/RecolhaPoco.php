<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecolhaPoco extends Model
{
    use HasFactory;
    protected $fillable = [
        'diluicao',
        'empolamento',
         'tipo_rocha',
         'tipo_deposito',
         'ee',
         'ec',
         've',
         'vc',
         'area',
         'id_poco',
         'id_user'
    ];

        public function poco(){
            return $this->belongsTo(Poco::class, 'id_poco');
        }
        public function user(){
            return $this->belongsTo(User::class, 'id_user');
        }
}


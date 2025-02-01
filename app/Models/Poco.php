<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poco extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'estado',
         'latitude',
         'longitude',
         'id_sector'
        ];

        public function sector(){
            return $this->belongsTo(Sector::class, 'id_sector');
        }
    
}

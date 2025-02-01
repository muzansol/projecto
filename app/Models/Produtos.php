<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'quilates',
      'id_tipo_produto'
    ];

        public function poco(){
            return $this->belongsTo(Poco::class, 'id_tipo_produto');
        }
}

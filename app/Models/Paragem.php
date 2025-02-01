<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragem extends Model
{
    use HasFactory;
    protected $fillable = [
        'hora_inicio',
        'hora_fim',
        'total_hora',
        'id_user',
        'id_equip',
        'id_paragem'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function equipamento(){
        return $this->belongsTo(Equipamento::class, 'id_equip');
    }
    public function paragem(){
        return $this->belongsTo(Paragem::class, 'id_paragem');
    }
}

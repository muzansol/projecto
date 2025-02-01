<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenpenho extends Model
{
    use HasFactory;
    protected $fillable = [
        'disponibilidade',
        'hora_inicio',
        'hora_fim',
        'total_hora',
        'id_user',
        'id_equip',
        'id_trabalho'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function equipamento(){
        return $this->belongsTo(Equipamento::class, 'id_equip');
    }
    public function trabalho(){
        return $this->belongsTo(Tipo_trabalho::class, 'id_trabalho');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_trabalho extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'descricao'
    ];
}

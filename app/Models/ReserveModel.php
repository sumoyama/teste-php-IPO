<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReserveModel extends Model
{
    use HasFactory;
    protected $table = 'reserves';
    protected $fillable = [
        'espaco_id',
        'cliente_id',
        'estrutura_adic_id',
        'servicos_id',
        'data_reserva',
        'qtd_pessoas',
        'hora_inicio',
        'hora_final',
    ];
}
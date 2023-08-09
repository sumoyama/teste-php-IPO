<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceModel extends Model
{
    use HasFactory;
    protected $table = 'space';
    protected $fillable = ['endereco', 'telefone', 'limit_partic', 'func_inicio', 'func_final'];
}
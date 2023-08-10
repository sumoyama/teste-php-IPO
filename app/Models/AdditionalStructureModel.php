<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalStructureModel extends Model
{
    use HasFactory;
    protected $table = 'estrutura_adicionais';
    protected $fillable = ['flipchart', 'backdrop', 'banners', 'telao', 'placas_mesa'];
}
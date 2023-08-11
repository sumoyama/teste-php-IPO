<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['recepcao', 'qtd-recepcao', 'coffee_break', 'premium_coffee'];
    public $timestamps = false; // Desabilitar as colunas de timestamps

}
<?php

namespace App\Http\Controllers;

use App\Models\SpaceModel;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    //
    public function index()
    {
        // Lógica para exibir uma lista de informações
        // Recupera todos os registros
        $informacoes = SpaceModel::all(); // Recupera todos os registros
        return view('pages.list-rooms',  compact('informacoes'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\SpaceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SpaceController extends Controller
{
    public function index()
    {
        // Lógica para exibir uma lista de informações
        // Recupera todos os registros
        $informacoes = SpaceModel::all(); // Recupera todos os registros
        return view('pages.list-rooms',  compact('informacoes'));
    }
    public function getByIdRoom(Request $request)
    {
        $nameRooms = [
            'Tóquio', 'Madri', 'Barcelona', 'São Paulo', 'Napoli', 'Nova Iorque', 'Lisboa'
        ];
        //Recupera um Salão por vez.

        $id = $request->route('id');
        $room = SpaceModel::find($id);
        $src = "/img/carousel-" . $id . ".jpg";
        $nameRoom = $nameRooms[$id - 1];


        if (!$room) {
            abort(404, 'Quarto não encontrado');
        }

        return view('pages.room', ['room' => $room, 'src' => $src, 'nameRoom' => $nameRoom]);
    }
}
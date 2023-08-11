<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\AdditionalStructureModel;
use App\Models\ServiceModel;
use App\Models\SpaceModel;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SpaceController extends Controller
{

    public function index()
    {
        // Lógica para exibir uma lista de informações
        // Recupera todos os registros
        $informacoes = SpaceModel::all();
        return view('pages.list-rooms',  compact('informacoes'));
    }
    public function getByIdRoom(Request $request)
    {
        $nameRooms = [
            'Tóquio', 'Madri', 'Barcelona', 'São Paulo', 'Napoli', 'Nova Iorque', 'Lisboa'
        ];
        $id = $request->route('id');
        $room = SpaceModel::find($id);
        $src = "/img/carousel-" . $id . ".jpg";
        $nameRoom = $nameRooms[$id - 1];
        $hours = DateHelper::calculateHoursDifference($room->func_inicio, $room->final);
        $today = DateHelper::today()->format('n');
        dd($today);
        if (!$room) {
            abort(404, 'Quarto não encontrado');
        }

        return view('pages.room', ['room' => $room, 'src' => $src, 'nameRoom' => $nameRoom, 'id' => $id, 'hours' => $hours]);
    }
    public function store(Request $request, $id)
    {
        // Lógica para processar os dados do formulário POST
        // por exemplo, salvar as informações adicionais na base de dados
        //
        $additional = $request->input('additional');

        AdditionalStructureModel::create([
            "flipchart" => in_array('Flipchart', $additional),
            "backdrop" => in_array('Backdrop', $additional),
            "banners" => in_array('Banners', $additional),
            "telao" => in_array('Tela de Fundo de Palco', $additional),
            "placas_mesa" => in_array('Placas de Mesa', $additional)
        ]);
        ServiceModel::create([
            "recepcao" => in_array('Recepção', $additional),
            "coffee_break" => in_array('Coffee Break', $additional),
        ]);
        // Redirecione para alguma página após a inserção
        return redirect()->route('pages.success');
    }

    public function success()
    {
        return view('pages.success');
    }
}
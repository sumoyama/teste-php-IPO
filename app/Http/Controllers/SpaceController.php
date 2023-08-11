<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\AdditionalStructureModel;
use App\Models\ReserveModel;
use App\Models\ServiceModel;
use App\Models\SpaceModel;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\VarDumper\VarDumper;

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
        $reserves =
            ReserveModel::where('espaco_id', $id)
            ->whereDate('data_reserva', today()->format('Y-m-d'))
            ->get();
        $src = "/img/carousel-" . $id . ".jpg";
        $nameRoom = $nameRooms[$id - 1];

        $arrHours = DateHelper::arrHour($room->func_inicio, $room->func_final, $reserves);
        $hours = count($arrHours);

        if (!$room) {
            abort(404, 'Quarto não encontrado');
        }

        return view('pages.room', ['room' => $room, 'src' => $src, 'nameRoom' =>
        $nameRoom, 'id' => $id, 'hours' => $hours, 'arrHours' => $arrHours, 'qtd_people' => $room->limit_partic]);
    }

    public function atualizar(Request $request)
    {
        $novoValor = $request->input('novoValor');
        dd($novoValor);
        // Realize as operações que você precisa com o novo valor, como salvar no banco de dados, processar, etc.

        //return response()->json(['mensagem' => 'Requisição AJAX realizada com sucesso!']);
    }
    public function store(Request $request, $id)
    {
        // Lógica para processar os dados do formulário POST
        // por exemplo, salvar as informações adicionais na base de dados
        // 
        $valueRecp = 0;
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
            'qtd-recepcao' => $valueRecp,
            "coffe_break" => in_array('Coffee Break', $additional),
            "premium_coffee" => in_array('Coffee Break Premmium', $additional),

        ]);
        // Redirecione para alguma página após a inserção
        return redirect()->route('pages.success');
    }

    public function success()
    {
        return view('pages.success');
    }
}
<div class="card wow fadeInUp" data-wow-delay="0.2s">
    <div class="card-horizontal">
        <div class="container-content-room p-4 bg-dark">
            <h3 class="text-center text-bold text-white-50">{{ $roomName }}</h3>
            <h5 class="text-white-50 mt-4">Especificações do Salão:</h5>
            <ul class="text-white-50 mt-2 mb-16">
                <li>Endereço: {{ $informacoes->endereco }}</li>
                <li>Telefone: {{ $informacoes->telefone }} </li>
                <li>Limite de Participantes: {{ $informacoes->limit_partic }}</li>
                <li>Horário de Funcionamento: {{ $informacoes->func_inicio }} até {{ $informacoes->func_final }}</li>
            </ul>
        </div>
        <div class="container-image">
            <img class="image-room-container " src="{{ $imageSrc }}" alt="{{ $roomName }}">
        </div>
    </div>
    <button class="btn-reserve btn btn-success">Reservar</button>
</div>

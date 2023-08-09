<div class="card wow fadeInUp" data-wow-delay="0.2s">
  <div class="card-horizontal">
      <div class="container-content-room p-4 bg-dark">
          <h3 class="text-center text-bold text-white-50">Salão Nova Iorque</h4>
          <h5 class=" text-white-50 mt-4">Espefificações do Salão:</h5>
          <ul class=" text-white-50 mt-2 mb-16">
            <li>Endereço: {{$informacoes[5]->endereco}}</li>
            <li>Telefone: {{$informacoes[5]->telefone}} </li> 
            <li>Limite de Participantes: {{$informacoes[5]->limit_partic}}</li>
            <li>Horário de Funcionamento: {{$informacoes[5]->func_inicio}} até {{$informacoes[5]->func_final}}</li>
          </ul>
      </div>
      <div class="container-image ">
        <img class="image-room-container" src="img/carousel-6.jpeg" alt="Nova Iorque">
      </div>
  </div>
  <button class="btn-reserve btn btn-success">Reservar</button>
</div>
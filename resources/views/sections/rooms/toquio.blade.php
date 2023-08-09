<div class="card wow fadeInUp" data-wow-delay="0.1s">
  <div class="card-horizontal">
      <div class="container-image ">
        <img class="image-room-container" src="img/carousel-1.jpg" alt="Toquio">
      </div>
      <div class="container-content-room p-4 bg-dark">
          <h3 class="text-center text-bold text-white-50">Salão Tóquio</h4>
          <h5 class=" text-white-50 mt-4">Espefificações do Salão:</h5>
          <ul class=" text-white-50 mt-2 mb-16">
            <li>Endereço: {{$informacoes[0]->endereco}}</li>
            <li>Telefone: {{$informacoes[0]->telefone}} </li> 
            <li>Limite de Participantes: {{$informacoes[0]->limit_partic}}</li>
            <li>Horário de Funcionamento: {{$informacoes[0]->func_inicio}} até {{$informacoes[0]->func_final}}</li>
          </ul>
      </div>
  </div>
  <button class="btn-reserve btn btn-success">Reservar</button>
</div>
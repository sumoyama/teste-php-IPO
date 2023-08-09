<div class="card wow fadeInUp" data-wow-delay="0.1s">
  <div class="card-horizontal">
      <div class="container-image ">
        <img class="image-room-container" src="img/carousel-3.jpeg" alt="Barcelona">
      </div>
      <div class="container-content-room p-4 bg-dark">
          <h3 class="text-center text-bold text-white-50">Salão Barcelona</h4>
          <h5 class=" text-white-50 mt-4">Espefificações do Salão:</h5>
          <ul class=" text-white-50 mt-2 mb-16">
            <li>Endereço: {{$informacoes[2]->endereco}}</li>
            <li>Telefone: {{$informacoes[2]->telefone}} </li> 
            <li>Limite de Participantes: {{$informacoes[2]->limit_partic}}</li>
            <li>Horário de Funcionamento: {{$informacoes[2]->func_inicio}} até {{$informacoes[2]->func_final}}</li>
          </ul>
      </div>
  </div>
  <button class="btn-reserve btn btn-success">Reservar</button>
</div>
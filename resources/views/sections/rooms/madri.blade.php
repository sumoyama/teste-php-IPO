<div class="card wow fadeInUp" data-wow-delay="0.2s">
  <div class="card-horizontal">
      <div class="container-content-room p-4 bg-dark">
          <h3 class="text-center text-bold text-white-50">Salão Madri</h4>
          <h5 class=" text-white-50 mt-4">Espefificações do Salão:</h5>
          <ul class=" text-white-50 mt-2 mb-16">
            <li>Endereço: {{$informacoes[1]->endereco}}</li>
            <li>Telefone: {{$informacoes[1]->telefone}} </li> 
            <li>Limite de Participantes: {{$informacoes[1]->limit_partic}}</li>
            <li>Horário de Funcionamento: {{$informacoes[1]->func_inicio}} até {{$informacoes[1]->func_final}}</li>
          </ul>
      </div>
      <div class="container-image ">
        <img class="image-room-container" src="img/carousel-2.jpeg" alt="Madri">
      </div>
  </div>
  <button class="btn-reserve btn btn-success">Reservar</button>
</div>
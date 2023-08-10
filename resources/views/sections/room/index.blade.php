 @csrf
 <div class="room-number container-xxl py-5" id="{{ $id }}">
     <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
             <h6 class="section-title text-center text-primary text-uppercase">Salão</h6>
             <h1 class="mb-5">Reserve agora o Salão <span class="text-primary text-uppercase">{{ $nameRoom }}</span>
             </h1>
             <h6 class="section-title text-center text-primary text-uppercase">Escolha nossos serviços adicionais</h6>
         </div>
     </div>
     @include('sections.room.items')

 </div>

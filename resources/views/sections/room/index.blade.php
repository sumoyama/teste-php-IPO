 @csrf
 <div class="room-number container-xxl" id="{{ $id }}">
     <div class="container ">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
             <h6 class="section-title text-center text-primary text-uppercase">Salão</h6>
             <h1 class="mb-5">Reserve agora o Salão <span class="text-primary text-uppercase">{{ $nameRoom }}</span>
             </h1>

         </div>
         <form action="{{ route('rooms.store', ['id' => $id]) }}" method="post">
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h6 class="section-title text-center text-primary text-uppercase">Agende seu Salão</h6>
                 @include('sections.room.schedule')
             </div>
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h6 class="section-title text-center text-primary text-uppercase">Escolha Nossos Serviços</h6>
                 @include('sections.room.services')
             </div>
             <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 <h6 class="section-title text-center text-primary text-uppercase">Escolha nossos serviços adicionais
                 </h6>
                 @include('sections.room.items')
             </div>
             <div class="items-center col-sm-12 room-next">
                 <input type="submit" class="room-continueBtn" id='btn-continue' data-room-id="{{ $id }}"
                     value='Continue' />
             </div>
         </form>
     </div>

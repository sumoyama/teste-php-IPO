   <div class="container-xxl py-5">
       <div class="row">
           <div class="col-sm-12">
               <form class='row' action="{{ route('rooms.store', ['id' => $id]) }}" method="post">
                   @csrf
                   @include('components.structures.index', [
                       'id' => '1',
                       'src' => '/img/flipchart.jpeg',
                       'alt' => 'flipchart',
                       'title' => 'Flipchart',
                       'delay' => '0.1s',
                   ])
                   @include('components.structures.index', [
                       'id' => '2',
                       'src' => '/img/backdrop.jpeg',
                       'alt' => 'Backdrop',
                       'title' => 'Backdrop',
                       'delay' => '0.2s',
                   ])
                   @include('components.structures.index', [
                       'id' => '3',
                       'src' => '/img/banners.jpeg',
                       'alt' => 'Banners',
                       'title' => 'Banners',
                       'delay' => '0.3s',
                   ])
                   @include('components.structures.index', [
                       'id' => '4',
                       'src' => '/img/telao-fundo-de-palco.jpeg',
                       'alt' => 'telao-fundo-de-palco',
                       'title' => 'Tela de Fundo de Palco',
                       'delay' => '0.4s',
                   ])
                   @include('components.structures.index', [
                       'id' => '2',
                       'src' => '/img/placas-mesa.jpeg',
                       'alt' => 'Placas de Mesa',
                       'title' => 'Placas de Mesa',
                       'delay' => '0.1s',
                   ])
                   <div class="items-center col-sm-12 room-next">
                       <input type="submit" class="room-continueBtn" id='btn-continue' data-room-id="{{ $id }}"
                           value='Continue' />
                   </div>
               </form>


           </div>
       </div>
   </div>

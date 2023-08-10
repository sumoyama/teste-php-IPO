<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Salão</h6>
            <h1 class="mb-5">Reserve agora o Salão <span class="text-primary text-uppercase">{{ $nameRoom }}</span>
            </h1>
            <h6 class="section-title text-center text-primary text-uppercase">Escolha nossos serviços adicionais</h6>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    @include('components.structures.index', [
                        'id' => '1',
                        'src' => '/img/flipchart.jpeg',
                        'alt' => 'flipchart',
                        'title' => 'Flipchart',
                    ])
                    @include('components.structures.index', [
                        'id' => '2',
                        'src' => '/img/backdrop.jpeg',
                        'alt' => 'Backdrop',
                        'title' => 'Backdrop',
                    ])
                    @include('components.structures.index', [
                        'id' => '3',
                        'src' => '/img/banners.jpeg',
                        'alt' => 'Banners',
                        'title' => 'Banners',
                    ])
                    @include('components.structures.index', [
                        'id' => '4',
                        'src' => '/img/telao-fundo-de-palco.jpeg',
                        'alt' => 'telao-fundo-de-palco',
                        'title' => 'Tela de Fundo de Palco',
                    ])
                    @include('components.structures.index', [
                        'id' => '2',
                        'src' => '/img/placas-mesa.jpeg',
                        'alt' => 'Placas de Mesa',
                        'title' => 'Placas de Mesa',
                    ])
                </div>
            </div>
        </div>
    </div>

    <div class="items-center col-sm-12 room-next">
        <button class="room-continueBtn">Continue</button>
    </div>
</div>

<div class="container-xxl py-5 py-5">
    <div class="row">
        <div class="col-sm-12">
            <div class='row'>
                @csrf
                @include('components.structures.index', [
                    'id' => '1',
                    'src' => '/img/recepcao.jpeg',
                    'alt' => 'Recepção',
                    'title' => 'Recepção',
                    'delay' => '0.1s',
                ])
                @include('components.structures.index', [
                    'id' => '2',
                    'src' => '/img/coffe-break.jpeg',
                    'alt' => 'Coffee Break',
                    'title' => 'Coffee Break',
                    'delay' => '0.2s',
                ])
            </div>
        </div>
    </div>
</div>

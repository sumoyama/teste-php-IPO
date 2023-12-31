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
                    'alt' => 'Coffee Break tradicional',
                    'title' => 'Coffee Break',
                    'delay' => '0.2s',
                ])
                @include('components.structures.index', [
                    'id' => '2',
                    'src' => '/img/coffe-break.jpeg',
                    'alt' => 'Coffee Break',
                    'title' => 'Coffee Break Premmium',
                    'delay' => '0.2s',
                ])
            </div>

            <div class="text-center text-primary wow d-flex justify-content-lg-center align-items-center">
                <label for="">Quantidade de Pessoas na Recepção:
                </label>
                <input type="number" class="number form-control text-center " value='0' id="recepcao" name="recepcao"
                    min="0" max="{{ $qtd_people }}" style="width: 30%; margin-left: 5px;">
            </div>
        </div>
    </div>
</div>

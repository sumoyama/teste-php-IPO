<div class="container-xxl py-5 ">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Salas</h6>
            <h1 class="mb-5">Conheça cada uma de <span class="text-primary text-uppercase">Nossas Salas</span></h1>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">

                @include('components.rooms-description.right-side', [
                    'roomName' => 'Salão Tóquio',
                    'informacoes' => $informacoes[0],
                    'imageSrc' => 'img/carousel-1.jpg',
                ])
                @include('components.rooms-description.left-side', [
                    'roomName' => 'Salão Madri',
                    'informacoes' => $informacoes[1],
                    'imageSrc' => 'img/carousel-2.jpeg',
                ])
                @include('components.rooms-description.right-side', [
                    'roomName' => 'Salão Barcelona',
                    'informacoes' => $informacoes[2],
                    'imageSrc' => 'img/carousel-3.jpeg',
                ])
                @include('components.rooms-description.left-side', [
                    'roomName' => 'Salão São Paulo',
                    'informacoes' => $informacoes[3],
                    'imageSrc' => 'img/carousel-4.jpeg',
                ])
                @include('components.rooms-description.right-side', [
                    'roomName' => 'Salão Napoli',
                    'informacoes' => $informacoes[4],
                    'imageSrc' => 'img/carousel-5.jpeg',
                ])
                @include('components.rooms-description.left-side', [
                    'roomName' => 'Salão Nova Iorque',
                    'informacoes' => $informacoes[5],
                    'imageSrc' => 'img/carousel-6.jpeg',
                ])
                @include('components.rooms-description.right-side', [
                    'roomName' => 'Salão Lisboa',
                    'informacoes' => $informacoes[6],
                    'imageSrc' => 'img/carousel-7.jpg',
                ])
            </div>
        </div>
        <div>

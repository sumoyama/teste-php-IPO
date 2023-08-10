<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-1.jpg',
                    'altText' => 'Tóquio',
                    'heading' => 'Conheça o nosso Salão Tóquio',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-2.jpeg',
                    'altText' => 'Madri',
                    'heading' => 'Conheça o nosso Salão Madri',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-3.jpeg',
                    'altText' => 'Barcelona',
                    'heading' => 'Conheça o nosso Salão Barcelona',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-4.jpeg',
                    'altText' => 'São Paulo',
                    'heading' => 'Conheça o nosso Salão São Paulo',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-5.jpeg',
                    'altText' => 'Napoli',
                    'heading' => 'Conheça o nosso Salão Napoli',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-6.jpeg',
                    'altText' => 'Nova Iorque',
                    'heading' => 'Conheça o nosso Salão Nova Iorque',
                ])
            </div>
            <div class="carousel-item">
                @include('components.carousel-card.index', [
                    'imageSrc' => 'img/carousel-7.jpg',
                    'altText' => 'Lisboa',
                    'heading' => 'Conheça o nosso Salão Lisboa',
                ])
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

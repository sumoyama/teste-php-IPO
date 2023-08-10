<img class="w-100" src="{{ $imageSrc }}" alt="{{ $altText }}">
<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
    <div class="p-3" style="max-width: 700px;">
        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Salões</h6>
        <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $heading }}</h1>
        <a class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" href="{{ route('rooms.index') }}">Mais
            detalhes</a>
    </div>
</div>

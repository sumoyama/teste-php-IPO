<div class="col-sm-3 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="room-card-area">
        <input class="room-checkbox" type="checkbox" id="{{ $id }}" name="additional[]"
            value="{{ $title }}" />
        <div class="single-room-card">
            <div class="room-card-content">
                <div class="room-card-icon">
                    <img class="img-room" src="{{ $src }}" alt="{{ $alt }}" />
                </div>
                <div class="room-card-title">
                    <h3>{{ $title }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

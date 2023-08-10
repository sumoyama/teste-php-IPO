@extends('layouts.app')

@section('header')
    @include('layouts.header')
    <!-- Carousel -->
    @include('sections.carousel.index')
@endsection

@section('content')
    <!-- Service -->
    @include('sections.service.index')
    <!-- Room -->
    @include('sections.rooms-container.room-container-brief')
    <!-- Testimonial -->
    @include('sections.testimonial.index')
    <!-- Newsletter -->
    @include('sections.newsletter.index')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

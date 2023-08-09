@extends('layouts.app')

@section('header')
    @include('layouts.header')

@endsection

@section('content')
    @include('sections.room-container-brief')
    <!-- Testimonial -->
    @include('sections.testimonial')
    <!-- Newsletter -->
    @include('sections.newsletter')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

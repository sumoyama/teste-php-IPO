@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <!-- Rooms details -->
    @include('sections.rooms-container.room-container')
    <!-- Especification Rooms -->
    @include('sections.rooms-container.room-container-especification')
    <!-- Especification Aditional Rooms -->
    @include('sections.rooms-container.room-container-especification-aditional')
    <!-- Especification Services Rooms -->
    @include('sections.rooms-container.room-container-services')
    <!-- Newsletter -->
    @include('sections.newsletter.index')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

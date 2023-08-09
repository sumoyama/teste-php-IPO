@extends('layouts.app')

@section('header')
    @include('layouts.header')

@endsection

@section('content')

  <!-- Rooms details -->
    @include('sections.room-container')
    <!-- Especification Rooms -->
    @include('sections.room-container-especification')
    <!-- Especification Aditional Rooms -->
    @include('sections.room-container-especification-aditional')
    <!-- Especification Services Rooms -->
    @include('sections.room-container-services')
    <!-- Newsletter -->
    @include('sections.newsletter')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

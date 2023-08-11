@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('sections.room.index')
    <!-- Newsletter -->
    @include('sections.newsletter.index')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

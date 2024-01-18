@extends('layouts.templet')
@section('title')
    About page
@endsection

@push('header')
    About US
@endpush

@section('content')

        <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->


        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->


        <!-- Call To Action Start -->
        @include('includes.action')
        <!-- Call To Action End -->


        <!-- Team Start -->
        @include('includes.team')
        <!-- Team End -->


        @endsection

@extends('layouts.templet')
@section('title')
    Classes page
@endsection

@push('header')
    Classes
@endpush

        <!-- Navbar End -->

        @section('content')


        <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->


        @include('includes.schoolclass')

        <!-- Testimonial End -->


        @endsection

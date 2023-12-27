@extends('layouts.templet')
@section('title')
    Testimonials page
@endsection

@push('header')
    Testimonials
@endpush

@section('content')
         <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->
 <!-- Testimonial Start -->
        @include('includes.testimonial')
        <!-- Testimonial End -->
        <!-- Footer Start -->
        @endsection

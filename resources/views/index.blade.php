@extends('layouts.templet')

@section('title')
    Home page
@endsection

@section('content')
    @include('includes.Carousel')
    @include('includes.Facilities')
    @include('includes.about')
    @include('includes.action')
    @include('includes.schoolclass')
    @include('includes.appointment')
    @include('includes.team')
    @include('includes.testimonial')
@endsection

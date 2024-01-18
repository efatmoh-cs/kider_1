@extends('layouts.templet')
@section('title')
    Appointment Page
@endsection

{{-- @push('header')
    Appointment
@endpush --}}

@section('content')
        <!-- Page Header End -->
        @include('includes.header')
        <!-- Page Header End -->


        <!-- Appointment Start -->
        @include('includes.appointment')
        <!-- Appointment End -->
        @endsection

        <!-- Footer Start -->


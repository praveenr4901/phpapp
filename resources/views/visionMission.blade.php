@extends('layouts.app')

@section('title','landing')

@section('content')
<div class="main_inner_wrap">
<header class="main_inner_menu_wrap">
    <div class="container">
    @include('layouts.innerHeader')
    </div>
</header>
</div>
<section class="py-5" id="visionStatement_wrap">
    <div class="container">
    <div class="row justify-content-center">
        <h1><span>VISION Statement</span></h1>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <p>“To be the Global Leader in Community and Humanitarian Service”</p>
        </div>
    </div>
        <div class="row justify-content-center">
        <h1><span>MISSION Statement</span></h1>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <p>“To empower Lions clubs, volunteers, and partners to improve health and well-being, strengthen communities, and support those ¡n need through humanitarian services and grants that impact lives globally, and encourage peace and international understanding”</p>
        </div>
    </div>
</div>
</section>   
@endsection

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('assets/css/inner.css')}}">
@endpush
@push('javascripts')
@endpush
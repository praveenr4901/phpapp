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
<section class="py-5" id="flagSalution_wrap">
    <div class="container">
    <div class="row justify-content-center">
        <h1><span>Flag Salutation</span></h1>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <p>We salute our National Flag and pledge our allegiance to the same. Its honour and its glory depend upon the zeal and assiduity with which each one of us will shoulder one’s responsibilities of a good citizen. Its history written in letters of gold inspires us to put in good work for the fair name of our country. We declare our unflinching loyalty to our National Flag and maintain that its course shall be our course and that each individual amongst us shall make genuine efforts to add to its lustre and glory and make it fly proudly aloft in the comity of Nations.</p>
            <h2>‘Jai Hind’</h2>
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
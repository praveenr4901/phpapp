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
<section class="comingSoon_wrap py-5" id="comingSoon_wrap">
    <div class="container">
    <div class="row">
        <p><i class="fa fa-hourglass-half" aria-hidden="true"></i></p>
        <h1>Coming Soon</h1>
    </div>
</div>
</section>   
@endsection

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('assets/css/inner.css')}}">
@endpush
@push('javascripts')
@endpush
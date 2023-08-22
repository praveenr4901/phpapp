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
<section class="preTalk_wrap py-5" id="preTalk_wrap">
    <div class="container">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="presidentImg"><img src="../assets/images/district-governor.jpg"></div>  
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <h1><span>District Governor</span></h1>
            <h2>MJF Lion B. AJAYYA KUMAR</h2>
            <p>Anugraha, Kattukulangara, TC 10/837/1,<br/>
Soorya 169 A, Peroorkada, Tvm . 695005<br/>
Mob: 9847101703<br/>
Email: ajayytrainer@gmail.com<br/>
Home Club: Trivandrum East</p>
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
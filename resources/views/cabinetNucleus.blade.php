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
<section class="dgTeam_wrap py-5" id="dgTeam_wrap">
    <div class="container">
    <div class="row justify-content-center">
        <h1>Cabinet Nucleus </h1>
        <!--<h2>(DG, IPDG, 1St &amp 2nd VDG)</h2>-->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="assets/images/pradeep.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>District Cabinet Secretary</h3></li>
                <li><strong>PMJF Lion V.M. PRADEEP</strong></li>
                <li>A 1, Althara Nagar, Vellayambalam, Trivandrum - 695010
                <br/>
                Mobile : 9447026753<br/>
                Email : pradeepvm123@gmail.com
                </li>
                <li>Home Club : Trivandrum Airport City</li>
            </ul>
            </div>        
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/anilkumar.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>District Cabinet Treasurer</h3></li>
                <li><strong>MJF Lion B. Anil Kumar</strong></li>
                <li>Amy Pharma, Attingal,<br/>
                Trivandrum - 695101<br/>
                Mobile : 9447428481<br/>
                Email : anilkumaramy@yahoo.co.in</li>
                <li>Home Club : Attingal</li>
            </ul>
            </div>        
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
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

        <h1>Cabinet Core </h1>
        <!--<h2>(DG, IPDG, 1St &amp 2nd VDG)</h2>-->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/pradeep.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>Principal Secretary - Programs</h3></li>
                <li><strong>PRADEEP V.M</strong></li>
                <li>A 1, Althara Nagar, Vellayambalam, Trivandrum-695010
                Trivandrum Airport City
                <br/>
                Mobile: 9447026753<br/>
                Email: pradeepvm123@gmail.com
                </li>
            </ul>
            </div>        
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/prakash.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>Principal Secretary - Projects</h3></li>
                <li><strong>ATTINGAL PRAKASH</strong></li>
                <li>Apsara Agencies, Usha Show Room, Attingal-695101
                Attingal<br/>              
                Mobile: 9447072544<br/>
                Email: prakashapsara@gmail.com
                </li>
            </ul>
            </div>        
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/stanly.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>Principal Secretary - Administration</h3></li>
                <li><strong>STANLEY JONES. V</strong></li>
                <li>Linda Diana, TC36/1917 (3), Enchackal Jn, Trivandrum-695008
Trivandrum Airport City<br/>
Mobile: 9846012034<br/>
Email: drvstanleyjones@gmail.com

                </li>
            </ul>
            </div>        
        </div> 
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/sreejith.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>Principal Secretary - Health</h3></li>
                <li><strong>R Sreejith</strong></li>
                <li>Nirmala Hospital, Titanium PO, Vettucad, Veli, Trivandrum-695021
Trivandrum Ananthapuri<br/>
mobile: 9947157775<br/>
Email: itssreejith80@gmail.com


                </li>
            </ul>
            </div>        
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/sureshkumar.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>District Secretary - Adminstration</h3></li>
                <li><strong>Sureshkumar V</strong></li>
                <li>TC 10/249, Uthradam, ABRA-1, Opp. Pulse Medicare Hospital, Aruviyode, Mannanthala, Nalanchira P. O, Trivandrum 695015
Thiruvananthapuram South<br/>
Mobile: 9745031288<br/>
Email: sureshkumarvpillai@gmail.com



                </li>
            </ul>
            </div>        
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="team_box_img">
                <img src="../assets/images/jayachandran.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>District Secretary - Head Quarters</h3></li>
                <li><strong>JAYACHANDRAN. K</strong></li>
                <li>Chaithram, EF-7/162, P T Chacko Nagar, Medical College PO, Trivandrum-695011
Trivandrum East<br/>
Mobile: 9446390052<br/>
Email: popygori@gmail.com




                </li>
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
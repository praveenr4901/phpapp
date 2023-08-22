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
        <h1>DG Team</h1>
        <!--<h2>(DG, IPDG, 1St &amp 2nd VDG)</h2>-->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="profile_img">
                <img src="assets/images/ajayyakumar.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>District Governor</h3></li>
                <li><strong>MJF Lion B. AJAYYA KUMAR</strong></li>
                <li>Anugraha, Kattukulangara, TC 10/837/1,<br/>
                Soorya 169 A, Peroorkada, Tvm . 695005<br/>
                Mob: 9847101703<br/>
                Email: ajayytrainer@gmail.com<br/>
                Home Club: Trivandrum East</li>
            </ul>
            </div>        
        </div>
    </div>
    <div class="row">
        
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="profile_img">
                <img src="assets/images/abdul_vahab.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>1st VDG</h3></li>
                <li><strong>PMJF Lion Abdul Vahab M</strong></li>
                <li>Merssaj, TC-4/15021, ARA 17, Devasam Board<br/>
                YMR Road, Kowdiar PO, Trivandrum-695003<br/>
                Mob: 9447794445, 8921676168<br/>
                E-mail: ma_vahad@yahoo.com<br/>
                Home Club: Trivandrum Elites</li>
            </ul>
            </div>        
        </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="profile_img">
                <img src="assets/images/dr-kannan.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>IPDG</h3></li>
                <li><strong>PMJF Lion Dr. A. KANNAN</strong></li>
                <li>Raj Residency, TC 20/1332(5), KMRA-9,<br/>
                Mangad Lane, Karamana,Trivandrum - 695002<br/>
                Mob: 9447135050, 91 47 12345678<br/>
                Email:drkannan123gmaiI.com<br/>
                Home Club: Trivandrum Airport City</li>
            </ul>
            </div>        
        </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="team_box">
             <div class="profile_img">
                <img src="assets/images/jain.jpg" class="img-respossive">
             </div>
            <ul>
                <li><h3>2nd VDG</h3></li>
                <li><strong>PMJF Lion JAIN C. JOB</strong></li>
                <li>Brothers Shopping Mall,<br/>
                High School Jn, Kollam-691001<br/>
                Mob: 9447975117<br/>
                E-mail: jaincjob@yahoo.com<br/>
                Home Club: Quilon Central</li>
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
@extends('layouts.app')

@section('title','landing')

@section('content')
<div class="main_wrap">
<header class="main_menu_wrap">
    <div class="container">
    @include('layouts.pageLandingHeader')
    </div>
</header>
</div>
<section class="council_wrap">
    <div class="container">
    <div class="row council_wrap_main justify-content-center">    
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 council_box">
            <div class="profile_img">
                <img src="assets/images/hill-patti1.jpg" class="img-respossive img_pm">
            </div>
        <ul>
         <li><h2>International President</h2></li>
         <li>PMJF Lion D. PATTI HILL</li>
       </ul>
    </div>    
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 council_box">
            <div class="profile_img">
                <img src="assets/images/ajayyakumar.jpg" class="img-respossive img_pm">
            </div>
        <ul>
         <li><h2>District Governor</h2></li>
         <li>MJF Lion B. AJAYYA KUMAR</li>
        
       </ul>
    </div> 
    </div>
    <div class="row council_wrap_main">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 council_box">
            <div class="profile_img">
                <img src="assets/images/abdul_vahab.jpg" class="img-respossive">
            </div>
        <ul>
         <li><h2>First Vice District Governor</h2></li>
         <li>PMJF Lion Abdul Vahab M</li>
       </ul>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 council_box">
            <div class="profile_img">
                <img src="assets/images/dr-kannan.jpg" class="img-respossive">
            </div>
        <ul>
         <li><h2>IPDG</h2></li>
         <li>PMJF Lion Dr. A Kannan</li>
     
       </ul>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 council_box">
            <div class="profile_img">
                <img src="assets/images/jain.jpg" class="img-respossive">
            </div>
        <ul>
         <li><h2>Second Vice District Governor</h2></li>
         <li>PMJF Lion JAIN C. JOB</li>
        
       </ul>
        </div>
        
    </div>

 
</div>
</section>   
<section class="dist_area_warp">
    <div class="dist_area_warp_curve">
    <div class="container">
        <div class="row">
        <h1><span>District 318A</span></h1>
         <div class="flex-container">
               <div>
                 <div class="dist_area_warp_desc">
                   <strong>Clubs</strong>
                   <h2><span class="timer counter alt-font appear" data-to="600" data-speed="7000">152</span></h2>
                </div>
               </div>
               <div>
                 <div class="dist_area_warp_desc">
                   <strong>Members</strong>
                   <h2><span class="timer counter alt-font appear" data-to="600" data-speed="7000">4315</span></h2>
                </div>
               </div>
               <div>
                <img src="https://upload.wikimedia.org/wikipedia/en/5/5b/Lions_Clubs_International_logo.svg">
               </div>
               <div>
                 <div class="dist_area_warp_desc">
                   <strong>Regions</strong>
                   <h2> <span class="timer counter alt-font appear" data-to="600" data-speed="7000">18</span></h2>
                </div>
               </div>
               <div>
                 <div class="dist_area_warp_desc">
                   <strong>Zones</strong>
                   <h2> <span class="timer counter alt-font appear" data-to="600" data-speed="7000">37</span></h2>
                </div>
               </div>
                                   
          </div>
        </div>

    </div>
</div>
</section>
<section class="dist_web_wrap">
    <div class="container">
        <div class="row">
            <h1><span>District Website Details</span></h1>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 web_box">
                    <span>144</span>
                    <p>Clubs <br/>Registred</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 web_box">
                    <span>270</span>
                    <p>Members <br/>Registered</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 web_box">
                    <span>105</span>
                    <p>Clubs Created <br/>Claims</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 web_box">
                    <span>239</span>
                    <p>Members Installed <br/>Mobile App.</p>
                </div>
                
        </div>
    </div>
</section>
<section class="events_wrap">
    <div class="container">
        <div class="row">
            <h1><span>Upcoming Events</span></h1>
            <div class="col-xl-3 col-lg-3 col-sm-3 event_wrap_box">
                <div class="event_box">
                <h2>District Convention</h2>
                <p><i class="fa fa-calendar" aria-hidden="true"></i>07-05-2023</p>
                <div>Register<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-3 event_wrap_box">
                <div class="event_box">
                <h2>District Convention</h2>
                <p><i class="fa fa-calendar" aria-hidden="true"></i>07-05-2023</p>
                <div>Register<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-3 event_wrap_box">
                <div class="event_box">
                <h2>District Convention</h2>
                <p><i class="fa fa-calendar" aria-hidden="true"></i>07-05-2023</p>
                <div>Register<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-3 event_wrap_box">
                <div class="event_box">
                <h2>District Convention</h2>
                <p><i class="fa fa-calendar" aria-hidden="true"></i>07-05-2023</p>
                <div>Register<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>
              </div>
            </div>

        </div>
</div>
</section>
<section class="club_content_wrap">
    <div class="container">
       <div class="row">
        <h1><span>Club Content Topper(JANUARY)</span></h1>
        <div class="col-12 content_box">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i>Overall Topper</span>
            <p>Trivandrum Ananthapuri</p>
        </div>
        <div class="col-12 content_box">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i>Category A</span>
            <p>Trivandrum Ananthapuri</p>
        </div>
        <div class="col-12 content_box">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i>Category B</span>
            <p>Trivandrum Cosmopolitan</p>
        </div>
        <div class="col-12 content_box">
            <span><i class="fa fa-angle-right" aria-hidden="true"></i>Category B</span>
            <p>Kattakada Town</p>
        </div>
      </div>
    </div> 
</section>
@endsection

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('assets/css/landing.css')}}">
@endpush
@push('javascripts')
@endpush
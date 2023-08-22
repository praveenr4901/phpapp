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
<section class="py-5" id="downloads_wrap">
    <div class="container">
    <div class="row">
        <h1><span>Downloads</span></h1>
        <h2>Click To Download Files</h2>
        
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
            <div class="download_bg lion_inter"><div class="download_box"><p><a href="">International Logo</a></p></div></div>
            
            
           </div> 
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_dis_logo"><div class="download_box"><p><a href="">District Logo</a></p></div></div>
  
             </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_inter_pre"><div class="download_box"><p><a href="">International President</a></p></div></div>
    
            </div> 
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_dis_gov"><div class="download_box"><p><a href="">District Governor</a></p></div></div> 
             </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_vice_dis_gov1"><div class="download_box"><p><a href="">Vice District Governor 01</a></p></div></div> 
             </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_vice_dis_gov2"><div class="download_box"><p><a href="">Vice District Governor 02</a></p></div></div>
             </div> 
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_ipdg"><div class="download_box"><p><a href="">IP District Governor</a></p></div></div>
             </div> 
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_apk"><div class="download_box"><p><a href="">Mobile App APK</a></p></div></div> 
             </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
           <div class="download_wrap_inner">
             <div class="download_bg lion_doc"><div class="download_box"><p><a href="">Content Rules</a></p></div></div> 
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
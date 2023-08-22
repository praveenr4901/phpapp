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
            <div class="presidentImg"><img src="../assets/images/president.jpg"></div>  
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <h1><span>International President</span></h1>
            <h2>DR. PATTI HILL</h2>
            <p>Dr. Patti Hill from Edmonton, Alberta, Canada was elected to serve as international president of
Lions Clubs International at the association’s 105th International Convention, July 7 through
July 11, 2023.</p>
            <p>International President Hill is president of a consulting firm. With 30 years of experience as an
educator and psychologist, she has mentored graduate students and psychologists in training. She
has also championed the rights of children and youth who are deaf and/or blind.
A member of the Edmonton Host Lions Club since 1990, International President Hill has held
many offices within the association, including district chairperson for Membership,
Environment, Convention and International Cooperation and Understanding. Additionally, she
has served as a committee member for the USA/Canada Lions Leadership Forum, multinational
coordinator for Campaign SightFirst II, secretary for the Lions Eyebank (Alberta) Society, Vice
President of the Lions Eye Research Institute of Northern Alberta and presenter at many forums
and conventions. Dr Hill is a founding member of the Lions of Canada Consultative Committee.
In recognition of her service to the association, International President Hill has received
numerous awards, including several International President’s Awards. She has been honored
with the Ambassador of Good Will Award, the highest honor the association bestows upon its
members. She is also a Progressive Melvin Jones Fellow, and recipient of numerous other
fellowships</p>
<p>In addition to her Lions activities, International President Hill is active in numerous professional,
human rights, and community organizations. In the past, she served as an executive officer of the
Alberta Association of School Psychologists and the Association of Canadian Educators of the
Hearing Impaired. International President Hill has also served on the Alberta Premier’s Council
on Persons with Disabilities.</p>
<p>International President Hill and her husband, Greg Holmes, also a Lion, enjoy time with their
family which has grown to include Pieter, Carley and grandson Alexander, Erin, Mike and
granddaughter, Violet, and Jessica and Mitch.</p>
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
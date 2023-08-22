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
<section class="ourFounder_wrap py-5" id="ourFounder_wrap">
    <div class="container">
    <div class="row">
        <h1>Our Founder</h1>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
            <div class="founderImg"><img src="../assets/images/founder.jpg"></div>  
             <h2>Melvin Jones</h2>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
            <p>Melvin Jones was a dreamer, a doer and a pragmatist. He was an energetic, extroverted salesman who in private hours would reread Shakespeare. What better man to found the world’s largest association of service clubs? The Lions International Board of Directors officially designated Jones as the founder of Lions Clubs in 1958—more than four decades after Lions Clubs held its first meeting. But, no matter what his official title, Jones’ impact on the Lions has been far-reaching. He provided the leadership, the organizational ability, the tenacity and the muscle necessary to establish the foundation for Lions Clubs International to become what it is today.</p>
            <p>Jones was born on Jan. 13, 1879, at Fort Thomas, Arizona, a remote U.S. Army cavalry post where his father was a scout for the Army. At age 7, Jones’ family moved east and settled in Illinois. Gifted with a fine tenor voice, he considered making his career in music. Instead, he became an insurance salesman. By 1913, Jones had formed his own insurance agency in Chicago. When he joined a networking luncheon club for businessmen in Chicago called the Business Circle, he quickly took the lead in recruiting new members and persuading backsliders to rejoin. But something about the club’s business-only focus didn’t square with Jones’ different, larger vision. "What if these men who are successful because of their drive, intelligence and ambition, were to put their talents to work improving their communities?" Jones asked. He saw a new kind of club with the desire to help others. As Business Club secretary, Jones, with help from his wife—the championship golfer Rose Amanda Freeman—wrote scores of letters to clubs nationwide inviting them to take up his idea for a service-centered organization. Businessman interested in membership convened in Chicago, Illinois, and on June 7, 1917, Lions Clubs International was born.</p>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
         <p>Later that year, at Lions’ inaugural convention in Dallas, Texas, Jones was elected secretary-treasurer, a title he would hold for many years. Eventually, the board bestowed upon Jones the title of secretary general for life.</p>
         <p>Jones was a prolific writer who could be clear and forceful on some occasions, and sentimental the next. His hand can be seen in founding documents like the Lions Clubs Objects and Code of Ethics. His columns in LION Magazine, which are still quoted today, helped articulate the organization’s principles and values.</p>   
         <p>He also loved aphorisms. Never one to sugarcoat the truth, Jones had one favorite saying neatly framed in his office: “Truth and roses have thorns about them.” Jones gave up the insurance business in 1926 to become Lions’ de facto CEO and global goodwill ambassador. He played both roles brilliantly—building and managing an expanding headquarters operation and travelling constantly for club visits and speaking engagements. The pace never</p>
    </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
            <div class="founderImg"><img src="../assets/images/founder1.jpg"></div>  
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
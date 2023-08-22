<div class="page-header">
    <div class="page-block ">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="page-header-title">
                    <ul>
                        <li>
                            <img class="img-fluid" src="{{ asset('assets/images/logo.png')}}" alt="Theme-Logo" style="width:70px" />
                        </li>
                        <li class="mt-2">
                            Lions Clubs International <br> District 318A 2023-24</p>
                        </li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-block">
                    @auth
                        @include('layouts.menu')
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')

@section('title','tickets')

@section('content')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i
                                                class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i
                                                class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                        </ul>
                        @include('layouts.userMenu')
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                    @include('layouts.pageHeader')
                    <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="row m-b-30">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            @include('layouts.reportMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block" id="claims_page">
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 6,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-blue total-card @if(in_array(6, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="1">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        6</h4>
                                                                                    <p class="m-0 fz-22px">June</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 7,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-green total-card @if(in_array(7, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="2">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        7</h4>
                                                                                    <p class="m-0 fz-22px">July</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 8,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-red total-card @if(in_array(8, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="3">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        8</h4>
                                                                                    <p class="m-0 fz-22px">August</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 9,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-purple total-card @if(in_array(9, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="4">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        9</h4>
                                                                                    <p class="m-0 fz-22px">September</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 10,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-blue total-card @if(in_array(10, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="5">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        10</h4>
                                                                                    <p class="m-0 fz-22px">October</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 11,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-green total-card @if(in_array(11, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="6">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        11</h4>
                                                                                    <p class="m-0 fz-22px">November</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 12,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-red total-card @if(in_array(12, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="7">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        12</h4>
                                                                                    <p class="m-0 fz-22px">December</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 1,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-purple total-card @if(in_array(1, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="8">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        1</h4>
                                                                                    <p class="m-0 fz-22px">January</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 2,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-blue total-card @if(in_array(2, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="9">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        2</h4>
                                                                                    <p class="m-0 fz-22px">February</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 3,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-green total-card @if(in_array(3, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="10">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        3</h4>
                                                                                    <p class="m-0 fz-22px">March</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 4,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-red total-card @if(in_array(4, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="11">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        4</h4>
                                                                                    <p class="m-0 fz-22px">April</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-6 col-sm-3">
                                                                        <a href="{{route('report.claims_rule',['id' => 5,'part' => 'A','yearId' => $yearId])}}"
                                                                           class="card bg-c-purple total-card @if(in_array(5, $activeMonths)) active-month @else disabled-card @endif">
                                                                            <div class="card-block" data-month="12">
                                                                                <div class="text-left">
                                                                                    <h4 class="font-weight-bold fz-40px">
                                                                                        5</h4>
                                                                                    <p class="m-0 fz-22px">May</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

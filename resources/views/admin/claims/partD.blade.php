@extends('layouts.main')

@push('stylesheets')
@endpush

@section('title','home')

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
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
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
                                                        @include('admin.includes.claimsMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>ID</th>
                                                                            <th>Rule</th>
                                                                            <th>Claim Count</th>
                                                                            <th>Total Points</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                        <tr>
                                                                            <td>81</td>
                                                                            <td>D-1</td>
                                                                            <td>Participation of PST &amp; First VP in
                                                                                Pre-Zone/Pre-Region meeting</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>82</td>
                                                                            <td>D-2</td>
                                                                            <td>Participation of PST &amp; IVP in Zone
                                                                                Advisory meeting - 3 Nos.</td>
                                                                            <td>3</td>
                                                                            <td>120</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>83</td>
                                                                            <td>D-3</td>
                                                                            <td>Participation by Lions/New Voice member
                                                                                in Zone meetings - 3 meetings
                                                                                10/participant </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>84</td>
                                                                            <td>D-3.1</td>
                                                                            <td>1st Zone before 30th September 2022</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>85</td>
                                                                            <td>D-3.2</td>
                                                                            <td> 2nd before 31st December 2022</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>86</td>
                                                                            <td>D-3.3</td>
                                                                            <td>3rd before 31st March 2023</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>87</td>
                                                                            <td>D-4</td>
                                                                            <td>Region Conference To be held before 31st
                                                                                March 2023 10/participant </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
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
    <!-- Modal -->

    @endsection

    @push('stylesheets')
    @endpush
    @push('javascripts')
    @endpush
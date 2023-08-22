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
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
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
                                                            @include('admin.includes.supportMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block">  
                                                        <div class="tab-pane active" id="home1" role="tabpanel">                                                      
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Login</th>
                                                                                <th>Claims</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>5183901</td>
                                                                                <td>R S Nandakumar</td>
                                                                                <td>yes</td>
                                                                                <td>yes</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>5183902</td>
                                                                                <td>P S Kumar</td>
                                                                                <td>yes</td>
                                                                                <td>yes</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">3</th>
                                                                                <td>5183903</td>
                                                                                <td>F Vinoth</td>
                                                                                <td>yes</td>
                                                                                <td>yes</td>
                                                                               
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td>5183904</td>
                                                                                <td>R Sankar</td>
                                                                                <td>yes</td>
                                                                                <td>yes</td>
                                                                                
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
    </div>
    <!-- Modal -->

    @endsection    
   
    @push('stylesheets')
    @endpush
    @push('javascripts')
    @endpush
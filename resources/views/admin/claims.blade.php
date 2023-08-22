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
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item mw-12 font-weight-bold">
                                                                <a class="nav-link fz-17px {{ (request()->routeIs('demo')|| request()->routeIs('claims')) ? 'active' : '' }}"
                                                                    href="" role="tab"> Claims </a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light active">Part
                                                                A</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                B</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                C</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                D</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                E</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                F</button>
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light">Part
                                                                G</button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <tbody>
                                                                        <tr class="background-selected">
                                                                            <td>A-1</td>
                                                                            <td>Creating Username password by PST before
                                                                                15 July 2022 for login to international
                                                                                website</td>
                                                                            <td>
                                                                                <a class="table_actions waves-effect waves-dark"
                                                                                    href="#">
                                                                                    <i
                                                                                        class="icofont icofont-caret-up"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>20 x 3 = 60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center" colspan="4">
                                                                                <form>
                                                                                    <button
                                                                                        class="btn btn-success waves-effect waves-light active">President</button>
                                                                                    <button
                                                                                        class="btn btn-success waves-effect waves-light">Secretary</button>
                                                                                    <button
                                                                                        class="btn btn-success waves-effect waves-light">Tresurer</button>
                                                                                    <button
                                                                                        class="btn btn-primary waves-effect waves-light ml-3">Submit</button>
                                                                                    <button
                                                                                        class="btn btn-primary waves-effect waves-light">Save</button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>A-2 1</td>
                                                                            <td>(a) Installing District App</td>
                                                                            <td>
                                                                                <a class="table_actions" href="#">
                                                                                    <i
                                                                                        class="icofont icofont-caret-down"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>A-2.1.1</td>
                                                                            <td>By 50% members</td>
                                                                            <td>
                                                                                <a class="table_actions" href="#">
                                                                                    <i
                                                                                        class="icofont icofont-caret-down"></i>
                                                                                </a>
                                                                            </td>
                                                                            <td>50 x 1 = 50</td>
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
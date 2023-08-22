@extends('layouts.app')

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

                                            <div class="card-block clubs">
                                                <div class="row">
                                                    <div class="col-sm-8 mx-auto">
                                                        <!-- Basic Form Inputs card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>{{$club->name}}</h5>

                                                            </div>
                                                            <div class="card-block">

                                                                <form>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Club
                                                                            ID</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                value="{{$club->clubid}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-2 col-form-label">Region</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                value="{{$club->zone->region->name}}"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-2 col-form-label">Zone</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Type your title in Placeholder"
                                                                                value="{{$club->zone->name}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-2 col-form-label">Name</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Type your title in Placeholder"
                                                                                value="{{$club->name}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Regular
                                                                            Count</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Type your title in Placeholder"
                                                                                value="{{$club->rcount}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Family
                                                                            Count</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Type your title in Placeholder"
                                                                                value="{{$club->fcount}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    @php
                                                                    $status = $club->is_active ? '<span
                                                                        class="badge badge-success text-uppercase p-2">Active</span>'
                                                                    : '<span
                                                                        class="badge badge-danger text-uppercase p-2">In
                                                                        Active</span>';
                                                                    @endphp
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-2 col-form-label">Status</label>
                                                                        <div class="col-sm-10">
                                                                            @php echo $status @endphp
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row float-right">
                                                                        <div class="col-sm-12">
                                                                            <a class="btn btn-primary waves-effect waves-light mt-3" href="{{ back()->getTargetUrl() }}">Back</a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- Basic Form Inputs card end -->
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
@endpush
@push('javascripts')
@endpush
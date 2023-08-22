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

                                                <div class="card-block clubs">
                                                    <div class="row">
                                                        <div class="col-sm-8 mx-auto">
                                                            <!-- Basic Form Inputs card start -->
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Edit Designation</h5>
                                                                </div>
                                                                <div class="card-block">
                                                                    <!-- Display success and error messages -->
                                                                    @if (session('success'))
                                                                        <div class="alert alert-success">
                                                                            {{ session('success') }}
                                                                        </div>
                                                                    @endif

                                                                    @if (session('error'))
                                                                        <div class="alert alert-danger">
                                                                            {{ session('error') }}
                                                                        </div>
                                                                    @endif
                                                                    <form action="{{ route('updateDesignation') }}"
                                                                          method="POST">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Designation</label>
                                                                            <div class="col-sm-10">
                                                                            <input type="text"
                                                                                       class="form-control @error('designation') is-invalid @enderror"
                                                                                       name="designation"
                                                                                       placeholder="Designation"
                                                                                       value="{{$desig->desig}}">
                                                                                @error('designation')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Description</label>
                                                                            <div class="col-sm-10">
                                                                            <input type="text"
                                                                                       class="form-control @error('description') is-invalid @enderror"
                                                                                       name="description"
                                                                                       placeholder="Description"
                                                                                       value="{{$desig->description}}">
                                                                                @error('status')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                                <input type="hidden" name="desig-id" value="{{$desig->id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row float-right">
                                                                            <div class="col-sm-12">
                                                                                <button type="submit"
                                                                                        class="btn btn-primary waves-effect waves-light mt-3">
                                                                                    Submit
                                                                                </button>
                                                                                <a class="btn btn-primary waves-effect waves-light mt-3"
                                                                                   href="{{ route('designation')}}">Back</a>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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

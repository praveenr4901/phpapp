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
                                                <div class="card">
                                                    <div class="row m-b-30">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                                                <li class="nav-item mw-10 font-weight-bold">
                                                                    <a class="nav-link fz-18px {{  request()->is('import/excel') ? 'active' : '' }}"
                                                                       href="{{route('import.excel') }}" role="tab">Import
                                                                        Members</a>
                                                                    <div class="slide"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="alert alert-info-alert" role="alert">

                                                                    You must add the following fields to the Excel sheet: club_id, member_id, first_name, member_address_line, email, home_phone, cell_phone, date_of_birth, gender, occupation, and join_date.                                                                </div>
                                                                @if(session('success'))
                                                                        <div
                                                                            style="color: green;">{{ session('success') }}</div>
                                                                    @endif

                                                                    @if($errors->any())
                                                                        <div class="alert alert-danger-alert">
                                                                            @foreach($errors->all() as $error)
                                                                                {{ $error }}<br>
                                                                            @endforeach
                                                                        </div>
                                                                    @endif
                                                                    <form id="importForm"
                                                                          action="{{ route('import.excel.process') }}"
                                                                          method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="file" name="file">
                                                                        <!-- Use a link with onclick event to submit the form -->
                                                                        <button type="button"
                                                                                class="btn btn-primary waves-effect waves-light saveBtn ptl-6-20"
                                                                                id="importButton">Import
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                                <div class="spinner-border"></div>
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
    @push('javascripts')
        <script type="text/javascript">
            $(document).ready(function () {
                function submitForm() {
                    $('#importButton').prop('disabled', true);
                    $('#loader').show();
                    $('#importForm').submit();
                }

                $('#importButton').on('click', function () {
                    submitForm();
                });
            });

        </script>
    @endpush

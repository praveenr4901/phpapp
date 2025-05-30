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
                                                    <div class="card-block">
                                                        <div class="row ">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Rule</th>
                                                                            <th>Claimed Person</th>
                                                                            <th>Club</th>
                                                                            <th>Claimed Points</th>
                                                                            <th>Claimed on</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @php
                                                                            $sn = 1;
                                                                        @endphp
                                                                        @foreach ($claimedRules as $rule)
                                                                            @php
                                                                                $date =  Carbon\Carbon::parse($rule->created_at);
                                                                                  if ($rule->approve_status == 0) {
                                                                                         $statusClass = 'badge-primary';
                                                                                         $statusText = 'Waiting';
                                                                                     } elseif ($rule->approval_status == 3) {
                                                                                         $statusClass = 'badge-danger';
                                                                                         $statusText = 'Rejected';
                                                                                     } elseif ($rule->approval_status == 2) {
                                                                                         $statusClass = 'badge-warning';
                                                                                         $statusText = 'Pending';
                                                                                     } else {
                                                                                         $statusClass = 'badge-success';
                                                                                         $statusText = 'Approved';
                                                                                     }
                                                                            @endphp
                                                                            <tr>
                                                                                <td>{{ $sn++ }}</td>
                                                                                <td>{{ $rule->rule->rule_id }}</td>
                                                                                <td>{{ $rule->member->name }}</td>
                                                                                <td>{{ $rule->club->name }}</td>
                                                                                <td>{{ $rule->claimed_point }}</td>
                                                                                <td>{{ $date->format('F j, Y \a\t h:i A')}}</td>
                                                                                <td><span
                                                                                        class="badge {{ $statusClass }}">{{ $statusText }}</span>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
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

@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

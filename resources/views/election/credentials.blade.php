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
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            @include('menus.electionMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block clubs">
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="dashboard mb-5">
                                                                    <form id="duesform">
                                                                        @csrf
                                                                        <div class="row col-md-12">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Clubs</label>
                                                                                <select class="form-control fill col-sm-12"
                                                                                        name="clubid" id="clubList">
                                                                                    <option value="0">Select
                                                                                    </option>
                                                                                    @if($clubs)
                                                                                        @foreach($clubs as $row)
                                                                                            <option value="{{$row->clubid}}" >{{$row->name." - ".$row->clubid}}</option>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </select>
                                                                                <span class="text-danger"
                                                                                      id="member_id-error"></span>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover data-table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Member ID</th>
                                                                            <th>Name</th>
                                                                            <th>Mobile</th>
                                                                            <th>Serial</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="tableBody">
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
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
    </div>
    <div id="popup_area">
    </div>
@endsection

@push('javascripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#clubList').on('change', function() {
                var selectedClubId = this.value;
                $('#clubid-error').text('');
                $('#member_id-error').text('');
                $.ajax({
                    url: '{{url("/election/get-credentials/")}}/' + selectedClubId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Clear the existing table data
                        $('#tableBody').empty();

                        // Iterate through the received data and append it to the table
                        var num = 1;
                        $.each(response, function(index, item) {
                            var row = '<tr>' +
                                '<td>' + (num++) + '</td>' +
                                '<td>' + item.member_id + '</td>' +
                                '<td>' + item.member.name + '</td>' +
                                '<td>' + item.member.mobile + '</td>' +
                                '<td>' + item.credentials_serial + '</td>' +
                                '<td>' +
                                '<button class="btn waves-effect waves-light btn-primary btn-success custom-btn" id="certificate-print" data-memberid="' + item.member_id + '" data-id="' + item.id + '">' +
                                '<i class="fa fa-print" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>';

                            $('#tableBody').append(row);
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '#certificate-print', function () {
                var certificateId = $('#certificate-print').data('id');
                $.ajax({
                    url: '{{url("/election/get-credential-certificate/")}}/'+certificateId,
                    method: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        $("#popup_area").empty().html(response);
                        $('#certificate_modal').modal('show');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
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
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            @include('menus.electionMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block clubs">
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <div class="dashboard mb-5">
                                                                    <form id="duesform">
                                                                        @csrf
                                                                        <div class="row col-md-12">
                                                                            <div class="col-sm-3">
                                                                                <label
                                                                                    class="col-form-label">Clubs</label>
                                                                                <select
                                                                                    class="form-control fill col-sm-12"
                                                                                    name="clubid" id="clubList">
                                                                                    <option value="0">Select
                                                                                    </option>
                                                                                    @if($clubs)
                                                                                        @foreach($clubs as $row)
                                                                                            <option
                                                                                                value="{{$row->clubid}}">{{$row->name." - ".$row->clubid}}</option>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </select>
                                                                                <span class="text-danger"
                                                                                      id="member_id-error"></span>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover data-table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Member ID</th>
                                                                            <th>Name</th>
                                                                            <th>Mobile</th>
                                                                            <th>Serial</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="tableBody">
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
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
    </div>
    <div id="popup_area">
    </div>
@endsection

@push('javascripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#clubList').on('change', function () {
                var selectedClubId = this.value;
                $('#clubid-error').text('');
                $('#member_id-error').text('');
                $.ajax({
                    url: '{{url("/election/get-credentials/")}}/' + selectedClubId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        // Clear the existing table data
                        $('#tableBody').empty();

                        // Iterate through the received data and append it to the table
                        var num = 1;
                        $.each(response, function (index, item) {
                            var row = '<tr>' +
                                '<td>' + (num++) + '</td>' +
                                '<td>' + item.member_id + '</td>' +
                                '<td>' + item.member.name + '</td>' +
                                '<td>' + item.member.mobile + '</td>' +
                                '<td>' + item.credentials_serial + '</td>' +
                                '<td>' +
                                '<button class="btn waves-effect waves-light btn-primary btn-success custom-btn" id="certificate-print" data-memberid="' + item.member_id + '" data-id="' + item.id + '">' +
                                '<i class="fa fa-print" aria-hidden="true"></i></button>' +
                                '</td>' +
                                '</tr>';

                            $('#tableBody').append(row);
                        });
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $(document).on('click', '#certificate-print', function () {
                var certificateId = $('#certificate-print').data('id');
                $.ajax({
                    url: '{{url("/election/get-credential-certificate/")}}/' + certificateId,
                    method: 'GET',
                    dataType: 'html',
                    success: function (response) {
                        $("#popup_area").empty().html(response);
                        $('#certificate_modal').modal('show');
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endpush

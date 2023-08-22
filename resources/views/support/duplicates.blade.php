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
                                                                    <a class="nav-link fz-18px {{  request()->is('support/duplicates') ? 'active' : '' }}"
                                                                       href="{{route('support.duplicates') }}"
                                                                       role="tab">Duplicates</a>
                                                                    <div class="slide"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover"
                                                                           id="duplicates-table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Member ID</th>
                                                                            <th>Name</th>
                                                                            <th>Spouse</th>
                                                                            <th>Home</th>
                                                                            <th>Office</th>
                                                                            <th>Whatsapp</th>
                                                                            <th>Designation</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        </thead>
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
    @include('support.editDuplicates')

@endsection
@push('stylesheets')
    <link href="{{ asset('assets/packages/bootstrap-datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/packages/bootstrap-datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endpush
@push('javascripts')
    <script src="{{ asset('assets/packages/bootstrap-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/packages/bootstrap-datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">
        var table = $('#duplicates-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('support.duplicates') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'id', name: 'id', className: 'text-left'},
                {data: 'name', name: 'name', className: 'text-left'},
                {data: 'spouse', name: 'spouse', className: 'text-left'},
                {data: 'mobile', name: 'mobile', className: 'text-left'},
                {data: 'phone', name: 'phone', className: 'text-left'},
                {data: 'whatsapp', name: 'whatsapp', className: 'text-left'},
                {data: 'designation', name: 'designation', className: 'text-left'},
                {data: 'action', name: 'action', className: 'text-left', orderable: false, searchable: false},
            ]
        });
        $('#duplicates-table').on('click', '.editbtn', function () {
            var editId = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/editDuplicates/" + editId,
                success: function (response) {
                    $('#member_id').val(response.id);
                    $('#member_name').val(response.name);
                    $('#home').val(response.mobile);
                    $('#office').val(response.phone);
                    $('#whatsapp').val(response.whatsapp);
                }
            });
        });
    </script>
@endpush

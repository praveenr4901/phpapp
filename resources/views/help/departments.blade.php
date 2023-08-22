@extends('layouts.app')
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
                    @auth
                    @include('layouts.userMenu')
                    @endauth
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    @auth
                    @include('layouts.pageHeader')
                    @endauth
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
                                                        @auth
                                                        @include('menus.helpMenu')
                                                        @endauth
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-12 text-right mb-4">
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light ml-2"
                                                                data-toggle="modal" data-target="#dept_model"> Add New
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover" id="dep-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Department</th>
                                                                            <th>Status</th>
                                                                            <th></th>
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
<!-- Modal -->
<div class="addDeptModal">
    @include('help.addDeptModal')
</div>
<div class="editDeptModal">
    @include('help.editDeptModal')
</div>
</div>

@push('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
<!-- datepicker styles -->
<link rel="stylesheet" href="{{ asset('assets/packages/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@push('javascripts')
    <script src="{{ asset('assets/packages/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom-form.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    var table = $('#dep-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('help.departments') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $('#addDepartments').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var formData = form.serialize();
        $.ajax({
            url: '{{url("/addDepartments")}}',
            type: "POST",
            data: formData,
            success: function(response) {
                toastr.success('Successfully Updated');
                setTimeout(function() {
                    location.reload();
                }, 2000);
                return false;
            },

        });
    });
    $('#dep-table').on('click', '.editbtn', function() {
        var editId = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/editDepartments/" + editId,
            success: function(response) {
                $('#hiddenDeptId').val(response.id);
                $('#department').val(response.name);
                $('input[name="deptStatus"]').filter(function() {
                    return $(this).val() == response.status;
                }).prop('checked', true);
            }
        });
    });
    $('.updateDept').on('click', function() {
        editvalue = $('#hiddenDeptId').val();
        name = $('#department').val();
        status = $('input[name="deptStatus"]:checked').val();
        $.ajax({
            type: "POST",
            url: "/updateDepartments/" + editvalue,
            data: {
                id: editvalue,
                name: name,
                _token: "{{ csrf_token() }}",
                status: status,
            },
            success: function(response) {
                toastr.success(response.success);
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    });
});
</script>
@endpush

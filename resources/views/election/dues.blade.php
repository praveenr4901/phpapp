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
                                                <div class="row m-b-30">
                                                    <div class="col-lg-12 col-md-12 col-xl-12">
                                                        <!-- Nav tabs -->
                                                        @include('menus.electionMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="dashboard mb-5">
                                                                <form id="duesform">
                                                                    @csrf
                                                                    <div class="row col-md-12">
                                                                        <div class="col-md-4">
                                                                        <label class="col-sm-6 col-form-label p-0">Id</label>
                                                                        <input type="text" class="form-control numericInput" placeholder="Member ID" name="memberid">
                                                                        <span class="text-danger"
                                                                            id="memberid-error"></span>
                                                                        </div>
                                                                        <div class="col-md-4 mt-20">
                                                                            <button class="btn btn-primary waves-effect waves-light saveBtn ptl-6-20">Add</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-hover data-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Member Id</th>
                                                                            <th>Name</th>
                                                                            <th>Club</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>                                                         
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
<link href="{{ asset('assets/packages/bootstrap-datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/packages/bootstrap-datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endpush
@push('javascripts')
<script src="{{ asset('assets/packages/bootstrap-datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/packages/bootstrap-datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('dues') }}",
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'member_id', name: 'member_id' },
            { data: 'name', name: 'name' },
            { data: 'club', name: 'club' },
            { data: 'view', name: 'view', orderable: false, searchable: false}
        ]
    });
</script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function() {
    $(".numericInput").keypress(function(evt){
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57){
                evt.preventDefault();
        }
    });
    $('#duesform').on('submit', function(e) {
        $('#duesform .saveBtn').text('Processing...');
        $('#duesform .saveBtn').attr('disabled',true);
        $('#memberid-error').text('');
        
        e.preventDefault();
        var form = $(this);
        var formData = form.serialize();
        $(".is-invalid").removeClass("is-invalid");
        $.ajax({
            url: '{{url("/election/add-to-dues")}}',
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    table.draw();
                    toastr.success(response.success);
                } else {
                    toastr.error(response.error);
                }
                $('#duesform .saveBtn').attr('disabled',false);
                $('#duesform .saveBtn').text('Add');
                return false;
            },
            error: function(xhr, status, error) {
                if (xhr.status === 422) {
                    var response = JSON.parse(xhr.responseText);
                    var errors = response.errors;
                    $.each(errors, function(field, errorMessages) {
                        var inputField = $('[name="' + field + '"]');
                        $.each(errorMessages, function(index, errorMessage) {
                            $('#' + field + '-error').text(errorMessage).focus();
                        });
                    });
                } else {
                    console.log('AJAX request error:', error);
                }
                $('#duesform .saveBtn').attr('disabled',false);
                $('#duesform .saveBtn').text('Add');
                return false;
            }
        });
    });
});
</script>
@endpush
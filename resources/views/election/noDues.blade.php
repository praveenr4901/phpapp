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
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            @include('menus.electionMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block clubs">
                                                        <form id ="noDuefrm">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">Clubs</label>
                                                                    <select class="form-control fill col-sm-12"
                                                                            name="clubid" id="clubList">
                                                                            <option value="">Select
                                                                            </option>
                                                                            @if($clubs)
                                                                            @foreach($clubs as $row)
                                                                            <option value="{{$row->clubid}}" >{{$row->name." - ".$row->clubid}}</option>
                                                                            @endforeach
                                                                            @endif
                                                                    </select>
                                                                    <span class="text-danger" id="clubid-error"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">Max Limit</label>
                                                                    <input type="text" class="form-control col-sm-12"
                                                                           placeholder="" name="election_count" id="electionCount" value="" readonly>

                                                                    <span class="text-danger"
                                                                          id="profession-error"></span>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <div class="col-sm-12">
                                                                    <label class="col-form-label">Members</label>
                                                                    <select class="form-control fill col-sm-12" name="member_id" id="memberList">
                                                                        <option value="">Select</option>
                                                                    </select>
                                                                    <span class="text-danger"
                                                                          id="member_id-error"></span>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-sm-4">
                                                                <div class="col-sm-12 mt-4">
                                                                    <button name="action" value="delegate" id="delegate" class="btn btn-primary waves-effect waves-light ptl-6-20 mt-2">Add Delegates</button>
                                                                    <button name="action" value="alternate" id="alternate" class="btn btn-primary waves-effect waves-light ptl-6-20 mt-2" >Add Alternate </button>
                                                                    <button name="action" value="validate" id="validate" class="btn btn-primary waves-effect waves-light ptl-6-20 mt-2"> Validate </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        </form>
                                                        <div class="row mt-5">
                                                            <div class="col-md-6 ">
                                                                <div class="col-md-12 waves-effect waves-light p-b-10 bg-primary p-10 mb-5">
                                                                        <h6 class="mb-0">Delegates</h6>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover" id="delTable">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>ID</th>
                                                                            <th>Name</th>
                                                                            <th>Mobile</th>
                                                                            <th></th>   
                                                                            <th></th> 
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="col-md-12 waves-effect waves-light p-b-10 bg-primary p-10 mb-5">
                                                                        <h6 class="mb-0">Alternates</h6>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover" id="altTable">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>ID</th>
                                                                            <th>Name</th>
                                                                            <th>Mobile</th>
                                                                            <th></th>
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
</div>
<div id="popup_area">
</div>
@endsection

@push('stylesheets')
<link href="{{ asset('assets/packages/bootstrap-datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/packages/bootstrap-datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@push('javascripts')
<script src="{{ asset('assets/packages/bootstrap-datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/packages/bootstrap-datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script>
$(document).ready(function() {
    var table1 = $('#delTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{url("/election/deligates")}}/'+ 0,
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'member_id', name: 'member_id' },
            { data: 'name', name: 'name' },
            { data: 'mobile', name: 'mobile' },
            { data: 'view', name: 'view', orderable: false, searchable: false},
            { data: 'valid_view', name: 'valid_view', orderable: false, searchable: false}
        ],
        createdRow: function(row, data, dataIndex) {
            if (data.valid == 2) {
                $(row).addClass('invalid-row');
            }
        }
    });

    var table2 = $('#altTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{url("/election/alternates")}}/'+ 0,
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'member_id', name: 'member_id' },
            { data: 'name', name: 'name' },
            { data: 'mobile', name: 'mobile' },
            { data: 'view', name: 'view', orderable: false, searchable: false},
            { data: 'valid_view', name: 'valid_view', orderable: false, searchable: false}
        ],
        createdRow: function(row, data, dataIndex) {
            if (data.valid == 2) {
                $(row).addClass('invalid-row');
            }
        }
    });

    $('#clubList').on('change', function() {
        var selectedClubId = this.value;
        $('#clubid-error').text('');
        $('#member_id-error').text('');
        $.ajax({
            url: '{{url("/election/get-members/")}}/'+selectedClubId,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#memberList').empty();
                $('#electionCount').val();
                $.each(response.members, function(index, option) {
                    $('#memberList').append('<option value="' + option.id + '">' + option.name + '</option>');
                });
                if(response.club) {
                    $('#electionCount').val(response.club.count);
                }
                table1.ajax.url('/election/deligates/' + selectedClubId).load();
                table2.ajax.url('/election/alternates/' + selectedClubId).load();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
    $('#noDuefrm').on('submit', function(e) {
        e.preventDefault();
        var clickedButton = $("button[name='action']:focus").val();
        $('#noDuefrm #'+ clickedButton).attr('disabled', true);
        $('#noDuefrm #'+ clickedButton).text('Processing...');
        $('#clubid-error').text('');
        $('#member_id-error').text('');
        if (clickedButton == "delegate") {
            var btntext = "Add Deligates";
        } else if (clickedButton == "alternate") {
            var btntext = "Add Alternates";
        } else {
            var btntext = "Validates";
        }
        
        var form = $(this);
        var formData = form.serialize();
        formData += "&type="+clickedButton;
        $(".is-invalid").removeClass("is-invalid");
        $.ajax({
            url: '{{url("/election/nodues-updates")}}',
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    table1.draw();
                    table2.draw();
                    toastr.success(response.success);
                } else {
                    toastr.error(response.error);
                }
                $('#noDuefrm #'+ clickedButton).attr('disabled',false);
                $('#noDuefrm #'+ clickedButton).text(btntext);
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
                $('#noDuefrm #'+ clickedButton).attr('disabled',false);
                $('#noDuefrm #'+ clickedButton).text(btntext);
                return false;
            }
        });
    });

    $('#delTable, #altTable').on('click', '.certificate-view-btn', function(e) {
        var memberId   = $(this).data('memeberid');
        $.ajax({
            url: '{{url("/election/get-certificate/")}}/'+memberId,
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




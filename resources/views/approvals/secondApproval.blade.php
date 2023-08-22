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
                                                        @include('layouts.reportMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block clubs">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover data-table" id="approval-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Rule</th>
                                                                            <th>Club</th>
                                                                            <th>Date</th>
                                                                            <th>Data</th>
                                                                            <th>Points Claimed</th>
                                                                            <th>Points Approved</th>
                                                                            <th>Claimed By</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
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
<div class="modal fade" id="PartialModal" tabindex="-1" role="dialog" aria-labelledby="Club details" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="partial-form">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Partial Approval</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Point Claimed</label>
                            <div class="col-sm-9">
                                <input type="number" id="claimedPoint" name="claimedPoint" class="form-control" value="0" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Point</label>
                            <div class="col-sm-9">
                                <input type="number" id="pointsApproved" name="pointsApproved" class="form-control" value="">
                                <span class="text-danger" id="pointsApproved-error"></span>
                                <input type="hidden" id="claimId" name="cliamId" class="form-control" value="0">
                                <input type="hidden" id="claimstatus" name="claimstatus" class="form-control" value="0">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
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
        ajax: "{{ route('second-approval') }}",
        pageLength: 10,
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'rule', name: 'rule' },
            { data: 'club', name: 'club' },
            { data: 'date', name: 'date' },
            { data: 'data', name: 'data' },
            { data: 'points_claimed', name: 'points_claimed' },
            { data: 'points_approved', name: 'points_approved' },
            { data: 'member', name: 'member' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action' } 
        ],
        columnDefs: [
            {
                "targets": [9], // Replace n with the column index (zero-based) you want to style
                "className": "text-left" // Add your custom CSS class here
            }
        ]
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.approve-btn, .decline-btn', function (event) {
            event.preventDefault();
            $(this).text('Processing...');
            $(this).attr('disabled',true);
            var cliamId = $(this).attr('data-id');
            var pointsApproved = $(this).attr('data-points-approved');
            var claimstatus = $(this).attr('data-claim-status');
            var claimType = $(this).attr('data-claim-type');          
            $.ajax({
                type: "POST",
                url: "{{ route('update-cliam-status') }}",
                data: {
                    cliamId: cliamId,
                    pointsApproved: pointsApproved,
                    _token: "{{ csrf_token() }}",
                    claimstatus: claimstatus,
                    claimType:claimType
                },
                success: function(response) {
                    table.draw();
                    toastr.success(response.success);
                }
            });
        });

        $(document).on('click', '.pa-approve-btn', function (event) {
            $("#claimId").val('');
            $("#claimstatus").val('');
            $("#claimedPoint").val('');
            $("#pointsApproved").val('');
            var cliamId = $(this).attr('data-id');
            var claimedPoint = $(this).attr('data-claimed-point');
            var claimstatus = $(this).attr('data-claim-status');
            $("#claimId").val(cliamId);
            $("#claimstatus").val(claimstatus);
            $("#claimedPoint").val(claimedPoint);
            $('#PartialModal').modal('show');
        });

        $(document).on('submit', '#partial-form', function (e) {
            e.preventDefault();
            var clickedButton = $("button[name='action']:focus").val();
            $('#partial-form #'+ clickedButton).attr('disabled', true);
            $('#partial-form #'+ clickedButton).text('Processing...');
            var form = $(this);
            var formData = form.serialize();
            $(".is-invalid").removeClass("is-invalid");
            $.ajax({
                url: '{{route("update-partial-point")}}',
                type: "POST",
                data: formData,
                success: function(response) {
                    if (response.success) {
                        table.draw();
                        toastr.success(response.success);
                    } else {
                        toastr.error(response.error);
                    }
                    $('#PartialModal').modal('hide');
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
                    return false;
                }
            });
        });
    });
</script>

@endpush
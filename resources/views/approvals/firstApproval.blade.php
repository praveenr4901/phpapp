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
                                                        @include('menus.approvalMenu')
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
        ajax: "{{ route('first-approval') }}",
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
            var sa = $(this).attr('data-sa');
            $.ajax({
                type: "POST",
                url: "{{ route('update-cliam-status') }}",
                dataType: "json",
                data: {
                    cliamId: cliamId,
                    pointsApproved: pointsApproved,
                    _token: "{{ csrf_token() }}",
                    claimstatus: claimstatus,
                    claimType:claimType,
                    sa:sa
                },
                success: function(response) {
                    toastr.success(response.success);
                    table.draw();
                }
            });
        });

    });
</script>

@endpush
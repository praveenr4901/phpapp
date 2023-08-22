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
                                                            @include('menus.helpMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-12 text-right">
                                                                <button
                                                                    class="btn btn-primary waves-effect waves-light ml-2"
                                                                    data-toggle="modal" data-target="#ticket_model">
                                                                    Create Ticket
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover" id="ticket-table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Ticket ID</th>
                                                                            <th>Subject</th>
                                                                            <th>Department</th>
                                                                            <th>Created By</th>
                                                                            <th>Created On</th>
                                                                            <th>Status</th>
                                                                            <th>Replied by</th>
                                                                            @if ($roleName == 'superadmin' || $roleName == 'admin')
                                                                                <th>Action</th>
                                                                            @endif
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
    @include('help.createTicket')
    @include('help.viewTicket')

@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@push('javascripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        var isSuperAdminOrAdmin = "{{ $roleName === 'superadmin' || $roleName === 'admin' }}";
        var columns = [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'unique_id', name: 'unique_id'},
            {data: 'subject', name: 'subject'},
            {data: 'department', name: 'department  '},
            {data: 'member', name: 'member'},
            {data: 'created_at', name: 'created_at'},
            {data: 'status', name: 'status'},
            {data: 'replied_by', name: 'replied_by'}
        ];

        if (isSuperAdminOrAdmin) {
            columns.push({data: 'action', name: 'action', orderable: false});
        }
        var table = $('#ticket-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('tickets') }}",
            columns: columns,
            drawCallback: function () {
                $('[data-toggle="tooltip"]').tooltip();
            },
        });

        $(document).on('click', '.view-btn', function () {
            var editId = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/viewTicket/" + editId,
                success: function (response) {
                    var replies = response.replies;
                    var replyText = '';

                    for (var i = 0; i < replies.length; i++) {
                        replyText += replies[i].reply + '\n';
                    }
                    // Update the modal with the retrieved data
                    $('#ticketSub').val(response.ticket.subject);
                    $('#ticketDep').val(response.departmentName);
                    $('#ticketMsg').val(response.ticket.message);
                    $('#ticketId').val(response.ticket.id);
                    $('#ticketReply').val(replyText);
                    $('input[name="status"]').filter(function () {
                        return $(this).val() == response.ticket.status;
                    }).prop('checked', true);

                    // Show the modal
                    $('#view_ticket_model').modal('show');
                },
                error: function (xhr, status, error) {
                    // Handle the error if necessary
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
@endpush

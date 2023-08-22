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
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item mw-10 font-weight-bold">
                                                                <a class="nav-link fz-18px active" data-toggle="tab"
                                                                    href="#" role="tab">Designation</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-12 text-right mb-4">
                                                            <button
                                                                class="btn btn-primary waves-effect waves-light ml-2"
                                                                data-toggle="modal" data-target="#designation_model">Create
                                                                Designation</button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover data-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Designation</th>
                                                                            <th>Description</th>
                                                                            <th>Status</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
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
<!-- Modal -->
<div class="modal fade" id="designation_model" tabindex="-1" role="dialog" aria-labelledby="createDesignation"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Designation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('addDesignation') }}" method="POST" id="addDesignation">
                @csrf
                <div class="modal-body">
                    <div class="card-block">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Designation</label>
                            <div class="col-sm-10">
                                <input type="text" name="desig" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" value="" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-radius-10" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Designation', ['class' => 'btn btn-primary ml-2']) !!}
            </form>
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
        ajax: "{{ route('designation') }}",
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'designation', name: 'designation' },
            { data: 'description', name: 'description' },
            { data: 'status', name: 'status' },
            { data: 'edit', name: 'edit', orderable: false, searchable: false},
            { data: 'delete', name: 'delete', orderable: false, searchable: false},
        ]
    });
</script>
<script type="text/javascript">
        $(document).ready(function () {
            // Event listener for form submit
            $(document).on('submit', '#addDesignation', function (event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var formData = form.serialize();
                var url = form.attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    success: function (response) {
                        // Hide the modal after successful ticket creation
                        $('#designation_model').modal('hide');

                        toastr.success('Designation Created');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    },
                    error: function (xhr, status, error) {
                        // Handle the error if necessary
                        // console.log(xhr.responseText);

                        // Show an error message (you can use toastr or any other method)
                        toastr.error('Designation creation failed');
                        // alert('Designation creation failed');
                    }
                });
            });
        });

    </script>
@endpush
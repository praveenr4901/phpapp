@extends('layouts.main')

@push('stylesheets')
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
                                                                    href="#" role="tab">Tickets</a>
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
                                                                data-toggle="modal" data-target="#ticket_model">Create
                                                                Ticket</button>
                                                        </div>
                                                        <div class="col-12 text-right">
                                                            Status
                                                            <input class="ml-2" type="radio" id="ticket_status_open"
                                                                name="ticket_status" value="open" checked> Open
                                                            <input class="ml-2" type="radio" id="ticket_status_close"
                                                                name="ticket_status" value="close"> Close

                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>Ticket ID</th>
                                                                            <th>Subject</th>
                                                                            <th>Department</th>
                                                                            <th>Created By</th>
                                                                            <th>Created On</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>632aebc40d61d</td>
                                                                            <td>Test Ticket-1</td>
                                                                            <td>Accounts</td>
                                                                            <td>Lion Y</td>
                                                                            <td>8 months ago</td>
                                                                            <td>Closed</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>722aebc40d61d</td>
                                                                            <td>Test Ticket-2</td>
                                                                            <td>Accounts</td>
                                                                            <td>Lion Y</td>
                                                                            <td>8 months ago</td>
                                                                            <td>Closed</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td>642aebc40d61d</td>
                                                                            <td>Test Ticket-3</td>
                                                                            <td>Accounts</td>
                                                                            <td>Lion Y</td>
                                                                            <td>8 months ago</td>
                                                                            <td>Closed</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">4</th>
                                                                            <td>732aebc40d61d</td>
                                                                            <td>Test Ticket-4</td>
                                                                            <td>Accounts</td>
                                                                            <td>Lion Y</td>
                                                                            <td>8 months ago</td>
                                                                            <td>Closed</td>
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
<!-- Modal -->
<div class="modal fade" id="ticket_model" tabindex="-1" role="dialog" aria-labelledby="createTicket" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <select name="select" class="form-control">
                                    <option value="opt1">Accounts</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <textarea rows="5" cols="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input class="ml-2" type="radio" id="ticket_status_open" name="ticket_status"
                                    value="open" checked> Open
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create Ticket</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascripts')
@endpush
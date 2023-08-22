@extends('layouts.main')

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
                                                        @include('sadmin.electionMenu', ['level' => 2])
                                                    </div>
                                                </div>
                                                <div class="card-block clubs">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Club ID</th>
                                                                            <th>Name</th>
                                                                            <th>Count</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>5183901</td>
                                                                            <td>Perunkuzhi</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>5183901</td>
                                                                            <td>Perunkuzhi</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>5183901</td>
                                                                            <td>Perunkuzhi</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>5183901</td>
                                                                            <td>Perunkuzhi</td>
                                                                            <td>16</td>
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

<!-- modal -->

<div class="modal fade" id="clubs_model" tabindex="-1" role="dialog" aria-labelledby="Club details" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Club Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Zone</label>
                            <div class="col-sm-9">
                                <select name="select" class="form-control fill" name="">
                                    <option value="opt1">1A</option>
                                    <option value="opt2">1B</option>
                                    <option value="opt3">2A</option>
                                    <option value="opt4">2B</option>
                                    <option value="opt5">3A</option>
                                    <option value="opt6">3B</option>
                                    <option value="opt7">4A</option>
                                    <option value="opt8">4B</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Club Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Regular Count</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Family Count</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select name="select" class="form-control fill" name="">
                                    <option value="opt1">Active</option>
                                    <option value="opt2">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Clear</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('stylesheets')

@endpush
@push('javascripts')

@endpush
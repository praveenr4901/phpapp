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
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
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
                                                            @include('admin.includes.supportMenu')
                                                        </div>
                                                    </div>
                                                    <div class="card-block">  
                                                        <div class="tab-pane active" id="home1" role="tabpanel">                                                      
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>ID</th>
                                                                                <th>Name</th>
                                                                                <th>Spouse</th>
                                                                                <th>Home</th>
                                                                                <th>Office</th>
                                                                                <th>Whatsapp</th>
                                                                                <th>Desig</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>5183901</td>
                                                                                <td>R S Nandakumar</td>
                                                                                <td>Rani</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>Treasurer</td>
                                                                                <td>
                                                                                    <a class="table_actions" href="#" data-toggle="modal" data-target="#member_model">
                                                                                        <i class="icofont icofont-pencil"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>5183902</td>
                                                                                <td>P S Kumar</td>
                                                                                <td>Rani</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>Treasurer</td>
                                                                                <td>
                                                                                    <a class="table_actions" href="#" data-toggle="modal" data-target="#member_model">
                                                                                        <i class="icofont icofont-pencil"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">3</th>
                                                                                <td>5183903</td>
                                                                                <td>F Vinoth</td>
                                                                                <td>Rani</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>Treasurer</td>
                                                                                <td>
                                                                                    <a class="table_actions" href="#" data-toggle="modal" data-target="#member_model">
                                                                                        <i class="icofont icofont-pencil"></i>
                                                                                    </a>
                                                                                </td>
                                                                               
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">4</th>
                                                                                <td>5183904</td>
                                                                                <td>R Sankar</td>
                                                                                <td>Rani</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>9447065085</td>
                                                                                <td>Treasurer</td>
                                                                                <td>
                                                                                    <a class="table_actions" href="#" data-toggle="modal" data-target="#member_model">
                                                                                        <i class="icofont icofont-pencil"></i>
                                                                                    </a>
                                                                                </td>
                                                                                
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
    <!-- Modal -->
    <div class="modal fade" id="member_model" tabindex="-1" role="dialog" aria-labelledby="createMember" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-block">
                        <form>                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" disabled value="5183901">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="R S  Nandakumar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Home</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="9447065085">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Office</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="9447065085">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">WhatsApp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="9447065085">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
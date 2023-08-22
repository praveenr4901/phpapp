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
                                                                            <th>Serial</th>   
                                                                            
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
<script>
$(document).ready(function() {
    var table1 = $('#delTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{url("/election/validDelegates")}}/'+ 0,
        columns: [
            { data: 'DT_RowIndex',name: 'DT_RowIndex'},
            { data: 'member_id', name: 'member_id' },
            { data: 'name', name: 'name' },
            { data: 'mobile', name: 'mobile' },
            { data: 'serial', name: 'serial', orderable: false, searchable: false}
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
                table1.ajax.url('/election/validDelegates/' + selectedClubId).load();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });
    
});
</script>

@endpush




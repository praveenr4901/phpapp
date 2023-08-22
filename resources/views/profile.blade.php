@extends('layouts.app')

@section('title','my profile')

@section('content')

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('layouts.userMenu')
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

                                                <div class="row m-b-10">
                                                    <div class="col-lg-12 col-md-12 col-xl-12">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item mw-10 font-weight-bold">
                                                                <a class="nav-link fz-18px active" data-toggle="tab"
                                                                    href="#" role="tab">Profile</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3 profile-block">
                                                        <div class="col-12">
                                                            <div class="sub-head text-right">
                                                                <h6><i class="icofont icofont-user-alt-3"></i> Member Id
                                                                    : @if ($user) {{ $user->member_id }} @endif</h6>
                                                            </div>
                                                            <h4 class="sub-title">PERSONAL INFO</h4>
                                                            <form id="profile">
                                                            <div class="alert alert-success d-none" id="successMessage" ></div>
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Name</label>
                                                                        <input type="text"
                                                                            class="form-control profile-name"
                                                                            placeholder="Name" name="name"
                                                                            value="@if ($user->member && $user->member->name) {{$user->member->name}} @endif">
                                                                        <span class="text-danger"
                                                                            id="name-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Gender</label>
                                                                        <select class="form-control fill" name="gender">
                                                                            <option value="">Select
                                                                            </option>
                                                                            <option value="female" @if ($user->member
                                                                                && 'female' == $user->member->gender)
                                                                                {{ 'selected' }} @endif>Female</option>
                                                                            <option value="male" @if ($user->member &&
                                                                                'male' == $user->member->gender)
                                                                                {{ 'selected' }} @endif>Male</option>
                                                                        </select>
                                                                        <span class="text-danger"
                                                                            id="gender-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Spouse</label>
                                                                        <input type="text" class="form-control "
                                                                            placeholder="Spouse" name="spouse"
                                                                            value="@if ($user->member && $user->member->spouse) {{$user->member->spouse}} @endif">
                                                                        <span class="text-danger"
                                                                            id="spouse-error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">DOB</label>
                                                                        <div class="form-group mb-4">
                                                                            <div class="datepicker date input-group">
                                                                                <input type="text"
                                                                                    placeholder="Choose Date"
                                                                                    class="form-control" name="dob"
                                                                                    id="fecha1"
                                                                                    value="@if ($user->member && $user->member->dob) {{  date('d/m/Y', strtotime($user->member->dob)) }} @endif">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text"><i
                                                                                            class="fa fa-calendar"></i></span>
                                                                                </div>
                                                                            </div>
                                                                            <span class="text-danger"
                                                                                id="dob-error"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Anniversary</label>
                                                                        <div class="form-group mb-4">
                                                                            <div class="datepicker date input-group">
                                                                                <input type="text"
                                                                                    placeholder="Anniversary"
                                                                                    class="form-control"
                                                                                    name="anniversary" id="fecha2"
                                                                                    value="@if ($user->member && $user->member->anniversary ) {{  date('d/m/Y', strtotime($user->member->anniversary)) }} @endif">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text"><i
                                                                                            class="fa fa-calendar"></i></span>
                                                                                </div>
                                                                            </div>
                                                                            <span class="text-danger"
                                                                            id="anniversary-error"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h4 class="sub-title">CONTACT INFO</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Home  <a class="text-primary"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="Phone number"
                                                                                    data-original-title="tooltip on top">
                                                                                    <i class="fa fa-info-circle" ></i></a></label>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="Home" name="home" id="home"
                                                                            value="@if ($user->member && $user->member->mobile){{$user->member->mobile}}@endif">
                                                                        <span class="text-danger"
                                                                            id="home-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Office <a class="text-primary"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="Phone number"
                                                                                    data-original-title="tooltip on top">
                                                                                    <i class="fa fa-info-circle" ></i></a></label>
                                                                        <input type="number" class="form-control" id="office"
                                                                            placeholder="Office" name="office"
                                                                            value="@if ($user->member && $user->member->phone){{$user->member->phone}}@endif">
                                                                        <span class="text-danger"
                                                                            id="office-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Whatsapp</label>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="Whatsapp" name="whatsapp" id="whatsapp"
                                                                            value="@if ($user->member && $user->member->whatsapp){{$user->member->whatsapp}}@endif">
                                                                        <span class="text-danger"
                                                                            id="whatsapp-error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Email</label>
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Email" name="email"
                                                                            value="@if ($user && $user->email) {{$user->email}}  @endif">
                                                                        <span class="text-danger"
                                                                            id="email-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Address</label>
                                                                        <textarea rows="1" cols="5" class="form-control"
                                                                            placeholder="Address"
                                                                            name="address">@if ($user->member && $user->member->address) {{$user->member->address}} @endif</textarea>
                                                                        <span class="text-danger"
                                                                            id="address-error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h4 class="sub-title">WORK</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Profession</label>
                                                                        <select class="form-control fill"
                                                                            name="profession">
                                                                            <option value="">Select
                                                                            </option>
                                                                            @if($professions)
                                                                            @foreach($professions as $row)
                                                                            <option value="{{$row->id}}" @if ($user->member && $row->id == $user->member->profession)
                                                                                {{ 'selected' }} @endif >{{$row->name}}
                                                                            </option>
                                                                            @endforeach
                                                                            @endif
                                                                        </select>
                                                                        <span class="text-danger"
                                                                            id="profession-error"></span>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <label
                                                                            class="col-sm-6 col-form-label p-0">Spl</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Specialization"
                                                                            name="specialization"
                                                                            value="@if ($user->member && $user->member->specialization) {{$user->member->specialization}} @endif">
                                                                            <span class="text-danger"
                                                                            id="specialization-error"></span>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 text-center mt-5 mb-5">
                                                                        <button
                                                                            class="btn btn-primary waves-effect waves-light saveBtn">Save</button>
                                                                            <div id="flashMessageContainer"></div>
                                                                    </div>
                                                                </div>
                                                            </form>
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
<!-- datepicker styles -->
<link rel="stylesheet" href="{{ asset('assets/packages/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
@endpush
@push('javascripts')
<script src="{{ asset('assets/packages/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/js/custom-form.js')}}"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function() {
    $("#home, #office, #whatsapp").keypress(function(evt){
        if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57){
                evt.preventDefault();
        }
    });
    $('#profile').on('submit', function(e) {
        $('#profile .saveBtn').text('Updating...');
        $('#profile .saveBtn').attr('disabled',true);
        $('#name-error').text('');
        $('#email-error').text('');
        $('#gender-error').text('');
        $('#spouse-error').text('');
        $('#address-error').text('');
        $('#home-error').text('');
        $('#office-error').text('');
        $('#whatsapp-error').text('');
        $('#profession-error').text('');
        $('#dob-error').text('');
        $('#anniversary-error').text('');
        $('#specialization-error').text('');
        
        e.preventDefault();
        var form = $(this);
        var formData = form.serialize();
        $(".is-invalid").removeClass("is-invalid");
        $.ajax({
            url: '{{url("/update-profile")}}',
            type: "POST",
            data: formData,
            success: function(response) {
                toastr.success(response.success);
                $('#profile .saveBtn').attr('disabled',false);
                $('#profile .saveBtn').text('Save');
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
                $('#profile .saveBtn').attr('disabled',false);
                $('#profile .saveBtn').text('Save');
                return false;
            }
        });
    });
});
</script>
@endpush

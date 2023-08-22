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

                                                <div class="card-block clubs">
                                                    <div class="row">
                                                        <div class="col-sm-8 mx-auto">
                                                            <!-- Basic Form Inputs card start -->
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Edit Member</h5>
                                                                </div>
                                                                <div class="card-block">
                                                                    <!-- Display success and error messages -->
                                                                    @if (session('success'))
                                                                        <div class="alert alert-success">
                                                                            {{ session('success') }}
                                                                        </div>
                                                                    @endif

                                                                    @if (session('error'))
                                                                        <div class="alert alert-danger">
                                                                            {{ session('error') }}
                                                                        </div>
                                                                    @endif
                                                                    <form action="{{ route('updateMember') }}"
                                                                          method="POST">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Club</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control @error('club') is-invalid @enderror"
                                                                                    name="club">
                                                                                    <option value=""> Select club
                                                                                    </option>
                                                                                    @foreach ($clubs as $club)
                                                                                        <option
                                                                                            value="{{ $club->clubid }}" {{ $member->clubid === $club->clubid ? 'selected' : '' }}>
                                                                                            {{ $club->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('club')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Id</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('member-id') is-invalid @enderror"
                                                                                       name="member-id"
                                                                                       value="{{ old('member-id', $member->id) }}">
                                                                                @error('member-id')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Name</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('member-name') is-invalid @enderror"
                                                                                       name="member-name"
                                                                                       placeholder="Name"
                                                                                       value="{{old('member-name', $member->name)}}">
                                                                                @error('member-name')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Spouse</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('spouse') is-invalid @enderror"
                                                                                       name="spouse"
                                                                                       placeholder="Spouse"
                                                                                       value="{{old('spouse', $member->spouse)}}">
                                                                            </div>
                                                                            @error('spouse')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Gender</label>
                                                                            <div class="col-sm-10">
                                                                                <select class="form-control"
                                                                                        name="gender">
                                                                                    <option value="">Select</option>
                                                                                    <option
                                                                                        value="male" {{ strtolower($member->gender) === "male" ? 'selected' : '' }}>
                                                                                        Male
                                                                                    </option>
                                                                                    <option
                                                                                        value="female" {{ strtolower($member->gender) === "female" ? 'selected' : '' }}>
                                                                                        Female
                                                                                    </option>
                                                                                    <option
                                                                                        value="other" {{ strtolower($member->gender) === "other" ? 'selected' : '' }}>
                                                                                        Other
                                                                                    </option>
                                                                                </select>
                                                                                @error('gender')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Date
                                                                                of birth</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date"
                                                                                       class="form-control @error('dob') is-invalid @enderror"
                                                                                       name="dob"
                                                                                       placeholder="Date of birth"
                                                                                       value="{{ old('dob', date('Y-m-d', strtotime($member->dob))) }}">
                                                                                @error('dob')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Anniversary</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date"
                                                                                       class="form-control @error('anniversary') is-invalid @enderror"
                                                                                       name="anniversary"
                                                                                       placeholder="Anniversary"
                                                                                       value="{{ old('anniversary', date('Y-m-d', strtotime($member->anniversary))) }}">
                                                                                @error('anniversary')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Home</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('phone') is-invalid @enderror"
                                                                                       name="phone"
                                                                                       placeholder="Home"
                                                                                       value="{{ old('phone', $member->phone) }}">
                                                                                @error('phone')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Mobile</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('mobile') is-invalid @enderror"
                                                                                       name="mobile"
                                                                                       placeholder="Mobile"
                                                                                       value="{{ old('mobile', $member->mobile) }}">
                                                                                @error('mobile')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Whatsapp</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('whatsapp') is-invalid @enderror"
                                                                                       name="whatsapp"
                                                                                       placeholder="Whatsapp"
                                                                                       value="{{ old('whatsapp', $member->whatsapp) }}">
                                                                                @error('whatsapp')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Profession</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control @error('profession') is-invalid @enderror"
                                                                                    name="profession">
                                                                                    @foreach ($professions as $profession)
                                                                                        <option
                                                                                            value="{{ $profession->name }}" {{ old('profession', $member->profession) === $profession->name ? 'selected' : '' }}>
                                                                                            {{ $profession->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('profession')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Designation</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control @error('designation') is-invalid @enderror"
                                                                                    name="designation">
                                                                                    @foreach ($designations as $designation)
                                                                                        <option
                                                                                            value="{{ $designation->id }}" @if ($userRole && $designation->id == $userRole->designation_id)
                                                                                                {{ 'selected' }} @endif>{{ $designation->desig }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('designation')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Specialization</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text"
                                                                                       class="form-control @error('specialization') is-invalid @enderror"
                                                                                       name="specialization"
                                                                                       placeholder="Specialization"
                                                                                       value="{{ old('specialization', $member->specialization) }}">
                                                                                @error('specialization')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Status</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control @error('status') is-invalid @enderror"
                                                                                    name="status">
                                                                                    <option
                                                                                        value="1" {{ old('status', $member->status) === 1 ? 'selected' : '' }}>
                                                                                        Active
                                                                                    </option>
                                                                                    <option
                                                                                        value="0" {{ old('status', $member->status) === 0 ? 'selected' : '' }}>
                                                                                        Inactive
                                                                                    </option>
                                                                                </select>
                                                                                @error('status')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row float-right">
                                                                            <div class="col-sm-12">
                                                                                <button type="submit"
                                                                                        class="btn btn-primary waves-effect waves-light mt-3">
                                                                                    Submit
                                                                                </button>
                                                                                <a class="btn btn-primary waves-effect waves-light mt-3"
                                                                                   href="{{ route("members")}}">Back</a>
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
    </div>
    </div>
@endsection

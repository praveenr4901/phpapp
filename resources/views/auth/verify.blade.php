@extends('layouts.app')

@section('title','Register')

@section('content')

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div
                    class="authfy-container col-xs-12 col-sm-10 col-md-12 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                    <div class="col-sm-5 authfy-panel-left">
                        <div class="brand-col">
                            <div class="headline">
                                <div class="brand-logo">
                                    <img src="http://lionsclub-dev.xminds.in/assets/images/logo-new-big.png" width="150"
                                         alt="brand-logo">
                                </div>
                                <p>Lions Clubs International
                                    District 318A 2023-24</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 authfy-panel-right">
                        <div class="authfy-login">
                            <div class="authfy-panel panel-login text-center active">
                                <div class="authfy-heading">
                                    <h3 class="auth-title">Verify Member</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <form method="post" action="{{route('verifyMember')}}">
                                            <input type="hidden" name="type" value="{{request()->query('type')}}">
                                            @csrf
                                            @if ($errors->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('error') }}
                                                </div>
                                            @endif
                                            @error('member_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group">
                                                <input type="text" name="member_id" class="form-control"
                                                       placeholder="Member ID" required>
                                            </div>
                                            <div class="form-group reg-wrap">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Verify
                                                </button>
                                                <p>Already have an account? <a class="lnk-toggler"
                                                                               data-panel=".panel-signup"
                                                                               href="{{ route('login') }}">Login</a></p>
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
    </section>
@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/verify.css')}}">
@endpush

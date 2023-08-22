@extends('layouts.app')

@section('title','login')

@section('content')

    <section class="login-block">
        <!--newlogin-->
        <div class="container-fluid">
            <div class="row">
                <div class="authfy-container col-xs-12 col-sm-10 col-md-12 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                    <div class="col-sm-5 authfy-panel-left">
                        <div class="brand-col">
                            <div class="headline">
                                <!-- brand-logo start -->
                                <div class="brand-logo">
                                    <img src="http://lionsclub-dev.xminds.in/assets/images/logo-new-big.png" width="150" alt="brand-logo">
                                </div><!-- ./brand-logo -->
                                <p>Lions Clubs International
                                    District 318A 2023-24</p>
                                <!-- social login buttons start -->

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 authfy-panel-right">
                        <!-- authfy-login start -->
                        <div class="authfy-login">
                            <!-- panel-login start -->
                            <div class="authfy-panel panel-login text-center active">
                                <div class="authfy-heading">
                                    <h3 class="auth-title">UPDATE PASSWORD</h3>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <form method="post" action="{{ route('password.update') }}">
                                            @csrf
                                            <input type="hidden" name="memberId" value="{{ $memberData->id }}">
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                            <div class="form-group">
                                                <input type="text" name="otp" class="form-control @error('otp') is-invalid @enderror @if(!empty(old('otp'))) fill @endif" required placeholder="OTP" value="{{ old('otp') }}">
                                                <span class="form-bar"></span>
                                                @error('otp')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="pwdMask">
                                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="New Password">
                                                    <span class="form-bar"></span>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pwdMask">
                                                    <input type="password" name="password_confirmation" class="form-control @error('confirm-password') is-invalid @enderror" required autocomplete="current-password" placeholder="Confirm Password">
                                                    <span class="form-bar"></span>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror                                                </div>
                                            </div>
                                            <div class="form-group reg-wrap">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- ./panel-login -->
                        </div> <!-- ./authfy-login -->
                    </div>
                </div>
            </div> <!-- ./row -->
        </div>
    </section>
@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset-password.css')}}">
@endpush


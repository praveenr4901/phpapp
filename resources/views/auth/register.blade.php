@extends('layouts.app')

@section('title','login')

@section('content')

    <section class="login-block">
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
                        <!-- authfy-login start -->
                        <div class="authfy-login">
                            <!-- panel-login start -->
                            <div class="authfy-panel panel-login text-center active">
                                <div class="authfy-heading">
                                    <h3 class="auth-title">REGISTER</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <form class="loginForm" method="post" action="{{route('register')}}">
                                            @csrf
                                            <input type="hidden" name="memberId" value="{{ $memberData->id }}">
                                            <p><strong>Hi </strong>{{ucfirst($memberData->name)}}</p>
                                            <div class="form-group">
                                                <input type="text" name="otp" class="form-control" placeholder="OTP"
                                                       required autocomplete="off" value="{{ old('otp') }}">
                                                <span class="form-bar"></span>
                                                @error('otp')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror                                              </div>
                                            <div class="form-group">
                                                <input type="text" name="mobile"
                                                       class="form-control @error('mobile') is-invalid @enderror @if(!empty(old('mobile')) || !empty($memberData->mobile)) fill @endif"
                                                       placeholder="Mobile" required autocomplete="off"
                                                       value="{{ old('mobile', $memberData->mobile ?? '') }}">
                                                <span class="form-bar"></span>
                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                       class="form-control @error('email') is-invalid @enderror @if(!empty(old('email'))) fill @endif"
                                                       placeholder="Email" required autocomplete="off"
                                                       value="{{ old('email') }}">
                                                <span class="form-bar"></span>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror                                            </div>
                                            <div class="form-group">
                                                <div class="pwdMask">
                                                    <input type="password" name="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           placeholder="Password" required
                                                           autocomplete="current-password">
                                                    <span class="form-bar"></span>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="pwdMask">
                                                    <input type="password" name="password_confirmation"
                                                           class="form-control @error('confirm-password') is-invalid @enderror"
                                                           placeholder="Confirm Password" required
                                                           autocomplete="current-password">
                                                    <span class="form-bar"></span>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror                                                </div>
                                            </div>
                                            <div class="form-group reg-wrap">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                    Register
                                                </button>
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
    </section>
@endsection
@push('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/register.css')}}">
@endpush

<x-guest-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css')}}">


    <section class="login-block">
        <!-- Container-fluid starts -->
        <!--newlogin-->
        <div class="container-fluid">
            <div class="row">
                <div
                    class="authfy-container col-xs-12 col-sm-10 col-md-12 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                    <div class="col-sm-5 authfy-panel-left">
                        <div class="brand-col">
                            <div class="headline">
                                <!-- brand-logo start -->
                                <div class="brand-logo">
                                    <img src="http://lionsclub-dev.xminds.in/assets/images/logo-new-big.png" width="150"
                                         alt="brand-logo">
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
                                    <h3 class="auth-title">Login to your account</h3>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <form method="post" action="{{route('login')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="mobile"
                                                       class="form-control @error('mobile') is-invalid @enderror"
                                                       required autocomplete="off" placeholder="Mobile">
                                                <span class="form-bar"></span>
                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="pwdMask">
                                                    <input type="password" name="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           required autocomplete="current-password"
                                                           placeholder="Password">
                                                    <span class="form-bar"></span>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- start remember-row -->
                                            <div class="row remember-row">
                                                <div class="col-xs-6 col-sm-6">
                                                </div>
                                                <div class="col-xs-6 col-sm-6">
                                                    <p class="forgotPwd">
                                                        <a class="lnk-toggler" data-panel=".panel-forgot"
                                                           href="{{ route('verifyId') }}?type=reset-password">Reset
                                                            Password</a>
                                                    </p>
                                                </div>
                                            </div> <!-- ./remember-row -->
                                            <div class="form-group reg-wrap">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login
                                                </button>
                                                <p>Don’t have an account? <a class="lnk-toggler"
                                                                             data-panel=".panel-signup"
                                                                             href="{{ route('verifyId') }}">Register
                                                        !</a></p>
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
</x-guest-layout>

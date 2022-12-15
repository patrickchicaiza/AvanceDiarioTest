@extends('layouts.app')
@section('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <!--Login Page Starts-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <section id="login" class="auth-height">
                    <div class="row full-height-vh m-0">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body auth-img">
                                        <div class="row m-0">
                                            <div
                                                class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                                <img src="../../../app-assets/img/gallery/login.png" alt=""
                                                    class="img-fluid" width="300" height="230">
                                            </div>
                                            <div class="col-lg-6 col-12 px-4 py-3">
                                                <h4 class="mb-2 card-title">Login</h4>
                                                <p>Welcome back, please login to your account.</p>
                                                <!--  <input type="text" class="form-control mb-3" placeholder="Username"> -->
                                                <input id="email" type="email"
                                                    class="form-control mb-3 @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <!--   <input type="password" class="form-control mb-2"
                                                        placeholder="Password"> -->

                                                <input id="password" type="password"
                                                    class="form-control mb-2 @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <div class="d-sm-flex justify-content-between mb-3 font-small-2">
                                                    <div class="remember-me mb-2 mb-sm-0">
                                                        <div class="checkbox auth-checkbox">
                                                            <input type="checkbox" id="auth-ligin">
                                                            <label for="auth-ligin"><span>Remember Me</span></label>
                                                        </div>
                                                    </div>
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                    @endif
                                                </div>
                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <a href="auth-register.html"
                                                        class="btn bg-light-primary mb-2 mb-sm-0">Register</a>

                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                                <hr>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="text-primary m-0">Or Login With</h6>
                                                    <div class="login-options">
                                                        <a class="btn btn-sm btn-social-icon btn-facebook mr-1"><span
                                                                class="fa fa-facebook"></span></a>
                                                        <a class="btn btn-sm btn-social-icon btn-twitter mr-1"><span
                                                                class="fa fa-twitter"></span></a>
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
            </form>
            <!--Login Page Ends-->
        </div>
    </div>
    <!-- END : End Main Content-->
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection
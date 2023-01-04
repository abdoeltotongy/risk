<!-- @format -->
@extends('layouts.main')
@section('title')
    Regsiter
@endsection
@section('content')
    <section style=" background-image:url({{ asset('front/images/bg1.PNG') }})  ">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                {{-- <div class="brand-logo">
                                    <img src="../../images/logo.svg" alt="logo">
                                </div> --}}
                                {{-- <h4>Hello! let's get started</h4> --}}
                                <h6 class="fw-light">Regsiter to continue.</h6>
                                <form class="pt-3" method="POST" action="{{ url('/register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="department"
                                            name="department">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="User Name"
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="E-mail"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg"
                                            placeholder="Confirm Password" name="password_confirmation">
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">
                                            Register</button>
                                    </div>
                                    {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input" name="remember_token">
                                                Keep me signed in
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <a href="#" class="auth-link text-black">Forgot password?</a>
                                    </div> --}}

                                    {{-- <div class="text-center mt-4 fw-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </section>
@endsection

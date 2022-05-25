@extends('layout.blog.master')
@section('content')
<div class="container mt-5 mb-5">

    <!--Admin Login For start-->
    <div class="row justify-content-center h-100vh" id="login-form-box">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Login to your account</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="loginError"></div>
                    <form action="{{route('blog.user.login')}}" method="post" id="login-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>

                            </div>
                            <input type="email" name="email" class="form-control" id="email" required
                                placeholder="Enter your Email">

                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </span>

                            </div>
                            <input type="password" name="password" class="form-control" id="pass_log_id" required
                                placeholder="Enter your Password">
                            <div class="input-group-prepend">
                                <span toggle="#password-field" class="input-group-text toggle-password">
                                    <i class="fa fa-fw fa-eye"></i>
                                </span>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="float-left custom-control custom-checkbox">
                                <input type="checkbox" id="rememberMe" name="rememberMe">
                                <label for="rememberMe">Remember me</label>
                                <input type="checkbox" class="custom-control-input" name="">

                            </div>

                            <div class="float-right">
                                <a href="{{route('blog.forget_password')}}" class="text-decoration-none">Forgot
                                    password</a>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="form-group">
                            <input type="submit"  value="Sig In" class="btn btn-primary btn-block">

                        </div>

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43">
                    <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
                    <hr class="my-3">
                    <p class="text-center text-light lead">Please login in useing your email and pssword.if you have not
                        register yet.you can register free</p>
                    <a href="{{route('blog.user.register')}}" class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignupForm">Registration</a>

                </div>

            </div>
        </div>

    </div>

    <!--Admin Login Form End-->

    <!--Admin register Form start-->



    <!--Admin Forgot password End-->

</div>
@endsection
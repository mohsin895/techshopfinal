@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

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
                    <form action="{{route('user.login')}}" method="post" id="login-form">
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
                                <a href="{{route('user.forgot-password')}}" class="text-decoration-none">Forgot
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
                    <p class="text-center text-light lead">Please complete the sign up process first,If you are not registered.Its free and take only 1 minute.</p>
                    <a href="{{route('user.registration')}}" class="btn btn-outline-light btn-lg align-self-center mt-4" >Sign
                        Up</a>

                </div>

            </div>
        </div>

    </div>

    <!--Admin Login Form End-->

    <!--Admin register Form start-->


    
    <!--Admin register Form end-->

    <!--Admin Forgot password Start-->

    <div class="row justify-content-center h-100vh" id="forgotten-form-box" style="display: none">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Forgot Password</h2>
                    <hr class="my-3">
                    <form class="px-3" method="post" id="forgotten-form" route="{{url('admin.forget.password')}}">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>

                            </div>
                            <input type="email" name="email" class="form-control" id="email1"
                                placeholder="Enter your Email">

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Reset Password"
                                class="btn btn-primary btn-block">

                        </div>

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43">
                    <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
                    <hr class="my-3">
                    <p class="text-center text-light lead">Please login in useing your email and pssword.if you have not
                        register yet.you can register free</p>
                    <button class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignForm">Back</button>

                </div>

            </div>
        </div>

    </div>

    <!--Admin Forgot password End-->

</div>







@endsection
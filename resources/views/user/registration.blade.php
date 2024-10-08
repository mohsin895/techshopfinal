@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<div class="container mt-5 mb-5">



    <div class="row justify-content-center h-100vh" id="register-form-box" >
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center login-page-text font-weight-bold">Create New account</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="registerError"></div>
                    <form method="post" action="{{route('user.registration')}}" id="register-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>

                            </div>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                            <div class="invalid-feedback">This name field is required</div>

                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>

                            </div>
                            <input type="email" name="email" class="form-control" id="r_email"
                                placeholder="Enter your Email">
                            <div class="invalid-feedback">This email field is required</div>


                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>

                            </div>
                            <input type="text" name="phone" class="form-control" id="r_email"
                                placeholder="Enter your Mobile Number">
                            <div class="invalid-feedback">This email field is required</div>


                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>

                            </div>
                            <input type="text" name="date_of_birth" class="form-control" id="date"
                                placeholder="Enter your Date of Birth" onfocus="(this.type = 'date')">
                            <div class="invalid-feedback">This email field is required</div>


                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </span>

                            </div>
                            <input type="password" name="password" class="form-control" id="pass_reg_id"
                                placeholder="Enter your Password">
                                <div class="input-group-prepend">
                                <span toggle="#password-field" class="input-group-text toggle-password ">
                                    <i class="fa fa-fw fa-eye"></i>
                                </span>

                            </div>
                            <div class="invalid-feedback">This password field is required</div>

                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male"
                                required>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="femal"
                                required>
                            <label class="form-check-label" for="inlineRadio2">Femal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="other"
                                required>
                            <label class="form-check-label" for="inlineRadio3">Other</label>
                        </div>

                     

                        <div class="form-group">
                            <input type="submit" value="Register" class="btn sign-button btn-block">

                        </div>

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43">
                    <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
                    <hr class="my-3">
                    <p class="text-center text-light lead">If you are already Sign up then go back to Sign In page.</p>
                    <a href="{{route('user.login')}}" class="btn btn-outline-light btn-lg align-self-center mt-4" >Sign
                        In</a>

                </div>

            </div>
        </div>

    </div>

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
@include('layout.front.footer');

@endsection
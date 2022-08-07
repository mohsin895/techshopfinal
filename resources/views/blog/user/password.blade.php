@extends('layout.blog.master')
@section('content')
<div class="container mt-5 mb-5">

    <!--Admin Login For start-->
    <div class="row justify-content-center h-100vh" id="login-form-box">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center  font-weight-bold login-page-text">Forget Password</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="loginError"></div>
                    <form action="{{route('blog.forget_password')}}" method="post" id="login-form">
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

                     
                        <div class="form-group">
                       

                            <div class="float-right">
                                <a href="{{route('blog.user.login')}}" class="text-decoration-none">Back To Login </a>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="form-group">
                            <input type="submit"  value="Send" class="btn sign-button btn-block">

                        </div>

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43">
                    <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
                    <hr class="my-3">
                    <p class="text-center text-light lead">Please Click to Back Login Page</p>
                    <a href="{{route('blog.user.login')}}" style="
    background: #D20A7D;
    color: #fff;" class="btn btn-outline-light btn-lg align-self-center mt-4" id="showSignupForm">Back To Login</a>

                </div>

            </div>
        </div>

    </div>

    <!--Admin Login Form End-->

    <!--Admin register Form start-->


    

    <!--Admin Forgot password End-->

</div>
@endsection
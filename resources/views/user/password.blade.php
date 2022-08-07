@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<div class="container mt-5 mb-5">

   

    <!--Admin register Form end-->

    <!--Admin Forgot password Start-->

    <div class="row justify-content-center h-100vh" id="forgotten-form-box" >
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center login-page-text font-weight-bold">Forgot Password</h2>
                    @include('error.message')
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
                                class="btn sign-button btn-block">

                        </div>

                    </form>
                </div>
                <div class="card p-4 justify-content-center" style="background: #363C43">
                    <h2 class="text-center text-white forn-mweght-blod">Welcome back</h2>
                    <hr class="my-3">
                    <p class="text-center text-light lead">Please login in useing your email and pssword.if you have not
                        register yet.you can register free</p>
                    <a class="btn btn-outline-light btn-lg align-self-center mt-4" href="{{route('user.login')}}">Back</a>

                </div>

            </div>
        </div>

    </div>

    <!--Admin Forgot password End-->

</div>


@include('layout.front.footer');

@endsection
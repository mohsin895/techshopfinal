@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')


<div class="container  mb-5">

    <!--Admin Login For start-->
    <div class="row justify-content-center h-100vh" id="login-form-box">
    @include('user.setting.sider_bar')
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center login-page-text font-weight-bold">Change Password</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="loginError"></div>
                    <form action="{{route('user.updatePassword')}}" method="post" name="passwordForm"
                                id="passwordForm">
                        @csrf
                        

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </span>

                            </div>
                            <input type="password" name="current_pwd" id="current_pwd"class="form-control"  required
                                placeholder="Enter your old Password">
                            <div class="input-group-prepend">
                                <span toggle="#password-field" class="input-group-text toggle-password">
                                    <i class="fa fa-fw fa-eye"></i>
                                </span>

                            </div>
                            <span id="chkPwd"></span>

                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </span>

                            </div>
                            <input type="password" name="new_pwd" id="new_pwd" class="form-control" required
                                placeholder="Enter your New Password">
                            <div class="input-group-prepend">
                                <span toggle="#password-field" class="input-group-text toggle-password">
                                    <i class="fa fa-fw fa-eye"></i>
                                </span>

                            </div>

                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-key"></i>
                                </span>

                            </div>
                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control"  required
                                placeholder="Enter your Confirm  Password">
                            <div class="input-group-prepend">
                                <span toggle="#password-field" class="input-group-text toggle-password">
                                    <i class="fa fa-fw fa-eye"></i>
                                </span>

                            </div>

                        </div>
                      
                        <div class="form-group">
                            <input type="submit"  value="Update Password" class="btn sign-button btn-block">

                        </div>

                    </form>
                </div>
               

            </div>
        </div>

    </div>


</div>


@include('layout.front.footer');

@endsection
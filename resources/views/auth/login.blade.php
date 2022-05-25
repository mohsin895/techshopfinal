@extends('layout.front.master')
@include('layout.front.header')
@section('content')

<section id="login">
            <div class="card">
                <div class="d-flex ml-0">
                    <div class="banner-section">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('image/frontLogos/login-banner.png')}}" class="d-block w-100" alt="banner">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/frontLogos/login-banner.png')}}" class="d-block w-100" alt="banner">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('image/frontLogos/login-banner.png')}}" class="d-block w-100" alt="banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="login-section">
                    @include('error.message')
                        <ul class="nav nav-tabs js--user-login__tab" id="myTab" role="tablist">
                            <li class="nav-item js--tab-signin">
                                <a class="nav-link text-uppercase active"  id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign in</a>
                            </li>
                            <li class="nav-item js--tab-signup">
                                <a class="nav-link text-uppercase" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign up</a>
                            </li>
                        </ul>
   
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="{{route('user.login')}}" method="post" id="login-form">
  @csrf
                                    <div class="form-group">
                                        <img src="{{ asset('image/frontLogos/phone-icon.png')}}" alt="icon" class="img-fluid phone">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required/>
                                    </div>
                                    <div class="form-group" id="password-field">
                                        <img src="{{ asset('image/frontLogos/pass-icon.png')}}" alt="icon" class="img-fluid password">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                                        <i class="fa fa-eye"></i>
                                    </div>
                                   
                                    <div class="form-group d-flex">
<!--                                        <div class="custom-control custom-checkbox ml-0">-->
<!--                                            <input type="checkbox" name="remember-me" class="custom-control-input" id="remember">-->
<!--                                            <label class="custom-control-label" for="remember">Remember Ne</label>-->
<!--                                        </div>-->
                                        <div class="forgot-pass mr-0">
                                            <a href="forget-password.html" id="js--forgot-password" class="btn btn-link pr-0 pt-0">Forgot Password?</a>
                                        </div>
                                    </div>

             

                                    <div class="form-group text-center">
                                        
                                        <input type="submit" class="btn btn-sign__in" value="Sign In">
                                    </div>
                                </form>
                            
                                <p class="signup-link text-center">Don't have any account? <a data-toggle="tab" href="#signup" class="btn btn-link js--btn-signup pl-0"> Sign Up Now!</a></p>
                            </div>
                            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                <form method="post" action="{{route('user.registration')}}" id="register-form">
                                    @csrf
                                    <div class="form-group">
                                        <img src="{{ asset('image/frontLogos/reg-user-icon.png')}}" alt="icon" class="img-fluid">
                                        <input type="text" id="userName" class="form-control" placeholder="Full Name" required name="name" value="" />
                                        
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('image/frontLogos/reg-email-icon.png')}}" alt="icon" class="img-fluid">
                                        <input type="email" id="email" class="form-control" placeholder="Email" required name="email" value=""/>
                                        
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('image/frontLogos/phone-icon.png')}}" alt="icon" class="img-fluid">
                                        <input type="number" id="phone" class="form-control" placeholder="Phone" required name="phone" value=""/>
                                        
                                    </div>
                                    <div class="form-group" id="password-field-register">
                                        <img src="{{ asset('image/frontLogos/pass-icon.png')}}" alt="icon" class="img-fluid">
                                        <input type="password" id="password" class="form-control" placeholder="Password" required name="password" value=""/>
                                        <i class="fa fa-eye"></i>
                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox ml-0">
                                            <input type="checkbox" class="custom-control-input" id="privacy" required>
                                            <label class="custom-control-label" for="privacy">
                                                I agree to the <a href="terms-conditions.html">Terms of Use</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                            </label>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group text-center">
                                        
                                        <input type="submit" class="btn btn-sign__up" value="Sign Up">
                                    </div>
                                    <p class="signin-link text-center">Already have an account? <a href="#" class="btn btn-link pl-0"> Login Now!</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
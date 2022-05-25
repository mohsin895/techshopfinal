@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')



<section id="my-profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
        @include('user.setting.sider_bar')

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">
            <div class="card-group">

                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Personal Information</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="registerError"></div>

                    <form method="post" action="{{route('user.account.update',Auth::user()->id)}}" class="mt-4"
                        id="register-form">
                        @csrf

                        <div class="input-group input-group-lg form-group">

                            <input type="text" name="name" class="form-control mr-2" id="name"
                                value="{{Auth::user()->name}}" placeholder="Enter your Name">
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{Auth::user()->email}}" disabled>

                        </div>

                        <div class="input-group input-group-lg form-group">

                            <input type="text" name="adress1" class="form-control mr-2" id="address1"
                                value="{{Auth::user()->address1}}" placeholder="Enter your address1">
                            <input type="text" name="address2" class="form-control" id="address2"
                                value="{{Auth::user()->address2}}" placeholder="Enter your address2">

                        </div>
                        <div class="input-group input-group-lg form-group">

                            <input type="text" name="city" class="form-control mr-2" id="city"
                                value="{{Auth::user()->city}}" placeholder="Enter your City">
                            <input type="text" name="postcode" class="form-control" id="postcode"
                                value="{{Auth::user()->postcode}}" placeholder="Enter your PostCode">

                        </div>
                        <div class="input-group input-group-lg form-group">

                            <input type="text" name="name" class="form-control mr-2" id="name"
                                value="{{Auth::user()->country}}" placeholder="Enter your Name">
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{Auth::user()->phone}}" placeholder="Enter your Name">

                        </div>



                        <div class="form-group">
                            <input type="submit" value="Updated" class="btn btn-primary btn-block">

                        </div>
                    </form>


                </div>


            </div>
        </div>

    </div>
</section>


@endsection
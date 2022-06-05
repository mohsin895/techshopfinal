@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="my-profile" class="profile">
    <div class="content-section">
        <div class="d-flex">
            <div class="row col-lg-12">

                @include('user.setting.sider_bar')
                <div class="col-12 col-md-8 col-lg-8">

                    <div class="my-profile-section mr-0">
                        <div class="my-profile-section__wrapper">

                            <div class="heading">
                                @include('error.message')
                                <span class="text">Withdraw</span>

                                <span class="msg2 text-success ml-4 d-none"></span>
                            </div>
                            <form method="post" action="{{route('user.referall.withdraw.insert')}}" class="mt-4"
                                name="paymentForm" id="paymentForm">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 ml-0">
                                            <label for="name" class="form-label pb-1">Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control personal p-3 name" value="{{Auth::user()->name}}" />
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 ml-0">
                                            <label for="name" class="form-label pb-1">Mobile Number</label>
                                            <input type="text" name="phone" id="phone"
                                                class="form-control personal p-3 phone"
                                                value="{{Auth::user()->phone}}" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 ml-0">
                                            <label for="name" class="form-label pb-1">Withdraw Amount</label>
                                            <input type="text" id="streetAddress1" name="amount"
                                                class="form-control address p-3 name" value="" required />
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 ml-0">
                                            <label for="name" class="form-label pb-1">Account Number</label>
                                            <input type="text" id="streetAddress2" name="account_number"
                                                class="form-control address p-3 name" required />
                                        </div>


                                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 ml-0 mt-4">
                                            <label for="name" class="form-label pb-1">Comments</label>
                                            <textarea type="number" name="comment" class="form-control p-3 phone-change"
                                                placeholder="Enter your Comment"></textarea>
                                        </div>
                                        <div class="col-12 ml-0 mt-4">
                                            <label for="name" class="form-label pb-1">Select Your Account
                                                Type::</label>&nbsp;&nbsp;
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="account_type"
                                                    id="Bkash" value="Bkash">
                                                <label class="form-check-label" for="inlineRadio1">Bkash</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="account_type"
                                                    id="Nagad" value="Nagad">
                                                <label class="form-check-label" for="inlineRadio2">Nagad</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="account_type"
                                                    id="Rocket" value="Rocket">
                                                <label class="form-check-label" for="inlineRadio3">Rocket</label>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success pl-4 pr-4 mt-2"
                                        onclick="return selectPaymentMethod();">Withdraw</button>
                            </form>








                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')


<div id="shipping">
    <div class="content-section">
        <div class="address-section d-flex">
        <div class="row col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="col-12 col-md-8 col-lg-8 col-sm-12 mb-5">
        @include('error.message')
        <form action="{{route('user.giftcard.checkout')}}" method="post">
                        @csrf
            <div class="card js--shipping-card">
                <div class="card-header d-flex align-items-center">
                    <p class="address-title checkout-order-title">Giftcard Paymant</p>
               
                </div>
                <div class="card-body js--shipping-body">
                    <p class="body-title ">Select your payment method:</p>
                    <div class="col-12 ml-0 ">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="account_type" id="Bkash" value="Bkash">
                            <label class="form-check-label" for="inlineRadio1" style="color:black">Bkash</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="account_type" id="Nagad" value="Nagad">
                            <label class="form-check-label" for="inlineRadio2" style="color:black">Nagad</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="account_type" id="Rocket" value="Rocket">
                            <label class="form-check-label" for="inlineRadio3" style="color:black">Rocket</label>
                        </div>
                    </div>
                    &nbsp;&nbsp;
                    <p class="body-title">Send your payment to this number
                    <div class="col-12 ml-0 ">

                        <div class="form-check form-check-inline">

                            <label class="form-check-label" for="inlineRadio1" style="color:black"><i class="fas fa-dot-circle"></i>&nbsp;&nbsp;Bkash
                                Number:{{$gs->bkash}}</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">

                            <label class="form-check-label" for="inlineRadio2" style="color:black"><i class="fas fa-dot-circle"></i>&nbsp;&nbsp;Nagad Number:
                                {{$gs->nogod}}</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">

                            <label class="form-check-label" for="inlineRadio3" style="color:black"><i class="fas fa-dot-circle"></i>&nbsp;&nbsp;Rocket
                                Number:{{$gs->rocket}}</label>
                        </div>
                    </div>


                     Then fillup the form below and click "Pay Now".</p>
                    &nbsp;&nbsp;
                    <p class="body-title">Fill out your information</p>
                   
                        <div class="form-inline">
                            <input type="text" id="name" name="name" placeholder="Name" value="{{Auth::user()->name}}"
                                class="form-control" />
                            <input type="email" name="email" placeholder="Email" value="{{Auth::user()->email}}"
                                class="form-control" readonly />

                        </div>



                        <div class="form-inline mt-4">
                            <input type="text" id="phone" name="phone" placeholder="Phone"
                                value="{{Auth::user()->phone}}" class="form-control" />
                            <input type="text" id="account_number" name="account_number"
                                placeholder="Enter Your Payment Account Number" class="form-control" required />

                        </div>
                        <div class=" mt-4">
                            <input type="text" id="transcation_id" name="transcation_id"
                                placeholder="please Enter your Transcation Id " class="form-control" required />


                        </div>



                        <div class="text-center" style="text-align:center">
                            <button type="submit" class="btn btn-active sign-button pl-4 pr-4 mt-2"
                                onclick="return selectPaymentType();">Pay Now</button>
                        </div>

                </div>
            </div>
                </div>
                
            <div class="cntr col-12  col-md-4 col-lg-4 col-sm-12 mb-10">
            <div class="shipping-summary">
                <div class="card">


                    <div class="summary">
                        <p class="checkout-title">Cart Summary</p>
                        <hr />
                        <div class="summary-info">
                            <div class="d-flex">
                                <p class="text">Subtotal: </p>
                                <p class="amount subtotal">Tk. <?php echo $purchase_price; ?></p>
                                <input class="form-control" type="hidden" name="purchase_price" id="purchase_price"
                                    value="<?php echo $purchase_price; ?>">
                                <input class="form-control" type="hidden" name="giftcard_value" id="giftcard_value"
                                    value="<?php echo $giftcard_value; ?>">
                                    <input class="form-control" type="hidden" name="giftcard_name" id="giftcard_value"
                                    value="<?php echo $giftcard_name; ?>">
                                <input class="form-control" type="hidden" name="duration" id="duration"
                                    value="<?php echo $duration; ?>">
                                <input class="form-control" type="hidden" name="name" id="name"
                                    value="<?php echo $name; ?>">
                                <input class="form-control" type="hidden" name="giftcard_id" id="giftcard_id"
                                    value="<?php echo $id; ?>">
                            </div>

                            <hr class="hr-line" />
                        </div>
                    </div>
                </div>
            </div>
                </div>
                </div>
        </div>

        </form>
    </div>
</div>
@include('layout.front.footer');
@endsection
@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<div id="confirmation">

    <div class="content-section">
        <div class="card">
         
            <div class="row col-12 col-md-12 col-xl-12 col-lg-12">
                <div class="row col-12 col-md-06 col-xl-12 col-lg-12">
                    <div class="order-info  col-12 col-lg-6 col-md-6 col-sm-12" style="margin-top: 10px;margin-bottom: 10px;">
                        <img src="{{ asset('public/image/frontLogos/order_confirmation.png')}}" alt="confirmation_image"
                            class="img-fluid">

                        <div>
                            <p class="title text-capitalize">Your Order has been placed</p>
                        </div>

                        <p class="order-id">Order ID: <strong>{{$orderDetails->order_id}}</strong></p>

                        <div>
                            <p class="desc">Our customer care will call you shortly</p>
                        </div>
                    </div>
                    <div class="cart-summary  col-12 col-lg-6 col-md-6 col-sm-12">
                        <p class="title">Order Summary</p>
                        <div class="summary-info col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="d-flex text-wrapper">
                            @if(!empty($order->coupon_code))
                                <p class="text">Subtotal:</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                                @else
                                <p class="text">Subtotal With Coupon Code(-):</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                                @endif
                            </div>
                            <div class="d-flex text-wrapper">
                                <p class="text">Vat({{$gs->vat}}%):</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->vat}}</p>
                            </div>
                            <div class="d-flex text-wrapper">
                                <p class="text">Shipping:</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->shipping}}</p>
                            </div>
                            <div class="d-flex text-wrapper">
                                <p class="text">Giftcard Balance:</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->giftcard_amount}}</p>
                            </div>
                            
                            <div class="d-flex text-wrapper">
                                <p class="text">Total:</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                    {{$orderDetails->grand_total  - $orderDetails->giftcard_amount}}</p>
                            </div>
                            <div class="d-flex text-wrapper payable-total">
                                <p class="text">Payable Total:</p>
                                <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                    {{$orderDetails->grand_total - $orderDetails->giftcard_amount}}</p>
                            </div>
                            <p class="delivery-date">Thanks for being with {{$gs->site_title}}</p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

</div>

@endsection
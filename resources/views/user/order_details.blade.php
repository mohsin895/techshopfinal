@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<div id="confirmation">

<div class="content-section">
    <div class="card">
        <siv class="d-flex align-items-center ml-0 mr-0">
            <div class="order-info card-body w-50 text-center">
                <img src="{{ asset('public/image/frontLogos/order_confirmation.png')}}" alt="confirmation_image" class="img-fluid">
                
                <div>
                    <p class="title text-capitalize">Your Order has been placed</p>
                </div>
                
                <p class="order-id">Order ID: <strong>{{$orderDetails->order_id}}</strong></p>
                
                <div>
                    <p  class="desc">Our customer care will call you shortly</p>
                </div>
            </div>
            <div class="cart-summary card-body w-50 text-center pl-0 pr-0">
                <p class="title">Order Summary</p>
                <div class="summary-info">
                    <div class="d-flex text-wrapper">
                        <p class="text">Subtotal:</p>
                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
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
                    <!--<div class="d-flex text-wrapper">
                        <p class="text">Coupon Discount:</p>
                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; 150.00</p>
                    </div> -->
                    <div class="d-flex text-wrapper">
                        <p class="text">Total:</p>
                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->grand_total  - $orderDetails->giftcard_amount}}</p>
                    </div>
                    <div class="d-flex text-wrapper payable-total">
                        <p class="text">Payable Total:</p>
                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->grand_total - $orderDetails->giftcard_amount}}</p>
                    </div>
                    <p class="delivery-date">Thanks for being with {{$gs->site_title}}</p>
                </div>
            </div>
        </siv>
    </div>
</div>

</div>

@endsection
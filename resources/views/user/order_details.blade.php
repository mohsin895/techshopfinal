@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<div id="confirmation">

    <div class="content-section">
        <div class="card">

            <div class="row col-12 col-md-12 col-xl-12 col-lg-12" style="width:100%">
                <div class="order-info  col-12 col-lg-6 col-md-6 col-sm-12 text-center">
                    <div style="margin: 25%;">
                        <img src="{{ asset('public/image/frontLogos/order_confirmation.png')}}" alt="confirmation_image"
                            class="img-fluid" style="display: block; margin-left: auto; margin-right: auto;">

                        <div>
                            <p class="title text-capitalize" style="text-align:center">Your Order has been placed</p>
                        </div>

                        <p class="order-id" style="text-align:center">Order ID: <strong>{{$orderDetails->order_id}}</strong></p>

                        <div>
                            <p class="desc" style="text-align:center">Our customer care will call you shortly</p>
                        </div>
                    </div>
                </div>
                <div class="cart-summary  col-12 col-lg-6 col-md-6 col-sm-12"
                    style="padding-top: 2%; padding-bottom: 2%;">
                    <h6 class="title text-center" style="text-align:center;color:#D20A7D">Order Summary</h6>
                    <div class="summary-info col-12 col-lg-12 col-md-12 col-sm-12">

                        <table class="table">

                            <tbody>
                          @php   $vat= ($orderDetails->subtotal*$gs->vat)/ 100 ; @endphp

                            @if($gs->cart_page_vat==1)
                                @if(empty($orderDetails->coupon_code))
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Subtotal:</p>
                                    </th>


                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Subtotal:</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                                    </td>


                                </tr>
                                @if($orderDetails->amount_type == 'fixed')

                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Discount(off):</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp;- {{$orderDetails->amount}}</p>
                                    </td>


                                </tr>
                                
                                @else

                                <?php $total_amount_couponcode = ($orderDetails->subtotal*$orderDetails->amount)/100 ; ?>
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Discount({{$orderDetails->amount}} % off):</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount"> {{$gs->currency}}&nbsp;&nbsp;- &nbsp;{{$total_amount_couponcode}} </p>
                                    </td>


                                </tr>



                                @endif

                               
                                @endif
                                @else 

                                @if(empty($orderDetails->coupon_code))
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Subtotal:</p>
                                    </th>


                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Subtotal:</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal }}</p>
                                    </td>


                                </tr>
                                @if($orderDetails->amount_type == 'fixed')

                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Discount(off):</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp;- {{$orderDetails->amount}}</p>
                                    </td>


                                </tr>
                                
                                @else

                                <?php $total_amount_couponcode = ($orderDetails->subtotal*$orderDetails->amount)/100 ; ?>
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Discount({{$orderDetails->amount}} % off):</p>
                                    </th>

                                    <td></td>
                                    <td></td>
                                    <td>

                                        <p class="amount"> {{$gs->currency}}&nbsp;&nbsp;- &nbsp;{{$total_amount_couponcode}} </p>
                                    </td>


                                </tr>



                                @endif

                               
                                @endif





                                @endif



                                @if($gs->cart_page_vat==1)
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Vat({{$gs->vat}}%):</p>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->vat}}</p>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <th scope="row">
                                        <p class="text" style="margin-left:10px">Shipping:</p>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->shipping}}</p>
                                    </td>
                                </tr>
                                @if(!empty($orderDetails->giftcard_amount))
                                <tr>
                                    <th scope="row">

                                        <p class="text" style="margin-left:10px">Giftcard Balance:</p>

                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            -{{$orderDetails->giftcard_amount}}</p>
                                    </td>
                                </tr>
                                @else
                                @endif
                                <tr>
                                    <th scope="row">

                                        <p class="text" style="margin-left:10px">Total:</p>

                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            {{$orderDetails->grand_total  - $orderDetails->giftcard_amount}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="payable-total">

                                        <p class="text" style="color: #000000;font-weight: 700;">Payable Total:</p>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p class="amount" style="color: #000000;font-weight: 700;">{{$gs->currency}}&nbsp;&nbsp;
                                            {{$orderDetails->grand_total - $orderDetails->giftcard_amount}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- 
                        <div class="d-flex text-wrapper">
                            @if(!empty($order->coupon_code))
                            <p class="text" style="margin-left:10px">Subtotal:</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                            @else
                            <p class="text" style="margin-left:10px">Subtotal With Coupon Code(-):</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->subtotal}}</p>
                            @endif
                        </div> -->
                        <!-- <div class="d-flex text-wrapper">
                            <p class="text" style="margin-left:10px">Vat({{$gs->vat}}%):</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->vat}}</p>
                        </div> -->
                        <!-- <div class="d-flex text-wrapper">
                            <p class="text" style="margin-left:10px">Shipping:</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->shipping}}</p>
                        </div> -->
                        <!-- <div class="d-flex text-wrapper">
                            <p class="text" style="margin-left:10px">Giftcard Balance:</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$orderDetails->giftcard_amount}}</p>
                        </div> -->

                        <!-- <div class="d-flex text-wrapper">
                            <p class="text" style="margin-left:10px">Total:</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                {{$orderDetails->grand_total  - $orderDetails->giftcard_amount}}</p>
                        </div>
                        <div class="d-flex text-wrapper payable-total">
                            <p class="text">Payable Total:</p>
                            <p class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                {{$orderDetails->grand_total - $orderDetails->giftcard_amount}}</p>
                        </div>  -->
                        <h6 class="delivery-date text-center" style="text-align:center;color:#D20A7D">Thanks for being
                            with {{$gs->site_title}}</h6>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
@include('layout.front.footer')
@endsection
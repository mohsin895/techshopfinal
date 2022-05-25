@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<div id="shipping" class=" ">
    <div class="content-section shippingorder shippingcheckout">
        <div class="address-section d-flex justify-content-between">
            <div class="row col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="col-12 col-md-8 col-lg-8 col-sm-12 mb-5">
                    <div class="card js--shipping-card">
                        <div class="card-header d-flex align-items-center">
                            <p class="address-title">Shipping Address</p>
                            <button type="button" class="btn js--btn-shipping"><i class="fa fa-angle-up"></i></button>
                        </div>
                        <div class="card-body js--shipping-body">
                            <p class="body-title">Fill out your information</p>
                            <form action="{{route('user.checkout')}}" method="post">
                                @csrf
                                <div class="form-inline">
                                    <input type="text" id="name" name="name" placeholder="Name"
                                        value="{{Auth::user()->name}}" class="form-control form-control-sm form-control-md" />
                                    <input type="email" name="email" placeholder="Email" value="{{Auth::user()->email}}"
                                        class="form-control form-control-sm form-control-md" disabled />
                                </div>

                                <input id="discount_value" type="hidden" value="0" />

                                <div class="form-inline mt-4">
                                    <input type="text" id="phone" name="phone" placeholder="Phone"
                                        value="{{Auth::user()->phone}}" class="form-control" />
                                    <input type="text" id="country" name="country" value="Bangladesh"
                                        class="form-control" />
                                </div>
                                <div class="form-inline mt-4">
                                    <input type="text" id="city" name="city" placeholder="City"
                                        value="{{Auth::user()->city}}" class="form-control" required />
                                    <input type="text" id="postCode" name="postcode" placeholder="Post Code"
                                        value="{{Auth::user()->postcode}}" class="form-control" required />
                                </div>

                                <div class="form-inline mt-4">
                                    <textarea rows="2" class="form-control" name="address1" placeholder="Address1"
                                        id="address1" required>{{Auth::user()->address1}}</textarea>
                                    <textarea rows="2" class="form-control" name="address2" placeholder="Address2"
                                        id="address2" required>{{Auth::user()->address2}}</textarea>
                                </div>

                        </div>
                    </div>
                </div>
                <div class="col-12  col-md-4 col-lg-4 col-sm-12 mb-10 ">
                    <div class="shipping-summary ">
                        <div class="card ">
                            <?php $total_amount = 0;  ?>
                            @foreach($userCart as $cart)

                            <?php $total_amount =  $total_amount + ($cart->price*$cart->quantity); ?>
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>

                            @endforeach

                            <div class="summary">
                                <p class="summary-title">Cart Summary</p>
                                <hr />
                                <div class="summary-info">
                                    <div class="d-flex">
                                        <p class="text">Subtotal: </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount; ?>
                                        </p>
                                        <input class="form-check-input" type="hidden" name="subtotal" id="express"
                                            value="<?php echo $total_amount; ?>">
                                        <input class="form-check-input" type="hidden" name="total_buying_price"
                                            id="express" value="<?php echo $total_buying_amount; ?>">
                                    </div>
                                    <div class="d-flex">
                                        <p class="text">vat({{$gs->vat}}%): </p>
                                        <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            <?= $vat= ($total_amount*$gs->vat)/ 100  ?></p>
                                        <input type="hidden" name="vat" id="express" value="{{$vat}}">
                                    </div>

                                    <div class="d-flex">
                                        <p class="text">Shipping Charge({{$delivery}}): </p>

                                        </p>
                                        @if($delivery =="flat")
                                        <p class="amount shippingCharge">{{$gs->currency}}&nbsp;&nbsp;
                                            {{$sc->flat_rate}}</p>
                                        <input class="form-check-input" type="hidden" name="shipping" id="express"
                                            value="{{$sc->flat_rate}}">
                                        <input class="form-check-input" type="hidden" name="delivery" value="flat">
                                        @else
                                        <p class="amount shippingCharge">{{$gs->currency}}&nbsp;&nbsp;
                                            {{$sc->express_delivery}}
                                        </p>
                                        <input class="form-check-input" type="hidden" name="shipping" id="express"
                                            value="{{$sc->express_delivery}}">
                                        <input class="form-check-input" type="hidden" name="delivery" value="express">
                                        @endif
                                    </div>
                                    <div class="d-flex">
                                        <p class="text">Total: </p>
                                        @if($delivery =="flat")
                                        {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+$sc->flat_rate + $vat ; ?>
                                        @else
                                        {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+$sc->express_delivery + $vat; ?>

                                        @endif

                                    </div>
                                    <div class="d-flex">
                                        @if(!empty($giftcard))

                                        <p class="text">Gift Card Balance: </p>
                                        <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp; {{$giftcard}} </p>
                                        @else

                                        @endif


                                    </div>
                                    <div class="d-flex">
                                        <p class=" text text-black" style="font-size:20px;font-weight:bold">Payable
                                            Total: </p>

                                        <p class=" amount text-black" style="font-size:20px;font-weight:bold">
                                            @if($delivery =="flat")
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo ($total_amount+$sc->flat_rate + $vat) - $giftcard ; ?>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount+$sc->flat_rate + $vat ; ?>"
                                                value="<?php echo $total_amount+$sc->flat_rate + $vat ; ?>">
                                            @else
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo ($total_amount+$sc->express_delivery + $vat)- $giftcard; ?>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount+$sc->express_delivery + $vat ; ?>"
                                                value="<?php echo $total_amount+$sc->express_delivery + $vat ; ?>">

                                            @endif
                                        </p>
                                        <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                            data-original="<?php echo $total_amount+$sc->flat_rate + $vat ; ?>"
                                            value="<?php echo $total_amount+$sc->flat_rate + $vat ; ?>">


                                    </div>




                                    <hr class="hr-line" />
                                    <a href="{{route('user.order')}}" class="btn btn-danger">Back To Review</a>
                                    <button type="submit" class="btn btn-confirm__order btn btn-success">
                                        <span>Confirm Order</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>


    @endsection
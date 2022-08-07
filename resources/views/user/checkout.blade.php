@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<style>
.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    left: -10000px;
    overflow: hidden;
}

.control,
fieldset {
    margin: 6px 0;
}

label {
    display: inline-block;
    width: auto;
    vertical-align: top;
}

.required {
    color: red;
}
</style>
<div id="shipping" class=" " style="margin-bottom:400px">
    <div class="content-section shippingorder shippingcheckout tab-margin-fix">
        <div class="address-section d-flex justify-content-between">
            <div class="row col-12 col-lg-12 col-md-12 col-sm-12">


           
                <div class="col-12 col-md-8 col-lg-8 col-sm-12 mb-5 cntr">
                    <div class="">
                        <div class="card js--shipping-card tab-fix-containership">
                            <div class="card-header d-flex align-items-center">
                                <p class="address-title checkout-order-title">Shipping Address</p>

                            </div>
                            <div class="card-body js--shipping-body">
                                <p class="body-title">Fill out your information (<span
                                        class="required">*</span>Required)</p>
                                <form action="{{route('user.checkout')}}" method="post">
                                    @csrf

                                    <div class="form-row checout-form-address">
                                        <div class="form-group col-md-6 col-lg-6">
                                            <label for="inputEmail4">Name<span class="required">*</span></label>
                                            <input type="text" id="name" name="name" placeholder="Name"
                                                value="{{Auth::user()->name}}" class="form-control " required>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6">
                                            <label for="inputPassword4">Email<span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Email"
                                                value="{{Auth::user()->email}}" class="form-control " disabled required>
                                        </div>
                                    </div>


                                    <!-- <div class="form-inline">
                                    <input type="text" id="name" name="name" placeholder="Name"
                                        value="{{Auth::user()->name}}" class="form-control " />
                                    <input type="email" name="email" placeholder="Email" value="{{Auth::user()->email}}"
                                        class="form-control " disabled />
                                </div> -->

                                    <!-- <input id="discount_value" type="hidden" value="0" /> -->
                                    <div class="form-row checout-form-address">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Mobile Number<span
                                                    class="required">*</span></label>
                                            <input type="text" id="phone" name="phone" placeholder="Phone"
                                                value="{{Auth::user()->phone}}" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Country<span class="required">*</span></label>
                                            <input type="text" id="country" name="country" value="Bangladesh"
                                                class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- <div class="form-inline mt-4">
                                    <input type="text" id="phone" name="phone" placeholder="Phone"
                                        value="{{Auth::user()->phone}}" class="form-control" />
                                    <input type="text" id="country" name="country" value="Bangladesh"
                                        class="form-control" />
                                </div> -->
                                    <div class="form-row checout-form-address">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">City<span class="required">*</span></label>
                                            <input type="text" id="city" name="city" placeholder="City"
                                                value="{{Auth::user()->city}}" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Post Code<span class="required">*</span></label>
                                            <input type="text" id="postCode" name="postcode" placeholder="Post Code"
                                                value="{{Auth::user()->postcode}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- <div class="form-inline mt-4">
                                    <input type="text" id="city" name="city" placeholder="City"
                                        value="{{Auth::user()->city}}" class="form-control" required />
                                    <input type="text" id="postCode" name="postcode" placeholder="Post Code"
                                        value="{{Auth::user()->postcode}}" class="form-control" required />
                                </div> -->

                                    <div class="form-row checout-form-address">
                                        <div class="form-group col-md-12 ">
                                            <label for="inputEmail4">Billing Address<span
                                                    class="required">*</span></label>
                                            <textarea rows="2" class="form-control" name="address1" id="address1"
                                                placeholder=" Billing Address" id="address1"
                                                required>{{Auth::user()->address1}}</textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Shipping Address(

                                                <label class="form-check-label" for="copyAddress">Same as Billing
                                                    Address Click here</label> &nbsp;&nbsp;&nbsp;&nbsp;
                                                <input value="" type="checkbox" class="form-check-input"
                                                    id="copyAddress">
                                                )


                                                <span class="required">*</span></label>
                                            <textarea rows="2" class="form-control" name="address2" id="address2"
                                                placeholder=" Shipping Address" id="address2"
                                                required>{{Auth::user()->address2}}</textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="form-inline mt-4">
                                    <textarea rows="2" class="form-control" name="address1" placeholder="Address1"
                                        id="address1" required>{{Auth::user()->address1}}</textarea>
                                    <textarea rows="2" class="form-control" name="address2" placeholder="Address2"
                                        id="address2" required>{{Auth::user()->address2}}</textarea>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
                @php
                $coupon = App\Models\CouponCode::where('coupon_code',$couponCode)->first();


                @endphp

                <div class="cntr col-12  col-md-4 col-lg-4 col-sm-12 mb-10">
                    <div class="shipping-summary cntr">
                        <div class="card tab-card">
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            @if(!empty($coupon))
                            <input type="hidden" name="coupon_code" value="{{$coupon->coupon_code}}">
                            <input type="hidden" name="amount_type" value="{{$coupon->amount_type}}">
                            <input type="hidden" name="amount" value="{{$coupon->amount}}">


                            @else

                            @endif

                            <?php $total_amount = 0;  ?>
                            @foreach($userCart as $cart)
                            
                          
                            <?php $total_amount =  $total_amount + ($cart->price*$cart->quantity); ?>
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>
                            @php 
                            $vat= ($total_amount*$gs->vat)/ 100 ;
                            
                            @endphp
                            @if($gs->cart_page_vat==1)
                            @if(!empty($coupon))
                            @if($coupon->amount_type=='fixed')
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>
                            <?php $total_amount_couponcode =  $total_amount  - $coupon->amount ; ?>
                            @elseif($coupon->amount_type=='percentage')
                            <?php $total_amount_couponcode =  $total_amount - ($total_amount*$coupon->amount)/100 ; ?>
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>
                            @else

                            @endif
                            @endif

                            @else

                            @if(!empty($coupon))
                            @if($coupon->amount_type=='fixed')
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>
                            <?php
                             $total_amount_couponcode =  $total_amount - $coupon->amount ;
                         
                            
                             ?>
                            @elseif($coupon->amount_type=='percentage')
                            <?php $total_amount_couponcode =  $total_amount - (($total_amount + $vat)*$coupon->amount)/100 ; ?>
                            <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>
                            @else

                            @endif
                            @endif


                            @endif

                            
                            @endforeach

                            <div class="summary">
                                <p class=" checkout-title" >Cart Summary</p>
                                <hr />
                                <div class="summary-info">
                                    @if($gs->cart_page_vat==1)
                                    @if(empty($coupon))
                                    <div class="d-flex">

                                        <p class="text">Subtotal: </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount; ?>
                                        </p>

                                    </div>
                                    @else
                                    <div class="d-flex">
                                        <p class="text">Subtotal: </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount; ?>
                                        </p>
                                    </div>
                                    @if($coupon->amount_type=='fixed')
                                    <div class="d-flex">

                                        <p class="text">Discount(<?php echo $coupon->amount; ?> &nbsp;{{$gs->currency}}&nbsp;off):<br>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Remove Coupon
                                            </button>
                                        </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                           - <?php echo $coupon->amount; ?>
                                        </p>

                                        <input class="form-check-input" type="hidden" name="discount_amount"
                                        id="express" value="<?php echo $coupon->amount; ?>">
                                    </div>
                                    @else
                                    <div class="d-flex">

                                        <p class="text">Discount( <?php echo $coupon->amount; ?>% off):<br>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Remove Coupon
                                            </button>
                                     

                                        </p>
                                        <p class="amount subtotal">{{$gs->currency}}
                                           - <?php echo ($total_amount - $total_amount_couponcode); ?>
                                        </p>

                                        
                                        <input class="form-check-input" type="hidden" name="discount_amount"
                                        id="express" value="<?php echo ($total_amount - $total_amount_couponcode); ?>">
                                    </div>

                                    @endif
                                    <div class="d-flex">







                                    </div>

                                    @endif


                                    @if(!empty($coupon))

                                    <input class="form-check-input" type="hidden" name="subtotal_with_coupon"
                                        id="express" value="<?php echo $total_amount_couponcode; ?>">

                                    @endif

                                    <input class="form-check-input" type="hidden" name="subtotal" id="express"
                                        value="<?php echo $total_amount; ?>">
                                    <input class="form-check-input" type="hidden" name="total_buying_price" id="express"
                                        value="<?php echo $total_buying_amount; ?>">

                                    <div class="d-flex">
                                        <p class="text">vat({{$gs->vat}}%): </p>
                                        <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            <?= $vat= ($total_amount*$gs->vat)/ 100  ?></p>
                                        <input type="hidden" name="vat" id="express" value="{{$vat}}">
                                    </div>
                                    @else

                                    @if(empty($coupon))
                                    <div class="d-flex">

                                        <p class="text">Subtotal: </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount + $vat; ?>
                                        </p>

                                    </div>
                                    @else
                                    <div class="d-flex">
                                        <p class="text">Subtotal: </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount + $vat; ?>
                                        </p>
                                    </div>
                                    @if($coupon->amount_type=='fixed')
                                    <div class="d-flex">

                                        <p class="text">Discount(<?php echo $coupon->amount; ?> &nbsp;{{$gs->currency}}&nbsp;off):<br>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Remove Coupon
                                            </button>
                                        </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                           - <?php echo $coupon->amount; ?>
                                        </p>

                                        
                                        <input class="form-check-input" type="hidden" name="discount_amount"
                                        id="express" value="<?php echo $coupon->amount; ?>">
                                    </div>
                                    @else
                                    <div class="d-flex">

                                        <p class="text">Discount( <?php echo $coupon->amount; ?>% off):<br>

                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Remove Coupon
                                            </button>

                                        </p>
                                        <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                            - <?php echo ($total_amount - $total_amount_couponcode); ?>
                                        </p>

                                        
                                        <input class="form-check-input" type="hidden" name="discount_amount"
                                        id="express" value="<?php echo ($total_amount - $total_amount_couponcode); ?>">
                                    </div>

                                    @endif
                                    <div class="d-flex">


                                    </div>
                                    @endif

                                    @if(!empty($coupon))

                                    <input class="form-check-input" type="hidden" name="subtotal_with_coupon"
                                        id="express" value="<?php echo $total_amount_couponcode; ?>">

                                    @endif

                                    <input class="form-check-input" type="hidden" name="subtotal" id="express"
                                        value="<?php echo $total_amount + $vat; ?>">
                                    <input class="form-check-input" type="hidden" name="total_buying_price" id="express"
                                        value="<?php echo $total_buying_amount; ?>">

                                    <input type="hidden" name="vat" id="express" value="{{$vat}}">

                                    @endif

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
                                        @if(empty($coupon))
                                        @if($delivery =="flat")
                                        <p class="amount">
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+$sc->flat_rate + $vat ; ?>
                                        </p>
                                        @else
                                        <p class="amount">
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+$sc->express_delivery + $vat; ?>
                                        </p>

                                        @endif
                                        @else

                                        @if($delivery =="flat")
                                        <p class="amount">
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount_couponcode +$sc->flat_rate + $vat ; ?>
                                        </p>
                                        @else
                                        <p class="amount">
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount_couponcode +$sc->express_delivery + $vat; ?>
                                        </p>

                                        @endif

                                        @endif

                                    </div>
                                    <div class="d-flex">
                                        @if(!empty($giftcard))

                                        <p class="text">Gift Card Balance: </p>
                                        <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            - {{$giftcard}} </p>
                                        <input class="form-check-input" type="hidden" name="giftcard_amount"
                                            value="{{$giftcard}}">

                                     
                                            <input  type="hidden"  name="is_used"
                                            value="yes">
                                            <input  type="hidden" name="gift_card_user_id"
                                            value="{{$gift->user_id}}">
                                            <input  type="hidden" name="gift_card_id"
                                            value="{{$gift->id}}">
                                            <input  type="hidden" name="giftcard_name"
                                            value="{{$gift->name}}">
                                            <input  type="hidden" name="giftcard_purchase_price"
                                            value="{{$gift->purchase_price}}">

                                   
                                        @else

                                        @endif


                                    </div>
                                    <div class="d-flex">
                                        <p class=" text" style="font-size:20px;font-weight:bold;color:#D20A7D">
                                            Payable
                                            Total: </p>

                                        <p class=" amount" style="font-size:20px;font-weight:bold;color:#D20A7D">

                                            @if(empty($coupon))
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
                                            @else


                                            @if($delivery =="flat")

                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo ($total_amount_couponcode+$sc->flat_rate + $vat) - $giftcard ; ?>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount_couponcode+$sc->flat_rate + $vat ; ?>"
                                                value="<?php echo $total_amount_couponcode+$sc->flat_rate + $vat ; ?>">
                                            @else
                                            {{$gs->currency}}&nbsp;&nbsp;<?php echo ($total_amount_couponcode+$sc->express_delivery + $vat)- $giftcard; ?>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount_couponcode+$sc->express_delivery + $vat ; ?>"
                                                value="<?php echo $total_amount_couponcode+$sc->express_delivery + $vat ; ?>">

                                            @endif
                                            @endif
                                        </p>



                                    </div>




                                    <hr class="hr-line" />
                                    <div class="text-center" style="text-align:center">
                                        <a href="{{route('user.order')}}" class="tab-btn btn btn-danger">Back To
                                            Review</a>
                                        <button type="submit" class="tab-btn btn btn-confirm__order btn btn-success">
                                            <span>Confirm Order</span>
                                        </button>
                                    </div>

                                    </form>
                                    <div class="card-body js--shipping-body">
                                        @include('error.message')
                                        &nbsp;&nbsp;&nbsp;

                                        <form action="{{route('user.cart.applyCoupon')}}" method="POST">
                                            @csrf

                                            <div class="d-flex">


                                                <input type="text" name="coupon_code" class="form-control"
                                                    value=""><button type="submit" class="btn btn-warning">Coupon
                                                </button>
                                            </div>

                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>




        </div>
    </div>
</div>
</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('user.coupon.delete')}}">
                @csrf
                <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="font-size:20px">
                    Are you willing to remove the coupon code ?
                </div>
                <hr>
                <div class="text-center mb-3" style="text-align:center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                                    
                </div>
            </form>
        </div>
    </div>
</div>
@include('layout.front.footer')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function deleteSales(url) {
    if (confirm('Are you sure?')) {
        $.ajax({
            type: "POST",
            url: url,
            success: function(result) {
                location.reload();
            }
        });
    }
}
</script>

@endsection
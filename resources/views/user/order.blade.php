@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')


<div id="shipping" class="shippingorder">
    <div class="content-section">
        <div class="address-section d-flex justify-content-between">
            <div class="row col-12 col-lg-12 col-md-12 col-sm-12">
                
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 mt-2">
                    <form action="{{route('user.order')}}" method="post">
                        @csrf
                        <div class="shipping-summary ">
                            <div class="card">
                                <?php $total_amount = 0;  ?>
                                @foreach($userCart as $cart)

                                <?php $total_amount =  $total_amount + ($cart->price*$cart->quantity); ?>
                                <?php $total_buying_amount = ($cart->buying_price*$cart->quantity); ?>

                                @endforeach

                                <div class="summary ">
                                    <p class="summary-title">Order Summery</p>
                                    <hr />
                                    <div class="summary-info">
                                        <div class="d-flex">
                                            <p class="text">Subtotal: </p>
                                            <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                                <?php echo $total_amount; ?></p>
                                            <input class="form-check-input" type="hidden" name="subtotal"
                                                value="<?php echo $total_amount; ?>">
                                            <input class="form-check-input" type="hidden" name="total_buying_price"
                                                value="<?php echo $total_buying_amount; ?>">
                                        </div>
                                        <div class="d-flex">
                                            <p class="text">vat({{$gs->vat}}%): </p>
                                            <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                                <?= $vat= ($total_amount*$gs->vat)/ 100  ?></p>
                                            <input type="hidden" name="vat" value="{{$vat}}">
                                        </div>


                                        <div class="d-flex">
                                            <p class="text">Total: </p>
                                            <p class="amount price-total">{{$gs->currency}}&nbsp;&nbsp;
                                                <?php echo $total_amount+ $vat; ?></p>
                                        </div>
                                        <div class="d-flex">
                                            @if($total_amount > $toatlbalancegiftcard)
                                            <input name="giftcard_amount" type="checkbox" id="ser1"
                                                data-price="{{$toatlbalancegiftcard}}" value="{{$toatlbalancegiftcard}}"
                                                title="Service 1" />
                                            <p class="text">Gift Card Balance: </p>
                                            <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                                {{$toatlbalancegiftcard}} </p>
                                            @else

                                            @endif


                                        </div>
                                        <div class="d-flex">
                                            <p class=" text text-black" style="font-size:20px;font-weight:bold">Payable
                                                Total: </p>

                                            <p class=" amount text-black" style="font-size:20px;font-weight:bold">
                                                <label class="giftcard"
                                                    data-original="<?php echo $total_amount+ $vat ; ?>">{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+ $vat; ?></label>
                                            </p>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount + $vat ; ?>"
                                                value="<?php echo $total_amount+$vat ; ?>">


                                        </div>


                                        <hr class="hr-line" />
                                        @if($total_amount > $toatlbalancegiftcard)

                                        @else <p class="text " style="font-size:15px;font-weight:bold">Gift Card
                                            Balance:
                                            {{$gs->currency}}&nbsp;&nbsp; {{$toatlbalancegiftcard}} </p>
                                        <p id="discount" class="amount text-danger"
                                            style="font-size:15px;font-weight:bold">
                                            N.B.: To enable your Gift Card balance, your Subtotal balance have to
                                            greater
                                            than Gift Card balance . </p>

                                        @endif
                                        <label for="delivery" class="ml-0 mr-0">Select Deliver Method: </label>

                                        <div class="form-inline delivery-check">


                                            <div class="form-check form-check-inline ml-3">
                                                <input class="form-check-input" type="radio" name="delivery" id="flat"
                                                    value="flat">
                                                <label class="form-check-label" for="flat">Flat Rate:
                                                    {{$gs->currency}}&nbsp;&nbsp; {{$sc->flat_rate}}</label>
                                            </div>
                                            <div class="form-check form-check-inline ml-3">
                                                <input class="form-check-input" type="radio" name="delivery"
                                                    id="express" value="express">
                                                <label class="form-check-label" for="express">Express Delivery:
                                                    {{$gs->currency}}&nbsp;&nbsp; {{$sc->express_delivery}}</label>
                                            </div>
                                        </div>

                                        <p class="delivery-msg" id="flatMsg">
                                            <span>Flat Rate:</span> Delivery in 2-3 (Dhaka city) / 3-5 (outside Dhaka)
                                            working days
                                        </p>
                                        <p class="delivery-msg d-none" id="expressMsg">
                                            <span>Express Delivery:</span> Delivery within 24 Hours (only available in
                                            Dhaka
                                            Metro)
                                        </p>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success pl-4 pr-4 mt-2"
                                                onclick="return selectShippingType();">Continue To Payment


                                            </button>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>


    </div>
</div>

<script>
var subt_value = parseFloat($('.giftcard').text());
var start_price = parseFloat($('.giftcard').attr('data-original'));

$("#ser1").click(function() {
    var amountToAdd = 0.0;
    $("#ser1").each(function() {
        if ($(this).is(":checked")) {
            amountToAdd = parseFloat($(this).attr('data-price'));
        }
    });

    // alert(amountToAdd);

    $('.giftcard').text(parseFloat(start_price - amountToAdd).toFixed(2));
});
</script>

@endsection
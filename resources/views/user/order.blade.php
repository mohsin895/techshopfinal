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
                                    <div class="card-header">
                                        <p class="summary-title">Order Summery</p>
                                    </div>
                                    <hr />
                                    <div class="summary-info">
                                        @php $vat= ($total_amount*$gs->vat)/ 100 @endphp
                                        @if($gs->cart_page_vat==1)
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
                                        @else
                                        <div class="d-flex">
                                            <p class="text">Subtotal: </p>
                                            <p class="amount subtotal">{{$gs->currency}}&nbsp;&nbsp;
                                                <?php echo $total_amount + $vat; ?></p>
                                            <input class="form-check-input" type="hidden" name="subtotal"
                                                value="<?php echo $total_amount; ?>">
                                            <input class="form-check-input" type="hidden" name="total_buying_price"
                                                value="<?php echo $total_buying_amount; ?>">
                                        </div>

                                        @endif



                                        <div class="d-flex">

                                        
                                            @if($giftcardvalue > 0)
                                            <input name="giftcard_amount" type="checkbox" id="ser1"
                                                data-price="{{$giftcardvalue}}" value="{{$giftcardvalue}}"
                                                 style="margin-left:18px" />
                                            <p class="" style="margin-left:-150px;margin-top:2px">Gift Card
                                                Balance: </p>
                                            <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                               - {{$giftcardvalue}} </p>
                                            @else

                                            @endif


                                        </div>
                                        <div class="d-flex">
                                            <p class=" text" style="font-size:20px;font-weight:bold;color:#D20A7D">
                                                Payable
                                                Total: </p>

                                            <p class=" amount" style="font-size:20px;font-weight:bold;color:#D20A7D">
                                                <label class="giftcard"
                                                    data-original="<?php echo $total_amount+ $vat ; ?>">{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount+ $vat; ?></label>
                                            </p>
                                            <input class="form-control giftcard" id="" type="hidden" name="grand_total"
                                                data-original="<?php echo $total_amount + $vat ; ?>"
                                                value="<?php echo $total_amount+$vat ; ?>">


                                        </div>


                                        <hr class="hr-line" />
                                        @if($total_amount > $giftcardvalue)

                                        @else <p class="text" style="font-size:15px;font-weight:bold">Gift Card
                                            Balance:
                                            {{$gs->currency}}&nbsp;&nbsp; {{$giftcardvalue}} </p>
                                        <p id="discount" class="amount text-danger"
                                            style="font-size:15px;font-weight:bold">
                                            N.B.: To enable your Gift Card balance, your Subtotal balance have to
                                            greater
                                            than Gift Card balance . </p>

                                        @endif
                                        <label for="delivery" class="ml-3 mr-0 delivery-method">Select Cash On Deliver
                                            Method:
                                        </label>

                                        <div class="form-inline delivery-check order-delivery-margin">


                                            <div class="form-check form-check-inline ml-3 delivery-method">
                                                <input class="form-check-input" type="radio" name="delivery" id="flat"
                                                    value="flat" onclick="show('Section1');">
                                                <label class="form-check-label" for="flat" style="margin-left:1px">Flat
                                                    Rate:
                                                    {{$gs->currency}}&nbsp;&nbsp; {{$sc->flat_rate}}</label>
                                            </div>
                                            <div class="form-check form-check-inline ml-3 delivery-method">
                                                <input class="form-check-input" type="radio" name="delivery" id="express"
                                                    value="express" onclick="show('Section2');">
                                                <label class="form-check-label" for="express"
                                                    style="margin-left:1px">Express Delivery:
                                                    {{$gs->currency}}&nbsp;&nbsp; {{$sc->express_delivery}}</label>
                                            </div>

                                            <!-- 
                                            <button type="button" class="featuredBtn active mt-3" id="btnOne"
                                                onclick="show('Section1');"><a href="#description"
                                                    class="review-rating-detils-font-color-size">Description</a></button>
                                            <button type="button" class="featuredBtn mt-3" id="btnTwo"
                                                onclick="show('Section2');"><a href="#summery"
                                                    class="review-rating-detils-font-color-size">Summery</a></button> -->



                                        </div>


                                        <div class="mb-3" id="Section1">
                                            <div >

                                                <p class="delivery-msg" style="margin-left:20px">
                                                    <span>Flat Rate:</span> Delivery in 2-3 (Dhaka city) / 3-5 (outside
                                                    Dhaka)
                                                    working days.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mb-3" id="Section2" style="display: none;">
                                            <div  class="description-summery-font-size">
                                                <p class="delivery-msg " >
                                                    <span>Express Delivery:</span> Delivery within 24 Hours (only
                                                    available in
                                                    Dhaka
                                                    Metro)
                                                </p>
                                            </div>

                                        </div>

                                        <!-- <p class="delivery-msg" id="flatMsg" style="margin-left:20px">
                                            <span>Flat Rate:</span> Delivery in 2-3 (Dhaka city) / 3-5 (outside Dhaka)
                                            working days.
                                        </p>
                                        <p class="delivery-msg d-none" id="expressMsg">
                                            <span>Express Delivery:</span> Delivery within 24 Hours (only available in
                                            Dhaka
                                            Metro)
                                        </p> -->

                                        <div class="text-center" style="text-align:center">
                                            <button type="submit"
                                                class="btn sign-button pl-4 pr-4 mt-2 mr-3 order-button-style">Back</button>
                                            <button type="submit"
                                                class="btn sign-button pl-4 pr-4 mt-2 order-button-style"
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

@include('layout.front.footer');

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


<script>
var divs = ["Section1", "Section2"];
var visibleId = null;

function show(id) {
    if (visibleId !== id) {
        visibleId = id;
    }
    hide();
}

function hide() {
    var div, i, id;
    for (i = 0; i < divs.length; i++) {
        id = divs[i];
        div = document.getElementById(id);
        if (visibleId === id) {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
}
</script>

@endsection
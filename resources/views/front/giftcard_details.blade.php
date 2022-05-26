@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<div id="details">
    <div class="content-section">
        <!-- @include('error.message') -->
        <div class="d-flex">

            <div class="row col-12 col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 justify-content-center">
                    <div class="details-image-section">
                        <div class="details-image js--image-details">
                            <img src="{{asset('public/assets/images/giftcard/'.$giftcard->image)}}"
                                alt="Soldering-Iron-Stand.jpg" />

                        </div>



                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                    <form name="addtocart" id="addtocart" action="{{route('user.giftcard.purchase')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$giftcard->id}}">
                        <input type="hidden" name="name" id="name" value="{{$giftcard->name}}">
                        <input type="hidden" name="duration" value="{{$giftcard->duration}}">

                        <input type="hidden" name="purchase_price" value="{{$giftcard->purchase_price}}">
                        <input type="hidden" name="giftcard_value" value="{{$giftcard->giftcard_value}}">


                        <div class="card details-section h-100">
                            <h1 class="product-title">{{$giftcard->name}}</h1>


                            <p class="price">Purchse Price::{{$gs->currency}}&nbsp;&nbsp; {{$giftcard->purchase_price}}
                            <p>

                            <p class="price">GiftCard Value::{{$gs->currency}}&nbsp;&nbsp; {{$giftcard->giftcard_value}}
                            <p>

                            <p class="price">GiftCard Duration:: {{$giftcard->duration}} days
                            <p>

                            <div class="d-flex justify-content-start align-items-end mt-2">

                                </p>
                            </div>




                            <p id="response-message" class="text-success"></p>
                            <span id="cart-wish-list-message"></span>
                            <div class="button">




                                <a class="btn btn-cart d-none"><img
                                        src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}"
                                        alt="icon">Purchase
                                    Now</a>

                                <button type="submit" class="btn btn-cart-login">
                                    <img src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}"
                                        alt="icon">Purchase
                                    Now</button>

                                <!-- <a class="btn btn-back-order d-none">Back
                            Order</a> -->

                            </div>




                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="product-summery mt-5 mb-5">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item m-0">
                    <a class="nav-link active" id="summery-tab" data-toggle="tab" href="#summery" role="tab"
                        aria-controls="summery" aria-selected="true">summary</a>
                </li>

                <li class="nav-item m-0">
                    <a class="nav-link" id="doc-tab" data-toggle="tab" href="#doc" role="tab" aria-controls="doc"
                        aria-selected="false">Documents</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="summery" role="tabpanel" aria-labelledby="summery-tab">
                    <div class="content-section">
                        <p>
                            {{$giftcard->summery}}
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                    <div class="content-section">
                        <p></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="doc" role="tabpanel" aria-labelledby="doc-tab">
                    <div class="content-section">


                        <p>
                            <a target="_blank"
                                href="http://www.sparkfun.com/tutorials/106"><span>{{$giftcard->document}}</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>



@endsection
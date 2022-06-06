@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="cart">

    <div class="content-section">
        <div class="cart-wrapper d-flex justify-content-between">

            <div class="row col-sm-12 col-md-12 col-lg-12">
                <div class="col-12 col-md-8 col-lg-8 col-sm-12">
                    <div class="cart-section">
                        <?php $total_amount = 0;  ?>
                        <div class="cart-details card mb-5">
                            <div class="header d-flex justify-content-between align-items-center w-100">
                                <p class="ml-0">Shopping Cart</p>
                                @include('error.message')
                                <!-- <p id="big-total" class="mr-0">Total: {{$gs->currency}}&nbsp;&nbsp;
                                    <?php echo $total_amount; ?></p> -->
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>

                                    @foreach($userCart as $cart)
                                    @php
                                    $product = APp\Models\Product::find($cart->product_id);
                                    @endphp
                                    <tr id="cart_product_id693243">
                                        <td>
                                            <a href="{{url('/product/details',$product->slug)}}" target="_blank">
                                                <div class="media">
                                                    <img src="{{asset('public/assets/images/product/'.$product->image)}}"
                                                        alt="product" class="img-fluid">
                                                    <div class="media-body ml-3">
                                                        <p class="product-name">{{$cart->product_name}}</p>
                                                        <p class="model">{{$cart->model_no}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <p class="price 693243">{{$gs->currency}}&nbsp;&nbsp; {{$cart->price}}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex quantity">
                                                <div class="input-group">
                                                    <span class="input-group-btn" id="js--btn-minus__cart">
                                                        <button type="button" class="btn btn-number">
                                                            @if($cart->quantity>1)
                                                            <a href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}">
                                                                <img src="{{ asset('public/image/frontLogos/minus-icon.png')}}"
                                                                    alt="icon"></a>
                                                            @endif
                                                        </button>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control input-number js--input-number__cart"
                                                        value="{{$cart->quantity}}" min="1">
                                                    <span class="input-group-btn" id="js--btn-plus__cart">
                                                        <a href="{{url('/cart/update-quantity/'.$cart->id.'/1')}}">
                                                            <button type="button" name="plus-button"
                                                                class="btn btn-number">
                                                                <img src="{{ asset('public/image/frontLogos/plus-icon.png')}}"
                                                                    alt="icon">
                                                            </button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p id="693243" class="product-total total">{{$gs->currency}}&nbsp;&nbsp;
                                                {{$cart->price*$cart->quantity}}</p>
                                        </td>
                                        <td id="remove-btn"><a href="{{route('cart.delete',$cart->id)}}"><img
                                                    src="{{ asset('public/image/frontLogos/trash-icon.png')}}" alt="icon"></a>
                                        </td>
                                    </tr>
                                    <?php $total_amount =  $total_amount + ($cart->price*$cart->quantity); ?>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-sm-12 ">

                
                    <div class="cart-summary mb-5">
                        <div class="card col-sm-12">
                            <div class="summary">
                                <p class="summary-title">Cart Summary</p>
                                <hr />
                                <div class="summary-info">
                                    <div class="d-flex">
                                        <p class="text">Subtotal: </p>
                                        <p id="subtotal" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount; ?></p>

                                    </div>
                                    <div class="d-flex">
                                        <p class="text">vat({{$gs->vat}}%): </p>
                                        <p id="discount" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            <?= $vat= ($total_amount*$gs->vat)/ 100  ?></p>
                                    </div>

                                    <div class="d-flex">
                                        <p class="text">Total: </p>
                                        <p id="total" class="amount">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount + $vat; ?></p>
                                    </div>
                                    <hr class="hr-line" />
                                    <div class="d-flex">
                                        <p class="payable">Payable Total: </p>
                                        <p id="payable_total" class="total">{{$gs->currency}}&nbsp;&nbsp;
                                            <?php echo $total_amount + $vat; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">

<a href="{{url('/')}}" class="btn btn-cart__next btn-warning m-1">Back to Shopping</a>
<a href="{{route('user.order')}}" class="btn btn-cart__next btn-success m-1">Next Step</a>
</div>
                </div>
            </div>

        </div>
    </div>

    <!-- <section class="help-section">
        <div class="content-section">
            <div class="d-flex justify-content-between align-items-center">
                <div class="media">
                    <img src="{{ asset('image/frontLogos/call-icon.png')}}" alt="icon" class="img-fluid" width="40px">
                    <div class="media-body ml-3">
                        <p class="title text-uppercase mb-0">Help: <span>09678110110</span></p>
                        <p class="small">09.00am - 08.00pm (7 days a week)</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{ asset('image/frontLogos/cash-icon.png')}}" alt="icon" class="img-fluid" width="45px">
                    <div class="media-body ml-3">
                        <p class="title text-uppercase mb-0">Pay cash on delivery</p>
                        <p class="small">Pay cash at your doorstep</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{ asset('image/frontLogos/service-icon.png')}}" alt="icon" class="img-fluid"
                        width="45px">
                    <div class="media-body ml-3">
                        <p class="title text-uppercase mb-0">Service</p>
                        <p class="small">All over Bangladesh</p>
                    </div>
                </div>
                <div class="media">
                    <img src="{{ asset('image/frontLogos/return-icon.png')}}" alt="icon" class="img-fluid" width="">
                    <div class="media-body ml-3">
                        <p class="title text-uppercase mb-0">Warranty and Replacement</p>
                        <p class="small">Up to 1 Year</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    @endsection
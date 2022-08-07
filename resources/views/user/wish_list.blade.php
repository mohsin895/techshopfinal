@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')


<section id="my-profile" class="profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
        @include('user.setting.sider_bar')

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">



            <div class=" col-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="main-content">
                    <div class="browse-header">
                        @include('error.message')
                        <p class="title text-capitalize text-center"></p>



                        <p class="sub-title text-capitalize">You have {{$wish_list}} products in your Wish list</p>

                    </div>



                </div>
            </div>
            <div class="card-group">



                <div class="row col-lg-12">

                    @foreach($wish_list_product as $row)
                    @foreach($row['wishlist'] as $pro)


                    <div class=" col-sm-12 col-md-12  col-lg-12">
                        <div class="main-content">



                            <div class="product-wrapper">

                                <div class="product-list" id="js--row-list">


                                    <div class="card mb-3" style="max-width: 900px;">

                                        <div class="row no-gutters">

                                            <div class="col-md-3">
                                                <a href="{{url('/product/details',$pro->slug)}}">
                                                    <img src="{{asset('public/assets/images/product/'.$pro->image)}}"
                                                        class="card-img" alt="flash Product">
                                                </a>
                                            </div>

                                            <div class="col-md-3">
                                                <a href="{{url('/product/details',$row->slug)}}">
                                                    <div class="card-body">
                                                        <p class="product-name">{{$pro->product_name}}</p>
                                                        <p class="product-model">Model No:
                                                            <span>{{$pro->model_no}}</span>
                                                        </p>

                                                        <p class="product-price">{{$gs->currency}}.&nbsp;&nbsp;
                                                            {{$pro->price}}</p>
                                                    </div>



                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <form name="addtocart" id="addtocart" action="{{route('add-cart')}}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$pro->id}}">
                                                    <input type="hidden" name="product_name"
                                                        value="{{$pro->product_name}}">
                                                    <input type="hidden" name="model_no" value="{{$pro->model_no}}">
                                                    <input type="hidden" name="quantity" value="1">

                                                    <input type="hidden" name="price" value="{{$pro->price}}">
                                                    <input type="hidden" name="product_id" value="{{$pro->id}}">
                                                    <input type="hidden" name="referral_id" value="0">

                                                    <div class="card-body">
                                                        <button type="submit" class="btn btn-warning"><img
                                                                src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}"
                                                                alt="cart_icon" class="img-fluid" /> Add to
                                                            Cart</button>
                                                    </div>




                                                </form>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="{{route('user.wish_list.delete',$row->id)}}"
                                                    class="btn btn-remove mx-auto">
                                                    <div class="card-body">
                                                        <img src="{{ asset('public/image/frontLogos/trash-icon.png')}}"
                                                            alt="cart_icon" class="img-fluid" />Remove
                                                    </div>



                                                </a>
                                            </div>

                                        </div>


                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    @endforeach
                    @endforeach
                </div>


            </div>


        </div>

    </div>
</section>

@include('layout.front.footer');

@endsection
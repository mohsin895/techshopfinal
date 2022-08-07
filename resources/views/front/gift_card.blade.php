@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section id="browse" class="main-content-section">
    <div class="content-section">

        <div class=" col-12 col-sm-12 col-md-12 col-lg-12 ">
            <div class="main-content">
                <div class="browse-header">
                    @include('error.message')
                   
                    <div class="d-flex align-items-center sort-wrapper">
                       
                        <p class="show-count"></p>
                        <form class="form-horizontal" style="text-align:right" action="" id="sortProducts"
                            name="sortProducts">
                            <div class="sort-product">
                                <label for="sort-product" class="mr-2" style="color:#fff">Sort By: </label>
                                <select name="sort" id="sort" class="custom-control custom-select">
                                    <option value="">Any</option>
                                    <option value="product_lowest" @if (isset($_GET['sort']) &&
                                        $_GET['sort']=='product_lowest' ) selected @endif>Price-Low to High
                                    </option>
                                    <option value="price_highest" @if (isset($_GET['sort']) &&
                                        $_GET['sort']=='price_highest' ) selected @endif>Price-High to Low
                                    </option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
        <div class="card-group">



            <div class="row col-lg-12">

                @foreach($giftcard as $row)

                <div class=" col-sm-12 col-md-6  col-lg-6">
                    <div class="main-content">



                        <div class="product-wrapper">

                            <div class="product-list" id="js--row-list">


                                <div class="card mb-3" style="max-width: 900px;">

                                    <div class="row no-gutters">

                                        <div class="col-md-4">
                                            <a href="{{url('/user/giftcard/details',$row->slug)}}">
                                                <img src="{{asset('public/assets/images/giftcard/'.$row->image)}}"
                                                    class="card-img" alt="flash Product">
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="{{url('/user/giftcard/details',$row->slug)}}">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$row->name}}</h5>
                                                    <p class="card-text">GiftCard Value:{{$gs->currency}}
                                                        {{$row->giftcard_value}}</p>
                                                    <p class="card-text" style="color:#D20A7D;font-weight:700">GiftCard Price:
                                                            {{$gs->currency}}{{$row->purchase_price}}</p>
                                                    <p class="card-text" style="color:#D20A7D;font-weight:700"> Duration:
                                                            {{$row->duration}} Days</p>
                                                </div>



                                            </a>
                                        </div>

                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div>

</section>

@include('layout.front.footer')
@endsection
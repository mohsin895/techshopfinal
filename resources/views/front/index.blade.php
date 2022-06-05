@extends('layout.front.master')

@section('content')
@include('layout.front.header')


<section class="main-content-section">
    <div class="content-section ">
        <div class="d-flex category-slider">
            <div class="row" style="width:350% !important">


                <div class=" d-none  d-sm-none  d-lg-block col-lg-3 col-md-3 ">



                    <div class="sidebar-category ml-0">

                        <div class="card categoryfixed">
                            <div class="card-header w-100">
                                <p class="sidebar-title text-uppercase"> <a href="category-list"
                                        class="text-white">Categories</a></p>
                            </div>
                            <div class="menu-bar manures">
                                <ul>
                                    @foreach($categories as $cat)
                                    <li class="active"><a href="{{url('/',$cat->slug)}}">{{$cat->cat_name}} </a>

                                        <div class="sub-menu-1">

                                            <ul>
                                                @foreach($cat['subcategory'] as $subcat)
                                                <li><a href="{{url('/',$subcat->slug)}}">{{$subcat->cat_name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-8  col-lg-8">
                    <div id="js--home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($slider as $row)
                            <!-- <li data-target="#js--home-carousel" data-slide-to="0" class="active"></li> -->
                            <li data-target="#js--home-carousel" data-slide-to="{{$loop->index+1}}"></li>
                            <!-- <li data-target="#js--home-carousel" data-slide-to="2"></li> -->


                            @endforeach
                        </ol>

                        <div class="carousel-inner">
                            @foreach($slider as $key => $row)
                            <div class="carousel-item @if($key ==0) active @endif" data-interval="5000" mr-3>
                                <a href="#">
                                    <img src="{{asset('public/assets/images/slider/'.$row->image)}}"
                                        class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @if($gs->flash_slider==2)
                    <div class="top-small-banner mt-3 ">
                        <div class="d-flex justify-content-between">
                            @foreach($banner as $row)
                            <div class="small-banner-item m-0" style="width:60%">
                                <a href="#">
                                    <img src="{{asset('public/assets/images/banner/'.$row->image)}}"
                                        alt="small_banner_left" class="img-fluid" style="width:110%" />
                                </a>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    @elseif ($gs->flash_slider==1)
                    <section class="product-list-wrapper  col-md-12 col-lg-12 col-sm-12 mt-3">
                        <div class="content-section">
                            <div class="product-list-header">
                                <div class="d-flex align-items-center">
                                    <p class="title ml-0 mb-0">Flash sale Products</p>
                                    <a href="{{url('/flash_sale')}}" class="btn btn-see__more mr-0 text-uppercase">See
                                        More</a>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="d-flex">
                                    <div class="owl-carousel">
                                        @foreach($flash_sale_product as $row)
                                        <div class="item">
                                            <a href="{{url('/product/details',$row->slug)}}" class="item-link">
                                                <div class="card">
                                                    <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                                        alt="Arduino-Uno-Price-in-BD.jpg" class="img-fluid">

                                                    <p class="product-name">{{$row->product_name}}</p>
                                                    <!-- <input type="text" name="referral" id="referral" value="{{$referral}}"> -->

                                                    <p class="model">Model No: <span>{{$row->model_no}}</span></p>
                                                    <p class="supply">Supplier: <span>{{$row->supplier}}</span></p>
                                                    @php
                                                    $flashSalePrice = $row->price - $row->flash_sale_price;
                                                    $flashSaleparcentise = ($flashSalePrice * 100)/$row->price;

                                                    @endphp


                                                    <div
                                                        class="price d-flex justify-content-between align-items-center">
                                                        <p class="sell-price"><del>Tk. {{$row->price}}</del></p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp; <p class="sell-price">Tk.
                                                            {{$row->flash_sale_price}}</p>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">
                                                            -{{round($flashSaleparcentise ,0)}} %</button>

                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-btn-wrapper js--product-btn">

                                                <form name="addtocart" id="addtocart" action="{{route('add-cart')}}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$row->id}}">
                                                    <input type="hidden" name="buying_price"
                                                        value="{{$row->buying_price}}">
                                                    <input type="hidden" name="product_name"
                                                        value="{{$row->product_name}}">
                                                    <input type="hidden" name="model_no" value="{{$row->model_no}}">

                                                    <input type="hidden" name="price" value="{{$row->price}}">
                                                    <input type="hidden" name="product_id" value="{{$row->id}}">
                                                    <input type="hidden" name="referral_id" value="{{$referral}}">
                                                    <input type="hidden" class="form-control input-number bg-white"
                                                        name="quantity" id="js--input-number" value="1" min="1"
                                                        max="1000">
                                                    @php
                                                    $orderProduct=
                                                    App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');

                                                    $totalQuantity =
                                                    App\Models\Qty::where('product_id',$row->id)->sum('quantity');
                                                    @endphp

                                                    @if($totalQuantity == $orderProduct)
                                                    <a class="btn-na">Out
                                                        of Stock</a>


                                                    @else

                                                    <button type="submit" class="btn btn-warning"
                                                        style="border-radius: 25px 25px 25px 25px;width: 185px;transition: all .5s ease;">
                                                        Add to
                                                        Cart</button>
                                                    @endif
                                                </form>
                                                <a href="{{url('/product/details',$row->slug)}}"
                                                    class="btn btn-view-details">View
                                                    Details</a>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-list-wrapper col-md-12 col-lg-12 col-sm-12 ">

    @foreach($homepage as $category)
    @php
    $product = App\Models\Product::where('parent_id',$category->id)->get();
    @endphp
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">@if(!empty('homa_page_name')){{$category->homa_page_name}}

                    @else
                    {{$category->cat_name}}
                    @endif
                </p>
                <a href="{{url('/',$category->slug)}}" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div class="owlcarouselMaster owl-carousel">

                    @foreach($product as $row)

                    <div class="item">
                        <a href="{{url('/product/details',$row->slug)}}" class="item-link">
                            <div class="card">
                                <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                    alt="Arduino-Uno-Price-in-BD.jpg" class="img-fluid">

                                <p class="product-name">{{$row->product_name}}</p>
                                <!-- <input type="text" name="referral" id="referral" value="{{$referral}}"> -->

                                <p class="model">Model No: <span>{{$row->model_no}}</span></p>
                                <p class="supply">Supplier: <span>{{$row->supplier}}</span></p>
                                <div class="price d-flex align-items-center justify-content-between">
                                    <p class="sell-price mx-0">TK. {{$row->price}}</p>

                                </div>
                            </div>
                        </a>
                        <div class="product-btn-wrapper js--product-btn">

                            <form name="addtocart" id="addtocart" action="{{route('add-cart')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$row->id}}">
                                <input type="hidden" name="buying_price" value="{{$row->buying_price}}">
                                <input type="hidden" name="product_name" value="{{$row->product_name}}">
                                <input type="hidden" name="model_no" value="{{$row->model_no}}">

                                <input type="hidden" name="price" value="{{$row->price}}">
                                <input type="hidden" name="product_id" value="{{$row->id}}">
                                <input type="hidden" name="referral_id" value="{{$referral}}">
                                <input type="hidden" class="form-control input-number bg-white" name="quantity"
                                    id="js--input-number" value="1" min="1" max="1000">
                                @php
                                $orderProduct= App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');

                                $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
                                @endphp

                                @if($totalQuantity == $orderProduct)
                                <a class="btn btn-danger">Out
                                    of Stock</a>

                                <!-- <a class="btn btn-back-order d-none">Back
                            Order</a> -->
                                @else

                                <button type="submit" class="btn btn-warning" style="border-radius: 25px 25px 25px 25px;
    width: 185px;
    /* padding: 0.5em 2.5em; */
    transition: all .5s ease;"> Add to
                                    Cart</button>
                                @endif
                            </form>
                            <a href="{{url('/product/details',$row->slug)}}" class="btn btn-view-details">View
                                Details</a>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    @endforeach



</section>



<!-- <section class="supplier-list-wrapper">
    <div class="content-section">
        <div class="supplier-list-header">
            <p class="title ml-0 mb-0">Our Supplier</p>
        </div>
        <div class="owl-carousel owl-theme supplier-owl-carousel">
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/sparkFun.jpg') }}"
                        alt="sparkFun.jpg" class="img-fluid"></a>

                <p class="brand">SparkFun, USA</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/Pi-Labs.jpg') }}" alt="Pi-Labs.jpg"
                        class="img-fluid"></a>

                <p class="brand">Pi Labs, Bangladesh </p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/logo-Pololu-white.png') }}"
                        alt="logo-Pololu-white.png" class="img-fluid"></a>

                <p class="brand">Pololu, USA</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/SeeedStudio_logo.gif') }}"
                        alt="SeeedStudio_logo.gif" class="img-fluid"></a>

                <p class="brand">Seeed Studio, China</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/DFRobot_Logo_2.png') }}"
                        alt="DFRobot_Logo_2.png" class="img-fluid"></a>

                <p class="brand">DFRobot, China</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/marketplace_logo1.jpg') }}"
                        alt="marketplace_logo1.jpg" class="img-fluid"></a>

                <p class="brand">Marketplace, Bangladesh</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/hobbyking-store-logo.png') }}"
                        alt="hobbyking-store-logo.png" class="img-fluid"></a>

                <p class="brand">Hobbyking, Hong Kong</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/techshopbd_1.jpg') }}"
                        alt="techshopbd_1.jpg" class="img-fluid"></a>

                <p class="brand">Techshop Bangladesh</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/logo.jpg') }}" alt="logo.jpg"
                        class="img-fluid"></a>

                <p class="brand">Waveshare Electronics, China</p>
            </div>
            <div class="item">
                <a href="{{route('front.home')}}"><img src="{{ asset('public/image/supplier/adafruit-logo(1).png') }}"
                        alt="adafruit-logo(1).png" class="img-fluid"></a>

                <p class="brand">Adafruit, USA</p>
            </div>
        </div>
    </div>
</section> -->




@endsection
@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<div id="details">
    <div class="content-section">
        @include('error.message')
        <div class="d-flex">
            <div class="row col-lg-12">
                <div class="col-12 col-md-6 "> @php
                    $i = 1;
                    @endphp

                    <div class="details-image-section">
                        <div class="details-image js--image-details">
                            <img name="img-zoom" src="{{asset('public/assets/images/product/'.$productDetails->image)}}"
                                id="js--main-image" alt="Soldering-Iron-Stand.jpg" />

                        </div>

                        <!-- <div class="thumbnail">
                            <div class="thumbnail-owl-carousel owl-carousel owl-theme" id="js--product-thumbnail">


                                @foreach($productDetails->gallery as $image)
                                <img name="" src="{{asset('public/assets/images/product/gallery/'.$image->galery)}}"
                                    class="js--thumb-image img-fluid active" alt="Soldering-Iron-Stand.jpg">
                                @php
                                $i++;
                                @endphp
                                @endforeach

                            </div>
                        </div> -->

                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12 ">


                    <div class="card">

                        <div class="card-body">
                            <h2 class="card-title">{{$productDetails->product_name}}</h2>
                            <p class="card-text">Model No: <span>{{$productDetails->model_no}}</span>
                            </p>
                            @if($productDetails->flash_sale == 1)
                            @php
                            $flashSalePrice = $productDetails->price - $productDetails->flash_sale_price;
                            $flashSaleparcentise = ($flashSalePrice * 100)/$productDetails->price;

                            @endphp

                            <p class="card-text"><del>Tk. {{$productDetails->price}}</del>
                                Tk. {{$productDetails->flash_sale_price}} <button class="btn btn-success">
                                    -{{round($flashSaleparcentise ,0)}} %</button></span>
                            </p>
                            @else

                            <p class="price">TK. {{$productDetails->price}}
                                @endif
                            <p> @php

                                $totalQuantity =
                                App\Models\Qty::where('product_id',$productDetails->id)->sum('quantity');
                                @endphp
 &nbsp;&nbsp;
                            <p class="stock ">Availability: @if($totalQuantity == $orderProduct)<span class="btn btn-warning">Out of Stock
                                </span>@else<span class="btn btn-success">In
                                    stock </span> @endif
                            <p></p>
                            </p>
                            &nbsp;&nbsp;
                            <form name="addtocart" id="addtocart" action="{{route('add-cart')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                <input type="hidden" name="buying_price" value="{{$productDetails->buying_price}}">
                                <input type="hidden" name="product_name" value="{{$productDetails->product_name}}">
                                <input type="hidden" name="model_no" value="{{$productDetails->model_no}}">
                                @if($productDetails->flash_sale == 1)
                                <input type="hidden" name="price" value="{{$productDetails->flash_sale_price}}">
                                @else

                                <input type="hidden" name="price" value="{{$productDetails->price}}">
                                @endif
                                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                <input type="hidden" name="referral_id" value="{{$referral}}">

                                <div class="quantity d-flex justify-content-between align-items-center">
                                    <p class="mx-0">Quantity: </p>
                                    <div class="input-group ml-3">
                                        <span class="input-group-btn" id="js--btn-minus">
                                            <button type="button" class="btn btn-number">
                                                <img src="{{ asset('public/image/frontLogos/minus-icon.png')}}" alt="icon">
                                            </button>
                                        </span>

                                        <input type="text" class="form-control input-number bg-white" name="quantity"
                                            id="js--input-number" value="1" min="1" max="1000">
                                        <span class="input-group-btn" id="js--btn-plus">
                                            <button type="button" class="btn btn-number">
                                                <img src="{{ asset('public/image/frontLogos/plus-icon.png')}}" alt="icon">
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                &nbsp;&nbsp;

                                <div class="rating-review">
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <input type="hidden" id="average-rating-number" value="4.9" />

                                    <a href="#write-review"><span class="count">{{$ratingCount}} Ratings /
                                            {{$reviewCount }}
                                            Reviews</span>
                                    </a>
                                </div>
                                &nbsp;&nbsp;
                                <div class="button">
                                    @php

                                    $totalQuantity =
                                    App\Models\Qty::where('product_id',$productDetails->id)->sum('quantity');
                                    @endphp

                                    @if($totalQuantity == $orderProduct)
                                    <a class="btn btn-success">Out
                                        of Stock</a>

                                    <!-- <a class="btn btn-back-order d-none">Back
                            Order</a> -->
                                    @else




                                    <a class="btn btn-cart d-none btn-warning"><img
                                            src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}" alt="icon">Add to
                                        Cart</a>

                                    <button type="submit" class="btn btn-cart-login btn-warning">
                                        <img src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}" alt="icon">Add to
                                        Cart</button>
                                    @endif
                            </form>


                            <!-- <input type="hidden" name="product_id" value="{{$productDetails->id}}">

                <button type="submit" class="btn btn-wishlist" id="add-to-wishlist"><i class="fa fa-heart"></i>Save to
                    Wishlist</button> -->





                        </div>
                        &nbsp;&nbsp;

                        <p class="category">Category: <span>{{$productCategory->cat_name}}</span>
                        </p>

                    </div>
                </div>

            </div>








        </div>

    </div>

</div>


<div class="row col-lg-12">

    <div class="col-12 col-md-12">
        <div class="product-summery mt-5">
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
            <div class="tab-content col-md-12 col-sm-12 col-lg-12" id="myTabContent">
                <div class="tab-pane fade show active " id="summery" role="tabpanel" aria-labelledby="summery-tab">


                    {!! $productDetails->summery !!}


                </div>
                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                    <div class="content-section">
                        <p></p>
                    </div>
                </div>
                <div class="tab-pane fade col-md-12 col-sm-12 col-lg-12" id="doc" role="tabpanel"
                    aria-labelledby="doc-tab">



                    {!! $productDetails->document !!}


                </div>
            </div>
        </div>
    </div>

</div>



<!-- <div class="customer-bought product-list-wrapper">
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Related To This Item</p>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                @foreach($relatedProducts as $row)
                <div class="item" id="js--product-item">
                    <a href="{{url('/product/details',$row->slug)}}" class="item-link">
                        <div class="card">
                            <img src="{{asset('public/assets/images/product/'.$row->image)}}" alt="product" class="img-fluid">

                            <p class="product-name">{{$row->product_name}}</p>
                            <p class="brand-name">{{$row->supplier}}</p>
                            <hr />
                            <div class="d-flex justify-content-between price">
                                <p class="sell-price">TK. {{$row->price}}</p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper" id="js--product-btn">
                        <a href="{{url('/product/details',$row->slug)}}" class="btn btn-view-details">View
                            Details</a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div> -->

<div class="qa-section col-lg-12 col-sm-12 col-md-12" id="qa-section">
    <div class="content-section">
        <p class="title">Question & Answer</p>

        <div class="post-question clearfix">


            <p id="question-message"></p>

            </p>
            @if(empty(Auth::check()))
            <p class="question-form-login">Please login to
                write question & answer
                <a href="{{route('user.login')}}" class="user-login">Login</a>
            </p>

            @else
            <form method="post" action="{{route('user.question')}}">
                @csrf
                <p>
                    <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                    <textarea rows="4" class="form-control" placeholder="Please write your question"
                        name="question"></textarea>

                <p>
                    <input type="submit" class="btn btn-post__question pull-right form-control" value="Post Your Question" />
                </p>
                </p>
            </form>

            @endif

        </div>

        <div class="qa-list-wrapper">
            <p class="subtitle border-bottom"> questions</p>
            @foreach($productDetails['question'] as $row)
            @php
            $user = App\Models\User::find($row->user_id);
            $answer = App\Models\Answer::where('question_id',$row->id)->where('status',1)->get();
            @endphp
            <div class="qa-list js--qa-section ">
                <div class="question-item">
                    <p class="question d-flex">
                        <span class="ml-0 mr-0">Q: </span>
                        <span class="ml-2">
                            <span>{{$row->question}}</span>
                            <span class="ques-by">Questioned by </span><span>{{$user->name}}</span>
                            <span class="ques-by">{{$row->created_at->toDayDateTimeString()}}</span>
                        </span>
                    </p>

                    <div class="submit-answer">
                        @if(empty(Auth::check()))
                        <p><a href="{{route('user.login')}}">Please login to write answer</a></p>
                        @else

                        <a href="" class="js--submit-answer">Submit Your Answer</a>
                        </p>
                        <form action="{{route('user.answer')}}" method="post">
                            @csrf
                            <input name="question_id" type="hidden" value="{{$row->id}}" />

                            <p><textarea name="answer" rows="4" class="form-control answer-text"></textarea></p>
                            <div class="text-right mt-3">
                                <input type="submit" class="bnt btn-submit-answer" value="Submit Answer" />
                            </div>
                        </form>
                        @endif

                    </div>
                </div>
                <div class="answer-item">
                    <p class="answer d-flex">
                        @foreach($answer as $row)
                        @php
                        $user = App\Models\user::find($row->user_id);

                        @endphp
                        <i class="fa fa-circle text-secondary small ml-0 mr-0 pt-1"></i>
                        <span class="ml-2">
                            <span>{{$row->answer }} </span>
                            <span class="ans-by">Answered by </span><span>{{$user->name}},</span>
                            <span class="ans-by">{{$row->created_at->toDayDateTimeString()}}</span>
                        </span>
                        @endforeach
                    </p>
                </div>

                <div id="write-review"></div>
            </div>
            @endforeach

            <div class="btn-view-more border-bottom d-none">
                <button type="button" class="btn js--qa-view-more">View More</button>
            </div>
        </div>
    </div>
</div>

<div class="review-section col-lg-12 col-sm-12 col-md-12" id="review-area">
    <div class="content-section">
        <p class="title">Reviews & Ratings</p>
        <div class="submit-review d-flex align-items-center">

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12"> @if(empty(Auth::check()))
                    <p class="review-form-login form-control">Please login to write review & rating
                        <a href="{{route('user.login')}}" class="user-login">Login</a>
                    </p>
                    @else
                    <p>
                    <form action="{{route('user.rating_review')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$productDetails->id}}" name="product_id" id="rating2">
                        <textarea rows="6" id="review-details" name="review_details" class="form-control"
                            placeholder="Please write your review"></textarea>
                        <div class="d-flex">

                            <div class="rating-css">
                                <div class="star-icon">
                                    <input type="radio" value="1" name="rating_star" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="rating_star" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="rating_star" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="rating_star" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="rating_star" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>

                                </div>

                            </div>


                          
                        </div>
                        <input type="submit" class="btn btn-warning form-control" value="Submit" />
                        </p>
                    </form>
                    @endif
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                    <div class="review-info">

                        <div class="d-flex align-items-center mb-4">
                            <p class="total-rating align-self-center" id="average-rating">
                                <?=$ratingCount ? ($progress*5)/ ($ratingCount*5) : 0 ?></p>

                            <div class="count">
                                <p>{{$ratingCount}} Ratings / {{$reviewCount }} Reviews</p>
                                <input id="total_number_of_rating" type="hidden" value="10" />
                                <p class="stars">
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                    <span class="fa  fa-star"></span>
                                </p>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row rating-count">
                                <div class="col-4 star-append">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>




                                <div class="col-1">
                                    <p class="rating-number">[{{$progress5}}]</p>
                                </div>
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: <?= $ratingCount ?  ($progress5 / $ratingCount) * 100 : 0 ?>%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row rating-count">

                                <div class="col-4 star-append">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    
                                </div>



                                <div class="col-1">
                                    <p class="rating-number">[{{$progress4}}]</p>
                                </div>
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: <?= $ratingCount ?  ($progress4 / $ratingCount) * 100 : 0 ?>%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row rating-count">


                                <div class="col-4 star-append">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>


                                <div class="col-1">
                                    <p class="rating-number">[{{$progress3}}]</p>
                                </div>
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:<?= $ratingCount ?  ($progress3 / $ratingCount) * 100 : 0 ?>%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row rating-count">



                                <div class="col-4 star-append">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                                <div class="col-1">
                                    <p class="rating-number">[{{$progress2}}]</p>
                                </div>
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:<?= $ratingCount ?  ($progress2 / $ratingCount) * 100 : 0 ?>%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row rating-count">




                                <div class="col-4 star-append">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-1">
                                    <p class="rating-number">[{{$progress1}}]</p>
                                </div>
                                <div class="col-7">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:<?= $ratingCount ?  ($progress1 / $ratingCount) * 100 : 0 ?>%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="qa-list-wrapper">
            <p class="subtitle border-bottom"> Review</p>
            @foreach($productDetails['review'] as $row)
            @php
            $user = App\Models\User::find($row->user_id);
           
            @endphp
            <div class="qa-list js--qa-section ">
                <div class="question-item">


                <p class="question d-flex">
                        <span class="ml-0 mr-0">Review: </span>
                        <span class="ml-2">
                            <span>{{$row->review_details}}</span>
                            <span class="ques-by">Review By by </span><span>{{$user->name}}</span>
                            <span class="ques-by">{{$row->created_at->toDayDateTimeString()}}</span>
                        </span>
                    </p>
                   

                   
                </div>
              

                
            </div>
            @endforeach
           

            <div class="btn-view-more border-bottom d-none">
                <button type="button" class="btn js--qa-view-more">View More</button>
            </div>
        </div>
    </div>

    </div>
    <div class="review-list-wrapper">


  
</div>
</div>
<!--<section class="recently-view-section">-->
<!--    <div class="content-section">-->
<!--        <p class="title">Recently Viewed</p>-->

<!--        <div class="owl-carousel owl-theme recently-owl-carousel">-->
<!--            <a class="recently-view-item" href="Soldering_Iron_Stand_techshop_bangladesh.html?product_id=10">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/Soldering-Iron-Stand.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../5/Goot_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=5">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/Goot-soldering-iron--40w.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3747/CH340_USB_to_Serial_Converter_3V3-5V_techshop_bangladesh.html?product_id=3747">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/DSC_10982.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3710/RS232_to_TTL_Serial_Port_Converter_techshop_bangladesh.html?product_id=3710">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/RS232-to-TTL-Serial-Port-Converter-1.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3488/FTDI_USB_to_Serial_Converter_3V3-5V_techshop_bangladesh.html?product_id=3488">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/FTDI-USB-to-Serial-Converter-3V3-5V-1.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../2932/USB_to_TTL_4-pin_Wire_techshop_bangladesh.html?product_id=2932">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/USB-to-TTL-4-pin-Wire-2.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../2708/Logic_Level_Converter_TSB_techshop_bangladesh.html?product_id=2708">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/logic-level-convetrer-tsb-1.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../2193/Logic_Level_Converter_techshop_bangladesh.html?product_id=2193">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/Logic-Level-Converter-1.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1971/PL2303_USB_UART_Board_(type_A)_techshop_bangladesh.html?product_id=1971">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/PL2303-USB-UART-Board-(type-A).jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item" href="../1771/FTDI_Basic_Breakout_-_3.html?product_id=1771">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/FTDI-Basic-Breakout---3.3V.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1770/SparkFun_FTDI_Basic_Breakout_-_5V_techshop_bangladesh.html?product_id=1770">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/SparkFun-FTDI-Basic-Breakout---5V.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1440/FT245_USB_FIFO_Board_(mini)_techshop_bangladesh.html?product_id=1440">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/FT245-USB-FIFO-Board-(mini).jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1430/USB_3300_USB_HS_Board_techshop_bangladesh.html?product_id=1430">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/USB-3300-USB-HS-Board.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1426/PL2303_USB_UART_Board_(mini)_techshop_bangladesh.html?product_id=1426">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/PL2303-USB-UART-Board-(mini).jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1346/SparkFun_Logic_Level_Converter_-_Bi-Directional_techshop_bangladesh.html?product_id=1346">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/12009-06.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1268/CP2102_USB_UART_Board_(type_A)_techshop_bangladesh.html?product_id=1268">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/CP2102-USB-UART-Board-(type-A)-2.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../1208/WIZnet_Serial-to-Ethernet_Gateway_-_WIZ110SR_techshop_bangladesh.html?product_id=1208">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/WIZnet-Serial-to-Ethernet-Gateway---WIZ110SR.jpg"-->
<!--                    alt="product" class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3716/PIC_Programmer_R2_techshop_bangladesh.html?product_id=3716">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/pic-programmer-r2.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3733/USBASP_AVR_Programmer_techshop_bangladesh.html?product_id=3733">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/USBASPAVRProgrammer_1.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a><a class="recently-view-item"-->
<!--                href="../3631/AVR_Programmer_R2_techshop_bangladesh.html?product_id=3631">-->
<!--                <img src="../../../admin.techshopbd.com/uploads/product/AVRProgrammerR2.jpg" alt="product"-->
<!--                    class="img-fluid">-->
<!--            </a>-->
<!--        </div>-->

<!--    </div>-->
<!--</section>-->


@endsection
@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<div id="product-details" class="container">
    <section id="product-details-main " class="">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 ">


                @php

                $totalimage =
                App\Models\Gallery::where('product_id',$productDetails->id)->count('id');
                @endphp

                <!-- 
                <div class="mySlides mobile-image">
                    <div class="number"></div>
                    <img src="{{asset('public/assets/images/product/'.$productDetails->image)}}" width="100%" class="mobile-image" />
                    <div class="text mobile-image">main Image/{{$totalimage+1}}</div>
                </div>

                @foreach($productDetails->gallery as $image)
                <div class="mySlides mobile-image">

                    <img src="{{asset('public/assets/images/product/gallery/'.$image->galery)}}" width="100%" />
                    <div class="number">{{$loop->index+1}}/{{$totalimage+1}}</div>
                </div>
                @endforeach

                <a class="prev mobile-image" onclick="plusSlides(-1)">&#10094;</a>

                <a class="next mobile-image" onclick="plusSlides(1)">&#10095;</a>

                <div class="text-align mobile-image">
                    @foreach($productDetails->gallery as $image)
                    <span class="dot" onclick="currentSlide({{$loop->index+1}})"></span>
                    @endforeach
                </div> -->



                <div class="mt-5 main-image desktop-image">
                    <img src="{{asset('public/assets/images/product/'.$productDetails->image)}}"
                        class="imgmini product-details-image" id="mainimgid"></img>
                </div>


                <div class="glerry-image mt-5 owlcarouselGallery owl-carousel">
                    <img src="{{asset('public/assets/images/product/'.$productDetails->image)}}"
                        class="imgmini gallery-image " id="0" onclick="changeImage(this)" alt="Cute cat1"></img>


                    @foreach($productDetails->gallery as $image)
                    <img src="{{asset('public/assets/images/product/gallery/'.$image->galery)}}"
                        class="imgmini gallery-image " id="{{$loop->index + 1}}" onclick="changeImage(this)"
                        alt="Cute cat1"></img>


                    @endforeach


                </div>

            </div>
            @php $vat= ($productDetails->price*$gs->vat)/ 100 @endphp
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5 product-details-mobile-color">
                <p class="product-details-name ">{{$productDetails->product_name}}</p>
                <div class="products-details-main products-details-main-border mb-3">
                    <p class="mt-3">Model No: <span>{{$productDetails->model_no}}</span></p>
                    @php

                    $totalQuantity =
                    App\Models\Qty::where('product_id',$productDetails->id)->sum('quantity');
                    @endphp
                    <p class="mt-3">Status: @if($totalQuantity == $orderProduct)<span class="btn btn-warning">Out of
                            Stock
                        </span>@else<span class="btn stock-button">In
                            stock </span> @endif</p>
                    <p class="mt-3">Supplier: <span>{{$productDetails->supplier}}</span></p>
                    <p class="mt-3">Category: <span>{{$productCategory->cat_name}}</span></p>
                    @if($gs->cart_page_vat==1)

                    @if($productDetails->flash_sale == 1)
                    @php
                    $flashSalePrice = $productDetails->price - $productDetails->flash_sale_price;
                    $flashSaleparcentise = ($flashSalePrice * 100)/$productDetails->price;

                    @endphp

                    <p class="card-text mt-3"><del class="previous-price">{{$gs->currency}}.
                            {{$productDetails->price}}</del>
                        <span class="current-price"> Tk. {{$productDetails->flash_sale_price}}</span> <button
                            class="btn stock-button">
                            -{{round($flashSaleparcentise ,0)}} %</button></span>
                    </p>
                    @else

                    <p class="current-price">{{$gs->currency}}. {{$productDetails->price}}
                        @endif

                        @else
                        @if($productDetails->flash_sale == 1)

                        @if($gs->cart_page_vat==1)


                        @php
                        $flashSalePrice = $productDetails->price - $productDetails->flash_sale_price;
                        $flashSaleparcentise = ($flashSalePrice * 100)/$productDetails->price;

                        @endphp

                    <p class="card-text mt-3"><del class="previous-price">{{$gs->currency}}.
                            {{$productDetails->price}}</del>
                        <span class="current-price"> Tk. {{$productDetails->flash_sale_price }}</span> <button
                            class="btn stock-button">
                            -{{round($flashSaleparcentise ,2)}} %</button></span>
                    </p>
                    @else

                    @php $vatPrice= ($productDetails->price*$gs->vat)/ 100 ; @endphp
                    @php $vatPriceFlashsall= ($productDetails->flash_sale_price*$gs->vat)/ 100
                    ; @endphp
                    @php

                    $flashSalePrice = $productDetails->price - $productDetails->flash_sale_price;
                    $flashSaleparcentise = ($flashSalePrice * 100)/$productDetails->price;

                    @endphp

                    @php
                    $flashSalePrice = ($productDetails->price + $vatPrice )- ($productDetails->flash_sale_price + $vatPriceFlashsall);
                    $flashSaleparcentise = ($flashSalePrice * 100)/($productDetails->price + $vatPrice);

                    @endphp

                    <p class="card-text mt-3"><del class="previous-price">{{$gs->currency}}.
                            {{$productDetails->price + $vatPrice}}</del>
                        <span class="current-price"> Tk. {{$productDetails->flash_sale_price + $vatPriceFlashsall}}</span> <button
                            class="btn stock-button">
                            -{{round($flashSaleparcentise ,2)}} %</button></span>
                    </p>

                    @endif
                    @else

                    <p class="current-price">{{$gs->currency}}. {{$productDetails->price + $vat}}
                        @endif

                        @endif



                    <div class="rating-review mb-3">





                        @php $totalrating = round($ratingCount ? ($progress*5)/ ($ratingCount*5) : 0) @endphp


                        <p class="stars">
                            @if($totalrating ==5)
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>

                            @elseif($totalrating ==4)
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-size star-color">&#9734</span>
                            @elseif($totalrating ==3)
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>

                            @elseif($totalrating ==2)

                            <span class="star-color star-size">&#9733</span>
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            @elseif($totalrating ==1)
                            <span class="star-color star-size">&#9733</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size">&#9734</span>
                            @else
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>
                            <span class="star-size star-color">&#9734</span>

                            @endif

                            &nbsp;&nbsp;
                            <span> {{$ratingCount}} Ratings</span>
                        </p>




                    </div>
                </div>


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



                    <div class="qty-container products-details-main">
                        Quantity:&nbsp;&nbsp;
                        <button class="qty-btn-minus btn-light" type="button" style="margin-left: 10px;
    margin-right: -210px"><i class="fa fa-minus"></i></button>
                        <input type="text" name="quantity" value="1" class="input-qty"
                            style="margin-left:210px;margin-right:0px" />
                        <button class="qty-btn-plus btn-light" type="button" style=""><i
                                class="fa fa-plus"></i></button>
                    </div>

                    <!-- <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">
                        <span>-</span>
                    </div>
                    <input type="number" name="quantity" id="number" value="1" />
                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div> -->
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;


                    <div class="button mt-3">
                        @php

                        $totalQuantity =
                        App\Models\Qty::where('product_id',$productDetails->id)->sum('quantity');
                        @endphp

                        @if($totalQuantity == $orderProduct)


                        @else

                        <button type="submit" class="btn btn-cart-login  btn-warning">
                            <img style="height: 30px;width: 30px;margin-right:10px"
                                src="{{ asset('public/image/frontLogos/cart-icon-hover.png')}}" alt="icon"><span
                                style="font-size:1.2rem">Add to
                                Cart</span></button>
                        @endif
                </form>



            </div>

        </div>
    </section>
</div>
<div class="products-decription product-details-mobile-color">

    <div class="container">

        <section>


            <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
                <div class=" mobile-underliner">
                    <button type="button" class="featuredBtn active mt-3" id="btnOne" onclick="show('Section1');"><a
                            href="#description" class="review-rating-detils-font-color-size">Description</a></button>
                    <button type="button" class="featuredBtn mt-3" id="btnTwo" onclick="show('Section2');"><a
                            href="#summery" class="review-rating-detils-font-color-size">Summery</a></button>
                    <button type="button" class="featuredBtn featuredBtnMobile mt-3" id="btnThree"><a href="#question"
                            class="review-rating-detils-font-color-size">Questions</a></button>
                    <button type="button" class="featuredBtn featuredBtnMobile mt-3" id="btnFour"><a href="#review"
                            class="review-rating-detils-font-color-size">Review</a></button>

                </div>
                <br>
                <div class="mb-3" id="Section1">
                    <div id="description " class="description-summery-font-size">

                        {!! $productDetails->document !!}
                    </div>
                </div>

                <div class="mb-3" id="Section2" style="display: none;">
                    <div id="summery" class="description-summery-font-size">
                        {!! $productDetails->summery !!}
                    </div>

                </div>
                <br>


            </div>

        </section>
    </div>
</div>
<div id="product-details-question" class="container">
    <section>

        <div class="row ">
            <div id="question" class="col-12 col-sm-12 col-md-12 col-lg-12 product-details-mobile-color">
                @php
                $productQuestion = App\Models\Question::where('product_id',$productDetails['id'])->count('id');

                @endphp
                <p class="question-review-header">Questions({{$productQuestion}})</p>

                <div class="row ">
                    <div class="col-sm mobile-question-review-formate-hidden">
                        <p class="question-review-formate">Have question about this product? Get specific details about
                            this product from expert.</p>
                    </div>
                    <div class="col-sm mobile-question-review-formate-hidden">

                        <p class="question-review-user"><a href="{{url('user/question',$productDetails['slug'])}}"><span
                                    style="color:#D20A7d">Ask Question</span></a></p>
                    </div>

                </div>
                <p class="question-border"></p>
                @foreach($question as $row)
                @php
                $user = App\Models\User::find($row->user_id);

                $answer = App\Models\Answer::where('question_id',$row->id)->where('status',1)->get();
                @endphp


                <p><span class="question-review-user-name ">{{$user->name}}</span> <span
                        class="question-review-user-date">
                        on {{$row->created_at->toDayDateTimeString()}}</span></p>



                <p class="user-question">Q:{{$row->question}}</p>

                @foreach($answer as $row)
                @php
                $user = App\Models\user::find($row->user_id);

                @endphp


                <p class="user-answer">A:{{$row->answer }} </p>

                @endforeach



                <p class="question-border"></p>


                @endforeach
                <div style="text-align:right" class="mb-3">
                    {!! $question->links('pagination::bootstrap-5') !!}
                </div>
                <button class="mobile-question-review-user"><a
                        href="{{url('user/question',$productDetails['slug'])}}">Ask Question</a></button>

            </div>
        </div>

    </section>
</div>
<div id="product-details-review" class="container">

    <section class="mobile-summery-description-color">
        <div class="row ">
            <div id="review" class="col-12 col-sm-12 col-md-12 col-lg-12 product-details-mobile-color ">
                @php
                $productReview = App\Models\ReviwRating::where('product_id',$productDetails['id'])->count('id');
                @endphp
                <p class="question-review-header"> Review({{$productReview}})</p>

                <div class="row">
                    <div class="col-sm mobile-question-review-formate-hidden">
                        <p class="question-review-formate">Get specific details about this product from customers who
                            own it.</p>
                    </div>
                    <div class="col-sm mobile-question-review-formate-hidden">
                        <p class="question-review-user"><a
                                href="{{url('user/rating_review',$productDetails['slug'])}}"><span
                                    style="color:#D20A7d"> Write a Review</span></a></p>
                    </div>

                </div>
                <p class="question-border"></p>

                <div class="row" id="details">
                    <div class="col-sm-1 col-md-6 col-lg-6">

                        <div class="d-flex align-items-center mobile-rating mb-4">

                            <div class="count">

                                <p class="total-rating align-self-center total-rating-style" id="average-rating">
                                    <?= $totalrating = round($ratingCount ? ($progress*5)/ ($ratingCount*5) : 0) ?>/5
                                </p>
                                <p class="stars responsive-stars">
                                    @if($totalrating ==5)
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>

                                    @elseif($totalrating ==4)
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-size star-color">&#9734</span>
                                    @elseif($totalrating ==3)
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>

                                    @elseif($totalrating ==2)

                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    @elseif($totalrating ==1)
                                    <span class="star-color star-size">&#9733</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    @else
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>
                                    <span class="star-size star-color">&#9734</span>

                                    @endif
                                </p>

                                <p class="total-rating-count" id="mobile-rating-count">{{$ratingCount}} Ratings </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-6">

                        <div class="review-section col-lg-12 col-sm-12 col-md-12" id="review-area">
                            <div class="content-section">

                                <div class="submit-review d-flex align-items-center">

                                    <div class="row">

                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                            <div class="review-info">


                                                <div class="row rating-count">

                                                    <div class="col-1">
                                                        <p class="rating-number">5 star</p>
                                                    </div>
                                                    <div class="col-8">

                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: <?= $ratingCount ?  ($progress5 / $ratingCount) * 100 : 0 ?>%;">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-1">
                                                        <p class="count-progess-bar">{{$progress5}}</p>
                                                    </div>
                                                </div>


                                                <div class="row rating-count">

                                                    <div class="col-1">
                                                        <p class="rating-number">4 star</p>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: <?= $ratingCount ?  ($progress4 / $ratingCount) * 100 : 0 ?>%;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-1">
                                                        <p class="count-progess-bar">{{$progress4}}</p>
                                                    </div>
                                                </div>


                                                <div class="row rating-count">


                                                    <div class="col-1">
                                                        <p class="rating-number">3 star</p>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:<?= $ratingCount ?  ($progress3 / $ratingCount) * 100 : 0 ?>%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <p class="count-progess-bar">{{$progress3}}</p>
                                                    </div>
                                                </div>

                                                <div class="row rating-count">


                                                    <div class="col-1">
                                                        <p class="rating-number">2 star</p>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:<?= $ratingCount ?  ($progress2 / $ratingCount) * 100 : 0 ?>%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <p class="count-progess-bar">{{$progress2}}</p>
                                                    </div>
                                                </div>

                                                <div class="row rating-count">

                                                    <div class="col-1">
                                                        <p class="rating-number">1 star</p>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width:<?= $ratingCount ?  ($progress1 / $ratingCount) * 100 : 0 ?>%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <p class="count-progess-bar">{{$progress1}}</p>
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

                <p class="question-border"></p>

                @foreach($review as $row)
                @php
                $user = App\Models\User::find($row->user_id);

                @endphp


                <p> <span class="question-review-user-date">By</span> <span class="question-review-user-name">
                        {{$user->name}}</span> <span class="question-review-user-date"> on
                        {{$row->created_at->toDayDateTimeString()}}</span></p>


                <div class="count">

                    <p class="total-rating align-self-center total-rating-style" id="average-rating">
                        @php $totalrating = $ratingCount ? ($progress*5)/ ($ratingCount*5) : 0 @endphp</p>
                    <p class="stars comment-stars">
                        @if($row->rating_star ==5)
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>

                        @elseif($row->rating_star ==4)
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-size">&#9734</span>
                        @elseif($row->rating_star ==3)
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-size">&#9734</span>
                        <span class="star-size">&#9734</span>

                        @elseif($row->rating_star ==2)

                        <span class="star-color star-size">&#9733</span>
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-size">&#9734</span>
                        <span class="star-size">&#9734</span>
                        <span class="star-size">&#9734</span>
                        @elseif($row->rating_star ==1)
                        <span class="star-color star-size">&#9733</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size">&#9734</span>
                        @else
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>
                        <span class="star-size star-color">&#9734</span>

                        @endif
                    </p>



                </div>




                <p class="review-details">{{$row->review_details}} </p>




                <p class="question-border"></p>


                @endforeach

                <div style="text-align:right" class="mb-3">
                    {!! $review->links('pagination::bootstrap-5') !!}
                </div>
                <button class="mobile-question-review-user"><a
                        href="{{url('user/rating_review',$productDetails['slug'])}}"> Write a Review</a></button>


            </div>
        </div>

    </section>
</div>

@include('layout.front.footer')


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


<script>
$("button").click(function() {
    $("button").removeClass("active");
    $(this).addClass("active");
});
</script>
<script>
var buttonPlus = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
    var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
    $n.val(Number($n.val()) + 1);
});

var incrementMinus = buttonMinus.click(function() {
    var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
    var amount = Number($n.val());
    if (amount > 1) {
        $n.val(amount - 1);
    }
});
</script>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {

    showSlides(slideIndex += n);

}

function currentSlide(n) {

    showSlides(slideIndex = n);

}

function showSlides(n) {

    var i;

    var slides = document.getElementsByClassName("mySlides");

    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {

        slides[i].style.display = "none";

    }

    for (i = 0; i < dots.length; i++) {

        dots[i].className = dots[i].className.replace("active", "");

    }

    slides[slideIndex - 1].style.display = "block";

    dots[slideIndex - 1].className += " active";

}
</script>



@endsection
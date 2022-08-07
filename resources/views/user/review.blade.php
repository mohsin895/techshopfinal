@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section >
    <div class="card col-12 col-sm-12 col-md-12 col-lg-12" id="question">
        
        <div class="question-design">
        <label for="name" class="form-label question-fornt" style="margin-left: 20px; margin-right: 20px;margin-right: 20px;margin-top: 20px;margin-bottom: 20px; font-size:1.2rem;font-weight:700;text-align:center">Write A Review</lable>
            <div class="form-design">
                @if(!empty($orderProduct))

        <form action="{{route('user.rating_review',$products['slug'])}}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$products->id}}">
            <div class="form-group">
                <label for="name" class="form-label question-fornt">Product Name</label>
                <input type="text" class="form-control question-design-robotic" readonly name="name" value="{{$products->product_name}}">
            </div>
            
            <div class="form-group">
                <label for="body" class="form-label question-fornt">Your Review</label>
                <textarea class="form-control question-design-robotic" id="body" rows="6" name="review_details"></textarea>
            </div>

            <label for="body" class="form-label question-fornt">Rating</label>
            <div class="d-flex">
            

                            <div class="rating-css">
                                <div class="star-icon">
                                <label style="font-size:15px;color:red" >bad</label>
                                    <input type="radio" value="1" name="rating_star" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="rating_star" checked id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="rating_star" checked id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="rating_star" checked id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="rating_star" checked id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                    <label style="font-size:15px;color:#05ef2d" >good</label>

                                </div>

                            </div>


                          
                        </div>
            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-question form-control">Submit</button>
                <a href="{{url('/product/details',$products->slug)}}" type="button" class="btn btn-light back-button form-control">Back</a>
            </div>
        </form>
        @else
        <p style="text-align: center;
    font-size: 1.2rem;"> If You Buy This Product,<br> Only Then, You Can Give Review of This Product.</p>

 <a href="{{url('/product/details',$products->slug)}}" type="button" class="btn btn-light back-button form-control" style="font-size:1.2rem">Back</a>

        @endif
        <div>
        <div>
    </div>
</section>
@include('layout.front.footer');
@endsection
@extends('layout.blog.master')
@section('content')
<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($slider as $row)
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index+1}}"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($slider as $key => $row)
            <div class="carousel-item @if($key ==0) active @endif">
                <div class="bontainer">
                    <img class="hero-img" src="{{asset('public/assets/images/blog/slider/'.$row->image)}}"
                        style="width:100%; height:90%">
                    <div class="centered-text"> {{$row->title}}</div>
                </div>
            </div>

            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>

<!-- <div class="container">
    <div class="Headingtitle">
        New Posts
    </div>
    <div class="divider"></div>
</div> -->




<!-- <div class="container ">

    <div class="swiper technews ">
        <div class="swiper-wrapper ">
            @foreach($new_post as $row)
            <div class="swiper-slide ">
                <div class="card ">
                    <img class="card-img-top " src="{{asset('public/assets/images/blog/'.$row->image)}} "
                        alt="Card image cap ">
                    <div class="card-body ">
                        <h5 class="card-title ">{{substr($row->title,0,20)}}</h5>
                        <p class="card-text ">{!! substr($row->description,0,20) !!}</p>
                        <a href="{{route('blog.post.details',$row->slug)}}" class="btn btn-primary btn-block ">Read
                            More</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <br><br>
        <div class="swiper-pagination "></div>
    </div>


</div> -->

@foreach($category as $cat)
@php
$post = App\Models\BlogPost::where('cat_id',$cat->id)->get();

@endphp

<div class="container">
    <div class="Headingtitle">
        {{$cat->homa_page_name}}
    </div>
    <div class="divider"></div>
</div>
<div class="container ">

    <div class="swiper technews ">
        <div class="swiper-wrapper ">
            @foreach($post as $row)
            <div class="swiper-slide ">
                <div class="card ">
                    <img class="card-img-top " src="{{asset('public/assets/images/blog/'.$row->image)}} "
                        alt="Card image cap ">
                    <div class="card-body ">
                        <h5 class="card-title ">{{substr($row->title,0,20)}}</h5>
                        <p class="card-text "{!! substr($row->description,0,20) !!}</p>
                        <a href="{{route('blog.post.details',$row->slug)}}" class="btn btn-primary btn-block ">Read
                            More</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <br><br>
        <div class="swiper-pagination "></div>
    </div>


</div>

@endforeach






@endsection
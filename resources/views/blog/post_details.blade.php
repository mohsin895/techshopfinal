@extends('layout.blog.master')
@section('details-css')
<link rel="stylesheet" href="{{asset('public/assets/blog/css/postcss.css')}}">
@endsection
@section('content')

<?php

use App\Models\blogCategory;


$category = blogCategory::category();
$user= App\Models\User::find($post->user_id);

//   echo "<pre>";print_r($category);die();
?>


<!-- Posts starts here -->



<div class="container">


    <!-- Post Image Starts -->
    <img class="post-image" src="{{asset('public/assets/images/blog/'.$post->image)}}" alt="">
    <!-- Post Image Starts -->

    

    <div class="card text-left" style="width: auto;">
  <div class="card-body">
    <h5 class="card-title"> {{ $post->title}}</h5>
    <h5 class="card-title">{{ $post->created_at->toDayDateTimeString()}}</h5>
    <p class="card text-bold" style="color:black">{!! $post->description !!}</p>

  </div>
</div>
    <!-- Posts body ends here -->


    <div class="divider"></div>

    <!-- Share starts -->
    <!-- <div class="post-share">
            <p>Share with your friends</p>
            <ul>
                <li><i class="fa-brands fa-facebook-square fa-3x"></i></li>
                <li><i class="fa-brands fa-twitter-square fa-3x"></i></li>
                <li><i class="fa-brands fa-instagram-square fa-3x"></i></li>
                <li><i class="fa-brands fa-youtube-square fa-3x"></i></li>
                <li><i class="fa-brands fa-instagram-square fa-3x"></i></li>
            </ul>
        </div> -->
    <!-- Share ends-->
    <div class="author">
        <div class="author-details">
            <div class="row">
                <div class="col-lg-1">
                    <div class="author-img">
                        <img src="{{asset('public/assets/images/admin/profile/'.$user->image)}}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="author-details-body">
                        <div class="author-name">
                            <p>
                                {{$user->name}}
                            </p>
                        </div>

                        <!-- <div class="author-description">
                                <p>Engineer Techshop Bangladesh E-mail: nur@techshopbd.com</p>
                            </div> -->

                        <div class="author-links">
                            <i class=" fa-solid fa-globe fa-2xl"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="comment-section">
        <div class="comments-box">
            <p class="number-of-comments"> Comments</p>
        </div>

        @foreach($post_comment as $post)
        <div class="comments-box">
            <div class="comments-area">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="commentor-img">
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="commentor-name">
                            <p>{{$post->name}}</p>
                        </div>
                        <div class="comment-body">
                            <p>
                                {{$post->comment}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

        <div class="comments-box"></div>


        <div class="reply-secton">
            <div class="reply-section-title">
                <p>Leave a Reply</p>
            </div>

            <div class="reply-form">

            
                <form action="{{url('/blog/post/comment')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Name*&nbsp;(Required)</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Email*&nbsp;(Required)</label>
                            <input type="email" name="email" required class="form-control" id="inputEmail4"
                                placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Website</label>
                            <input type="text" name="website" class="form-control" placeholder="Website">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment-reply">Comment*&nbsp;(Required)</label>
                        <input type="text" name="comment" class="form-control comment" id="comment-reply" required>
                    </div>

                    <button type="submit" class="btn sign-button">Comment</button>
                </form>
              


            </div>
        </div>
    </div>


</div>

@php

@endphp

<div class="container">
    <div class="Headingtitle" style="color:#D20A7D">
        Related Post
    </div>
    <div class="divider"></div>
</div>
<div class="container ">

    <div class="swiper technews ">
        <div class="swiper-wrapper ">
            @foreach($related_post as $row)
            <div class="swiper-slide ">
                <div class="card ">
                    <img class="card-img-top " src="{{asset('public/assets/images/blog/'.$row->image)}} "
                        alt="Card image cap ">
                    <div class="card-body ">
                        <h5 class="card-title ">{{substr($row->title,0,20)}}</h5>
                        <!-- <p class="card-text " {!! substr($row->description,0,20) !!}</p> -->
                        <a href="{{route('blog.post.details',$row->slug)}}" class="btn  " style="background:#D20A7D;width:100%;color:#fff">Read
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

<!-- <div class="related-posts">

        <div class="container">
            <div class="related-posts-container">
                <h3>Related Posts</h3>

                <div class="row">
                    @foreach($related_post as $post)
                    <div class="col-lg-3">
                        <div class="related-items">
                            <img class="news-img" src="{{asset('public/assets/images/blog/'.$post->image)}}" style="width:100%;">
                            <div class="bottom-left">{{$post->title}}</div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>

    </div> -->

@endsection
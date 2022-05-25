<?php

use App\Models\blogCategory;


$category = blogCategory::category();
$user= App\Models\User::find($post->user_id);

//   echo "<pre>";print_r($category);die();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/postcss.css')}}">

    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" sizes="32x32" />

<title>{{$gs->site_title}}</title>
</head>

<body>


    <!-- Navbar Starts-->
     @include('layout.blog.header')
    <!-- Navbar Ends -->


    <!-- Posts starts here -->



    <div class="container">


        <!-- Post Image Starts -->
        <img class="post-image" src="{{asset('public/assets/images/blog/'.$post->image)}}" alt="">
        <!-- Post Image Starts -->

        <div class="post-heading">
            <div class="post-title">
            {{ $post->title}}
            </div>

            <div class="post-date">
            {{ $post->created_at->toDayDateTimeString()}}
            </div>
            <!-- <div class="watched-by">
                <div class="watch-icon"><i class="fa-solid fa-eye "></i></div>

                <div class="watch-number">814</div>
            </div> -->

        </div>

        <div class="post-body">
        {!! $post->description !!}
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
                                <label for="inputEmail4">Name</label>
                                <input type="text" name ="name"class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Email</label>
                                <input type="email" name="email" required class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Website</label>
                                <input type="text" name="website" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment-reply">Comment</label>
                            <input type="text" name="comment" class="form-control comment" id="comment-reply">
                        </div>

                        <button type="submit" class="btn btn-primary">Comment</button>
                    </form>


                </div>
            </div>
        </div>


    </div>

@php 

@endphp

<div class="container">
    <div class="Headingtitle">
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

@include('layout.blog.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " >
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js "></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>

    <script src="{{asset('public/assets/blog/js/index.js')}} "></script>


</body>

</html>

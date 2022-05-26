<?php

use App\Models\blogCategory;


$category = blogCategory::category();


//   echo "<pre>";print_r($category);die();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <div class="album py-5">
        <div class="container">

            <div class="row">
                @foreach($post as $row)
                <div class="col-md-4">
                    <div class="card mb-4 ">
                        <img class="card-img-top" src="{{asset('public/assets/images/blog/'.$row->image)}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">{{$row->title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('blog.post.details',$row->slug)}}"
                                        class="btn btn-sm btn-outline-secondary">View Details</a>

                                </div>
                                <small class="text-muted">{{ $row->created_at->toDayDateTimeString()}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>




    @include('layout.blog.footer')




</body>

</html>
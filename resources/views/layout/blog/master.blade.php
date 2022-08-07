
<?php

use App\Models\blogCategory;


$category = blogCategory::category();

//   echo "<pre>";print_r($category);die();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{asset('public/assets/blog/fonts/icomoon/style.css')}}">

    <!--  <link rel="stylesheet" href="css/owl.carousel.min.css"> -->

    <!-- Bootstrap CSS -->


    <!-- Style -->
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/style1.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('public/assets/blog/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/blog/extra/css/style.css')}}">
    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" sizes="32x32" />
    @yield('details-css')

    <title>{{$gs->site_title}}</title>
</head>

<body>


@include('layout.blog.header')
    @yield('content')
 @include('layout.blog.footer')

   


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js "></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
    <script src="{{asset('public/assets/blog/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/assets/blog/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/blog/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/blog/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/blog/js/main.js')}}"></script>
    <script src="{{asset('public/assets/blog/js/index.js')}} "></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
    $('.carousel').carousel({
            interval: 2000
        }

    )
    </script>
     <script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>

    <script>
    $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");

        var input = $("#pass_log_id");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });


    $("body").on('click', '.toggle-password', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#pass_reg_id");

        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }

    });
    </script>
</body>

</html>
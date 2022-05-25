<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/blog/css/style.css')}}">
    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" sizes="32x32" />







    <title>{{$gs->site_title}}</title>



</head>

<body>








    @include('layout.blog.header')
    @yield('content')

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
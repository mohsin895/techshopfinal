<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->favicon)}}" type='image/x-icon' />
    <title>{{$gs->site_title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/fonts/icomoon/style.css')}}">


    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/index.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/common-desktop.bundle.css') }}">

    <style>
    .rating-css div {
        color: #f38c02;
        font-size: 30px;
        font-family: sans-serif;
        font-weight: 800;
        text-align: center;
        text-transform: uppercase;
        padding: 20px 0;
    }

    .rating-css input {
        display: none;
    }

    .rating-css input+label {
        font-size: 30px;
        text-shadow: 1px 1px 0 #8f8420;
        cursor: pointer;
    }

    .rating-css input:checked+label~label {
        color: #b4afaf;
    }

    .rating-css label:active {
        transform: scale(0.8);
        transition: 0.3s ease;
    }
    </style>
    <style>
    .portfolio-home {
        min-width: 100%;
        max-width: 100%;
        min-height: 100%;
        /*max-height: 100%;*/
        /*background-image: url('/home/slider/user_back.png');*/
    }

    .portfolio-menu-content {
        margin: 10px;
    }

    .portfolio-menu-content i,
    .portfolio-menu-content li {
        color: #fff;
        cursor: pointer;
    }

    .portfolio-menu-content h1 {
        margin-bottom: 0px;
    }

    #sidebar {
        min-width: 120px;
        max-width: 120px;
        background-color: #3CC122;
        /*float: left;*/
        margin-left: 5%;
        min-height: 60%;
        max-height: 60%;
        position: relative;

    }

    .sub-menu {
        background-color: green;
        display: none;
        list-style: outside none none;
        margin: 0;
        padding: 0 20px;
        position: absolute;
        right: -89px;
        top: -18px;
    }

    .nav>li:hover .sub-menu {
        display: block;
    }

    .portfolio-menu-content {
        margin: 10px 0;
    }
    </style>

    <style>
    .menu-bar {
        text-align: center;
    }

    .menu-bar ul {
        /*display: inline-flex;*/
        list-style: none;
        /* color: red; */
    }

    .menu-bar ul li {
        /* width: 340px; */
        /* margin: 15px;
	padding: 15px; */
        text-align: left;
        /* border-bottom: 1px solid #e6e6e6; */
        padding: 0.86em;
        margin: 0 0.325em
    }

    .menu-bar ul li a {
        text-decoration: none;
        color: #333;
    }

    /* .menu-bar   span {
       margin-left:180px;
    } */


    .menu-bar ul li i {
        margin-left:200px;
        /* cursor: pointer; */
        /* background-color: #fafafa */
    }

   
    .menu-bar ul li:hover {
        background: #fff;
        border-radius: 3px;
        /* cursor: pointer; */
        /* background-color: #fafafa */
    }

    .sub-menu-1 {
        display: none;
    }

    .menu-bar ul li:hover .sub-menu-1 {
        display: block;
        position: absolute;
        background: #fff;
        margin-top: -30px;
        /* left:100%; */
        z-index: 1000;
        /* margin-left: 320px; */

        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 0.25rem
    }

    .menu-bar ul li:hover .sub-menu-1 ul {
        display: block;
        /*margin: 10px;*/
    }

    .menu-bar ul li:hover .sub-menu-1 ul li {
        width: 150px;
        padding: 10px;
        border-bottom: 1px dotted #fff;
        background: transparent;
        border-radius: 0;
        text-align: left;
    }
    </style>
</head>



<body>



    @yield('content')


    <footer class="footer-section text-center text-lg-start text-white" style="background-color: #91195b">
        <!-- Grid container -->
        <div class=" p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            {{$gs->site_title}}
                        </h6>
                        <p>
                        <div class="site-logo">
                        <a href="{{url('/')}}" class="text-black"><span class="text-primary"><img
                                    src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}" alt="logo"
                                    class="img-fluid"></a>




                    </div>
                        </p>

                    
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                  


                        <!-- Facebook -->
                        <a href="{{$gs->facebook_page}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-facebook-square"></i></a>

                        <!-- Twitter -->
                        <a href="{{$gs->linkdi}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-linkedin-square"></i></a>

                        <!-- Google -->
                        <a href="{{$gs->youtube}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-youtube-square"
                                ></i></a>

                        <!-- Instagram -->
                        <a href="{{$gs->instagram}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"> <i class="fa fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
               
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a class="text-white" href="{{url('blog/user')}}">Blog</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{url('/gift_card')}}">Gift Card</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{url('/flash_sale')}}">Flash Sale</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />


                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Useful links
                        </h6>
                        <p>
                            <a href="{{route('t_c')}}" class="text-white">Terms & conditions</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{route('privacy-policy')}}">Privacy Policy</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{route('warranty-and-replacement')}}">Warrenty &
                                Replacement</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{route('about_us')}}">About Us</a>
                        </p>
                        <p>
                            <a class="text-white" href="{{route('contact_us')}}">Contact Us</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fa fa-home mr-3"></i> {!! $gs->address !!}</p>
                        <p><i class="fa fa-envelope mr-3"></i> {{$gs->email1}}</p>
                        <p><i class="fa fa-phone mr-3"></i> {{$gs->mobile1}}</p>
                        <p><i class="fa fa-print mr-3"></i> {{$gs->site_title}}</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            <!-- <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                  
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-left text-md-end">


                     
                        <a href="{{$gs->facebook_page}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-facebook-square"></i></a>

                     
                        <a href="{{$gs->linkdi}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-linkedin-square"></i></a>

                      
                        <a href="{{$gs->youtube}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa fa-youtube-square"
                                style="color: #D5452D;"></i></a>

                      
                        <a href="{{$gs->instagram}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"> <i class="fa fa-instagram"></i></a>
                    </div>
                   
                </div>
            </section> -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3 text-center">
                            <p>&copy; 2012-21 {{$gs->site_title}} Bangladesh - <a href="{{route('t_c')}}">Terms</a> - <a
                                    href="{{route('privacy-policy')}}">Privacy</a></p>

                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>




    <script src="{{ asset('public/assets/frontend/extra/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{ asset('public/assets/frontend/extra/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/assets/frontend/extra/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/assets/frontend/extra/js/jquery.sticky.js')}}"></script>

    <script src="{{ asset('public/assets/frontend/extra/js/main.js')}}"></script>
    <!-- <script src="{{ asset('public/assets/frontend/extra/js/index.js')}}"></script> -->
    <!-- <script src="{{ asset('public/assets/frontend/js/common-desktop.bundle.js') }}"></script> -->

    <script src="{{ asset('public/assets/frontend/js/index.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
    $(document).ready(function() {

        $('#serach').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('autocomplete.fetch') }}",
                    method: "POST",
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(data) {
                        $('#productlist').fadeIn();
                        $('#productlist').html(data);
                    }
                });
            }
        });

        $(document).on('click', '#search', function() {
            $('#serach').val($(this).text());
            $('#productlist').fadeOut();
        });

    });
    </script>




    <script>
    // $(document).ready(function() {
    //   $('#myCarousel').carousel({
    //     interval: 1000
    //   })
    //   $('#featured').carousel({
    //     interval: 4000
    //   })
    // });
    $(".owlcarouselMaster1").owlCarousel({
        loop: true,
        margin: 10,

        autoplay: true,
        responsiveClass: true,

        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            100: {
                items: 1,
                nav: true
            },
            200: {
                items: 1,
                nav: true
            },


            600: {
                items: 2,
                nav: false
            },
            900: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: false
            },
            1600: {
                items: 2,
                nav: false
            }
        }
    });
    $('.owl-carousel1').owlCarousel({
        loop: true,
        margin: 10,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true

            },
            100: {
                items: 1,
                nav: true
            },
            200: {
                items: 1,
                nav: true
            },


            600: {
                items: 2,
                nav: false

            },
            1000: {
                items: 2,
                nav: false,
                loop: false
            },
            1600: {
                items: 2,
                nav: false
            }
        }
    })

    $(".owlcarouselMaster").owlCarousel({
        loop: true,
        margin: 10,

        autoplay: true,
        responsiveClass: true,

        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            100: {
                items: 1,
                nav: true
            },
            200: {
                items: 1,
                nav: true
            },


            600: {
                items: 3,
                nav: false
            },
            900: {
                items: 5,
                nav: false
            },
            1000: {
                items: 5,
                nav: false
            },
            1600: {
                items: 6,
                nav: false
            }
        }
    });





    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true

            },
            100: {
                items: 1,
                nav: true
            },
            200: {
                items: 1,
                nav: true
            },


            600: {
                items: 2,
                nav: false

            },
            1000: {
                items: 2,
                nav: false,
                loop: false
            },
            1600: {
                items: 2,
                nav: false
            }
        }
    })
    </script>

    <script>
    const copyBtn = document.querySelector('#copyBtn');
    copyBtn.addEventListener('click', e => {
        const input = document.createElement('input');
        input.value = copyBtn.dataset.text;
        document.body.appendChild(input);
        input.select();
        if (document.execCommand('copy')) {

            document.body.removeChild(input);
        }
    });
    </script>


</body>

</html>
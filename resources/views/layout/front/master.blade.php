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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    


    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/fonts/icomoon/style.css')}}">


    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/bootstrap.min.css')}}"> -->

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/frontend/extra/css/index.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/frontend/css/style.css') }}"> -->

    <style>
    
    </style>


</head>



<body style="color:#000">



    @yield('content')


    




    <script src="{{ asset('public/assets/frontend/extra/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{ asset('public/assets/frontend/extra/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/assets/frontend/extra/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/assets/frontend/extra/js/jquery.sticky.js')}}"></script>

    <script src="{{ asset('public/assets/frontend/extra/js/main.js')}}"></script>
    <!-- <script src="{{ asset('public/assets/frontend/extra/js/index.js')}}"></script> -->
     <!-- <script src="{{ asset('public/assets/frontend/common-desktop.bundle.js') }}"></script> -->
    <!-- <script src="{{ asset('public/assets/frontend/home-desktop.bundle.js') }}"></script> -->

    @yeild('css')

    <script src="{{ asset('public/assets/frontend/js/index.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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


    $(".owlcarouselGallery").owlCarousel({
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

    $(".owlcarouselFlashsall").owlCarousel({
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
                items: 1,
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
                items: 1,
                nav: false

            },
            1000: {
                items: 1,
                nav: false,
                loop: false
            },
            1600: {
                items: 1,
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
    <script>
        function changeImage(img) {
document.getElementById("mainimgid").src=img.src;
document.getElementById("text").innerText = img.alt
  
 }
        </script>


</body>

</html>
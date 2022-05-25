<footer class="footer-section text-center text-lg-start text-white" style="background-color: #45526e">
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

                      
               


                        <!-- Facebook -->
                        <a href="{{$gs->facebook_page}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa-brands fa-facebook-square fa-2xl"></i></a>

                        <!-- Twitter -->
                        <a href="{{$gs->linkdi}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa-brands fa-twitter-square fa-2xl"></i></a>

                        <!-- Google -->
                        <a href="{{$gs->youtube}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa-brands fa-youtube-square fa-2xl"
                               ></i></a>

                        <!-- Instagram -->
                        <a href="{{$gs->instagram}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"> <i class="fa-brands fa-instagram-square fa-2xl"></i></a>
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
                            class="text-white" role="button"><i class="fa-brands fa-facebook-square fa-2xl"></i></a>

                     
                        <a href="{{$gs->linkdi}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa-brands fa-twitter-square fa-2xl"></i></a>

                        <a href="{{$gs->youtube}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"><i class="fa-brands fa-youtube-square fa-2xl"
                                style="color: #D5452D;"></i></a>

                        <a href="{{$gs->instagram}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button"> <i class="fa-brands fa-instagram-square fa-2xl"></i></a>
                    </div>
                   
                </div>
            </section> -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-12 col-lg-12 text-center text-md-start">
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
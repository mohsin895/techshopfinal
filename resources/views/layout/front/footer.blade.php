<footer class="footer-section text-center text-lg-start text-white" style="background-color: #EFEFEF" >
        <!-- Grid container -->
        <div class=" container  pb-0">
            <!-- Section: Links -->
            <section>
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3 mobile-text-align">
                        <p class="text-capitalize footer-header-font-size">
                            {{$gs->site_title}}
                        </p>

                        <p class="mb-4 footer-font-size text-capitalize"> {!! $gs->address !!}</p>

                        <!-- Grid column -->



                        <!-- Facebook -->
                        <a href="{{$gs->facebook_page}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"><img
                            src="{{asset('public/assets/images/setting/facebook.png')}}" style="left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>
                            <a href="{{$gs->facebook_group}}" target="_blank" class="btn btn-outline-light btn-floating m-1"
                            class="text-white" role="button" style="color:#fff;background:#000"><i class="fa fa-users" aria-hidden="true"></i></a>
                        <a href="{{$gs->discord}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"><img
                            src="{{asset('public/assets/images/setting/descord.png')}}" style="left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>




                        <a href="{{$gs->linkdi}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"><img
                            src="{{asset('public/assets/images/setting/linkdi.png')}}" style="height:40px;left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>
                        <!-- Google -->
                        <a href="{{$gs->youtube}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"><img
                            src="{{asset('public/assets/images/setting/youtube.png')}}" style="height:40px;left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>

                        <!-- Instagram -->
                        <a href="{{$gs->instagram}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"> <img
                            src="{{asset('public/assets/images/setting/instagram.png')}}" style="left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>
                        <!-- Twitter -->
                        <a href="{{$gs->twiter}}" target="_blank" class="" class="text-white" role="button"
                            style="color:#000000"> <img
                            src="{{asset('public/assets/images/setting/twiter.png')}}" style="left: 5%;right: 5%;top: 5%;bottom: 5%;"></a>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                        <p class="text-text-capitalize mb-4 footer-header-font-size mobile-text-align">Support</p>

                        <p class="support-size"><img src="{{asset('public/assets/images/setting/mobile.png')}}" style="left: 16.67%;right: 16.67%;top: 16.67%;bottom: 16.67%;width:26.67px;height:26.67px;margin-left:10px"><button class="footer-font-size-support-mobile" style="border: none; margin-left:10px;text-align: center; margin-top: 3px;"> {{$gs->mobile1}}</button></p>
                        <p class="support-size">
                        <img src="{{asset('public/assets/images/setting/email.png')}}" style="left: 16.67%;right: 16.67%;top: 16.67%;bottom: 16.67%;width:26.67px;height:20px;margin-left:10px"><span class="footer-font-size"> {{$gs->email1}}</span></p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 mobile-text-align">

                        <p class="text-text-capitalize   footer-header-font-size">
                            Products
                        </p>
                        <p><a href="{{url('/blog/user')}}" class="footer-font-size">Blog</a> </p>
                        <p><a href="{{url('/gift_card')}}" class="footer-font-size">Gift Card</a></p>
                        <p> <a href="{{url('/flash_sale')}}" class="footer-font-size">Flash Sale</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />


                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 mobile-text-align">
                        <p class="text-text-capitalize   footer-header-font-size">
                            Useful links
                        </p>
                        <p> <a href="{{route('t_c')}}" class="footer-font-size">Terms & conditions</a>
                        </p>
                        <p>
                            <a class="footer-font-size" href="{{route('privacy-policy')}}">Privacy Policy</a>
                        </p>
                        <p>
                            <a class="footer-font-size" href="{{route('warranty-and-replacement')}}">Warrenty &
                                Replacement</a>
                        </p>

                        <p>
                            <a class="footer-font-size" href="{{route('shipping_policy')}}">Shipping Policy</a>
                        </p>
                        <p>
                            <a class="footer-font-size" href="{{route('about_us')}}">About Us</a>
                        </p>
                        <p>
                            <a class="footer-font-size" href="{{route('contact_us')}}">Contact Us</a>
                        </p>
                    </div>

                    <!-- Grid column -->

                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            <!-- <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                  
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-left text-md-end">


                     
                        <a href="{{$gs->facebook_page}}" target="_blank" class=""
                            class="text-white" role="button"><i class="fa fa-facebook-square"></i></a>

                     
                        <a href="{{$gs->linkdi}}" target="_blank" class=""
                            class="text-white" role="button"><i class="fa fa-linkedin-square"></i></a>

                      
                        <a href="{{$gs->youtube}}" target="_blank" class=""
                            class="text-white" role="button"><i class="fa fa-youtube-square"
                                style="color: #D5452D;"></i></a>

                      
                        <a href="{{$gs->instagram}}" target="_blank" class=""
                            class="text-white" role="button"> <i class="fa fa-instagram"></i></a>
                    </div>
                   
                </div>
            </section> -->
<!-- 
            <hr class="my-3">

        
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                 
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                       
                        <div class="p-3 text-center">
                            <p>&copy; 2012-21 {{$gs->site_title}} Bangladesh - <a href="{{route('t_c')}}">Terms</a> - <a
                                    href="{{route('privacy-policy')}}">Privacy</a></p>

                        </div>
                      
                    </div>
                
                </div>
            </section> -->
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>

   
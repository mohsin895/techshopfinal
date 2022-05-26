
<?php
use App\Models\Cart;
$cartCount = Cart::cartCount();

 ?>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span
                        class="d-none d-md-inline-block">info@yourdomain.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+
                        (234) 5678 9101</span></a> -->
                <span class="d-md-inline-block d-sm-inline-block text-center">
                    <div class="site-logo">
                        <a href="{{url('/')}}" class="text-black"><span class="text-primary"><img
                                    src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}" alt="logo"
                                    class="img-fluid"></a>




                    </div>
                </span>

                <span class="d-md-inline-block d-sm-inline-block text-center">
                    <form class="search-input w-50" action="{{ route('user.searchProducts') }}" method="post">

                        @csrf

                        <div class="input-group mb-3 mt-2 searchbar" style="">

                            <input type="text" name="serach" id="serach" class="form-control input-lg search-input"
                                value="{{ request()->input('serach') }}" placeholder="Search product name"
                                autocomplete="off" required />
                            <div id="productlist" style="position: absolute;top: 40px;width: 100%;">
                            </div>

                            <button type="submit" class="input-group-text" id="basic-addon3"> <b>Search</b> </button>

                        </div>
                    </form>
                </span>




                <div class="float-right d-none d-lg-block d-xl-block d-xxl-block ">
                    <a href="{{route('cart')}}" class="icon-wrapper dropdown-toggle-cart js--cart-icon">
                        <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size: 25px;"></i>
                        <div class="badge" style="color: #1c619b; font-size: 25px;">{{ $cartCount}}</div>

                    </a>
                    @if(empty(Auth::check()))
                    <a href="{{route('user.login')}}" class="">
                        <span class=" d-md-inline-block" style="font-size: 25px;">Login</span></a>
                    <span class="mx-md-6"></span>

                    @else


                    <span class=" d-md-inline-block d-sm-inline-block text-center">


                        <div class="user mr-0 ">

                            <a href="" class="dropdown-toggle-user" data-toggle="dropdown">
                                <span class="icon-wrapper">
                                    <i class="fa-solid fa-user" style="font-size: 25px;"></i>
                                </span>
                                <span><span> <i class="fa fa-solid fa-chevron-down"
                                            style="font-size: 25px;"></i></span></span>
                            </a>

                            <div class="dropdown-menu">
                                <a href="{{route('user.account')}}" class="dropdown-item">
                                    Profile
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('user.logout')}}">
                                    Logout

                                </a>
                            </div>

                        </div>
                    </span>

                    @endif




                </div>

            </div>

        </div>

    </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="height: 78px;">

    <div class="container">
        <div class="row align-items-center position-relative">

         <div class="col-12">
                <div class="float-left d-lg-none d-xl-none ">
                    <a href="{{route('cart')}}" class="icon-wrapper dropdown-toggle-cart js--cart-icon">
                    <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size: 30px;"></i>
                        <div class="badge" style="color: white;font-size: 30px;">{{ $cartCount}}</div>

                    </a>
                </div>


                <nav class="site-navigation text-right ml-auto " role="navigation">


                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        @if(empty(Auth::check()))
                        <li><a href="{{route('user.login')}}" class="nav-link d-lg-none d-xl-none">Login</a></li>
                        @else



                        <li class=" d-lg-none d-xl-none category has-children ">

                            <a href="#about-section" class="nav-link">{{Auth::user()->name}}</a>




                            <ul class="dropdown">
                                <li>
                                    <a href="{{route('user.account')}}">Profile</a>

                                </li>
                                <li>
                                    <a href="{{route('user.logout')}}">Logout</a>

                                </li>
                            </ul>



                        </li>
                        @endif
                        <li><a href="{{url('/')}}" class="nav-link">Home</a></li>

                        <li class=" category has-children ">

                            <a href="#about-section" class="nav-link">Category</a>
                            <ul class="dropdown arrow-top">
                                @php
                                $categories= App\Models\Category::where('parent_id',0)->get();
                                @endphp
                                @foreach($categories as $cat)
                                @php
                                $subcategories = App\Models\Category::where('parent_id',$cat->id)->get();

                                @endphp

                                <li class="has-children">
                                    <a href="{{url('/',$cat->slug)}}">{{$cat->cat_name}}</a>
                                    <ul class="dropdown">
                                        @foreach($subcategories as $subcat)
                                        <li><a href="{{url('/',$subcat->slug)}}">{{$subcat->cat_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>

                        </li>


                        <li><a href="{{url('/flash_sale')}}" class="nav-link">Flash Sale</a></li>

                        <li><a href="{{url('/gift_card')}}" class="nav-link">Gift Card</a></li>
                        <li><a href="{{url('blog/user')}}" class="nav-link">Blog</a></li>





                    </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none" style="margin-top: 10px;"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>







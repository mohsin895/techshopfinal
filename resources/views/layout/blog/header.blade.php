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
                <span class="d-none d-md-inline-block">@if(!empty(Auth::guard('blog')->check()))

                    {{Auth::guard('blog')->user()->name}}
                    @else
                    @endif</span>




            </div>

        </div>

    </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner"
    style="box-shadow: -1px 10px 11px -4px rgb(0 0 0 / 39%)">

    <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
                <a href="{{url('blog/user')}}" class="text-black"><span class="text-primary"><img class="logo-mobile" src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}" alt=""
                srcset=""></a>
            </div>

            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{url('blog/user')}}" class="nav-link" style="color:#ffa500 !important">Home</a></li>
                    

                        <li><a href="{{route('blog.post')}}" class="nav-link">All Post</a></li>
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">Category</a>
                            <ul class="dropdown arrow-top">
                                @foreach($category as $row)


                                <li class="has-children">
                                    <a href="{{route('blog.category',$row->slug)}}">{{$row->cat_name}}</a>
                                    <ul class="dropdown">
                                        @foreach($row['subcategories'] as $subcat)
                                        <li><a href="{{route('blog.category',$row->slug)}}">{{$subcat->cat_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="{{url('/')}}" class="nav-link">Store</a></li>
                        @if(empty(Auth::guard('blog')->check()))
                        <li><a href="{{route('blog.user.login')}}" class="nav-link">Login</a></li>
                        @else
                        <li><a href="{{route('blog.logout')}}" class="nav-link">Logout</a></li>
                        @endif
                        <li><a href="{{route('blog.user.post')}}" class="nav-link blog-button">Write a Blog</a></li>
                    </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>

        </div>
    </div>

</header>
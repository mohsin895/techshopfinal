<div class="display-largescreen">
        <!-- Blue social media links -->
        <div class="social-top">
            <div class="container">

                <div class="closer">

                    <div class="email"> @if(!empty(Auth::guard('blog')->check()))
                                  
                                  {{Auth::guard('blog')->user()->name}}
                                  @else
                                  @endif </div>


                   

                </div>

            </div>
        </div>
        <div class="navigation">
            <div class="container">


                <div class="closer">
                    <a href="{{url('blog/user')}}">
                        <img class="logo" src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}" alt="" srcset="">
                    </a>

                    
                    <ul class="navigationlink">
                        <a href="{{url('/blog/user')}}">
                            <li class="active">HOME</li>
                        </a>

                        <a href="{{route('blog.post')}}">
                            <li>All Posts</li>
                        </a>
                       
                        <a href="{{url('/')}}" class="">
                            <li>Store</li>
                        </a>
                        @if(empty(Auth::guard('blog')->check()))
                        <a href="{{route('blog.user.login')}}">
                            <li>Login</li>
                        </a>
                        @else
                        <a href="{{route('blog.logout')}}">
                            <li>Logout</li>
                        </a>
                        @endif
                        <a href="{{route('blog.user.post')}}">
                            <li class="blog-button">Write a Blog</li>
                        </a>
                        
                    </ul>
                </div>



            </div>
        </div>
    </div>


    <div class="display-smallscreen">


        <div class="social-top">
            <div class="container">

                <div class="closer">

                    <div class="email">@if(!empty(Auth::guard('blog')->check()))
                                  
                                  {{Auth::guard('blog')->user()->name}}
                                  @else
                                  @endif </div>

                </div>

            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img class="logo-mobile" src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}" alt=""
                srcset="">
            <a class="navbar-brand" href="{{url('blog/user')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

         

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('blog/user')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.post')}}">All Post</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Store</a>
                    </li>
                    @if(empty(Auth::guard('blog')->check()))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.user.login')}}">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.logout')}}">Logout</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog.user.post')}}">Write a Post</a>
                    </li>


                   
                </ul>
            </div>
        </nav>
    </div>
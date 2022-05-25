<header id="header" class="ct-header" data-id="type-1" itemscope="" itemtype="https://schema.org/WPHeader">
            <div data-device="desktop">
                <div data-row="top" data-column-set="2">
                    <div class="ct-container">
                        <div data-column="start" data-placements="1">
                            <div data-items="primary">
                                <div class="ct-header-text " data-id="text">
                                    <div class="entry-content">
                                        @if(!empty(Auth::guard('blog')->check()))
                                  
                                     {{Auth::guard('blog')->user()->name}}
                                     @else
                                     @endif
                                     
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-column="end" data-placements="1">
                            <div data-items="primary">
                                <div class="ct-header-socials " data-id="socials">


                                    <div class="ct-social-box" data-icon-size="custom" data-color="official"
                                        data-icons-type="square:solid">



                                        <a href="{{$gs->facebook_page}}" data-network="facebook"
                                            aria-label="Facebook" style="--official-color: #557dbc" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Facebook Icon">
                                                    <path
                                                        d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Facebook</span> </a>

                                        <a href="{{$gs->facebook_group}}"
                                            data-network="facebook_group" aria-label="Facebook Group"
                                            style="--official-color: #3d87fb" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Facebook Group Icon">
                                                    <path
                                                        d="M3.3,18.4c-0.2-0.5,0.3-2.8,0.7-3.7c0.5-1.1,1.6-2,2.5-2.3c0.6-0.2,0.7-0.2,2.1,0.5l1.4,0.7l1.4-0.7c0.8-0.4,1.5-0.7,1.8-0.7c0.5,0,1.8,0.9,2.4,1.6c0.6,0.9,1.1,2.3,1.2,3.7l0,1.1l-6.7,0C4,18.7,3.4,18.6,3.3,18.4z M0.1,12.8c-0.4-0.9,0.6-3.4,1.6-4.1c0.8-0.5,1.5-0.5,2.5,0.1c0.6,0.4,0.9,0.5,1.1,0.3C5.6,9,5.7,9,5.9,9.3c0.2,0.2,0.6,0.6,0.9,1c0.6,0.6,0.6,0.7-0.4,1.1c-0.4,0.1-1.1,0.5-1.6,1l-0.9,0.7H2.1C0.5,13.1,0.2,13,0.1,12.8z M15.3,12.4c-0.4-0.4-1.1-0.8-1.5-1c-1.1-0.4-1.1-0.5-0.5-1.1c0.3-0.3,0.7-0.7,0.9-1C14.4,9,14.5,9,14.8,9.1c0.2,0.1,0.5,0,1.1-0.3c0.5-0.3,1.1-0.5,1.4-0.5c1.3,0,2.6,1.8,2.7,3.7l0,1l-2,0l-2,0L15.3,12.4z M8.4,10.6C7,9.9,6,8.4,6,6.9c0-2.1,2-4.1,4.1-4.1s4.1,2,4.1,4.1S12.1,11,10,11C9.6,11,8.9,10.8,8.4,10.6z M3.5,6.8c-1.7-1-1.9-3.5-0.4-4.7c1.1-0.9,2.5-1,3.6-0.2c1,0.7,1,0.9,0.2,1.6c-0.8,0.7-1.4,1.8-1.5,3C5.2,7.2,5.2,7.3,4.7,7.3C4.4,7.3,3.9,7.1,3.5,6.8z M14.8,6.5c-0.2-1.2-0.7-2.3-1.5-3c-0.8-0.7-0.8-0.9,0.2-1.6C15.4,0.6,18,2,18,4.3c0,1.5-1.4,3-2.7,3C14.9,7.3,14.9,7.2,14.8,6.5z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Facebook Group</span> </a>

                                        <a href="{{$gs->twiter}}" data-network="twitter"
                                            aria-label="Twitter" style="--official-color: #7acdee" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Twitter Icon">
                                                    <path
                                                        d="M20,3.8c-0.7,0.3-1.5,0.5-2.4,0.6c0.8-0.5,1.5-1.3,1.8-2.3c-0.8,0.5-1.7,0.8-2.6,1c-0.7-0.8-1.8-1.3-3-1.3c-2.3,0-4.1,1.8-4.1,4.1c0,0.3,0,0.6,0.1,0.9C6.4,6.7,3.4,5.1,1.4,2.6C1,3.2,0.8,3.9,0.8,4.7c0,1.4,0.7,2.7,1.8,3.4C2,8.1,1.4,7.9,0.8,7.6c0,0,0,0,0,0.1c0,2,1.4,3.6,3.3,4c-0.3,0.1-0.7,0.1-1.1,0.1c-0.3,0-0.5,0-0.8-0.1c0.5,1.6,2,2.8,3.8,2.8c-1.4,1.1-3.2,1.8-5.1,1.8c-0.3,0-0.7,0-1-0.1c1.8,1.2,4,1.8,6.3,1.8c7.5,0,11.7-6.3,11.7-11.7c0-0.2,0-0.4,0-0.5C18.8,5.3,19.4,4.6,20,3.8z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Twitter</span> </a>

                                        <a href="{{$gs->instagram}}" data-network="instagram"
                                            aria-label="Instagram" style="--official-color: #ed1376" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20" height="20" viewBox="0 0 20 20"
                                                    aria-label="Instagram Icon">
                                                    <circle cx="10" cy="10" r="3.3" />
                                                    <path
                                                        d="M14.2,0H5.8C2.6,0,0,2.6,0,5.8v8.3C0,17.4,2.6,20,5.8,20h8.3c3.2,0,5.8-2.6,5.8-5.8V5.8C20,2.6,17.4,0,14.2,0zM10,15c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S12.8,15,10,15z M15.8,5C15.4,5,15,4.6,15,4.2s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S16.3,5,15.8,5z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Instagram</span> </a>

                                        <a href="{{$gs->linkdi}}"
                                            data-network="linkedin" aria-label="LinkedIn"
                                            style="--official-color: #1c86c6" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="LinkedIn Icon">
                                                    <path
                                                        d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">LinkedIn</span> </a>

                                        <a href="{{$gs->youtube}}"
                                            data-network="youtube" aria-label="YouTube"
                                            style="--official-color: #e96651" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20" height="20" viewbox="0 0 20 20"
                                                    aria-label="YouTube Icon">
                                                    <path
                                                        d="M15,0H5C2.2,0,0,2.2,0,5v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V5C20,2.2,17.8,0,15,0z M14.5,10.9l-6.8,3.8c-0.1,0.1-0.3,0.1-0.5,0.1c-0.5,0-1-0.4-1-1l0,0V6.2c0-0.5,0.4-1,1-1c0.2,0,0.3,0,0.5,0.1l6.8,3.8c0.5,0.3,0.7,0.8,0.4,1.3C14.8,10.6,14.6,10.8,14.5,10.9z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">YouTube</span> </a>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ct-sticky-container">
                    <div data-sticky="auto-hide">
                        <div data-row="middle" data-column-set="2">
                            <div class="ct-container">
                                <div data-column="start" data-placements="1">
                                    <div data-items="primary">
                                        <div class="site-branding" data-id="logo" itemscope="itemscope"
                                            itemtype="https://schema.org/Organization">

                                            <a href="{{url('blog/user')}}" class="site-logo-container" rel="home"><img
                                                    width="2854" height="724" alt="TSBLOG"
                                                    data-src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}"
                                                    class="default-logo lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                        width="2854" height="724" alt="TSBLOG"
                                                        data-src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}"
                                                        class="default-logo lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                            width="2854" height="724"
                                                            src="wp-content/uploads/2021/03/TSBLOG-LOGO.png"
                                                            class="default-logo"
                                                            alt="TSBLOG" /></noscript></noscript></a>
                                        </div>

                                    </div>
                                </div>
                                <div data-column="end" data-placements="1">
                                    <div data-items="primary">
                                        <nav id="header-menu-1" class="header-menu-1" data-id="menu"
                                            data-menu="type-2:left" data-dropdown="type-1:solid" data-responsive="no"
                                            itemscope="" itemtype="http://schema.org/SiteNavigationElement">

                                            <ul id="menu-main" class="menu">
                                                <li id="menu-item-89830"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-89651 current_page_item menu-item-89830">
                                                    <a href="{{url('/blog/user')}}" aria-current="page"
                                                        class="ct-menu-link">Home</a>
                                                </li>
                                                <li id="menu-item-88920"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88920">
                                                    <a href="{{route('blog.post')}}" class="ct-menu-link">All Posts</a>
                                                </li>
                                                <li id="menu-item-253"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-253 animated-submenu">
                                                    <a href="#" class="ct-menu-link">Categories<span
                                                            class="child-indicator" tabindex="0" role="button"
                                                            aria-label="Menu dropdown indicator"><svg width="8"
                                                                height="8" viewBox="0 0 15 15"
                                                                aria-label="Menu dropdown icon">
                                                                <path
                                                                    d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z" />
                                                            </svg></span></a>
                                                    <ul class="sub-menu">
                                                        @foreach($category as $row)
                                                        <li id="menu-item-715"
                                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-715 animated-submenu">
                                                            <a href="{{route('blog.category',$row->slug)}}"
                                                                class="ct-menu-link">{{$row->cat_name}}<span
                                                                    class="child-indicator" tabindex="0" role="button"
                                                                    aria-label="Menu dropdown indicator"><svg width="8"
                                                                        height="8" viewBox="0 0 15 15"
                                                                        aria-label="Menu dropdown icon">
                                                                        <path
                                                                            d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z" />
                                                                    </svg></span></a>
                                                            <ul class="sub-menu">
                                                                @foreach($row['subcategories'] as $subcat)
                                                                <li id="menu-item-93545"
                                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-93545">
                                                                    <a href="{{route('blog.category',$row->slug)}}"
                                                                        class="ct-menu-link">{{$subcat->cat_name}}</a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                                <li id="menu-item-264"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-264">
                                                    <a target="_blank" rel="noopener" href="{{url('/')}}"
                                                        class="ct-menu-link">Store</a>
                                                </li>
                                                @if(empty(Auth::guard('blog')->check()))
                                                <li id="menu-item-88188"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88188">
                                                    <a href="{{route('blog.user.login')}}"
                                                        class="ct-menu-link">Login</a>
                                                </li>
                                                
                                                @else
                                                <li id="menu-item-88188"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88188">
                                                    <a href="{{route('blog.logout')}}"
                                                        class="ct-menu-link">Logout</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </nav>


                                        <div class="ct-header-cta" data-id="button">

                                            <a href="{{route('blog.user.post')}}" class="ct-button-ghost"
                                                data-size="medium">
                                                Write A Blog </a>
                                        </div>


                                        <!--<a href="#search-modal" class="ct-header-search " aria-label="Search"-->
                                        <!--    data-label="left" data-id="search">-->

                                        <!--    <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Search</span>-->

                                        <!--    <svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"-->
                                        <!--        aria-label="Search header icon">-->
                                        <!--        <path-->
                                        <!--            d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z" />-->
                                        <!--    </svg>-->
                                        <!--</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-device="mobile">
                <div data-row="top" data-column-set="2">
                    <div class="ct-container">
                        <div data-column="start" data-placements="1">
                            <div data-items="primary">
                                <div class="ct-header-socials " data-id="socials">


                                    <div class="ct-social-box" data-icon-size="custom" data-color="official"
                                        data-icons-type="square:solid">



                                        <a href="{{$gs->facebook_page}}" data-network="facebook"
                                            aria-label="Facebook" style="--official-color: #557dbc" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Facebook Icon">
                                                    <path
                                                        d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Facebook</span> </a>

                                        <a href="{{$gs->facebook_group}}"
                                            data-network="facebook_group" aria-label="Facebook Group"
                                            style="--official-color: #3d87fb" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Facebook Group Icon">
                                                    <path
                                                        d="M3.3,18.4c-0.2-0.5,0.3-2.8,0.7-3.7c0.5-1.1,1.6-2,2.5-2.3c0.6-0.2,0.7-0.2,2.1,0.5l1.4,0.7l1.4-0.7c0.8-0.4,1.5-0.7,1.8-0.7c0.5,0,1.8,0.9,2.4,1.6c0.6,0.9,1.1,2.3,1.2,3.7l0,1.1l-6.7,0C4,18.7,3.4,18.6,3.3,18.4z M0.1,12.8c-0.4-0.9,0.6-3.4,1.6-4.1c0.8-0.5,1.5-0.5,2.5,0.1c0.6,0.4,0.9,0.5,1.1,0.3C5.6,9,5.7,9,5.9,9.3c0.2,0.2,0.6,0.6,0.9,1c0.6,0.6,0.6,0.7-0.4,1.1c-0.4,0.1-1.1,0.5-1.6,1l-0.9,0.7H2.1C0.5,13.1,0.2,13,0.1,12.8z M15.3,12.4c-0.4-0.4-1.1-0.8-1.5-1c-1.1-0.4-1.1-0.5-0.5-1.1c0.3-0.3,0.7-0.7,0.9-1C14.4,9,14.5,9,14.8,9.1c0.2,0.1,0.5,0,1.1-0.3c0.5-0.3,1.1-0.5,1.4-0.5c1.3,0,2.6,1.8,2.7,3.7l0,1l-2,0l-2,0L15.3,12.4z M8.4,10.6C7,9.9,6,8.4,6,6.9c0-2.1,2-4.1,4.1-4.1s4.1,2,4.1,4.1S12.1,11,10,11C9.6,11,8.9,10.8,8.4,10.6z M3.5,6.8c-1.7-1-1.9-3.5-0.4-4.7c1.1-0.9,2.5-1,3.6-0.2c1,0.7,1,0.9,0.2,1.6c-0.8,0.7-1.4,1.8-1.5,3C5.2,7.2,5.2,7.3,4.7,7.3C4.4,7.3,3.9,7.1,3.5,6.8z M14.8,6.5c-0.2-1.2-0.7-2.3-1.5-3c-0.8-0.7-0.8-0.9,0.2-1.6C15.4,0.6,18,2,18,4.3c0,1.5-1.4,3-2.7,3C14.9,7.3,14.9,7.2,14.8,6.5z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Facebook Group</span> </a>

                                        <a href="{{$gs->twiter}}" data-network="twitter"
                                            aria-label="Twitter" style="--official-color: #7acdee" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="Twitter Icon">
                                                    <path
                                                        d="M20,3.8c-0.7,0.3-1.5,0.5-2.4,0.6c0.8-0.5,1.5-1.3,1.8-2.3c-0.8,0.5-1.7,0.8-2.6,1c-0.7-0.8-1.8-1.3-3-1.3c-2.3,0-4.1,1.8-4.1,4.1c0,0.3,0,0.6,0.1,0.9C6.4,6.7,3.4,5.1,1.4,2.6C1,3.2,0.8,3.9,0.8,4.7c0,1.4,0.7,2.7,1.8,3.4C2,8.1,1.4,7.9,0.8,7.6c0,0,0,0,0,0.1c0,2,1.4,3.6,3.3,4c-0.3,0.1-0.7,0.1-1.1,0.1c-0.3,0-0.5,0-0.8-0.1c0.5,1.6,2,2.8,3.8,2.8c-1.4,1.1-3.2,1.8-5.1,1.8c-0.3,0-0.7,0-1-0.1c1.8,1.2,4,1.8,6.3,1.8c7.5,0,11.7-6.3,11.7-11.7c0-0.2,0-0.4,0-0.5C18.8,5.3,19.4,4.6,20,3.8z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Twitter</span> </a>

                                        <a href="{{$gs->instagram}}" data-network="instagram"
                                            aria-label="Instagram" style="--official-color: #ed1376" target="_blank"
                                            rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20" height="20" viewBox="0 0 20 20"
                                                    aria-label="Instagram Icon">
                                                    <circle cx="10" cy="10" r="3.3" />
                                                    <path
                                                        d="M14.2,0H5.8C2.6,0,0,2.6,0,5.8v8.3C0,17.4,2.6,20,5.8,20h8.3c3.2,0,5.8-2.6,5.8-5.8V5.8C20,2.6,17.4,0,14.2,0zM10,15c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S12.8,15,10,15z M15.8,5C15.4,5,15,4.6,15,4.2s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S16.3,5,15.8,5z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">Instagram</span> </a>

                                        <a href="{{$gs->linkdi}}"
                                            data-network="linkedin" aria-label="LinkedIn"
                                            style="--official-color: #1c86c6" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                                    aria-label="LinkedIn Icon">
                                                    <path
                                                        d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">LinkedIn</span> </a>

                                        <a href="{{$gs->youtube}}"
                                            data-network="youtube" aria-label="YouTube"
                                            style="--official-color: #e96651" target="_blank" rel="noopener">
                                            <span class="ct-icon-container">
                                                <svg class="ct-icon" width="20" height="20" viewbox="0 0 20 20"
                                                    aria-label="YouTube Icon">
                                                    <path
                                                        d="M15,0H5C2.2,0,0,2.2,0,5v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V5C20,2.2,17.8,0,15,0z M14.5,10.9l-6.8,3.8c-0.1,0.1-0.3,0.1-0.5,0.1c-0.5,0-1-0.4-1-1l0,0V6.2c0-0.5,0.4-1,1-1c0.2,0,0.3,0,0.5,0.1l6.8,3.8c0.5,0.3,0.7,0.8,0.4,1.3C14.8,10.6,14.6,10.8,14.5,10.9z" />
                                                </svg>
                                            </span><span class="ct-label" hidden="">YouTube</span> </a>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- <div data-column="end" data-placements="1">
                            <div data-items="primary">
                                <a href="#search-modal" class="ct-header-search " aria-label="Search" data-label="left"
                                    data-id="search">

                                    <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Search</span>

                                    <svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"
                                        aria-label="Search header icon">
                                        <path
                                            d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z" />
                                    </svg>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="ct-sticky-container">
                    <div data-sticky="auto-hide">
                        <div data-row="middle" data-column-set="2">
                            <div class="ct-container">
                                <div data-column="start" data-placements="1">
                                    <div data-items="primary">
                                        <div class="site-branding" data-id="logo" itemscope="itemscope"
                                            itemtype="https://schema.org/Organization">

                                            <a href="{{url('/blog/user')}}" class="site-logo-container" rel="home"><img
                                                    width="2854" height="724" alt="TSBLOG"
                                                    data-src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}"
                                                    class="default-logo lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                        width="2854" height="724" alt="TSBLOG"
                                                        data-src="{{asset('public/assets/images/setting/'.$gs->blog_logo)}}"
                                                        class="default-logo lazyload"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                            width="2854" height="724"
                                                            src="wp-content/uploads/2021/03/TSBLOG-LOGO.png"
                                                            class="default-logo"
                                                            alt="TSBLOG" /></noscript></noscript></a>
                                        </div>

                                    </div>
                                </div>
                                <div data-column="end" data-placements="1">
                                    <div data-items="primary">
                                        <a href="#offcanvas" class="ct-header-trigger" data-design="solid"
                                            data-label="left" aria-label="Menu" data-id="trigger">

                                            <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Menu</span>

                                            <svg class="ct-trigger ct-icon" width="18" height="14" viewBox="0 0 18 14"
                                                aria-label="Off-canvas trigger icon" data-type="type-1">

                                                <rect y="0.00" width="18" height="1.7" rx="1" />
                                                <rect y="6.15" width="18" height="1.7" rx="1" />
                                                <rect y="12.3" width="18" height="1.7" rx="1" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
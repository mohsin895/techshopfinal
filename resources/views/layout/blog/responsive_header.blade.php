<?php

use App\Models\blogCategory;


$category = blogCategory::category();


//   echo "<pre>";print_r($category);die();
?>

<div class="ct-drawer-canvas">
        <div id="search-modal" class="ct-panel" data-behaviour="modal">
            <div class="ct-panel-actions">
                <span class="ct-close-button">
                    <svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                        <path
                            d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z" />
                    </svg>
                </span>
            </div>

            <div class="ct-panel-content">


                <!-- <form role="search" method="get" class="search-form" action=""
                    data-live-results="thumbs">

                    <input type="search" class="modal-field" placeholder="Explore Projects.." value="" name="s"
                        autocomplete="off" title="Search Input" />

                    <button class="search-submit" aria-label="Search button">
                        <svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15" aria-label="Search icon">
                            <path
                                d="M14.8,13.7L12,11c0.9-1.2,1.5-2.6,1.5-4.2c0-3.7-3-6.8-6.8-6.8S0,3,0,6.8s3,6.8,6.8,6.8c1.6,0,3.1-0.6,4.2-1.5l2.8,2.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C15.1,14.5,15.1,14,14.8,13.7z M1.5,6.8c0-2.9,2.4-5.2,5.2-5.2S12,3.9,12,6.8S9.6,12,6.8,12S1.5,9.6,1.5,6.8z" />
                        </svg>

                        <span data-loader="circles"><span></span><span></span><span></span></span>
                    </button>

                    <input type="hidden" name="post_type" value="post">


                </form> -->


            </div>
        </div>

        <div id="offcanvas" class="ct-panel ct-header" data-behaviour="right-side">
            <div class="ct-panel-inner">
                <div class="ct-panel-actions">
                    <span class="ct-close-button">
                        <svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                            <path
                                d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z" />
                        </svg>
                    </span>
                </div>
                <div class="ct-panel-content" data-device="desktop"></div>
                <div class="ct-panel-content" data-device="mobile">
                    <nav class="mobile-menu has-submenu" data-id="mobile-menu" data-type="type-2:interactive">
                        <ul id="menu-main-1" class="">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-89651 current_page_item menu-item-89830">
                                <a href="{{url('/blog/user')}}" aria-current="page" class="ct-menu-link">Home</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88920"><a
                                    href="{{route('blog.post')}}" class="ct-menu-link">All Posts</a></li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-253">
                                <a href="#" class="ct-menu-link">Categories<span class="child-indicator" tabindex="0"
                                        role="button" aria-label="Menu dropdown indicator"><svg width="12" height="12"
                                            viewBox="0 0 15 15" aria-label="Menu dropdown icon">
                                            <path
                                                d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z">
                                            </path>
                                        </svg></span></a>
                                <ul class="sub-menu">
                                @foreach($category as $row)
                                    <!-- <li
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-88542">
                                        <a href="{{route('blog.category',$row->slug)}}" class="ct-menu-link">{{$row->cat_name}}</a>
                                    </li> -->
                                    <li
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-715">
                                        <a href="{{route('blog.category',$row->slug)}}" class="ct-menu-link">{{$row->cat_name}}<span
                                                class="child-indicator" tabindex="0" role="button"
                                                aria-label="Menu dropdown indicator"><svg width="12" height="12"
                                                    viewBox="0 0 15 15" aria-label="Menu dropdown icon">
                                                    <path
                                                        d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z">
                                                    </path>
                                                </svg></span></a>
                                        <ul class="sub-menu">
                                        @foreach($row['subcategories'] as $subcat)
                                            <li
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-93545">
                                                <a href="{{route('blog.category',$row->slug)}}"
                                                                        class="ct-menu-link">{{$subcat->cat_name}}</a>
                                            </li>
                                        <  @endforeach
                                                            </ul>
                                                        </li>
                                                        @endforeach
                                   
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-264"><a
                                    target="_blank" rel="noopener" href="{{url('/')}}"
                                    class="ct-menu-link">Store</a></li>
                                    @if(empty(Auth::guard('blog')->check()))
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88188"><a
                                    href="{{route('blog.user.login')}}" class="ct-menu-link">Login</a></li>
                                    @else
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88188"><a
                                    href="{{route('blog.logout')}}" class="ct-menu-link">Logout</a></li>

                                    @endif
                        </ul>
                    </nav>

                    <div class="ct-header-cta" data-id="button">

                        <a href="{{route('blog.user.post')}}" class="ct-button-ghost" data-size="medium">
                            Write A Blog </a>
                    </div>

                </div>
            </div>
        </div>
        <a href="#main-container" class="ct-back-to-top ct-hidden-sm" data-shape="square" data-alignment="right"
            title="Go to top" aria-label="Go to top">

            <svg class="ct-icon" width="15" height="15" viewBox="0 0 20 20">
                <path
                    d="M18.1,9.4c-0.2,0.4-0.5,0.6-0.9,0.6h-3.7c0,0-0.6,8.7-0.9,9.1C12.2,19.6,11.1,20,10,20c-1,0-2.3-0.3-2.7-0.9C7,18.7,6.5,10,6.5,10H2.8c-0.4,0-0.7-0.2-1-0.6C1.7,9,1.7,8.6,1.9,8.3c2.8-4.1,7.2-8,7.4-8.1C9.5,0.1,9.8,0,10,0s0.5,0.1,0.6,0.2c0.2,0.1,4.6,3.9,7.4,8.1C18.2,8.7,18.3,9.1,18.1,9.4z" />
            </svg>

        </a>

    </div>
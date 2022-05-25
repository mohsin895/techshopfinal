<?php

use App\Models\blogCategory;


$category = blogCategory::category();


//   echo "<pre>";print_r($category);die();
?>

<!doctype html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />


    <title>{{$gs->site_title}}</title>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' id='blocksy-dynamic-global-css'
        href="{{asset('public/assets/blog/wp-content/uploads/blocksy/css/global9f50.css?ver=63311')}}" media='all' />
    <link rel='stylesheet' id='bdt-uikit-css'
        href="{{asset('public/assets/blog/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/bdt-uikitcf1b.css?ver=3.2')}}"
        media='all' />
    <link rel='stylesheet' id='prime-slider-site-css'
        href="{{asset('public/assets/blog/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/prime-slider-site3c94.css?ver=2.1.0')}}"
        media='all' />
    <link rel='stylesheet' id='anwp-pg-styles-css'
        href="{{asset('public/assets/blog/wp-content/plugins/anwp-post-grid-for-elementor/public/css/styles.min3b0f.css?ver=0.8.5')}}"
        media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='../wp-includes/css/dist/block-library/style.minc8d8.css?ver=5.8.3' )}}" media='all' />
    <link rel='stylesheet' id='kk-star-ratings-css'
        href="{{asset('public/assets/blog/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.minaead.css?ver=5.0.3')}}"
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='../wp-includes/css/dashicons.minc8d8.css?ver=5.8.3' )}}"
        media='all' />
    <link rel='stylesheet' id='post-views-counter-frontend-css'
        href="{{asset('public/assets/blog/wp-content/plugins/post-views-counter/css/frontend52d0.css?ver=1.3.7')}}"
        media='all' />
    <link rel='stylesheet' id='usp_style-css'
        href="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/usp3ba1.css?ver=20210719')}}"
        media='all' />
    <link rel='stylesheet' id='106a6c241-css'
        href="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.min2832.css?ver=1648803982')}}"
        media='all' />
    <link rel='stylesheet' id='ct-main-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/main.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-page-title-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/page-title.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-back-to-top-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/back-to-top.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-elementor-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/elementor-frontend.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-sidebar-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/sidebar.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='enlighterjs-css'
        href="{{asset('public/assets/blog/wp-content/plugins/enlighter/cache/enlighterjs.min66c7.css?ver=q1ImDd1BwcGG5S8')}}"
        media='all' />
    <link rel='stylesheet' id='um_fonticons_ii-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-fonticons-ii5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_fonticons_fa-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-fonticons-fa5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='select2-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/select2/select2.min4819.css?ver=4.0.13')}}"
        media='all' />
    <link rel='stylesheet' id='um_crop-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-crop5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_modal-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-modal5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_styles-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-styles5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_profile-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-profile5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_account-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-account5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_misc-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-misc5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_fileupload-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-fileupload5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_datetime-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/pickadate/default5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_datetime_date-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/pickadate/default.date5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_datetime_time-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/pickadate/default.time5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_raty-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-raty5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_scrollbar-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/simplebar5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_tipsy-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-tipsy5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_responsive-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-responsive5bf8.css?ver=2.2.5')}}"
        media='all' />
    <link rel='stylesheet' id='um_default_css-css'
        href="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/css/um-old-default5bf8.css?ver=2.2.5')}}"
        media='all' />
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}" id='jquery-core-js'>
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}"
        id='jquery-migrate-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/jquery.cookie3ba1.js?ver=20210719')}}"
        id='usp_cookie-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/jquery.parsley.min3ba1.js?ver=20210719')}}"
        id='usp_parsley-js'></script>
    <script id='usp_core-js-before'>
    var usp_custom_field = "usp_custom_field";
    var usp_custom_checkbox = "usp_custom_checkbox";
    var usp_case_sensitivity = "false";
    var usp_challenge_response = "12";
    var usp_min_images = 0;
    var usp_max_images = 1;
    var usp_parsley_error = "Incorrect response.";
    var usp_multiple_cats = 0;
    var usp_existing_tags = 0;
    var usp_recaptcha_disp = "hide";
    var usp_recaptcha_vers = "2";
    var usp_recaptcha_key = "";
    </script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/jquery.usp.core3ba1.js?ver=20210719')}}"
        id='usp_core-js'></script>

    <!-- Google Analytics snippet added by Site Kit -->
    <script src='https://www.googletagmanager.com/gtag/js?id=UA-40929689-4' id='google_gtagjs-js' async></script>
    <script id='google_gtagjs-js-after'>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('set', 'linker', {
        "domains": ["blog.techshopbd.com"]
    });
    gtag("js", new Date());
    gtag("set", "developer_id.dZTNiMT", true);
    gtag("config", "UA-40929689-4", {
        "anonymize_ip": true
    });
    </script>

    <!-- End Google Analytics snippet added by Site Kit -->
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min5bf8.js?ver=2.2.5')}}"
        id='um-gdpr-js'></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.3" />
    <link href="../wp-content/plugins/bangla-web-fonts/solaiman-lipi/font.css" rel="stylesheet">
    <style>
    body,
    article,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    textarea,
    input,
    select,
    .topbar,
    .main-menu,
    .breadcrumb,
    .copyrights-area,
    form span.required {
        font-family: 'SolaimanLipi', Arial, sans-serif !important;
    }
    </style>
    <meta name="generator" content="Site Kit by Google 1.44.0" />
    <style type="text/css">
    .um_request_name {
        display: none !important;
    }
    </style>
    <script>
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <style>
    .no-js img.lazyload {
        display: none;
    }

    figure.wp-block-image img.lazyloading {
        min-width: 150px;
    }

    .lazyload,
    .lazyloading {
        opacity: 0;
    }

    .lazyloaded {
        opacity: 1;
        transition: opacity 400ms;
        transition-delay: 0ms;
    }
    </style>
    <noscript>
        <link rel='stylesheet'
            href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/no-scripts.min.css')}}"
            type='text/css' />
    </noscript>
    <link rel="icon" href="{{asset('public/assets/blog/wp-content/uploads/2021/03/cropped-TSBlog-favicon-32x32.png')}}"
        sizes="32x32" />
    <link rel="icon" href="{{asset('public/assets/blog/wp-content/uploads/2021/03/cropped-TSBlog-favicon-192x192.png')}}"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="{{asset('public/assets/blog/wp-content/uploads/2021/03/cropped-TSBlog-favicon-180x180.png')}}" />
    <!--<meta name="msapplication-TileImage"-->
    <!--    content="https://blog.techshopbd.com/wp-content/uploads/2021/03/cropped-TSBlog-favicon-270x270.png" />-->
    <style id="wp-custom-css">
    /**** Home Post Grid Content padding , Border Radius ****/
    .anwp-pg-wrap .anwp-pg-classic-grid .anwp-pg-post-teaser__content {
        padding-left: 10px;
        padding-right: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .anwp-pg-wrap .pt-1,
    .anwp-pg-wrap .py-1 {
        padding: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    /**** Home All Photo Border Radius ****/
    .elementor *,
    .elementor :after,
    .elementor :before {
        border-radius: 10px;
    }

    /**** Home Post Grid Read More Button Outline color ****/
    .anwp-pg-wrap .btn-outline-info {
        color: #007fc6;
        border-color: #007fc6;
    }

    /**** Home Post Grid Read More Button Hover color ****/
    .anwp-pg-wrap .btn-outline-info:hover {
        color: #FFFFFF;
        background-color: #ff9201;
        border-color: #ff9201;
    }

    /**** Home Post Grid Content Description Line Height & Text Align ****/
    .anwp-pg-wrap .anwp-pg-post-teaser--layout-d .anwp-pg-post-teaser__excerpt {
        line-height: 1.7em;
        text-align: justify;
    }

    /**** Posts Navigation photos border radius ****/
    .post-navigation figure {
        border-radius: 10%;
    }

    /**** Side Bar Padding ****/
    aside[data-type="type-2"] .ct-sidebar[data-widgets="separated"] .ct-widget {
        padding: 12px;
    }

    /**** Side Bar Padding Top ****/
    .ct-sidebar {
        padding-top: 98px;
    }

    /**** Side Bar Border Radius ****/
    aside[data-type="type-2"] .ct-sidebar[data-widgets="separated"] .ct-widget {
        border-radius: 10px;
    }

    /**** Write a blog page input fild ****/
    div#user-submitted-posts {
        /* max-width: 800px; */
        max-width: none;
    }

    /**** Category Page Card Photos Border Radius ****/
    .entry-card .ct-image-container img {
        border-radius: 10px;
    }
    </style>
</head>

<body
    class="blog wp-custom-logo wp-embed-responsive theme--blocksy elementor-default elementor-kit-87972 ct-loading ct-elementor-default-template"
    data-link="type-2" data-prefix="blog" data-header="type-1:sticky:auto" data-footer="type-1">

    <a class="skip-link show-on-focus" href="#main">
        Skip to content</a>


    <div id="main-container">
        @include('layout.blog.header')
        <main id="main" class="site-main hfeed" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">


            <div class="ct-container" data-sidebar="right" data-vertical-spacing="top:bottom">

                <section>

                    <div class="hero-section" data-type="type-1">
                        <header class="entry-header">
                            <h1 class="page-title" title="All Posts" itemprop="headline">All Posts</h1>
                        </header>
                    </div>
                    <div class="entries" data-layout="grid" data-cards="boxed" data-hover="zoom-in">
                        @foreach($post as $row)
                        <article id="post-{{$row->id}}"
                            class="entry-card post-95109 post type-post status-publish format-standard has-post-thumbnail hentry category-iot category-wifi category-wireless-systems"
                            data-reveal="bottom:no"><a class="ct-image-container boundless-image ct-lazy"
                                href="{{route('blog.post.details',$row->slug)}}" aria-label="{{$row->title}}"
                                tabindex="-1"><img width="720" height="360"
                                    class="attachment-medium_large size-medium_large wp-post-image" alt=""
                                    sizes="(max-width: 720px) 100vw, 720px"
                                    data-ct-lazy="{{asset('public/assets/images/blog/'.$row->image)}}"
                                    data-ct-lazy-set="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                                    data-object-fit="~" itemprop="image" /><noscript><img width="720" height="360"
                                        alt=""
                                        data-srcset="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                                        data-src="{{asset('public/assets/images/blog/'.$row->image)}}"
                                        data-sizes="(max-width: 720px) 100vw, 720px"
                                        class="attachment-medium_large size-medium_large wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="720" height="360" src="../wp-content/uploads/2022/02/ESP32-DHT11.jpg"
                                            class="attachment-medium_large size-medium_large wp-post-image" alt=""
                                            srcset="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                                            sizes="(max-width: 720px) 100vw, 720px" /></noscript></noscript><span
                                    class="ct-ratio" style="padding-bottom: 50%"></span></a>
                            <h2 class="entry-title">
                                <a href="{{route('blog.post.details',$row->slug)}}">
                                    {{$row->title}} </a>
                            </h2>

                            <div class="ct-ghost"></div>
                            <ul class="entry-meta" data-type="simple:slash">
                                <li class="meta-date" itemprop="datePublished"><time class="ct-meta-element-date"
                                        datetime="2022-02-23T14:55:36+06:00">{{ $row->created_at->toDayDateTimeString()}}</time>
                                </li>
                            </ul>
                        </article>
                        @endforeach


                    </div>
                    <nav class="ct-pagination" data-pagination="simple">
                        <div class="ct-hidden-sm">
                            {!! $post->withQueryString()->links('pagination::bootstrap-5') !!}

                        </div>

                    </nav>
                </section>


                <aside class="ct-hidden-sm ct-hidden-md" data-type="type-2" id="sidebar"
                    itemtype="https://schema.org/WPSideBar" itemscope="itemscope">


                    <div class="ct-sidebar" data-widgets="separated">

                        <!--<div class="ct-widget widget_post_views_counter_list_widget"-->
                        <!--    id="post_views_counter_list_widget-3">-->
                        <!--    <h2 class="widget-title">জনপ্রিয় পোস্ট</h2>-->
                        <!--    <ol>-->
                        <!--        <li>-->
                        <!--            <a class="post-title" href="../13200-2/index.html">ARM Tutorial Part 1:Software-->
                        <!--                Installation &#038; LED Blinking | এআরএম টিউটোরিয়াল (পর্ব ১ : সফটওয়্যার-->
                        <!--                ইন্সটলেশন ও এলইডি ব্লিংকিং)</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../%e0%a6%b9%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%a4%e0%a7%88%e0%a6%b0%e0%a7%80-%e0%a6%aa%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%82%e0%a6%95/index.html">DIY-Power-->
                        <!--                Bank | হাতে তৈরী পাওয়ার ব্যাংক</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../tds-%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b0/index.html">TDS meter-->
                        <!--                with arduino</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../esp8266-wifi-4-channel-iot-smart-switch-%e0%a6%95%e0%a6%bf%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%8b/index.html">ESP8266-->
                        <!--                WiFi 4 Channel IoT Smart Switch কিভাবে ব্যবহার করবো?</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../sla-battery-charge-controller-12v-%e0%a6%95%e0%a6%bf%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%87%e0%a6%a8/index.html">Automatic-->
                        <!--                Battery Charge Controller কিভাবে ব্যবহার করবেন ?</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a6%be%e0%a6%87-%e0%a6%a1%e0%a7%8b%e0%a6%b0%e0%a6%b2%e0%a6%95/index.html">Wifi-->
                        <!--                doorlock using ESP8266 (ওয়াইফাই ডোরলক)</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../%e0%a6%93%e0%a7%9f%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b0%e0%a6%b2%e0%a7%87%e0%a6%b8-%e0%a6%95%e0%a6%b2%e0%a6%bf%e0%a6%82-%e0%a6%ac%e0%a7%87%e0%a6%b2/index.html">DIY-Wireless-->
                        <!--                calling bell | ওয়্যারলেস কলিং বেল</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%9f%e0%a6%be%e0%a6%b0%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%81%e0%a6%ab-%e0%a6%b8%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%b8%e0%a6%b0-%e0%a6%a6%e0%a6%bf%e0%a7%9f%e0%a7%87/index.html">Thermometer-->
                        <!--                with Arduino &#038; DS18B20 waterproof sensor | ওয়াটারপ্রুফ সেন্সর দিয়ে-->
                        <!--                থার্মোমিটার তৈরী</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../%e0%a6%ac%e0%a7%8d%e0%a6%b2%e0%a7%81%e0%a6%9f%e0%a7%81%e0%a6%a5-%e0%a6%b8%e0%a7%8d%e0%a6%aa%e0%a6%bf%e0%a6%95%e0%a6%be%e0%a6%b0/index.html">DIY-Bluetooth-->
                        <!--                speaker | ব্লুটুথ স্পিকার</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="post-title"-->
                        <!--                href="../heart-rate-%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b0/index.html">Heart-->
                        <!--                rate meter</a>-->
                        <!--        </li>-->
                        <!--    </ol>-->
                        <!--</div>-->
                        <div class="ct-widget widget_recent_entries" id="recent-posts-2">
                            <h2 class="widget-title">নতুন পোস্ট</h2>
                            <ul>
                                @foreach($new_post as $row)
                                <li>
                                    <a href="{{route('blog.post.details',$row->slug)}}">Temperature
                                        {{$row->title}}</a>
                                    <span class="post-date">{{ $row->created_at->toDayDateTimeString()}}</span>
                                </li>
                                @endforeach

                            </ul>

                        </div>
                        <!--<div class="ct-widget widget_text" id="text-2">-->
                        <!--    <h2 class="widget-title">টেকনিক্যাল প্রশ্ন করতে চান?</h2>-->
                        <!--    <div class="textwidget entry-content">-->
                        <!--        <p>সরাসরি আমাদের ইঞ্জিনিয়ার টিমের সাথে লাইভ চ্যাট করুনঃ <strong><a-->
                        <!--                    href="https://techshopbd.com/" target="_blank"-->
                        <!--                    rel="noopener">www.techshopbd.com</a></strong><br />-->
                        <!--            [ রবিবার &#8211; বৃহস্পতিবার : সকাল ১০ টা &#8211; বিকেল ৫ টা  ] অথবা ইমেইল পাঠানঃ-->
                        <!--            <strong><a-->
                        <!--                    href="../cdn-cgi/l/email-protection.html#01756462696f6862606d727471716e7375417564626972696e7163652f626e6c"><span-->
                        <!--                        class="__cf_email__"-->
                        <!--                        data-cfemail="730716101b1d1a10121f000603031c0107330716101b001b1c0311175d101c1e">[email&#160;protected]</span></a></strong>-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>

                </aside>

            </div>

        </main>

        @include('layout.blog.footer')
    </div>

    
        @include('layout.blog.responsive_header')

        <div id="um_upload_single" style="display:none"></div>
        <div id="um_view_photo" style="display:none">

            <a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
                aria-label="Close view photo modal">
                <i class="um-faicon-times"></i>
            </a>

            <div class="um-modal-body photo">
                <div class="um-modal-photo"></div>
            </div>

        </div>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script id='kk-star-ratings-js-extra'>
        var kk_star_ratings = {
            "action": "kk-star-ratings",
            "endpoint": "https:\/\/blog.techshopbd.com\/wp-admin\/admin-ajax.php",
            "nonce": "36915f9b8f"
        };
        </script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.minaead.js?ver=5.0.3')}}"
            id='kk-star-ratings-js'></script>
        <script id='106a6c241-js-extra'>
        var localize = {
            "ajaxurl": "https:\/\/blog.techshopbd.com\/wp-admin\/admin-ajax.php",
            "nonce": "4990d812c7",
            "i18n": {
                "added": "Added ",
                "compare": "Compare",
                "loading": "Loading..."
            }
        };
        </script>
        <script
            src="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.min2832.js?ver=1648803982')}}"
            id='106a6c241-js'></script>
        <script id='ct-scripts-js-extra'>
        var ct_localizations = {
            "ajax_url": "https:\/\/blog.techshopbd.com\/wp-admin\/admin-ajax.php",
            "nonce": "fd5d7b38f2",
            "public_url": "https:\/\/blog.techshopbd.com\/wp-content\/themes\/blocksy\/static\/bundle\/",
            "rest_url": "https:\/\/blog.techshopbd.com\/wp-json\/",
            "search_url": "https:\/\/blog.techshopbd.com\/search\/QUERY_STRING\/",
            "show_more_text": "Show more",
            "more_text": "More",
            "dynamic_js_chunks": [{
                "id": "blocksy_account",
                "selector": ".ct-header-account[href*=\"account-modal\"], .must-log-in a",
                "url": "https:\/\/blog.techshopbd.com\/wp-content\/plugins\/blocksy-companion\/static\/bundle\/account.js",
                "trigger": "click"
            }, {
                "id": "blocksy_dark_mode",
                "selector": "[data-id=\"dark-mode-switcher\"]",
                "url": "https:\/\/blog.techshopbd.com\/wp-content\/plugins\/blocksy-companion\/static\/bundle\/dark-mode.js",
                "trigger": "click"
            }, {
                "id": "blocksy_sticky_header",
                "selector": "header [data-sticky]",
                "url": "https:\/\/blog.techshopbd.com\/wp-content\/plugins\/blocksy-companion\/static\/bundle\/sticky.js"
            }, {
                "id": "blocksy_lazy_load",
                "selector": ".ct-lazy[class*=\"ct-image\"]",
                "url": "https:\/\/blog.techshopbd.com\/wp-content\/themes\/blocksy\/static\/bundle\/lazy-load.js"
            }],
            "dynamic_styles": {
                "lazy_load": "https:\/\/blog.techshopbd.com\/wp-content\/themes\/blocksy\/static\/bundle\/lazy-load.min.css",
                "search_lazy": "https:\/\/blog.techshopbd.com\/wp-content\/themes\/blocksy\/static\/bundle\/search-lazy.min.css"
            },
            "dynamic_styles_selectors": [{
                "selector": ".ct-panel",
                "url": "https:\/\/blog.techshopbd.com\/wp-content\/themes\/blocksy\/static\/bundle\/off-canvas.min.css"
            }]
        };
        </script>
        <script src="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/main36c7.js?ver=1.8.6.4')}}"
            id='ct-scripts-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/enlighter/cache/enlighterjs.min66c7.js?ver=q1ImDd1BwcGG5S8')}}"
            id='enlighterjs-js'></script>
        <script id='enlighterjs-js-after'>
        ! function(e, n) {
            if ("undefined" != typeof EnlighterJS) {
                var o = {
                    "selectors": {
                        "block": "pre.EnlighterJSRAW",
                        "inline": "code.EnlighterJSRAW"
                    },
                    "options": {
                        "indent": 4,
                        "ampersandCleanup": true,
                        "linehover": true,
                        "rawcodeDbclick": false,
                        "textOverflow": "break",
                        "linenumbers": true,
                        "theme": "enlighter",
                        "language": "generic",
                        "retainCssClasses": false,
                        "collapse": false,
                        "toolbarOuter": "",
                        "toolbarTop": "{BTN_RAW}{BTN_COPY}{BTN_WINDOW}{BTN_WEBSITE}",
                        "toolbarBottom": ""
                    }
                };
                (e.EnlighterJSINIT = function() {
                    EnlighterJS.init(o.selectors.block, o.selectors.inline, o.options)
                })()
            } else {
                (n && (n.error || n.log) || function() {})("Error: EnlighterJS resources not loaded yet!")
            }
        }(window, console);
        </script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.mina560.js?ver=3.9.1')}}"
            id='smush-lazy-load-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/select2/select2.full.min4819.js?ver=4.0.13')}}"
            id='select2-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/underscore.min0028.js?ver=1.13.1')}}" id='underscore-js'>
        </script>
        <script id='wp-util-js-extra'>
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wp-admin\/admin-ajax.php"
            }
        };
        </script>
        <script src="{{asset('public/assets/blog/wp-includes/js/wp-util.minc8d8.js?ver=5.8.3')}}" id='wp-util-js'></script>
        <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-crop.min5bf8.js?ver=2.2.5')}}"
            id='um_crop-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-modal.min5bf8.js?ver=2.2.5')}}"
            id='um_modal-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-jquery-form.min5bf8.js?ver=2.2.5')}}"
            id='um_jquery_form-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-fileupload5bf8.js?ver=2.2.5')}}"
            id='um_fileupload-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/pickadate/picker5bf8.js?ver=2.2.5')}}"
            id='um_datetime-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.date5bf8.js?ver=2.2.5')}}"
            id='um_datetime_date-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.time5bf8.js?ver=2.2.5')}}"
            id='um_datetime_time-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7')}}"
            id='regenerator-runtime-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}"
            id='wp-polyfill-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/dist/hooks.mine16b.js?ver=a7edae857aab69d69fa10d5aef23a5de')}}"
            id='wp-hooks-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/dist/i18n.min71a7.js?ver=5f1269854226b4dd90450db411a12b79')}}"
            id='wp-i18n-js'></script>
        <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        </script>
        <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-raty.min5bf8.js?ver=2.2.5')}}"
            id='um_raty-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-tipsy.min5bf8.js?ver=2.2.5')}}"
            id='um_tipsy-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}" id='imagesloaded-js'>
        </script>
        <script src="{{asset('public/assets/blog/wp-includes/js/masonry.min3a05.js?ver=4.2.2')}}" id='masonry-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b')}}"
            id='jquery-masonry-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/simplebar.min5bf8.js?ver=2.2.5')}}"
            id='um_scrollbar-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-functions.min5bf8.js?ver=2.2.5')}}"
            id='um_functions-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-responsive.min5bf8.js?ver=2.2.5')}}"
            id='um_responsive-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-conditional.min5bf8.js?ver=2.2.5')}}"
            id='um_conditional-js'></script>
        <script id='um_scripts-js-extra'>
        var um_scripts = {
            "max_upload_size": "2097152",
            "nonce": "80fa19c219"
        };
        </script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-scripts.min5bf8.js?ver=2.2.5')}}"
            id='um_scripts-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-profile.min5bf8.js?ver=2.2.5')}}"
            id='um_profile-js'></script>
        <script
            src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-account.min5bf8.js?ver=2.2.5')}}"
            id='um_account-js'></script>
        <script src="{{asset('public/assets/blog/wp-includes/js/wp-embed.minc8d8.js?ver=5.8.3')}}" id='wp-embed-js'></script>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            style="position:absolute;left: -100%;" height="0" width="0">
            <symbol id="icon-anwp-pg-calendar" viewBox="0 0 14 16">
                <path fill-rule="evenodd"
                    d="M13 2h-1v1.5c0 .28-.22.5-.5.5h-2c-.28 0-.5-.22-.5-.5V2H6v1.5c0 .28-.22.5-.5.5h-2c-.28 0-.5-.22-.5-.5V2H2c-.55 0-1 .45-1 1v11c0 .55.45 1 1 1h11c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 12H2V5h11v9zM5 3H4V1h1v2zm6 0h-1V1h1v2zM6 7H5V6h1v1zm2 0H7V6h1v1zm2 0H9V6h1v1zm2 0h-1V6h1v1zM4 9H3V8h1v1zm2 0H5V8h1v1zm2 0H7V8h1v1zm2 0H9V8h1v1zm2 0h-1V8h1v1zm-8 2H3v-1h1v1zm2 0H5v-1h1v1zm2 0H7v-1h1v1zm2 0H9v-1h1v1zm2 0h-1v-1h1v1zm-8 2H3v-1h1v1zm2 0H5v-1h1v1zm2 0H7v-1h1v1zm2 0H9v-1h1v1z" />
            </symbol>
            <symbol id="icon-anwp-pg-clock" viewBox="0 0 14 16">
                <path fill-rule="evenodd"
                    d="M8 8h3v2H7c-.55 0-1-.45-1-1V4h2v4zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 011.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z" />
            </symbol>
            <symbol id="icon-anwp-pg-comment-discussion" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 1H6c-.55 0-1 .45-1 1v2H1c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h1v3l3-3h4c.55 0 1-.45 1-1V9h1l3 3V9h1c.55 0 1-.45 1-1V2c0-.55-.45-1-1-1zM9 11H4.5L3 12.5V11H1V5h4v3c0 .55.45 1 1 1h3v2zm6-3h-2v1.5L11.5 8H6V2h9v6z" />
            </symbol>
            <symbol id="icon-anwp-pg-device-camera" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 3H7c0-.55-.45-1-1-1H2c-.55 0-1 .45-1 1-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h14c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM6 5H2V4h4v1zm4.5 7C8.56 12 7 10.44 7 8.5S8.56 5 10.5 5 14 6.56 14 8.5 12.44 12 10.5 12zM13 8.5c0 1.38-1.13 2.5-2.5 2.5S8 9.87 8 8.5 9.13 6 10.5 6 13 7.13 13 8.5z" />
            </symbol>
            <symbol id="icon-anwp-pg-eye" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z" />
            </symbol>
            <symbol id="icon-anwp-pg-pencil" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M17.263 2.177a1.75 1.75 0 012.474 0l2.586 2.586a1.75 1.75 0 010 2.474L19.53 10.03l-.012.013L8.69 20.378a1.75 1.75 0 01-.699.409l-5.523 1.68a.75.75 0 01-.935-.935l1.673-5.5a1.75 1.75 0 01.466-.756L14.476 4.963l2.787-2.786zm-2.275 4.371l-10.28 9.813a.25.25 0 00-.067.108l-1.264 4.154 4.177-1.271a.25.25 0 00.1-.059l10.273-9.806-2.94-2.939zM19 8.44l2.263-2.262a.25.25 0 000-.354l-2.586-2.586a.25.25 0 00-.354 0L16.061 5.5 19 8.44z" />
            </symbol>
            <symbol id="icon-anwp-pg-person" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M12 2.5a5.5 5.5 0 00-3.096 10.047 9.005 9.005 0 00-5.9 8.18.75.75 0 001.5.045 7.5 7.5 0 0114.993 0 .75.75 0 101.499-.044 9.005 9.005 0 00-5.9-8.181A5.5 5.5 0 0012 2.5zM8 8a4 4 0 118 0 4 4 0 01-8 0z" />
            </symbol>
            <symbol id="icon-anwp-pg-play" viewBox="0 0 14 16">
                <path fill-rule="evenodd"
                    d="M14 8A7 7 0 110 8a7 7 0 0114 0zm-8.223 3.482l4.599-3.066a.5.5 0 000-.832L5.777 4.518A.5.5 0 005 4.934v6.132a.5.5 0 00.777.416z" />
            </symbol>
            <symbol id="icon-anwp-pg-tag" viewBox="0 0 14 16">
                <path fill-rule="evenodd"
                    d="M7.685 1.72a2.49 2.49 0 00-1.76-.726H3.48A2.5 2.5 0 00.994 3.48v2.456c0 .656.269 1.292.726 1.76l6.024 6.024a.99.99 0 001.402 0l4.563-4.563a.99.99 0 000-1.402L7.685 1.72zM2.366 7.048a1.54 1.54 0 01-.467-1.123V3.48c0-.874.716-1.58 1.58-1.58h2.456c.418 0 .825.159 1.123.467l6.104 6.094-4.702 4.702-6.094-6.114zm.626-4.066h1.989v1.989H2.982V2.982h.01z" />
            </symbol>
            <symbol id="icon-anwp-pg-trash" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z" />
                <path
                    d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z" />
                <path
                    d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z" />
            </symbol>
        </svg>
        <script type="text/javascript">
        jQuery(window).on('load', function() {
            jQuery('input[name="um_request"]').val('');
        });
        </script>

</body>

<!-- Mirrored from blog.techshopbd.com/all-posts/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Apr 2022 09:08:30 GMT -->

</html>
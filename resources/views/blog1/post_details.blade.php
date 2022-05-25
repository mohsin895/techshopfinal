<?php

use App\Models\blogCategory;


$category = blogCategory::category();
$user= App\Models\User::find($post->user_id);

//   echo "<pre>";print_r($category);die();
?>


<!doctype html>
<html lang="en-US">

<!-- Mirrored from blog.techshopbd.com/a-project-of-robotics/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Apr 2022 09:10:12 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v17.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>{{$gs->site_title}}</title>
   
    <link rel="alternate" type="application/rss+xml" title="TSBLOG &raquo; রোবটিক্স এর একটি প্রজেক্ট Comments Feed"
        href="feed/index.html" />
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
        href="{{asset('public/assets/blog/wp-includes/css/dist/block-library/style.minc8d8.css?ver=5.8.3')}}" media='all' />
    <link rel='stylesheet' id='kk-star-ratings-css'
        href="{{asset('public/assets/blog/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.minaead.css?ver=5.0.3')}}"
        media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href="{{asset('public/assets/blog/wp-includes/css/dashicons.minc8d8.css?ver=5.8.3')}}" media='all' />
    <link rel='stylesheet' id='post-views-counter-frontend-css'
        href="{{asset('public/assets/blog/wp-content/plugins/post-views-counter/css/frontend52d0.css?ver=1.3.7')}}"
        media='all' />
    <link rel='stylesheet' id='usp_style-css'
        href="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/usp3ba1.css?ver=20210719')}}"
        media='all' />
    <link rel='stylesheet' id='df40589e6-css'
        href="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.mina021.css?ver=1648804015')}}"
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
    <link rel='stylesheet' id='ct-share-box-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/share-box.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-comments-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/comments.min36c7.css?ver=1.8.6.4')}}"
        media='all' />
    <link rel='stylesheet' id='ct-author-box-styles-css'
        href="{{asset('public/assets/blog/wp-content/themes/blocksy/static/bundle/author-box.min36c7.css?ver=1.8.6.4')}}"
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
    <link rel="alternate" type="application/json" href="../wp-json/wp/v2/posts/94027.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.3" />
    <link rel='shortlink' href='../index5e13.html?p=94027' />
    <link rel="alternate" type="application/json+oembed"
        href="../wp-json/oembed/1.0/embed5d1a.json?url=https%3A%2F%2Fblog.techshopbd.com%2Fa-project-of-robotics%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="../wp-json/oembed/1.0/embed96f2?url=https%3A%2F%2Fblog.techshopbd.com%2Fa-project-of-robotics%2F&amp;format=xml" />
    <link href="../wp-content/plugins/bangla-web-fonts/solaiman-lipi/font.css" rel="stylesheet">
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
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "CreativeWorkSeries",
        "name": "রোবটিক্স এর একটি প্রজেক্ট",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.4",
            "bestRating": "5",
            "ratingCount": "9"
        }
    }
    </script>
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


    <style type="text/css">
    #wp-admin-bar-pvc-post-views .pvc-graph-container {
        padding-top: 6px;
        padding-bottom: 6px;
        position: relative;
        display: block;
        height: 100%;
        box-sizing: border-box;
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph {
        display: inline-block;
        width: 1px;
        margin-right: 1px;
        background-color: #ccc;
        vertical-align: baseline;
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph:hover {
        background-color: #eee;
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-0 {
        height: 1%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-1 {
        height: 5%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-2 {
        height: 10%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-3 {
        height: 15%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-4 {
        height: 20%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-5 {
        height: 25%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-6 {
        height: 30%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-7 {
        height: 35%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-8 {
        height: 40%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-9 {
        height: 45%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-10 {
        height: 50%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-11 {
        height: 55%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-12 {
        height: 60%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-13 {
        height: 65%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-14 {
        height: 70%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-15 {
        height: 75%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-16 {
        height: 80%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-17 {
        height: 85%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-18 {
        height: 90%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-19 {
        height: 95%
    }

    #wp-admin-bar-pvc-post-views .pvc-line-graph-20 {
        height: 100%
    }
    </style>
    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" sizes="32x32" />
    <link rel="icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" />
    <meta name="msapplication-TileImage" content="{{asset('public/assets/images/setting/'.$gs->blog_favicon)}}" />
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
    class="post-template-default single single-post postid-94027 single-format-standard wp-custom-logo wp-embed-responsive theme--blocksy elementor-default elementor-kit-87972 ct-loading ct-elementor-default-template"
    data-link="type-2" data-prefix="single_blog_post" data-header="type-1:sticky:auto" data-footer="type-1"
    itemscope="itemscope" itemtype="https://schema.org/Blog">

    <a class="skip-link show-on-focus" href="#main">
        Skip to content</a>


    <div id="main-container">
        @include('layout.blog.header')
        <main id="main" class="site-main hfeed" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">


            <div class="ct-container-full" data-content="normal" data-vertical-spacing="top">



                <article id="post-94027"
                    class="post-94027 post type-post status-publish format-standard has-post-thumbnail hentry category-guest-post category-uncategorized">

                    <figure class="ct-featured-image ">
                        <div class="ct-image-container ct-lazy"><img width="720" height="360"
                                class="attachment-full size-full wp-post-image" alt=""
                                sizes="(max-width: 720px) 100vw, 720px"
                                data-ct-lazy="{{asset('public/assets/images/blog/'.$post->image)}}"
                                data-ct-lazy-set="{{asset('public/assets/images/blog/'.$post->image)}} 720w, {{asset('public/assets/images/blog/'.$post->image)}} 300w"
                                data-object-fit="~" itemprop="image" /><noscript><img width="720" height="360" alt=""
                                    data-srcset="{{asset('public/assets/images/blog/'.$post->image)}} 720w, {{asset('public/assets/images/blog/'.$post->image)}} 300w"
                                    data-src="{{asset('public/assets/images/blog/'.$post->image)}}"
                                    data-sizes="(max-width: 720px) 100vw, 720px"
                                    class="attachment-full size-full wp-post-image lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                        width="720" height="360" src="{{asset('public/assets/images/blog/'.$post->image)}}"
                                        class="attachment-full size-full wp-post-image" alt=""
                                        srcset="{{asset('public/assets/images/blog/'.$post->image)}} 720w, {{asset('public/assets/images/blog/'.$post->image)}} 300w"
                                        sizes="(max-width: 720px) 100vw, 720px" /></noscript></noscript><span
                                class="ct-ratio" style="padding-bottom: 50%"></span></div>
                    </figure>
                    <div class="hero-section" data-type="type-1">
                        <header class="entry-header">
                            <h1 class="page-title" title="রোবটিক্স এর একটি প্রজেক্ট" itemprop="headline">
                                {{ $post->title}}</h1>
                            <ul class="entry-meta" data-type="simple:slash">
                                <li class="meta-date" itemprop="datePublished"><time class="ct-meta-element-date"
                                        datetime="2021-10-27T10:32:33+06:00">{{ $post->created_at->toDayDateTimeString()}}</time>
                                </li>
                            </ul>
                        </header>
                    </div>



                    <div class="entry-content">
                        <div class="post-views post-94027 entry-meta">
                            <span class="post-views-icon dashicons dashicons-visibility"></span>


                        </div>
                        {!! $post->description !!}

                        <div class="kk-star-ratings
     kksr-valign-bottom     kksr-align-left    "
                            data-payload="{&quot;align&quot;:&quot;left&quot;,&quot;id&quot;:&quot;94027&quot;,&quot;slug&quot;:&quot;default&quot;,&quot;valign&quot;:&quot;bottom&quot;,&quot;explicit&quot;:&quot;&quot;,&quot;count&quot;:&quot;9&quot;,&quot;readonly&quot;:&quot;&quot;,&quot;score&quot;:&quot;4.4&quot;,&quot;best&quot;:&quot;5&quot;,&quot;gap&quot;:&quot;4&quot;,&quot;greet&quot;:&quot;Rate this post&quot;,&quot;legend&quot;:&quot;4.4\/5 - (9 votes)&quot;,&quot;size&quot;:&quot;24&quot;,&quot;width&quot;:&quot;121.2&quot;,&quot;_legend&quot;:&quot;{score}\/{best} - ({count} {votes})&quot;}">

                            <div class="kksr-stars">
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="rating_star" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="rating_star" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="rating_star" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="rating_star" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="rating_star" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>

                                    </div>
                                </div>
                            </div>

                            <div class="kksr-legend">

                            </div>
                        </div>




                        <!-- <div class="ct-share-box" data-location="bottom" data-type="type-2">
                            <span class="ct-module-title">Share with your friends</span>
                            
                            <div data-color="official" data-icons-type="custom:solid">

                                <a href="{{$gs->facebook_page}}" data-network="facebook" aria-label="Facebook"
                                    style="--official-color: #557dbc" rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="Facebook Icon">
                                            <path
                                                d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z" />
                                        </svg>
                                    </span> </a>

                                <a href="{{$gs->twiter}}" data-network="twitter" aria-label="Twitter"
                                    style="--official-color: #7acdee" rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="Twitter Icon">
                                            <path
                                                d="M20,3.8c-0.7,0.3-1.5,0.5-2.4,0.6c0.8-0.5,1.5-1.3,1.8-2.3c-0.8,0.5-1.7,0.8-2.6,1c-0.7-0.8-1.8-1.3-3-1.3c-2.3,0-4.1,1.8-4.1,4.1c0,0.3,0,0.6,0.1,0.9C6.4,6.7,3.4,5.1,1.4,2.6C1,3.2,0.8,3.9,0.8,4.7c0,1.4,0.7,2.7,1.8,3.4C2,8.1,1.4,7.9,0.8,7.6c0,0,0,0,0,0.1c0,2,1.4,3.6,3.3,4c-0.3,0.1-0.7,0.1-1.1,0.1c-0.3,0-0.5,0-0.8-0.1c0.5,1.6,2,2.8,3.8,2.8c-1.4,1.1-3.2,1.8-5.1,1.8c-0.3,0-0.7,0-1-0.1c1.8,1.2,4,1.8,6.3,1.8c7.5,0,11.7-6.3,11.7-11.7c0-0.2,0-0.4,0-0.5C18.8,5.3,19.4,4.6,20,3.8z" />
                                        </svg>
                                    </span> </a>

                               

                                <a href="{{$gs->linkdi}}" data-network="linkedin" aria-label="LinkedIn"
                                    style="--official-color: #1c86c6" rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="LinkedIn Icon">
                                            <path
                                                d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z" />
                                        </svg>
                                    </span> </a>

                              

                                <a href="#" data-network="telegram" aria-label="Telegram"
                                    style="--official-color: #229cce" rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="Telegram Icon">
                                            <path
                                                d="M19.9,3.1l-3,14.2c-0.2,1-0.8,1.3-1.7,0.8l-4.6-3.4l-2.2,2.1c-0.2,0.2-0.5,0.5-0.9,0.5l0.3-4.7L16.4,5c0.4-0.3-0.1-0.5-0.6-0.2L5.3,11.4L0.7,10c-1-0.3-1-1,0.2-1.5l17.7-6.8C19.5,1.4,20.2,1.9,19.9,3.1z" />
                                        </svg>
                                    </span> </a>

                                <a href="#" data-network="viber" aria-label="Viber" style="--official-color: #7f509e"
                                    rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="Viber Icon">
                                            <path
                                                d="M18.6,4.4c-0.3-1.2-1-2.2-2-2.9c-1.2-0.9-2.7-1.2-3.9-1.4C11,0,9.4-0.1,8,0.1C6.6,0.3,5.5,0.6,4.6,1c-1.9,0.9-3,2.2-3.3,4.1C1.1,6,1,6.9,0.9,7.6c-0.2,1.8,0,3.4,0.4,4.9c0.4,1.5,1.2,2.5,2.2,3.2c0.3,0.2,0.6,0.3,1,0.4c0.2,0.1,0.3,0.1,0.5,0.2v2.9C5,19.7,5.3,20,5.7,20l0,0c0.2,0,0.4-0.1,0.5-0.2l2.7-2.6C9,17,9,17,9.1,17c0.9,0,1.9-0.1,2.8-0.1c1.1-0.1,2.5-0.2,3.7-0.7c1.1-0.5,2-1.2,2.5-2.2c0.5-1.1,0.8-2.2,0.9-3.5C19.3,8.2,19.1,6.2,18.6,4.4z M13.9,13.1c-0.3,0.4-0.7,0.8-1.2,1c-0.4,0.1-0.7,0.1-1.1,0C8.8,12.8,6.5,10.9,5,8.1C4.7,7.5,4.5,6.9,4.2,6.3C4.2,6.2,4.2,6,4.2,5.9c0-1,0.8-1.5,1.5-1.7c0.3-0.1,0.5,0,0.8,0.2c0.6,0.6,1.1,1.2,1.4,2C8,6.7,8,7,7.7,7.2C7.6,7.3,7.6,7.3,7.5,7.4C6.9,7.8,6.8,8.2,7.2,8.9c0.5,1.2,1.5,1.9,2.6,2.4c0.3,0.1,0.6,0.1,0.8-0.2c0,0,0.1-0.1,0.1-0.1c0.5-0.8,1.1-0.7,1.8-0.3c0.4,0.3,0.8,0.6,1.2,0.9C14.3,12.1,14.3,12.5,13.9,13.1z M10.4,5.1c-0.2,0-0.3,0-0.5,0C9.7,5.2,9.5,5,9.4,4.8c0-0.3,0.1-0.5,0.4-0.5c0.2,0,0.4-0.1,0.6-0.1c2.1,0,3.7,1.7,3.7,3.7c0,0.2,0,0.4-0.1,0.6c0,0.2-0.2,0.4-0.5,0.4c0,0-0.1,0-0.1,0c-0.3,0-0.4-0.3-0.4-0.5c0-0.2,0-0.3,0-0.5C13.2,6.4,12,5.1,10.4,5.1z M12.5,8.2c0,0.3-0.2,0.5-0.5,0.5s-0.5-0.2-0.5-0.5c0-0.8-0.6-1.4-1.4-1.4c-0.3,0-0.5-0.2-0.5-0.5c0-0.3,0.2-0.5,0.5-0.5C11.4,5.8,12.5,6.9,12.5,8.2zM15.7,8.8c-0.1,0.2-0.2,0.4-0.5,0.4c0,0-0.1,0-0.1,0c-0.3-0.1-0.4-0.3-0.4-0.6c0.1-0.3,0.1-0.6,0.1-0.9c0-2.3-1.9-4.2-4.2-4.2c-0.3,0-0.6,0-0.9,0.1C9.5,3.6,9.2,3.5,9.2,3.2C9.1,2.9,9.3,2.7,9.5,2.6c0.4-0.1,0.8-0.1,1.1-0.1c2.8,0,5.2,2.3,5.2,5.2C15.8,8,15.8,8.4,15.7,8.8z" />
                                        </svg>
                                    </span> </a>

                                <a href="#" data-network="whatsapp" aria-label="WhatsApp"
                                    style="--official-color: #5bba67" rel="noopener noreferrer nofollow">
                                    <span class="ct-icon-container">
                                        <svg class="ct-icon" width="20px" height="20px" viewBox="0 0 20 20"
                                            aria-label="WhatsApp Icon">
                                            <path
                                                d="M10,0C4.5,0,0,4.5,0,10c0,1.9,0.5,3.6,1.4,5.1L0.1,20l5-1.3C6.5,19.5,8.2,20,10,20c5.5,0,10-4.5,10-10S15.5,0,10,0zM6.6,5.3c0.2,0,0.3,0,0.5,0c0.2,0,0.4,0,0.6,0.4c0.2,0.5,0.7,1.7,0.8,1.8c0.1,0.1,0.1,0.3,0,0.4C8.3,8.2,8.3,8.3,8.1,8.5C8,8.6,7.9,8.8,7.8,8.9C7.7,9,7.5,9.1,7.7,9.4c0.1,0.2,0.6,1.1,1.4,1.7c0.9,0.8,1.7,1.1,2,1.2c0.2,0.1,0.4,0.1,0.5-0.1c0.1-0.2,0.6-0.7,0.8-1c0.2-0.2,0.3-0.2,0.6-0.1c0.2,0.1,1.4,0.7,1.7,0.8s0.4,0.2,0.5,0.3c0.1,0.1,0.1,0.6-0.1,1.2c-0.2,0.6-1.2,1.1-1.7,1.2c-0.5,0-0.9,0.2-3-0.6c-2.5-1-4.1-3.6-4.2-3.7c-0.1-0.2-1-1.3-1-2.6c0-1.2,0.6-1.8,0.9-2.1C6.1,5.4,6.4,5.3,6.6,5.3z" />
                                        </svg>
                                    </span> </a>

                            </div>
                        </div> -->



                        <div class="author-box " data-type="type-1">
                            <a href="#" class="ct-image-container ct-lazy"><img
                                    data-ct-lazy="{{asset('public/assets/images/admin/profile/'.$user->image)}}"
                                    data-object-fit="~" width="60" height="60" alt="Default image">
                                <svg width="18px" height="13px" viewBox="0 0 20 15">
                                    <polygon
                                        points="14.5,2 13.6,2.9 17.6,6.9 0,6.9 0,8.1 17.6,8.1 13.6,12.1 14.5,13 20,7.5 " />
                                </svg>
                                <noscript><img data-object-fit="~" width="60" height="60" alt="Default image"
                                        data-src="{{asset('public/assets/images/admin/profile/'.$user->image)}}"
                                        class="lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            src="../wp-content/plugins/ultimate-member/assets/img/default_avatar.jpg"
                                            data-object-fit="~" width="60" height="60"
                                            alt="Default image"></noscript></noscript><span class="ct-ratio"
                                    style="padding-bottom: 100%"></span></a>
                            <section>
                                <h5 class="author-box-name">{{$user->name}}</h5>

                                <div class="author-box-bio">
                                </div>


                                <div class="author-box-social">

                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <svg class="ct-icon" width="12" height="12" viewBox="0 0 20 20">
                                            <path
                                                d="M10 0C4.5 0 0 4.5 0 10s4.5 10 10 10 10-4.5 10-10S15.5 0 10 0zm6.9 6H14c-.4-1.8-1.4-3.6-1.4-3.6s2.8.8 4.3 3.6zM10 2s1.2 1.7 1.9 4H8.1C8.8 3.6 10 2 10 2zM2.2 12s-.6-1.8 0-4h3.4c-.3 1.8 0 4 0 4H2.2zm.9 2H6c.6 2.3 1.4 3.6 1.4 3.6C4.3 16.5 3.1 14 3.1 14zM6 6H3.1c1.6-2.8 4.3-3.6 4.3-3.6S6.4 4.2 6 6zm4 12s-1.3-1.9-1.9-4h3.8c-.6 2.1-1.9 4-1.9 4zm2.3-6H7.7s-.3-2 0-4h4.7c.3 1.8-.1 4-.1 4zm.3 5.6s1-1.8 1.4-3.6h2.9c-1.6 2.7-4.3 3.6-4.3 3.6zm1.7-5.6s.3-2.1 0-4h3.4c.6 2.2 0 4 0 4h-3.4z" />
                                        </svg>
                                    </a>














                                </div>



                            </section>
                        </div>




                        <div class="ct-comments" id="comments">

                            <h3 class="ct-comments-title">
                                Comments </h3>

                            <ol class="ct-comment-list">
                                @foreach($post_comment as $post)
                                @php
                                $reply = App\Models\BlogPostCommentReply::where('comment_id',$post->id)->get();
                                @endphp

                                <li id="comment-17276" class="comment even thread-even depth-1 ct-has-avatar">
                                    <article class="ct-comment-inner" id="ct-comment-inner-17276">

                                        <footer class="ct-comment-meta">
                                            <figure class="ct-image-container ct-lazy"><img data-ct-lazy=""
                                                    data-object-fit="~" width="100" height="100"
                                                    alt="Razib"><noscript><img data-object-fit="~" width="100"
                                                        height="100" alt="Razib" data-src="" class="lazyload"
                                                        src=""><noscript><img src="" data-object-fit="~" width="100"
                                                            height="100" alt="Razib"></noscript></noscript><span
                                                    class="ct-ratio" style="padding-bottom: 100%"></span></figure>
                                            <h4 class="ct-comment-author">
                                                {{$post->name}}</h4>

                                            <div class="ct-comment-meta-data">


                                                {{ $post->created_at->toDayDateTimeString()}}


                                                <!-- <a rel='nofollow' class='comment-reply-link' href='#comment-17276'
                                                    data-commentid="17276" data-postid="93047"
                                                    data-belowelement="ct-comment-inner-17276"
                                                    data-respondelement="respond" data-replyto="Reply to Razib"
                                                    aria-label='Reply to Razib'>Reply</a> -->
                                            </div>
                                        </footer>


                                        <div class="ct-comment-content entry-content">
                                            <p>{{$post->comment}}</p>

                                        </div>

                                    </article>
                                    <ul class="children">
                                        @foreach($reply as $replycoment)
                                        <li id="comment-17278"
                                            class="comment byuser comment-author-techshop odd alt depth-2 ct-has-avatar">
                                            <article class="ct-comment-inner" id="ct-comment-inner-17278">

                                                <footer class="ct-comment-meta">
                                                    <figure class="ct-image-container ct-lazy"><img
                                                            data-ct-lazy="https://secure.gravatar.com/avatar/92840c50175ea11f08e76e9205435e4f?s=100&d=blank&r=g"
                                                            data-object-fit="~" width="100" height="100"
                                                            alt="TSBlog"><noscript><img data-object-fit="~" width="100"
                                                                height="100" alt="TSBlog"
                                                                data-src="https://secure.gravatar.com/avatar/92840c50175ea11f08e76e9205435e4f?s=100&d=blank&r=g"
                                                                class="lazyload"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                    data-object-fit="~" width="100" height="100"
                                                                    alt="TSBlog"
                                                                    data-src="https://secure.gravatar.com/avatar/92840c50175ea11f08e76e9205435e4f?s=100&d=blank&r=g"
                                                                    class="lazyload"
                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                                        src="https://secure.gravatar.com/avatar/92840c50175ea11f08e76e9205435e4f?s=100&d=blank&r=g"
                                                                        data-object-fit="~" width="100" height="100"
                                                                        alt="TSBlog"></noscript></noscript></noscript><span
                                                            class="ct-ratio" style="padding-bottom: 100%"></span>
                                                    </figure>
                                                    <h4 class="ct-comment-author">
                                                        <a href="#">{{ $gs->site_title}}</a>
                                                    </h4>

                                                    <div class="ct-comment-meta-data">
                                                        <a
                                                            href="https://blog.techshopbd.com/arduino-light-fan-dimmer/#comment-17278">
                                                            {{ $replycoment->created_at->toDayDateTimeString()}} </a>

                                                        <!-- 
                                                        <a rel='nofollow' class='comment-reply-link'
                                                            href='#comment-17278' data-commentid="17278"
                                                            data-postid="93047"
                                                            data-belowelement="ct-comment-inner-17278"
                                                            data-respondelement="respond" data-replyto="Reply to TSBlog"
                                                            aria-label='Reply to TSBlog'>Reply</a> -->
                                                    </div>
                                                </footer>


                                                <div class="ct-comment-content entry-content">
                                                    <p>{!! $replycoment->comment !!}</p>

                                                </div>

                                            </article>
                                        </li>
                                        @endforeach
                                    </ul><!-- .children -->
                                </li>
                                @endforeach

                            </ol>




                            <div id="respond" class="comment-respond">
                                <h2 id="reply-title" class="comment-reply-title">Leave a Reply<span
                                        class="ct-cancel-reply"><a rel="nofollow" id="cancel-comment-reply-link"
                                            href="/arduino-light-fan-dimmer/#respond" style="display:none;">Cancel
                                            Reply</a></span></h2>
                                @if(empty(Auth::guard('blog')->check()))


                                <p class="comment-form-field-input-author">
                                    <label for="author"><a href="{{route('blog.user.login')}}" class="user-login text-danger">Please
                                            login to
                                            write a rply</a> <b class="required">&nbsp;</b></label>
                                    <input id="author" name="name" type="text" value="" size="30"
                                        aria-required='true' />
                                </p>
                                </p>
                                @else
                                <form action="{{url('/blog/post/comment')}}" method="post" id="commentform"
                                    class="comment-form has-website-field">
                                    @csrf
                                    <input name="post_id" type="hidden" value="{{$post->id}}" />
                                    <p class="comment-form-field-input-author">
                                        <label for="author">Name <b class="required">&nbsp;*</b></label>
                                        <input id="author" name="name" type="text" value="" size="30"
                                            aria-required='true' />
                                    </p>
                                    <p class="comment-form-field-input-email">
                                        <label for="email">Email <b class="required">&nbsp;*</b></label>
                                        <input id="email" name="email" type="text" value="" size="30"
                                            aria-required='true' />
                                    </p>
                                    <p class="comment-form-field-input-url">
                                        <label for="url">Website</label>
                                        <input id="url" name="website" type="text" value="" size="30" />
                                    </p>

                                    <p class="comment-form-field-textarea">
                                        <label for="comment">Add Comment</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8"
                                            aria-required="true"></textarea>
                                    </p>
                                    <p class="form-submit"><button type="submit" name="submit" id="submit"
                                            class="submit" value="Post Comment">Post Comment</button> <input
                                            type='hidden' name='comment_post_ID' value='93047' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p>
                                    <p style="display: none;"><input type="hidden" id="akismet_comment_nonce"
                                            name="akismet_comment_nonce" value="6c5deaf921" /></p>
                                    <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea"
                                                cols="45" rows="8" maxlength="100"></textarea></label><input
                                            type="hidden" id="ak_js" name="ak_js" value="27" />
                                        <script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                        </script>
                                        <script>
                                        document.getElementById("ak_js").setAttribute("value", (new Date()).getTime());
                                        </script>
                                    </p>
                                </form>
                                @endif
                            </div>
                            <!-- <p class="akismet_comment_form_privacy_notice">This site uses Akismet to reduce spam. <a
                                    href="https://akismet.com/privacy/" target="_blank" rel="nofollow noopener">Learn
                                    how your comment data is processed</a>.</p> -->

                        </div>




                </article>



            </div>

            <!-- <div class="ct-comments" id="comments">


                <div id="respond" class="comment-respond">
                    <h2 id="reply-title" class="comment-reply-title">Leave a Reply<span class="ct-cancel-reply"><a
                                rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond"
                                style="display:none;">Cancel Reply</a></span></h2>
                    <form method="post" action="{{url('/blog/post/comment')}}">
                        @csrf
                        <input name="post_id" type="hidden" value="{{$post->id}}" />
                        <p class="comment-form-field-input-author">
                            <label for="author">Name <b class="required">&nbsp;*</b></label>
                            <input id="author" name="name" type="text" value="" size="30" aria-required='true' />
                        </p>
                        <p class="comment-form-field-input-email">
                            <label for="email">Email <b class="required">&nbsp;*</b></label>
                            <input id="email" name="email" type="text" value="" size="30" aria-required='true' />
                        </p>
                        <p class="comment-form-field-input-url">
                            <label for="url">Website</label>
                            <input id="url" name="website" type="text" value="" size="30" />
                        </p>

                        <p class="comment-form-field-textarea">
                            <label for="comment">Add Comment</label>
                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                        </p>
                        <p class="form-submit"><button type="submit" name="submit" id="submit" class="submit"
                                value="Post Comment">Post Comment</button>
                        </p>

                    </form>
                </div>


            </div> -->




            </article>



    </div>


    <div class="ct-related-posts-container">
        <div class="ct-container">

            <div class="ct-related-posts" data-layout="grid">
                <h4 class="ct-block-title">
                    Related Posts </h4>

                @foreach($related_post as $row)
                <article itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                    <a class="ct-image-container ct-lazy" href="{{route('blog.post.details',$row->slug)}}"
                        aria-label="{{ $row->title}}" tabindex="-1"><img width="300" height="150"
                            class="attachment-medium size-medium wp-post-image" alt="arduino light fan dimmer"
                            sizes="(max-width: 300px) 100vw, 300px"
                            data-ct-lazy="{{asset('public/assets/images/blog/'.$row->image)}}"
                            data-ct-lazy-set="{{asset('public/assets/images/blog/'.$row->image)}} 300w, {{asset('public/assets/images/blog/'.$row->image)}}"
                            data-object-fit="~" itemprop="image" /><noscript><img width="300" height="150"
                                alt="arduino light fan dimmer"
                                data-srcset="{{asset('public/assets/images/blog/'.$row->image)}} 300w, {{asset('public/assets/images/blog/'.$row->image)}}"
                                data-src="{{asset('public/assets/images/blog/'.$row->image)}}"
                                data-sizes="(max-width: 300px) 100vw, 300px"
                                class="attachment-medium size-medium wp-post-image lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                    width="300" height="150"
                                    src="../wp-content/uploads/2021/08/1-Channel-Light-Fan-Dimmer-300x150.jpg"
                                    class="attachment-medium size-medium wp-post-image" alt="arduino light fan dimmer"
                                    srcset="{{asset('public/assets/images/blog/'.$row->image)}} 300w, {{asset('public/assets/images/blog/'.$row->image)}}"
                                    sizes="(max-width: 300px) 100vw, 300px" /></noscript></noscript><span
                            class="ct-ratio" style="padding-bottom: 50%"></span></a>
                    <h3 class="related-entry-title" itemprop="name">
                        <a href="{{route('blog.post.details',$row->slug)}}" itemprop="url">{{ $row->title}}</a>
                    </h3>

                    <ul class="entry-meta" data-type="simple:slash">
                        <li class="meta-date" itemprop="datePublished"><time class="ct-meta-element-date"
                                datetime="2021-08-25T17:00:34+06:00">{{ $row->created_at->toDayDateTimeString()}}</time>
                        </li>

                    </ul>
                </article>

                @endforeach
            </div>

        </div>
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
    <script id='df40589e6-js-extra'>
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
        src="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.mina021.js?ver=1648804015')}}"
        id='df40589e6-js'></script>
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
    <script src="{{asset('public/assets/blog/wp-includes/js/comment-reply.minc8d8.js?ver=5.8.3')}}" id='comment-reply-js'>
    </script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/enlighter/cache/enlighterjs.min66c7.js?ver=q1ImDd1BwcGG5S8')}}"
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
    <script src="{{asset('public/assets/blog/wp-includes/js/underscore.min0028.js?ver=1.13.1')}}" id='underscore-js'></script>
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
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-modal.min5bf8.js?ver=2.2.5')}}"
        id='um_modal-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-jquery-form.min5bf8.js?ver=2.2.5')}}"
        id='um_jquery_form-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-fileupload5bf8.js?ver=2.2.5')}}"
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
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-tipsy.min5bf8.js?ver=2.2.5')}}"
        id='um_tipsy-js'></script>
    <script src="{{asset('public/assets/blog/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}" id='imagesloaded-js'>
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/masonry.min3a05.js?ver=4.2.2')}}" id='masonry-js'></script>
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b')}}"
        id='jquery-masonry-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/simplebar.min5bf8.js?ver=2.2.5')}}"
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
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-scripts.min5bf8.js?ver=2.2.5')}}"
        id='um_scripts-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-profile.min5bf8.js?ver=2.2.5')}}"
        id='um_profile-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-account.min5bf8.js?ver=2.2.5')}}"
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


</html>
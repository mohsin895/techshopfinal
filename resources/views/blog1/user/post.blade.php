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
        href="{{asset('public/assets/blog/wp-includes/css/dist/block-library/style.minc8d8.css?ver=5.8.3' )}}" media='all' />
    <link rel='stylesheet' id='kk-star-ratings-css'
        href="{{asset('public/assets/blog/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.minaead.css?ver=5.0.3')}}"
        media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href="{{asset('public/assets/blog/wp-includes/css/dashicons.minc8d8.css?ver=5.8.3' )}}" media='all' />
    <link rel='stylesheet' id='post-views-counter-frontend-css'
        href="{{asset('public/assets/blog/wp-content/plugins/post-views-counter/css/frontend52d0.css?ver=1.3.7')}}"
        media='all' />
    <link rel='stylesheet' id='usp_style-css'
        href="{{asset('public/assets/blog/wp-content/plugins/user-submitted-posts/resources/usp3ba1.css?ver=20210719')}}"
        media='all' />
    <link rel='stylesheet' id='7cb275d24-css'
        href="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.min3e17.css?ver=1648803996')}}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0')}}"
        media='all' />
    <style id='elementor-icons-inline-css'>
    .elementor-add-new-section .elementor-add-templately-promo-button {
        background-color: #5d4fff;
        background-image: url(../wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
        background-repeat: no-repeat;
        background-position: center center;
        margin-left: 5px;
        position: relative;
        bottom: 5px;
    }
    </style>
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/css/frontend-legacy.min9bf7.css?ver=3.4.6')}}"
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/css/frontend.min9bf7.css?ver=3.4.6')}}"
        media='all' />
    <style id='elementor-frontend-inline-css'>
    @font-face {
        font-family: eicons;
        src: url("{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons0b93.eot?5.10.0')}}");
        src: url(https://blog.techshopbd.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://blog.techshopbd.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://blog.techshopbd.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://blog.techshopbd.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://blog.techshopbd.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
        font-weight: 400;
        font-style: normal
    }
    </style>
    <link rel='stylesheet' id='elementor-post-87972-css'
        href="{{asset('public/assets/blog/wp-content/uploads/elementor/css/post-87972bebf.css?ver=1635312840')}}"
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mincbf4.css?ver=4.9.4')}}"
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.mincbf4.css?ver=4.9.4')}}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-90714-css'
        href="{{asset('public/assets/blog/wp-content/uploads/elementor/css/post-90714761c.css?ver=1635315370')}}"
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
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.3'
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
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.mincbf4.js?ver=4.9.4')}}"
        id='font-awesome-4-shim-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min5bf8.js?ver=2.2.5')}}"
        id='um-gdpr-js'></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/90714.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.3" />
    <link rel='shortlink' href='../index9f8f.html?p=90714' />
    <link rel="alternate" type="application/json+oembed"
        href="../wp-json/oembed/1.0/embed0894.json?url=https%3A%2F%2Fblog.techshopbd.com%2Fwrite-a-blog%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="../wp-json/oembed/1.0/embed772d?url=https%3A%2F%2Fblog.techshopbd.com%2Fwrite-a-blog%2F&amp;format=xml" />
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
    class="page-template page-template-elementor_header_footer page page-id-90714 wp-custom-logo wp-embed-responsive theme--blocksy elementor-default elementor-template-full-width elementor-kit-87972 elementor-page elementor-page-90714 ct-loading"
    data-link="type-2" data-prefix="single_page" data-header="type-1:sticky:auto" data-footer="type-1"
    itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <a class="skip-link show-on-focus" href="#main">
        Skip to content</a>


    <div id="main-container">
        @include('layout.blog.header')
        <main id="main" class="site-main hfeed">

            <div data-elementor-type="wp-page" data-elementor-id="90714" class="elementor elementor-90714"
                data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-b5e710d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="b5e710d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5c2cab"
                                        data-id="a5c2cab" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-a5258b6 elementor-widget elementor-widget-heading"
                                                    data-id="a5258b6" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-large">
                                                            টিউটোরিয়াল ব্লগ লিখুন</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7553982 elementor-widget elementor-widget-button"
                                                    data-id="7553982" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="#terms"
                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">শর্ত ও নিয়মাবলী
                                                                        জানতে এখানে ক্লিক করুন</span>

                                                                </span>
                                                               
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ba2aadf elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="ba2aadf" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-48d8f89 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="48d8f89" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8885c8c"
                                        data-id="8885c8c" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2e9e09d elementor-widget elementor-widget-text-editor"
                                                    data-id="2e9e09d" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><code></code></p>
                                                            @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                            <p><span class="code mm-code">


                                                                    <div>

                                                                        <form method="post"
                                                                            action="{{route('blog.user.post.insert')}}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div id="usp-error-message"
                                                                                class="usp-callout-failure usp-hidden">
                                                                                Please complete the required fields.
                                                                            </div>





                                                                            <fieldset class="usp-title">
                                                                                <label for="user-submitted-title">Post
                                                                                    Title</label>
                                                                                <input name="title" type="text" value=""
                                                                                    placeholder="Post Title" required
                                                                                    class="usp-input">
                                                                            </fieldset>


                                                                            <fieldset class="usp-content">

                                                                                <div class="usp_text-editor">
                                                                                    <div id="wp-uspcontent-wrap"
                                                                                        class="wp-core-ui wp-editor-wrap html-active">
                                                                                        <link rel='stylesheet'
                                                                                            id='editor-buttons-css'
                                                                                            href="{{asset('public/assets/blog/wp-includes/css/editor.minc8d8.css?ver=5.8.3')}}"
                                                                                            media='all' />
                                                                                        <div id="wp-uspcontent-editor-container"
                                                                                            class="wp-editor-container">
                                                                                            <div id="qt_uspcontent_toolbar"
                                                                                                class="quicktags-toolbar hide-if-no-js">
                                                                                            </div><textarea
                                                                                                class="usp-rich-textarea wp-editor-area"
                                                                                                rows="10" cols="40"
                                                                                                name="description"
                                                                                                id="uspcontent"></textarea>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                            </fieldset>

                                                                            <fieldset class="usp-images">
                                                                                <label for="user-submitted-image">Upload
                                                                                    an Image(max size::100kb)</label>
                                                                                <div id="usp-upload-message">Please
                                                                                    select your image(s) to upload.
                                                                                </div>
                                                                                <div id="user-submitted-image">

                                                                                    <input name="image" type="file"
                                                                                        size="25"
                                                                                        class="usp-input usp-clone"
                                                                                        data-parsley-excluded="true"
                                                                                        required>
                                                                                    <a href="#" id="usp_add-another"
                                                                                        class="usp-no-js">Add another
                                                                                        image</a>
                                                                                </div>

                                                                            </fieldset>



                                                                            <fieldset class="usp-checkbox"><input
                                                                                    id="user-submitted-checkbox"
                                                                                    name="usp_custom_checkbox"
                                                                                    type="checkbox" value=""
                                                                                    data-required="true" required>
                                                                                <label for="user-submitted-checkbox">I
                                                                                    agree the to the terms.</label>
                                                                            </fieldset>
                                                                            <div id="usp-submit">

                                                                                <input type="submit" class=""
                                                                                    value="Submit Post">

                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-00ca47c elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="00ca47c" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-ca857e6 ct-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ca857e6" data-element_type="section" id="terms">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c113267"
                                        data-id="c113267" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-f7dff1f elementor-widget elementor-widget-heading"
                                                    data-id="f7dff1f" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-large">
                                                            নিয়মাবলীঃ </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-b00d65f ct-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="b00d65f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7940aee"
                                        data-id="7940aee" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3dbdefe elementor-widget elementor-widget-text-editor"
                                                    data-id="3dbdefe" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>১। আপনার নাম, ইমেইল, ব্লগের টাইটেল লিখুন। Text Editor এর
                                                                মধ্যে আপনার টিউটোরিয়াল লিখুন। Text Editor এর নিচে থাকা
                                                                “Upload an Image” অংশে আপনার টিউটোরিয়ালের Cover Photo টি
                                                                আপলোড করুন।</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-60acd04 elementor-widget elementor-widget-text-editor"
                                                    data-id="60acd04" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>২। টিউটোরিয়ালের মধ্যে ছবি দিতে চাইলে সেই ছবিগুলো প্রথমে
                                                                Google Drive এ আপলোড করুন। এরপর Google Drive এ ছবি ওপেন
                                                                করে উপরে ডান দিকের More Actions (3 dot icon) থেকে “Embed
                                                                Item” সিলেক্ট করুন। এখান থেকে HTML Code কপি করে পোস্টের
                                                                মধ্যে যেখানে ছবি দিতে চান সেখানে পেস্ট করুন।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-45c0b43 elementor-widget elementor-widget-text-editor"
                                                    data-id="45c0b43" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৩। টিউটোরিয়ালের মধ্যে YouTube ভিডিও দিতে চাইলে YouTube
                                                                এ ভিডিওর নিচে থেকে Share &gt; Embed সিলেক্ট করুন। তারপর
                                                                HTML Code টি কপি করে পোস্টের মধ্যে যেখানে ভিডিও দিতে চান
                                                                সেখানে পেস্ট করুন।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d6ffb0d elementor-widget elementor-widget-text-editor"
                                                    data-id="d6ffb0d" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৩। আপনি টিউটোরিয়াল সাবমিট করার পর আমরা তা রিভিউ করব।
                                                                প্রয়োজনে আপনার সাথে আপনার ইমেইলে যোগাযোগ করব। সবকিছু ঠিক
                                                                থাকলে পোস্টটি আমরা পাবলিশ করে দিবো। যেকোনো তথ্যের জন্য
                                                                আমাদের সাথে যোগাযোগ করতে পারেন।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-178b79b ct-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="178b79b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c8e433"
                                        data-id="0c8e433" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-76abf6d elementor-widget elementor-widget-heading"
                                                    data-id="76abf6d" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-large">
                                                            শর্তাবলীঃ</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-b966cff ct-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="b966cff" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f328bc8"
                                        data-id="f328bc8" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0b80a28 elementor-widget elementor-widget-text-editor"
                                                    data-id="0b80a28" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>১। টিউটোরিয়াল অবশ্যই DIY electronics এবং Embedded System
                                                                সম্পর্কিত হতে হবে। টিউটোরিয়াল অবশ্যই বাংলা ভাষায় লিখতে
                                                                হবে।</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-64c58d3 elementor-widget elementor-widget-text-editor"
                                                    data-id="64c58d3" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>২। আপনার লেখা টিউটোরিয়ালটি Guest Post হিসাবে সেভ হবে।
                                                                টেকশপবিডি কতৃপক্ষের লেখা নয় এমন সব ব্লগ Guest Post
                                                                ক্যাটাগরিতে থাকবে।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6021b21 elementor-widget elementor-widget-text-editor"
                                                    data-id="6021b21" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৩। Guest Post এ থাকা কোন ভুল তথ্য, ভুল সার্কিট
                                                                ডায়াগ্রাম বা ভুল কোড এবং Guest Post অনুযায়ী কাজ করতে
                                                                গিয়ে কোন দুর্ঘটনা ঘটলে তার জন্য টেকশপবিডি কতৃপক্ষ দায়ী
                                                                থাকবে না- এই মেসেজটি আপনার টিউটোরিয়ালে পাবলিশ করার
                                                                পূর্বে যুক্ত করা হবে।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ba92dd7 elementor-widget elementor-widget-text-editor"
                                                    data-id="ba92dd7" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৪। অন্য কোন ব্লগের পোস্ট কপি করে এখানে লেখা থেকে বিরত
                                                                থাকুন। বাংলাদেশে পাওয়া যায় না এমন কোন যন্ত্রাংশ
                                                                টিউটোরিয়ালে ব্যবহার করা যাবে না। বাংলাদেশের আইন, সামাজিক
                                                                নিয়মাবলি ও ধর্মীয় অনুভূতির পরিপন্থি কিছু ব্লগে উল্লেখ
                                                                করা যাবে না। এ ধরণের ব্লগকে রিভিউ করার সময় বাতিল করা
                                                                হবে।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4616d69 elementor-widget elementor-widget-text-editor"
                                                    data-id="4616d69" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৫। টিউটোরিয়ালে দেখানো প্রোডাক্টের লিঙ্ক দিতে পারবেন তবে
                                                                techshopbd.com ব্যতীত অন্যকোনো সাপ্লায়ারের প্রোডাক্ট
                                                                লিঙ্ক দেওয়া যাবে না।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5487c7c elementor-widget elementor-widget-text-editor"
                                                    data-id="5487c7c" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৬। ব্লগে আপনার নিজের তোলা অথবা ডাউনলোড করা নন-কপিরাইট
                                                                ছবি দিতে পারবেন কিন্তু তাতে কোন প্রোডাক্ট সাপ্লায়ার অথবা
                                                                ব্যবসা প্রতিষ্ঠানকে (টেকশপ ব্যতীত) উল্লেখ করা / নাম
                                                                দেখানো যাবে না।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a5a9c17 elementor-widget elementor-widget-text-editor"
                                                    data-id="a5a9c17" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <div>৭। TSBlog এর অন্য কোন টিউটোরিয়াল লিঙ্ক এবং TechShopBD
                                                                Youtube Channel এর ভিডিও ব্লগে দিতে পারবেন। এছাড়া
                                                                প্রোজেক্টের ভিডিও ধারণ করে ইউটিউবে আপলোড করে আপনার
                                                                ইউটিউব চ্যানেলের ভিডিও ব্লগে দিতে পারবেন। তবে সেখানে কোন
                                                                প্রোডাক্ট সাপ্লায়ার অথবা ব্যবসা প্রতিষ্ঠানকে (টেকশপ
                                                                ব্যতীত) উল্লেখ করা / নাম দেখানো যাবে না। আপনার নিজের ও
                                                                টেকশপের ইউটিউব চ্যানেল ছাড়া অন্য কোন জায়গা থেকে ভিডিও
                                                                দেওয়া যাবে না।</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
    <link rel='stylesheet' id='e-animations-css'
        href="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/animations/animations.min9bf7.css?ver=3.4.6')}}"
        media='all' />
    <link rel='stylesheet' id='buttons-css'
        href="{{asset('public/assets/blog/wp-includes/css/buttons.minc8d8.css?ver=5.8.3')}}" media='all' />
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
    <script id='7cb275d24-js-extra'>
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
        src="{{asset('public/assets/blog/wp-content/uploads/essential-addons-elementor/734e5f942.min3e17.js?ver=1648803996')}}"
        id='7cb275d24-js'></script>
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
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/bdt-uikit.mincf1b.js?ver=3.2')}}"
        id='bdt-uikit-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/js/webpack.runtime.min9bf7.js?ver=3.4.6')}}"
        id='elementor-webpack-runtime-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/js/frontend-modules.min9bf7.js?ver=3.4.6')}}"
        id='elementor-frontend-modules-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}"
        id='elementor-waypoints-js'></script>
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1')}}" id='jquery-ui-core-js'>
    </script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6')}}"
        id='swiper-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/share-link/share-link.min9bf7.js?ver=3.4.6')}}"
        id='share-link-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1')}}"
        id='elementor-dialog-js'></script>
    <script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.4.6",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/blog.techshopbd.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 90714,
            "title": "Write%20A%20Blog%20%E2%80%93%20TSBLOG",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/js/frontend.min9bf7.js?ver=3.4.6')}}"
        id='elementor-frontend-js'></script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min3c94.js?ver=2.1.0')}}"
        id='prime-slider-site-js'></script>
    <script src="{{asset('public/assets/blog/wp-content/plugins/elementor/assets/js/preloaded-modules.min9bf7.js?ver=3.4.6')}}"
        id='preloaded-modules-js'></script>
    <script id='anwp-pg-scripts-js-extra'>
    var anwpPostGridElementorData = {
        "ajax_url": "https:\/\/blog.techshopbd.com\/wp-admin\/admin-ajax.php",
        "public_nonce": "8a1b18f234",
        "premium_active": "",
        "loader": "https:\/\/blog.techshopbd.com\/wp-includes\/js\/tinymce\/skins\/lightgray\/img\/loader.gif"
    };
    </script>
    <script
        src="{{asset('public/assets/blog/wp-content/plugins/anwp-post-grid-for-elementor/public/js/plugin.min3b0f.js?ver=0.8.5')}}"
        id='anwp-pg-scripts-js'></script>
    <script id='quicktags-js-extra'>
    var quicktagsL10n = {
        "closeAllOpenTags": "Close all open tags",
        "closeTags": "close tags",
        "enterURL": "Enter the URL",
        "enterImageURL": "Enter the URL of the image",
        "enterImageDescription": "Enter a description of the image",
        "textdirection": "text direction",
        "toggleTextdirection": "Toggle Editor Text Direction",
        "dfw": "Distraction-free writing mode",
        "strong": "Bold",
        "strongClose": "Close bold tag",
        "em": "Italic",
        "emClose": "Close italic tag",
        "link": "Insert link",
        "blockquote": "Blockquote",
        "blockquoteClose": "Close blockquote tag",
        "del": "Deleted text (strikethrough)",
        "delClose": "Close deleted text tag",
        "ins": "Inserted text",
        "insClose": "Close inserted text tag",
        "image": "Insert image",
        "ul": "Bulleted list",
        "ulClose": "Close bulleted list tag",
        "ol": "Numbered list",
        "olClose": "Close numbered list tag",
        "li": "List item",
        "liClose": "Close list item tag",
        "code": "Code",
        "codeClose": "Close code tag",
        "more": "Insert Read More tag"
    };
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/quicktags.minc8d8.js?ver=5.8.3')}}" id='quicktags-js'></script>
    <script src="{{asset('public/assets/blog/wp-includes/js/dist/dom-ready.min7354.js?ver=71883072590656bf22c74c7b887df3dd')}}"
        id='wp-dom-ready-js'></script>
    <script id='wp-a11y-js-translations'>
    (function(domain, translations) {
        var localeData = translations.locale_data[domain] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData(localeData, domain);
    })("default", {
        "locale_data": {
            "messages": {
                "": {}
            }
        }
    });
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/dist/a11y.minac6e.js?ver=0ac8327cc1c40dcfdf29716affd7ac63')}}"
        id='wp-a11y-js'></script>
    <script id='wplink-js-extra'>
    var wpLinkL10n = {
        "title": "Insert\/edit link",
        "update": "Update",
        "save": "Add Link",
        "noTitle": "(no title)",
        "noMatchesFound": "No results found.",
        "linkSelected": "Link selected.",
        "linkInserted": "Link inserted.",
        "minInputLength": "3"
    };
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/wplink.minc8d8.js?ver=5.8.3')}}" id='wplink-js'></script>
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/ui/menu.min35d0.js?ver=1.12.1')}}" id='jquery-ui-menu-js'>
    </script>
    <script id='jquery-ui-autocomplete-js-extra'>
    var uiAutocompleteL10n = {
        "noResults": "No results found.",
        "oneResult": "1 result found. Use up and down arrow keys to navigate.",
        "manyResults": "%d results found. Use up and down arrow keys to navigate.",
        "itemSelected": "Item selected."
    };
    </script>
    <script src="{{asset('public/assets/blog/wp-includes/js/jquery/ui/autocomplete.min35d0.js?ver=1.12.1')}}"
        id='jquery-ui-autocomplete-js'></script>
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/assets/blog/wp-content/plugins/wp-edit/css/tinymce_dashicons.css')}}" />
    <script type="text/javascript">
    tinyMCEPreInit = {
        baseURL: "https://blog.techshopbd.com/wp-includes/js/tinymce",
        suffix: ".min",
        dragDropUpload: true,
        mceInit: {},
        qtInit: {
            'uspcontent': {
                id: "uspcontent",
                buttons: "strong,em,link,block,del,ins,img,ul,ol,li,code,more,close"
            }
        },
        ref: {
            plugins: "",
            theme: "modern",
            language: ""
        },
        load_ext: function(url, lang) {
            var sl = tinymce.ScriptLoader;
            sl.markDone(url + '/langs/' + lang + '.js');
            sl.markDone(url + '/langs/' + lang + '_dlg.js');
        }
    };
    </script>
    <script type="text/javascript">
    var ajaxurl = "../wp-admin/admin-ajax.html";
    (function() {
        var initialized = [];
        var initialize = function() {
            var init, id, inPostbox, $wrap;
            var readyState = document.readyState;

            if (readyState !== 'complete' && readyState !== 'interactive') {
                return;
            }

            for (id in tinyMCEPreInit.mceInit) {
                if (initialized.indexOf(id) > -1) {
                    continue;
                }

                init = tinyMCEPreInit.mceInit[id];
                $wrap = tinymce.$('#wp-' + id + '-wrap');
                inPostbox = $wrap.parents('.postbox').length > 0;

                if (
                    !init.wp_skip_init &&
                    ($wrap.hasClass('tmce-active') || !tinyMCEPreInit.qtInit.hasOwnProperty(id)) &&
                    (readyState === 'complete' || (!inPostbox && readyState === 'interactive'))
                ) {
                    tinymce.init(init);
                    initialized.push(id);

                    if (!window.wpActiveEditor) {
                        window.wpActiveEditor = id;
                    }
                }
            }
        }

        if (typeof tinymce !== 'undefined') {
            if (tinymce.Env.ie && tinymce.Env.ie < 11) {
                tinymce.$('.wp-editor-wrap ').removeClass('tmce-active').addClass('html-active');
            } else {
                if (document.readyState === 'complete') {
                    initialize();
                } else {
                    document.addEventListener('readystatechange', initialize);
                }
            }
        }

        if (typeof quicktags !== 'undefined') {
            for (id in tinyMCEPreInit.qtInit) {
                quicktags(tinyMCEPreInit.qtInit[id]);

                if (!window.wpActiveEditor) {
                    window.wpActiveEditor = id;
                }
            }
        }
    }());
    </script>
    <div id="wp-link-backdrop" style="display: none"></div>
    <div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title">
        <form id="wp-link" tabindex="-1">
            <input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="21218fc270" />
            <h1 id="link-modal-title">Insert/edit link</h1>
            <button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button>
            <div id="link-selector">
                <div id="link-options">
                    <p class="howto" id="wplink-enter-url">Enter the destination URL</p>
                    <div>
                        <label><span>URL</span>
                            <input id="wp-link-url" type="text" aria-describedby="wplink-enter-url" /></label>
                    </div>
                    <div class="wp-link-text-field">
                        <label><span>Link Text</span>
                            <input id="wp-link-text" type="text" /></label>
                    </div>
                    <div class="link-target">
                        <label><span></span>
                            <input type="checkbox" id="wp-link-target" /> Open link in a new tab</label>
                    </div>
                </div>
                <p class="howto" id="wplink-link-existing-content">Or link to existing content</p>
                <div id="search-panel">
                    <div class="link-search-wrapper">
                        <label>
                            <span class="search-label">Search</span>
                            <input type="search" id="wp-link-search" class="link-search-field" autocomplete="off"
                                aria-describedby="wplink-link-existing-content" />
                            <span class="spinner"></span>
                        </label>
                    </div>
                    <div id="search-results" class="query-results" tabindex="0">
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                    <div id="most-recent-results" class="query-results" tabindex="0">
                        <div class="query-notice" id="query-notice-message">
                            <em class="query-notice-default">No search term specified. Showing recent items.</em>
                            <em class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to
                                select an item.</em>
                        </div>
                        <ul></ul>
                        <div class="river-waiting">
                            <span class="spinner"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submitbox">
                <div id="wp-link-cancel">
                    <button type="button" class="button">Cancel</button>
                </div>
                <div id="wp-link-update">
                    <input type="submit" value="Add Link" class="button button-primary" id="wp-link-submit"
                        name="wp-link-submit">
                </div>
            </div>
        </form>
    </div>
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

<!-- Mirrored from blog.techshopbd.com/write-a-blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Apr 2022 09:09:51 GMT -->

</html>
@extends('layout.blog.master')
@section('content')
<main id="main" class="site-main hfeed">

    <div data-elementor-type="wp-page" data-elementor-id="89651" class="elementor elementor-89651"
        data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2f214f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2f214f5" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35647ac"
                                data-id="35647ac" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-b964aad elementor-widget elementor-widget-prime-slider-general"
                                            data-id="b964aad" data-element_type="widget"
                                            data-widget_type="prime-slider-general.default">
                                            <div class="elementor-widget-container">
                                                <div class="bdt-prime-slider">

                                                    <div class="bdt-prime-slider-skin-general">

                                                        <div class="bdt-position-relative bdt-visible-toggle"
                                                            bdt-slideshow="{&quot;animation&quot;:&quot;scale&quot;,&quot;ratio&quot;:&quot;16:1&quot;,&quot;min-height&quot;:370,&quot;autoplay&quot;:true,&quot;autoplay-interval&quot;:8000,&quot;pause-on-hover&quot;:false,&quot;velocity&quot;:1,&quot;finite&quot;:false}"
                                                            data-settings="{&quot;id&quot;:&quot;#bdt-b964aad&quot;,&quot;animation_status&quot;:&quot;no&quot;}"
                                                            id="bdt-b964aad">

                                                            <ul class="bdt-slideshow-items">
                                                                @foreach($slider as $row)
                                                                <li
                                                                    class="bdt-slideshow-item bdt-flex bdt-flex-middle bdt-flex-center elementor-repeater-item-c5acae0">
                                                                    <div
                                                                        class="bdt-position-cover bdt-animation-kenburns bdt-animation-reverse bdt-transform-origin-center-left">


                                                                        <div class="bdt-ps-slide-img"
                                                                            style="background-image: url({{asset('public/assets/images/blog/slider/'.$row->image)}})">
                                                                        </div>


                                                                    </div>

                                                                    <div class="bdt-overlay-default bdt-position-cover">
                                                                    </div>

                                                                    <div
                                                                        class="bdt-position-z-index bdt-position-large">
                                                                        <div class="bdt-prime-slider-wrapper">
                                                                            <div class="bdt-prime-slider-content">
                                                                                <div class="bdt-prime-slider-desc">


                                                                                    <div class="bdt-main-title"
                                                                                        bdt-slideshow-parallax="x: 100,0,-20; opacity: 1,1,0">
                                                                                        <h1 class="bdt-title-tag">
                                                                                            {{$row->title}}
                                                                                        </h1>
                                                                                    </div>


                                                                                    <div
                                                                                        bdt-slideshow-parallax="x: 150,0,-30; opacity: 1,1,0">
                                                                                        <div class="bdt-btn-wrapper">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach



                                                            </ul>



                                                            <div>
                                                                <a class="bdt-position-bottom-right bdt-prime-slider-previous"
                                                                    href="#" bdt-slidenav-previous
                                                                    bdt-slideshow-item="previous"></a>
                                                                <a class="bdt-position-bottom-right bdt-prime-slider-next"
                                                                    href="#" bdt-slidenav-next
                                                                    bdt-slideshow-item="next"></a>
                                                            </div>




                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="bdt-offcanvas" id="bdt-offcanvas-b964aad"
                                                    data-settings="{&quot;id&quot;:&quot;bdt-offcanvas-b964aad&quot;,&quot;layout&quot;:&quot;default&quot;}"
                                                    bdt-offcanvas="mode: slide;">
                                                    <div class="bdt-offcanvas-bar">

                                                        <button class="bdt-offcanvas-close" type="button"
                                                            bdt-close></button>



                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-9adb7d4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="9adb7d4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cc813fc"
                                data-id="cc813fc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-9a51839 elementor-widget elementor-widget-heading"
                                            data-id="9a51839" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-large">
                                                    জনপ্রিয় পোস্ট</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-384f84d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="384f84d" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-47ba799 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="47ba799" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-acc2042"
                                data-id="acc2042" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2e222d8 anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-simple-slider"
                                            data-id="2e222d8" data-element_type="widget"
                                            data-widget_type="anwp-pg-simple-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-simple-slider anwp-pg-swiper-wrapper position-relative swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="3" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="2"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="yes"
                                                        data-pg-autoplay-delay="5000" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--layout-a swiper-slide">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">


                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-210"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__muted_bg">
                                                                    </div>
                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__content d-flex flex-column anwp-position-cover">
                                                                        <div
                                                                            class="anwp-pg-post-teaser__top-meta d-flex mb-2">
                                                                        </div>


                                                                        <div
                                                                            class="anwp-pg-post-teaser__title anwp-font-heading mt-auto mb-1">
                                                                            {{$row->title}} </div>

                                                                        <div class="mb-2"></div>
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="{{route('blog.post.details',$row->slug)}}"
                                                                        aria-hidden="true"></a>
                                                                </div>
                                                            </div>
                                                            @endforeach

                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-0186852 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="0186852" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e47bb1"
                                data-id="6e47bb1" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-4364945 elementor-widget elementor-widget-heading"
                                            data-id="4364945" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-large">নতুন
                                                    পোস্ট </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a4f4b51 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="a4f4b51" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-1f604de elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="1f604de" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-23b7272"
                                data-id="23b7272" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c93d825 anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-simple-slider"
                                            data-id="c93d825" data-element_type="widget"
                                            data-widget_type="anwp-pg-simple-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-simple-slider anwp-pg-swiper-wrapper position-relative swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="3" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="2"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="yes"
                                                        data-pg-autoplay-delay="8000" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--layout-a swiper-slide">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">


                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-210"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__muted_bg">
                                                                    </div>
                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__content d-flex flex-column anwp-position-cover">
                                                                        <div
                                                                            class="anwp-pg-post-teaser__top-meta d-flex mb-2">
                                                                        </div>


                                                                        <div
                                                                            class="anwp-pg-post-teaser__title anwp-font-heading mt-auto mb-1">
                                                                            {{$row->title}} </div>

                                                                        <div class="mb-2"></div>
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="{{route('blog.post.details',$row->slug)}}"
                                                                        aria-hidden="true"></a>
                                                                </div>
                                                            </div>
                                                            @endforeach


                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-e609e87 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e609e87" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73c61a6"
                                data-id="73c61a6" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-e735cce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="e735cce" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1bab171"
                                                        data-id="1bab171" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-e786543 elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="e786543" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            সবগুলো পোস্ট</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ee3e4c2"
                                                        data-id="ee3e4c2" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5066a8b elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="5066a8b" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-ab8b002 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="ab8b002" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-3b44740 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3b44740" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c8a162"
                                data-id="2c8a162" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-828b2f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="828b2f2" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1b94a16"
                                                        data-id="1b94a16" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-2dd62d6 elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="2dd62d6" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            আরডুইনো প্রোজেক্ট</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-115ab84"
                                                        data-id="115ab84" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-df6405c elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="df6405c" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-0a20d38 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="0a20d38" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-36684fc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="36684fc" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7821f9c"
                                data-id="7821f9c" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-38d4e2e elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="38d4e2e" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-comment-discussion">
                                                                                </use>
                                                                            </svg>
                                                                           
                                                                        </div>
                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use xlink:href="#icon-anwp-pg-eye">
                                                                                </use>
                                                                            </svg>
                                                                         
                                                                        </div>
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach

                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-e883ba0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e883ba0" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c4afdb"
                                data-id="9c4afdb" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-6cd0743 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="6cd0743" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-41cbd36"
                                                        data-id="41cbd36" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a16b131 elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="a16b131" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            রোবোটিক্স প্রোজেক্ট</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-af60929"
                                                        data-id="af60929" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-790dfee elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="790dfee" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-d0fcb40 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="d0fcb40" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-e0a9dac elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e0a9dac" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fa9225"
                                data-id="0fa9225" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-43b1415 elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="43b1415" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-81969c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="81969c3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fcdf2a1"
                                data-id="fcdf2a1" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-b42bb19 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="b42bb19" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ada5d7c"
                                                        data-id="ada5d7c" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-22d9ac7 elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="22d9ac7" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            AVR মাইক্রোকন্ট্রোলার
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-77eca5f"
                                                        data-id="77eca5f" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-0a5f68b elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="0a5f68b" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-8dbfa9e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="8dbfa9e" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-2910af4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2910af4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46dd03c"
                                data-id="46dd03c" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-fa40245 elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="fa40245" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                       
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-445ec92 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="445ec92" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5596ae"
                                data-id="b5596ae" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-18f2d7d elementor-widget elementor-widget-image-carousel"
                                            data-id="18f2d7d" data-element_type="widget"
                                            data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:2000,&quot;effect&quot;:&quot;fade&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                            data-widget_type="image-carousel.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-carousel-wrapper swiper-container"
                                                    dir="ltr">
                                                    <div class="elementor-image-carousel swiper-wrapper">
                                                        @foreach($baseslider as $row)
                                                        <div class="swiper-slide"><a data-elementor-open-lightbox="yes"
                                                                data-elementor-lightbox-slideshow="18f2d7d"
                                                                data-elementor-lightbox-title="Order korlei Discount"
                                                                href="{{url('/')}}" target="_blank">
                                                                <figure class="swiper-slide-inner"><img
                                                                        alt="Order korlei Discount"
                                                                        data-src="{{asset('public/assets/images/slider/'.$row->image)}}"
                                                                        class="swiper-slide-image lazyload"
                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                                            class="swiper-slide-image"
                                                                            src="{{asset('public/assets/images/slider/'.$row->image)}}"
                                                                            alt="Order korlei Discount" /></noscript>
                                                                </figure>
                                                            </a></div>
                                                            @endforeach
                                                       
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-4d2147f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4d2147f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bfac19d"
                                data-id="bfac19d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-8dc834f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="8dc834f" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae4f253"
                                                        data-id="ae4f253" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-e75eed8 elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="e75eed8" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            বেসিক ইলেকট্রনিক্স</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d9054d2"
                                                        data-id="d9054d2" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3611f61 elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="3611f61" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-7f72772 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="7f72772" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-877f1d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="877f1d9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2efe23f"
                                data-id="2efe23f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-ca4b17a elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="ca4b17a" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                     
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-a9cd947 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="a9cd947" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-affd5fc"
                                data-id="affd5fc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-c864139 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="c864139" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0b88f8d"
                                                        data-id="0b88f8d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-234aa5c elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="234aa5c" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            হোম অটোমেশন</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8a8a9e"
                                                        data-id="d8a8a9e" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-b754d29 elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="b754d29" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-ade6ff8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="ade6ff8" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-f9c790c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f9c790c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9b0150"
                                data-id="e9b0150" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-b1d9e49 elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="b1d9e49" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                       
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-65b7f7b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="65b7f7b" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6b8e46"
                                data-id="c6b8e46" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-dbfec0f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="dbfec0f" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1698f01"
                                                        data-id="1698f01" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-bab144e elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="bab144e" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            কিভাবে ব্যবহার করতে হয় </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9898726"
                                                        data-id="9898726" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5bb306f elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="5bb306f" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-f095826 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="f095826" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-40c9e43 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="40c9e43" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e5533f2"
                                data-id="e5533f2" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-d0b631b elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="d0b631b" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                     
                                                                        
                                                                      
                                                                        
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-2fafe5f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2fafe5f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b59e35"
                                data-id="8b59e35" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-75a829a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="75a829a" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f47d1a1"
                                                        data-id="f47d1a1" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-ff779af elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="ff779af" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            রাসবেরি পাই প্রোজেক্ট </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5c5c24a"
                                                        data-id="5c5c24a" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-10df176 elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="10df176" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-c6f0cd1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="c6f0cd1" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-ad85040 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="ad85040" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4624956"
                                data-id="4624956" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-de59666 elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="de59666" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                     
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-dd3e829 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="dd3e829" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8f2c2ab"
                                data-id="8f2c2ab" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-e868b17 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="e868b17" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0eb3e4d"
                                                        data-id="0eb3e4d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-917294e elementor-widget-mobile__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="917294e" data-element_type="widget"
                                                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2
                                                                            class="elementor-heading-title elementor-size-large">
                                                                            ওয়্যারলেস সিস্টেম</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72b26dd"
                                                        data-id="72b26dd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-7310972 elementor-align-right elementor-widget elementor-widget-button"
                                                                    data-id="7310972" data-element_type="widget"
                                                                    data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="{{route('blog.category','eewrt')}}"
                                                                                class="elementor-button-link elementor-button elementor-size-sm elementor-animation-bounce-in"
                                                                                role="button">
                                                                                <span
                                                                                    class="elementor-button-content-wrapper">
                                                                                    <span
                                                                                        class="elementor-button-text">আরও
                                                                                        দেখুন</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-520128a elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="520128a" data-element_type="widget"
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-331459f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="331459f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-abc5b34"
                                data-id="abc5b34" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-99ec3c0 elementor-arrows-position-outside anwp-pg-widget-header-style--b anwp-pg-post-teaser__post-icon--size-16 elementor-pagination-position-outside elementor-widget elementor-widget-anwp-pg-classic-slider"
                                            data-id="99ec3c0" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                                            data-widget_type="anwp-pg-classic-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="anwp-pg-wrap">


                                                    <!-- Slider main container -->
                                                    <div class="anwp-pg-classic-slider anwp-pg-swiper-wrapper position-static swiper-container anwp-pg-no-transform"
                                                        data-pg-slides-per-view="4" data-pg-slides-per-view-mobile="1"
                                                        data-pg-slides-per-view-tablet="2" data-pg-slides-per-group="1"
                                                        data-pg-slides-per-group-mobile="1"
                                                        data-pg-slides-per-group-tablet="1" data-pg-autoplay="no"
                                                        data-pg-autoplay-delay="" data-pg-space-between="20"
                                                        data-pg-effect="slide" data-pg-show-read-more="yes"
                                                        data-pg-enable-observer="no" dir="ltr">
                                                        <!-- Additional required wrapper -->
                                                        <div class="swiper-wrapper">
                                                            <!-- Slides -->
                                                            @foreach($new_post as $row)
                                                            <div
                                                                class="anwp-pg-post-teaser anwp-pg-post-teaser--inner-cover-link anwp-pg-post-teaser--layout-d d-flex flex-column swiper-slide anwp-pg-post-teaser--has-comments-meta anwp-pg-post-teaser--has-pvc-meta anwp-pg-post-teaser--with-read-more ">
                                                                <div
                                                                    class="anwp-pg-post-teaser__thumbnail position-relative">



                                                                    <div class="anwp-pg-post-teaser__thumbnail-img anwp-pg-height-150"
                                                                        style="background-image: url({{asset('public/assets/images/blog/'.$row->image)}})">
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__thumbnail-bg anwp-position-cover">
                                                                    </div>

                                                                    <a class="anwp-position-cover anwp-link-without-effects"
                                                                        href="arduino-light-fan-dimmer/index.html"
                                                                        aria-hidden="true"></a>
                                                                </div>

                                                                <div
                                                                    class="anwp-pg-post-teaser__content flex-grow-1 pt-1 d-flex flex-column">

                                                                    <div
                                                                        class="anwp-pg-post-teaser__title anwp-font-heading mt-2">
                                                                        <a class="anwp-link-without-effects"
                                                                            href="arduino-light-fan-dimmer/index.html"
                                                                            aria-hidden="true">
                                                                            {{$row->title}} </a>
                                                                    </div>

                                                                    <div
                                                                        class="anwp-pg-post-teaser__bottom-meta d-flex flex-wrap">

                                                                        <div
                                                                            class="anwp-pg-post-teaser__bottom-meta-item d-flex align-items-center mr-3">
                                                                            <svg
                                                                                class="anwp-pg-icon anwp-pg-icon--s16 mr-1">
                                                                                <use
                                                                                    xlink:href="#icon-anwp-pg-calendar">
                                                                                </use>
                                                                            </svg>
                                                                            <span class="posted-on m-0"><span
                                                                                    class="screen-reader-text">Posted
                                                                                    on</span>{{ $row->created_at->toDayDateTimeString()}}</span>
                                                                        </div>
                                                                      
                                                                       
                                                                        
                                                                    </div>

                                                                    <div class="anwp-pg-post-teaser__excerpt mb-2">
                                                                        {!! $row->description !!} </div>

                                                                    <div class="w-100 anwp-pg-read-more mt-auto">
                                                                        <a href="{{route('blog.post.details',$row->slug)}}"
                                                                            class="anwp-pg-read-more__btn mt-3 mb-0 btn btn-sm btn-outline-info w-100 text-decoration-none">
                                                                            আরও পড়ুন </a>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            @endforeach

                                                        </div>

                                                        <div class="swiper-pagination"></div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
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
@endsection
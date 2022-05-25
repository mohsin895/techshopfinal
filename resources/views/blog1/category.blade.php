@extends('layout.blog.master')
@section('content')
<main id="main" class="site-main hfeed" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">


    <div class="ct-container" data-sidebar="right" data-vertical-spacing="top:bottom">

        <section>

            <div class="hero-section" data-type="type-1">
                <header class="entry-header">
                    <h1 class="page-title" title=" <?php echo $breadcrumb; ?>" itemprop="headline"> <?php echo $breadcrumb; ?></h1>
                    <div class="page-description ct-hidden-sm">
                        <p>In  this category I show you all <?php echo $breadcrumb; ?> related blogpost.</p>
                    </div>
                </header>
            </div>
            <div class="entries" data-layout="simple" data-cards="boxed" data-hover="zoom-in">
				@foreach($categoryProduct as $row)
                <article id="post-93047"
                    class="entry-card post-93047 post type-post status-publish format-standard has-post-thumbnail hentry category-arduino category-bluetooth category-home-automation category-how-to-use category-uncategorized"
                    data-reveal="bottom:no"><a class="ct-image-container ct-lazy"
                        href="{{route('blog.post.details',$row->slug)}}" aria-label="লাইট ফ্যান ডিমার"
                        tabindex="-1"><img width="720" height="360"
                            class="attachment-medium_large size-medium_large wp-post-image"
                            alt="arduino light fan dimmer" sizes="(max-width: 720px) 100vw, 720px"
                            data-ct-lazy="{{asset('public/assets/images/blog/'.$row->image)}}"
                            data-ct-lazy-set="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                            data-object-fit="~" itemprop="image" /><noscript><img width="720" height="360"
                                alt="arduino light fan dimmer"
                                data-srcset="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                                data-src="{{asset('public/assets/images/blog/'.$row->image)}}"
                                data-sizes="(max-width: 720px) 100vw, 720px"
                                class="attachment-medium_large size-medium_large wp-post-image lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                    width="720" height="360"
                                    src="../../wp-content/uploads/2021/08/1-Channel-Light-Fan-Dimmer.jpg"
                                    class="attachment-medium_large size-medium_large wp-post-image"
                                    alt="arduino light fan dimmer"
                                    srcset="{{asset('public/assets/images/blog/'.$row->image)}} 720w, {{asset('public/assets/images/blog/'.$row->image)}} 300w"
                                    sizes="(max-width: 720px) 100vw, 720px" /></noscript></noscript><span
                            class="ct-ratio" style="padding-bottom: 50%"></span></a>
                    <div class="card-content">
                        <h2 class="entry-title">
                            <a href="{{route('blog.post.details',$row->slug)}}">
                               {{$row->title}} </a>
                        </h2>


                        <div class="entry-excerpt">
                            <p>{!! $row->description !!}</p>
                        </div>

                        <a class="entry-button ct-button" data-type="background" data-alignment="left"
                            href="{{route('blog.post.details',$row->slug)}}">Read More<svg width="17px" height="17px"
                                viewBox="0 0 32 32">
                                <path
                                    d="M 21.1875 9.28125 L 19.78125 10.71875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 19.78125 21.28125 L 21.1875 22.71875 L 27.90625 16 Z ">
                                </path>
                            </svg></a>
                    </div>
                </article>
                @endforeach
            </div>
            <nav class="ct-pagination" data-pagination="simple">
                <div class="ct-hidden-sm">
                    {{ $categoryProduct->links() }}
                </div>

            </nav>
        </section>


        <aside class="ct-hidden-sm ct-hidden-md" data-type="type-2" id="sidebar" itemtype="https://schema.org/WPSideBar"
            itemscope="itemscope">


            <div class="ct-sidebar" data-widgets="separated">

                <!-- <div class="ct-widget widget_post_views_counter_list_widget" id="post_views_counter_list_widget-3">
                    <h2 class="widget-title">জনপ্রিয় পোস্ট</h2>
                    <ol>
                        <li>
                            <a class="post-title" href="../../13200-2/index.html">ARM Tutorial Part 1:Software
                                Installation &#038; LED Blinking | এআরএম টিউটোরিয়াল (পর্ব ১ : সফটওয়্যার ইন্সটলেশন ও
                                এলইডি ব্লিংকিং)</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../%e0%a6%b9%e0%a6%be%e0%a6%a4%e0%a7%87-%e0%a6%a4%e0%a7%88%e0%a6%b0%e0%a7%80-%e0%a6%aa%e0%a6%be%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%82%e0%a6%95/index.html">DIY-Power
                                Bank | হাতে তৈরী পাওয়ার ব্যাংক</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../tds-%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b0/index.html">TDS meter with
                                arduino</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../esp8266-wifi-4-channel-iot-smart-switch-%e0%a6%95%e0%a6%bf%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%8b/index.html">ESP8266
                                WiFi 4 Channel IoT Smart Switch কিভাবে ব্যবহার করবো?</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../sla-battery-charge-controller-12v-%e0%a6%95%e0%a6%bf%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a6%ac%e0%a7%87%e0%a6%a8/index.html">Automatic
                                Battery Charge Controller কিভাবে ব্যবহার করবেন ?</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a6%be%e0%a6%87-%e0%a6%a1%e0%a7%8b%e0%a6%b0%e0%a6%b2%e0%a6%95/index.html">Wifi
                                doorlock using ESP8266 (ওয়াইফাই ডোরলক)</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../%e0%a6%93%e0%a7%9f%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b0%e0%a6%b2%e0%a7%87%e0%a6%b8-%e0%a6%95%e0%a6%b2%e0%a6%bf%e0%a6%82-%e0%a6%ac%e0%a7%87%e0%a6%b2/index.html">DIY-Wireless
                                calling bell | ওয়্যারলেস কলিং বেল</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%9f%e0%a6%be%e0%a6%b0%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%81%e0%a6%ab-%e0%a6%b8%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%b8%e0%a6%b0-%e0%a6%a6%e0%a6%bf%e0%a7%9f%e0%a7%87/index.html">Thermometer
                                with Arduino &#038; DS18B20 waterproof sensor | ওয়াটারপ্রুফ সেন্সর দিয়ে থার্মোমিটার
                                তৈরী</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../%e0%a6%ac%e0%a7%8d%e0%a6%b2%e0%a7%81%e0%a6%9f%e0%a7%81%e0%a6%a5-%e0%a6%b8%e0%a7%8d%e0%a6%aa%e0%a6%bf%e0%a6%95%e0%a6%be%e0%a6%b0/index.html">DIY-Bluetooth
                                speaker | ব্লুটুথ স্পিকার</a>
                        </li>
                        <li>
                            <a class="post-title"
                                href="../../heart-rate-%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b0/index.html">Heart
                                rate meter</a>
                        </li>
                    </ol>
                </div> -->
                <div class="ct-widget widget_recent_entries" id="recent-posts-2">
                    <h2 class="widget-title">নতুন পোস্ট</h2>
                    <ul>
                        @foreach($new_post as $row)
                        <li>
                            <a href="{{route('blog.post.details',$row->slug)}}">{{ $row->title}}</a>
                            <span class="post-date">{{ $row->created_at->toDayDateTimeString()}}</span>
                        </li>
                        @endforeach
                        
                    </ul>

                </div>
                
            </div>

        </aside>

    </div>

</main>
@endsection
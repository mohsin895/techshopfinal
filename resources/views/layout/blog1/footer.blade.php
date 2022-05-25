<footer class="ct-footer" data-id="type-1" itemscope="" itemtype="https://schema.org/WPFooter">
            <div data-row="top">
                <div class="ct-container">
                    <div data-column="widget-area-1">
                        <div class="ct-widget widget_text" id="text-5">
                            <h2 class="widget-title">About US</h2>
                            <div class="textwidget entry-content">
                                <p>{!! $gs->blog_about_us !!}</p>
                            </div>
                        </div>
                    </div>
                    <div data-column="widget-area-2">
                        <div class="ct-widget widget_text" id="text-6">
                            <h2 class="widget-title">Contact US</h2>
                            <div class="textwidget entry-content">
                                <p>{{$gs->site_title}}<br />
                                {{$gs->address}}</p>
                                <br />
                                {{$gs->mobile1}}</p>
                                <br />
                                {{$gs->email1}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-row="bottom">
                <div class="ct-container" data-columns-divider="md:sm">
                    <div data-column="copyright">
                        <div class="ct-footer-copyright" data-id="copyright">

                            <p>Copyright © 2022 {{$gs->site_title}} - Powered by <a href="https://accelerating-intelligence.com/"
                                    target="_blank" rel="noopener"><strong>www.roboticsabcshop.com</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
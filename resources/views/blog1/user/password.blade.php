@extends('layout.blog.master')
@section('content')
<main id="main" class="site-main hfeed">


    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">



        <article id="post-220" class="post-220 page type-page status-publish hentry">


            <div class="hero-section" data-type="type-1">
                <header class="entry-header">
                @include('error.message')
                    <h1 class="page-title" title="Login" itemprop="headline">Forget Password</h1>
                </header>
            </div>



            <div class="entry-content">

                <div class="um um-login um-215">

                    <div class="um-form">

                        <form method="post" action="{{route('blog.forget_password')}}" autocomplete="off">
                            @csrf

                            <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                                <div class="um-col-131"></div>
                                <div class="um-col-132">
                                    <div id="um_field_215_username"
                                        class="um-field um-field-text  um-field-username um-field-text um-field-type_text"
                                        data-key="username">
                                        <div class="um-field-label"><label for="username-215"> E-mail</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area">
                                            <input autocomplete="off" class="um-form-field valid " type="email"
                                                name="email" placeholder="Enter Your Email" />

                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="um-col-133"></div>
                                <div class="um-clear"></div>
                            </div>

                          


                            <div class="um-col-alt">




                                <div class="um-clear"></div>

                                <div class="um-left um-half">
                                    <input type="submit" value="Send Email" class="um-button" id="um-submit-btn" />
                                </div>
                                <div class="um-right um-half">
                                    <a href="{{route('blog.user.login')}}" class="um-button um-alt">
                                        Login </a>
                                </div>


                                <div class="um-clear"></div>

                            </div>


                           


                        </form>

                    </div>

                </div>
                <style type="text/css">
                .um-215.um {
                    max-width: 450px;
                }
                </style>

            </div>





        </article>



    </div>

</main>
@endsection
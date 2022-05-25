@extends('layout.blog.master')
@section('content')
<main id="main" class="site-main hfeed">


    <div class="ct-container-full" data-content="normal" data-vertical-spacing="top:bottom">



        <article id="post-222" class="post-222 page type-page status-publish hentry">


            <div class="hero-section" data-type="type-1">
                <header class="entry-header">
                @include('error.message')
                    <h1 class="page-title" title="Register" itemprop="headline">Register</h1>
                </header>
            </div>



            <div class="entry-content">

                <div class="um um-register um-214">

                    <div class="um-form" data-mode="register">

                        <form method="post" action="{{route('blog.user.register')}}">
                            @csrf

                            <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                                <div class="um-col-1">
                                   
                                    <div id="um_field_214_first_name"
                                        class="um-field um-field-text  um-field-first_name um-field-text um-field-type_text"
                                        data-key="first_name">
                                        <div class="um-field-label"><label for="first_name-214">Full Name</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area">
                                            <input autocomplete="off"
                                                class="um-form-field valid " type="text" name="name"
                                                id="first_name-214" required/>

                                        </div>
                                    </div>
                                   
                                    <div id="um_field_214_user_email"
                                        class="um-field um-field-text  um-field-user_email um-field-text um-field-type_text"
                                        data-key="user_email">
                                        <div class="um-field-label"><label for="user_email-214">E-mail Address</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="email" name="email"
                                                id="user_email-214" value="" placeholder="" data-validate="unique_email"
                                                data-key="user_email" />

                                        </div>
                                    </div>
                                    <div id="um_field_214_user_email"
                                        class="um-field um-field-text  um-field-user_email um-field-text um-field-type_text"
                                        data-key="user_email">
                                        <div class="um-field-label"><label for="user_email-214">Phone Number</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="text" name="phone"
                                                value="" placeholder=""
                                                 />

                                        </div>
                                    </div>
                                    <div id="um_field_214_user_email"
                                        class="um-field um-field-text  um-field-user_email um-field-text um-field-type_text"
                                        data-key="user_email">
                                        <div class="um-field-label"><label for="user_email-214">Date of Birth</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input autocomplete="off"
                                                class="um-form-field valid " type="date" name="date_of_birth"
                                                value="" placeholder=""
                                                 />

                                        </div>
                                    </div>
                                    <div id="um_field_214_user_password"
                                        class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password"
                                        data-key="user_password">
                                        <div class="um-field-label"><label for="user_password-214">Password</label>
                                            <div class="um-clear"></div>
                                        </div>
                                        <div class="um-field-area"><input class="um-form-field valid " type="password"
                                                name="password" id="user_password-214" value="" placeholder=""
                                                data-validate="" data-key="user_password" />

                                        </div>
                                    </div>

                                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="femal" required>
  <label class="form-check-label" for="inlineRadio2">Femal</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="other" required >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
                                   
                                </div>
                            </div> 

                           



                                <div class="um-left um-half">
                                    <input type="submit" value="Register" class="um-button" id="um-submit-btn" />
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
                .um-214.um {
                    max-width: 450px;
                }
                </style>

            </div>





        </article>



    </div>

</main>
@endsection
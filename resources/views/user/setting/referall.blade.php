@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section id="my-profile" class="profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
        @include('user.setting.sider_bar')

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">
            <div class="card-group">

                <div class="card p-4">
                    <h2 class="text-center login-page-text font-weight-bold">User Referral Link</h2>

                    <hr class="my-3">


                    <p class="text-left" style="color:#000">please click to copy for your referral link</p>
                    <span class=" ml-4" style="color:#000">{{ url('/') . '/?ref=' . Auth::user()->referral_id }}
                        <button id="copyBtn" data-text="{{ url('/') . '/?ref=' . Auth::user()->referral_id }}"
                            class="btn btn-success ">Copy Referral Link</button></span>


                </div>


            </div>
        </div>

    </div>
</section>

@include('layout.front.footer');

@endsection
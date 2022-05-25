@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section id="my-profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
        @include('user.setting.sider_bar')

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">
            <div class="card-group">

                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">User Blog</h2>

                    <hr class="my-3">
                    <div id="registerError"></div>

                    @foreach($blog as $row)


                    <p class="ml-0 text-left mt-5 ml-5">Blog Title: <span><a
                                href="{{route('blog.post.details',$row->slug)}}">{{$row->title}}</a></span>



                        @endforeach


                </div>


            </div>
        </div>

    </div>
</section>



@endsection
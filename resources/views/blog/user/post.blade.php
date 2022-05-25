@extends('layout.blog.master')
@section('content')
<div class="container mt-5 mb-5">

    <!--Admin Login For start-->


    <!--Admin Login Form End-->

    <!--Admin register Form start-->


    <div class="row justify-content-center h-100vh" id="register-form-box">
        <div class="col-lg-12 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center text-primary font-weight-bold">Create New Post</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="registerError"></div>
                    <form method="post" action="{{route('blog.user.post.insert')}}" enctype="multipart/form-data"
                        id="register-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>

                            </div>
                            <input type="text" name="title" class="form-control" id="name"
                                placeholder="Enter your Post Title" required>
                            <div class="invalid-feedback">This name field is required</div>

                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    Description
                                </span>

                            </div>
                            <textarea rows="10" cols="40" name="description" class="form-control ckeditor"></textarea>



                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    Upload
                                    an Image(max size::100kb)
                                </span>

                            </div>
                            <input type="file" name="image" class="form-control" id="r_email"
                                placeholder="Enter your Mobile Number">
                            <div class="invalid-feedback">This email field is required</div>


                        </div>









                        <div class="form-group">
                            <input type="submit" value="Post" class="btn btn-primary btn-block">

                        </div>

                    </form>
                </div>


            </div>
        </div>

    </div>

    <!--Admin register Form end-->

    <!--Admin Forgot password Start-->



    <!--Admin Forgot password End-->

</div>
@endsection
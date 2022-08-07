@extends('layout.blog.master')
@section('content')
<style>
.cke_browser_webkit {
    width:100%;
}
</style>
<div class="container mt-5 mb-5">

    <!--Admin Login For start-->


    <!--Admin Login Form End-->

    <!--Admin register Form start-->


    <div class="row justify-content-center h-100vh" id="register-form-box">
        <div class="col-lg-12 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h2 class="text-center  font-weight-bold" style="color:#D20A7D">Create New Post</h2>
                    @include('error.message')
                    <hr class="my-3">
                    <div id="registerError"></div>
                    <form method="post" action="{{route('blog.user.post.insert')}}" enctype="multipart/form-data"
                        id="register-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                        <div class="input-group mb-2">
                                <span class="">
                                    Write your post Title* &nbsp;(Required)
                                </span>

                            </div>
                            <input type="text" name="title" class="form-control" id="name"
                                placeholder="Enter your Post Title" required>
                            <div class="invalid-feedback">This name field is required</div>

                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group mb-2">
                                <span class="">
                                    Write Your Description* &nbsp;(Required)
                                </span>

                            </div>
                            <textarea rows="10" cols="40" name="description" class="form-control ckeditor" required></textarea>



                        </div>

                        <div class="mb-5" >
                                <span class="" >
                                    Upload
                                    an Image(Max size:&nbsp;100kb; Width:800px, Height:400px)
                                </span>

                            </div>
                        <div class="input-group input-group-lg form-group">
                            
                            <input type="file" name="image" class="form-control" id="r_email"
                                 accept="image/*">
                            <div class="invalid-feedback">This email field is required</div>


                        </div>









                        <div class="form-group">
                            <input type="submit" value="Post" class="btn sign-button btn-block">

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
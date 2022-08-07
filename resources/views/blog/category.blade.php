@extends('layout.blog.master')
@section('details-css')
<link rel="stylesheet" href="{{asset('public/assets/blog/css/postcss.css')}}">
@endsection
@section('content')

<?php

use App\Models\blogCategory;


$category = blogCategory::category();


//   echo "<pre>";print_r($category);die();
?>




<div class="album py-5">
    <div class="container">

        <div class="row">
            @foreach($categoryProduct as $row)
            <div class="col-md-4">
                <div class="card mb-4 ">
                    <img class="card-img-top" src="{{asset('public/assets/images/blog/'.$row->image)}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{$row->title}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group btn-border">
                                <a href="{{route('blog.post.details',$row->slug)}}"
                                    class="btn btn-sm btn-outline-style">View Details</a>

                            </div>
                            <small class="text-muted">{{ $row->created_at->toDayDateTimeString()}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>









@endsection




































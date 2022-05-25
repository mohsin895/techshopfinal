@extends('layout.front.master')

@section('content')
@include('layout.front.header')
<section id="about-page" class="main-content-section">
        <div class="content-section">
            <div class="d-flex">
                <div class="sidebar-category ml-0">
                    <div class="card">
                        <div class="card-header w-100">
                            <p class="sidebar-title text-uppercase"><img src="{{ asset('public/image/frontLogos/category-icon.png') }}"
                                    alt="icon"> <a href="category-list.html" class="text-white">Categories</a></p>
                        </div>
                        <div class="card-body p-0">
                            <ul class="category-list">

                               

                            @foreach($categories as $cat)
                            <li class="category-item js--category-item">
                                <a href="{{url('/',$cat->slug)}}" class="text-capitalize category-name">{{$cat->cat_name}}<i class="fa fa-angle-right text-right"></i></a>

                                <div class="dropdown-menu">
                                    @foreach($cat['subcategory'] as $subcat)
                                    <a href="{{url('/',$subcat->slug)}}" class="d-block">{{$subcat->cat_name}}</a>
                                       
                                        @endforeach
                                </div>

                            </li>
                            @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="about__content mr-0">
                    <nav class="mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item m-0"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active m-0" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                    <div class="card about__content--body">
                        <h1 class="title ml-0">About Us</h1>
                        <div class="body-text">
                        {!! $gs->about_us !!}
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
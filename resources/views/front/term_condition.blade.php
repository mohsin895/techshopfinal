@extends('layout.front.master')

@section('content')
@include('layout.front.header')
<section id="about-page" class="main-content-section">
        <div class="content-section">
            <div class="d-flex">
               
                <div class="about__content mr-0">
                    <nav class="mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item m-0"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item m-0"><a href="{{route('about_us')}}">About Us</a></li>
                            <li class="breadcrumb-item active m-0" aria-current="page">Terms & Conditions</li>
                        </ol>
                    </nav>
                    <div class="card about__content--body">
                    {!! $gs->t_c !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



 
@endsection
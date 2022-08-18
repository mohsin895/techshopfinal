@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="about-page" class="main-content-section">
        <div class="content-section">
            <div class="d-flex">
               
                <div class="about__content mr-0">
                    <nav class="mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item m-0"><a href="{{url('/')}}" style="color:black">Home</a></li>
                            <li class="breadcrumb-item active m-0" aria-current="page">Warrenty & Replacement</li>
                        </ol>
                    </nav>
                    <div class="card about__content--body">
                      
                        <div class="body-text" style="margin-left:0px">
                        {!! $gs->w_r !!}
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layout.front.footer');

@endsection
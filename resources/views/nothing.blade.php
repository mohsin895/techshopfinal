@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<div class="album py-5">
        <div class="">

            <div class="row">
            
                <div class="col-md-12">
                    <div class="card mb-4 ">
              
                    <div class="text-center mt-5">
            
                        <img class="card-img-top" src="{{asset('public/image/frontLogos/notfound.jpg')}}"
                            alt="Card image cap">
                         </div>
                        <div class="card-body">
                            <p class="card-text text-center" style="font-size: 30px;font-weight: 500;">Page Not Found</p>
                            <p class="card-text text-center">Something went wrong.</p>
                            <p class="card-text text-center">Please check your connection and try again</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('/')}}"
                                        class="btn btn-sm btn-outline-secondary">Back To Homepage</a>

                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
              

            </div>
        </div>
    </div>

    <p class="card-text text-center" style="font-size: 30px;font-weight: 500; color:#000;text-align:center">Just for You !!.</p>
<div class="album py-5">

    <div class="container">
   

        <div class="row">
            @foreach($product as $row)

            <div class="col-md-3">
                <a href="{{url('/product/details',$row->slug)}}">
                    <div class="card mb-4 ">
                        <img class="card-img-top" src="{{asset('public/assets/images/product/'.$row->image)}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Product Name:                      <?php
echo substr($row->product_name,0,20)
?>
      </p>
                            <p class="card-text">Price:TK. {{$row->price}}</p>
                            <p class="card-text">Model No: {{$row->model_no}}</p>

                        </div>
                    </div>
                </a>
            </div>

            @endforeach

        </div>
    </div>
</div>

@endsection
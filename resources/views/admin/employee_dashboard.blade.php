@extends('layout.admin.master')
@section('content')
@php

$lastDayProduct = App\Models\Product::whereDay('created_at',Carbon\Carbon::now()->day )->get();
$lastWeekProduct = App\Models\Product::whereDay('created_at','>=',Carbon\Carbon::now()->subDays(7))->get();

$lastMonthProduct = App\Models\Product::whereDay('created_at','>=',Carbon\Carbon::now()->subDays(30))->get();
$NewProduct = App\Models\Product::whereDay('created_at','>=',Carbon\Carbon::now()->subDays(30))->count('id');

$lastDayOrder = App\Models\Order::whereDay('created_at',Carbon\Carbon::now()->day )->get();
$newOrder = App\Models\Order::where('status','New')->count('id');
$lastWeekOrder = App\Models\Order::whereDay('created_at','>=',Carbon\Carbon::now()->subDays(7))->get();

$lastMonthOrder = App\Models\Order::whereDay('created_at','>=',Carbon\Carbon::now()->subDays(30))->get();

$allProduct = App\Models\Product::sum('quantity');
$allOrderProduct = App\Models\OrderProduct::sum('quantity');

$stockProduct = $allProduct - $allOrderProduct;
$totalSell = App\Models\OrderProduct::sum('price');

$totalBuyingPrice = App\Models\Order::sum('total_buying_price');
$totalSellingPrice = App\Models\Order::sum('subtotal');


@endphp
<?php
 
$allProducts = $allProduct;
 
$products = array(
    
	array("y"=> $allOrderProduct, "name"=> "Sell Product", "color"=> "#E7823A"),
	array("y"=> $stockProduct, "name"=> "Stock Product", "color"=> "#546BC1")
    
    
);
 

 
?>


<div class="post d-flex flex-column-fluid" id="kt_post">

    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
 
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
          
                <!--begin::Mixed Widget 2-->
                <div class="card card-xl-stretch">
                    <!--begin::Header-->
                    
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Chart-->
                      
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-p mt-n20 position-relative">
                        <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-warning px-12 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                  
                                    <!--end::Svg Icon-->
                                    @include('error.message')
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                              
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7 text-center ">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                 
                                    <!--end::Svg Icon-->
                                   <h1 class="text-danger"> Wlcome {{Auth::guard('admin')->user()->name}}</h1>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                               
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                         
                            

                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->


        <!--end::Row-->
        <!--begin::Row-->
      
        <!--end::Row-->
        <!--begin::Calendar Widget 1-->

        <!--end::Calendar Widget 1-->
        <!--begin::Modals-->
        <!--begin::Modal - New Product-->

        <!--end::Modal - New Product-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>



@endsection
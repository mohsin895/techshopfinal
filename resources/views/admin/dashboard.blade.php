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
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                fill="black" />
                                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                        </svg>

                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/user')}}" class="text-warning fw-bold fs-6">All Register User
                                        &nbsp;&nbsp;({{ App\Models\User::all()->count() }})</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                fill="black" />
                                            <path
                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/order')}}" class="text-primary fw-bold fs-6">All
                                        Orders&nbsp;&nbsp;({{ App\Models\Order::all()->count() }})</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/product')}}" class="text-danger fw-bold fs-6 mt-2">All
                                        products &nbsp;&nbsp;({{ App\Models\Product::all()->count() }})</a>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-success fw-bold fs-6 mt-2">Total Sell in Amount
                                        &nbsp;&nbsp;({{ App\Models\Order::all()->sum('grand_total')}}&nbsp;&nbsp;
                                        {{$gs->currency}})</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <h1 class="mt-5 text-center"> Order Details</h1>

                            <div class="row g-0 mt-5">

                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/order')}}" class="text-danger fw-bold fs-6 mt-2">New Orders
                                        Today
                                        &nbsp;&nbsp;({{ App\Models\Order::whereDay('created_at',Carbon\Carbon::now()->day )->count('id') }})</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-success fw-bold fs-6 mt-2">Last week Order
                                        &nbsp;&nbsp;({{ App\Models\Order::where('created_at' ,'>=', Carbon\Carbon::now()->subDays(7))->count('id')}})</a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-0 mt-5">

                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/order/new')}}" class="text-danger fw-bold fs-6 mt-2">New Order
                                        All &nbsp;&nbsp;({{ App\Models\Order::where('status','New')->count('id') }})</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <a href="{{url('admin/order/cancel')}}"
                                        class="text-success fw-bold fs-6 mt-2">Cancel Order
                                        &nbsp;&nbsp;({{ App\Models\Order::where('status','Cancelled')->count('id')}})</a>
                                </div>



                                <!--end::Col-->
                            </div>

                            <div class="row g-0 mt-5">

                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    <button class="btn invisible" id="backButton">&lt; Back</button>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->

                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-success fw-bold fs-1 mt-2">Total Profit </a>
                                    <p class="text-center text-success mt-10" style="font-size:30px">Total Buying
                                        Price::&nbsp;&nbsp;{{$totalBuyingPrice}} &nbsp;&nbsp;{{$gs->currency}}</p>
                                    <p class="text-center text-success" style="font-size:30px">Total Selling
                                        Price::&nbsp;&nbsp;{{$totalSellingPrice}} &nbsp;&nbsp;{{$gs->currency}}</p>
                                    <p class="text-center text-success" style="font-size:30px">Total
                                        Profit::&nbsp;&nbsp;{{$totalSellingPrice - $totalBuyingPrice}}
                                        &nbsp;&nbsp;{{$gs->currency}}</p>
                                </div>

                                <!--end::Col-->
                            </div>

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
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            < <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Latest Orders</span>
                                <span class="text-muted mt-1 fw-bold fs-7">More than {{$newOrder}} new Orders</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">

                                                    <th class="p-0 text-center">Order ID</th>
                                                    <th class="p-0 text-center">User Name</th>
                                                    <th class="p-0 text-center">User Email</th>
                                                    <th class="p-0 text-center">Price</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($lastMonthOrder as $row)
                                                @php
                                                $user = App\Models\User::find($row->user_id);

                                                @endphp
                                                @if(!empty($user))
                                                <tr>

                                                    <td>
                                                        <a href="{{url('admin/order/details',$row->order_id)}}"
                                                            class="text-center fw-bolder text-hover-primary">{{$row->order_id}}</a>

                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$user->name}}</td>

                                                    <td class="text-center text-muted fw-bold">{{$user->email}}</td>
                                                    <td class="text-center">
                                                        {{$row->grand_total}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @else
                                                @endif
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 text-center">Order ID</th>
                                                    <th class="p-0 text-center">User Name</th>
                                                    <th class="p-0 text-center">User Email</th>
                                                    <th class="p-0 text-center">Price</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($lastWeekOrder as $row)
                                                @php
                                                $user = App\Models\User::find($row->user_id);
                                                @endphp
                                                @if(!empty($user))
                                                <tr>

                                                    <td>
                                                        <a href="{{url('admin/order/details',$row->order_id)}}"
                                                            class="text-center fw-bolder text-hover-primary mb-1 fs-6">{{$row->order_id}}</a>

                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$user->name}}</td>

                                                    <td class="text-center text-muted fw-bold">{{$user->email}}</td>
                                                    <td class="text-center">
                                                        {{$row->grand_total}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @else
                                                @endif
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 text-center">Order ID</th>
                                                    <th class="p-0 text-center">User Name</th>
                                                    <th class="p-0 text-center">User Email</th>
                                                    <th class="p-0 text-center">Price</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($lastDayOrder as $row)
                                                @php
                                                $user = App\Models\User::find($row->user_id);
                                                @endphp
                                                @endphp
                                                @if(!empty($user))
                                                <tr>

                                                    <td>
                                                        <a href="{{url('admin/order/details',$row->order_id)}}"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$row->order_id}}</a>

                                                    </td>
                                                    <td class="text-end text-muted fw-bold">{{$user->name}}</td>

                                                    <td class="text-end text-muted fw-bold">{{$user->email}}</td>
                                                    <td class="text-end">
                                                        {{$row->grand_total}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @else
                                                @endif
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <div class="col-xl-12">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-bold fs-7">More than {{$NewProduct}} new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_5">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_6">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_7">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_5">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 text-center">Product Image</th>
                                                    <th class="p-0 text-center">Product Name</th>
                                                    <th class="p-0 text-center">Product Category</th>
                                                    <th class="p-0 text-center ">Product Quantity</th>
                                                    <th class="p-0 text-center">Product Price</th>

                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($lastMonthProduct as $row)
                                                @php
                                                $category = App\Models\Category::find($row->parent_id);
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-center fw-bolder text-hover-primary mb-1 fs-6">{{$row->product_name}}</a>

                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$category->cat_name}}
                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$row->quantity}}</td>
                                                    <td class="text-center">
                                                        {{$row->price}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_6">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 text-center ">Product Image</th>
                                                    <th class="p-0 text-center">Product Name</th>
                                                    <th class="p-0 text-center">Product Category</th>
                                                    <th class="p-0 text-center ">Product Quantity</th>
                                                    <th class="p-0 text-center">Product Price</th>

                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                @foreach($lastWeekProduct as $row)
                                                @php
                                                $category = App\Models\Category::find($row->parent_id);
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-center fw-bolder text-hover-primary mb-1 fs-6">{{$row->product_name}}</a>

                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$category->cat_name}}
                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$row->quantity}}</td>
                                                    <td class="text-center">
                                                        {{$row->price}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_7">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 text-center ">Product Image</th>
                                                    <th class="p-0 text-center ">Product Name</th>
                                                    <th class="p-0 text-center">Product Category</th>
                                                    <th class="p-0 text-center ">Product Quantity</th>
                                                    <th class="p-0 text-center ">Product Price</th>

                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                                @foreach($lastDayProduct as $row)
                                                @php
                                                $category = App\Models\Category::find($row->parent_id);
                                                @endphp
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-center fw-bolder text-hover-primary mb-1 fs-6">{{$row->product_name}}</a>

                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$category->cat_name}}
                                                    </td>
                                                    <td class="text-center text-muted fw-bold">{{$row->quantity}}</td>
                                                    <td class="text-center">
                                                        {{$row->price}}&nbsp;&nbsp;{{$gs->currency}}
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <!--end::Col-->
        </div>
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
<script>
window.onload = function() {

    var allProducts = <?php echo $allProducts ?>;
    var visitorsData = {
        "New vs Returning Visitors": [{
            click: visitorsChartDrilldownHandler,
            cursor: "pointer",
            explodeOnClick: false,
            innerRadius: "75%",
            legendMarkerType: "square",
            name: "Sell Product vs Stock Product",
            radius: "100%",
            showInLegend: true,
            startAngle: 90,
            type: "doughnut",
            dataPoints: <?php echo json_encode($products, JSON_NUMERIC_CHECK); ?>
        }],


    };

    var newVSReturningVisitorsOptions = {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "All products (<?php echo $allProducts ?>)# Sell Products (<?php echo $allOrderProduct ?>) VS Stock Products (<?php echo $stockProduct ?>)"
        },
        subtitles: [{
            text: "",
            backgroundColor: "#2eacd1",
            fontSize: 16,
            fontColor: "white",
            padding: 5
        }],
        legend: {
            fontFamily: "calibri",
            fontSize: 14,
            itemTextFormatter: function(e) {
                return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / allProducts * 100) + "%";
            }
        },
        data: []
    };



    var chart1 = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
    chart1.options.data = visitorsData["New vs Returning Visitors"];
    chart1.render();

    function visitorsChartDrilldownHandler(e) {
        chart1 = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
        chart1.options.data = visitorsData[e.dataPoint.name];
        chart1.options.title = {
            text: e.dataPoint.name
        }
        chart1.render();
        $("#backButton").toggleClass("invisible");
    }



};
</script>


@endsection
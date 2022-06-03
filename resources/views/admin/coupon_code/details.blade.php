@extends('layout.admin.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"><a
                        href="{{route('admin.dashboard')}}" class="hr"> {{$title}}</a></h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.couponcode.index')}}"
                            class="text-muted text-hover-primary">{{$table}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.couponcode.add')}}" class="text-muted text-hover-primary">{{$add}}</a>
                    </li>

                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body pt-15">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column mb-5">
                                <!--begin::Avatar-->
                                Coupon Code
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#"
                                    class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$coupon_code->coupon_code}}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-5 fw-bold text-muted mb-6">{{$coupon_code->model_no}}</div>
                                <!--end::Position-->
                                @php
                                $totalOrderCouponCode =
                                App\Models\Order::where('coupon_code',$coupon_code->coupon_code)->count('id');
                            
                                $sellPrice =
                                App\Models\Order::where('coupon_code',$coupon_code->coupon_code)->count('id');
                                $totalOrderCouponCodeUser=
                                App\Models\Order::where('coupon_code',$coupon_code->coupon_code)->get();
                              
                               
                                @endphp
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                 
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                        <div class="fs-4 fw-bolder text-gray-700">
                                            <span class="w-50px">{{$totalOrderCouponCode}}</span>
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1"
                                                        transform="rotate(-90 11 18)" fill="black" />
                                                    <path
                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                        fill="black" />
                                                </svg> -->
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <div class="fw-bold text-muted">Total Use Coupon Code</div>
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Stats-->
                                  
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                    href="#kt_customer_view_details" role="button" aria-expanded="false"
                                    aria-controls="kt_customer_view_details">Details
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit coupon_code details">
                                    <a href="{{route('admin.couponcode.edit',$coupon_code->id)}}"
                                        class="btn btn-sm btn-light-primary" 
                                        >Edit</a>
                                </span>
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--begin::Details content-->
                            <div id="kt_customer_view_details" class="collapse show">
                                <div class="py-5 fs-6">
                                    <!--begin::Badge-->
                                  
                                    <!--begin::Badge-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Coupon Code Name</div>
                                    <div class="text-gray-600">{{$coupon_code->coupon_code }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">C0upon Code Amount</div>
                                    <div class="text-gray-600">
                                        <a href="#" class="text-gray-600 text-hover-primary"> {{$coupon_code->amount }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Coupon Code Type</div>
                                    <div class="text-gray-600">{{$coupon_code->amount_type }}</div>
                                    <div class="fw-bolder mt-5">Coupon Code Purpose</div>
                                    <div class="text-gray-600">{{$coupon_code->purpose }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Coupon Code Expired Date</div>
                                    <div class="text-gray-600">{{$coupon_code->expiry_date}}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bolder mt-5">Coupon Code Created Date</div>
                                    <div class="text-gray-600">{{$coupon_code->created_at->format('d/m/Y')}}</div>

                                    <div class="fw-bolder mt-5">Coupon Code Status</div>
                                    <div class="text-gray-600">@if($coupon_code->status ==1) Active @else Inactive @endif</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <!-- <div class="fw-bolder mt-5">Tax ID</div>
                                    <div class="text-gray-600">TX-8674</div> -->
                                    <!--begin::Details item-->
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Connected Accounts-->
                   
                    <!--end::Connected Accounts-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_customer_view_overview_tab">Overview</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <!-- <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_customer_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                        </li> -->
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <!-- <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Statements</a>
                        </li> -->
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                      
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                   
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Order Records Coupon Code</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pb-5">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed gy-5"
                                        id="kt_table_customers_payment">
                                        <!--begin::Table head-->
                                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                            <!--begin::Table row-->
                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                <!-- <th class="min-w-100px">Invoice No.</th> -->
                                                
                                                <th>Order Number</th>
                                               
                                                <th class="min-w-100px">Use Date</th>
                                                
                                                <!-- <th class="text-end min-w-100px pe-4">Actions</th> -->
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            <!--begin::Table row-->
                                            @foreach($totalOrderCouponCodeUser as $order)
                           
                                            <tr>
                                                <!--begin::Invoice=-->
                                                <!-- <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary mb-1">1495-6954</a>
                                                </td> -->
                                                <!--end::Invoice=-->
                                                <!--begin::Status=-->
                                               
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td>{{$order->order_id}}</td>
                                             
                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{ $order->created_at->format('d/m/Y')}}</td>
                                             
                                                <!--end::Date=-->
                                              @endforeach
                                                <!--end::Action=-->
                                            </tr>
                                           
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Card-->
                         
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                       
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
            <!--begin::Modals-->
            <!--begin::Modal - Add Payment-->
           
            <!--end::Modal - New Card-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection
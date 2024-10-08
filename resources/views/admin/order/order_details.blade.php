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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Order Details</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dahboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="{{route('admin.order.index')}}" class="text-muted text-hover-primary">View All Order</a>
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
            <!--begin::Order details page-->
            <div class="d-flex flex-column gap-7 gap-lg-10">
                <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul
                        class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_sales_order_history">Order History</a>
                        </li>
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin::Button-->


                </div>
                <!--begin::Order summary-->
                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Order Details (#{{$order->order_id}})</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        <!--begin::Date-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                            viewBox="0 0 20 21" fill="none">
                                                            <path opacity="0.3"
                                                                d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                                fill="black" />
                                                            <path
                                                                d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Date Added
                                                </div>
                                            </td>
                                            <td class="fw-bolder text-end">{{ $order->created_at->format('d/m/Y')}}</td>
                                        </tr>
                                        <!--end::Date-->
                                        <!--begin::Payment method-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                                fill="black" />
                                                            <path opacity="0.3"
                                                                d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                                fill="black" />
                                                            <path
                                                                d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Payment Method
                                                </div>
                                            </td>
                                            <td class="fw-bolder text-end">Cash on Delivery

                                            </td>
                                        </tr>
                                        <!--end::Payment method-->
                                        <!--begin::Date-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                                fill="black" />
                                                            <path opacity="0.3"
                                                                d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Shipping Method
                                                </div>
                                            </td>
                                            <td class="fw-bolder text-end">Flat Shipping Rate</td>
                                        </tr>
                                        <!--end::Date-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order details-->
                    <!--begin::Customer details-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Customer Details</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        <!--begin::Customer name-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                fill="black" />
                                                            <path
                                                                d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Customer
                                                </div>
                                            </td>

                                            <td class="fw-bolder text-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <!--begin:: Avatar -->

                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <a href="{{route('admin.user.details',$order->user_id)}}"
                                                        class="text-gray-600 text-hover-primary">{{$order_user->name}}</a>
                                                    <!--end::Name-->
                                                </div>
                                            </td>
                                        </tr>
                                        <!--end::Customer name-->
                                        <!--begin::Customer email-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                fill="black" />
                                                            <path
                                                                d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Email
                                                </div>
                                            </td>
                                            <td class="fw-bolder text-end">
                                                <a href="{{route('admin.user.details',$order->user_id)}}"
                                                    class="text-gray-600 text-hover-primary">{{$order_user->email}}</a>
                                            </td>
                                        </tr>
                                        <!--end::Payment method-->
                                        <!--begin::Date-->
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                                                fill="black" />
                                                            <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Phone
                                                </div>
                                            </td>
                                            <td class="fw-bolder text-end">{{$order_user->phone}}</td>
                                        </tr>
                                        <!--end::Date-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Customer details-->
                    <!--begin::Documents-->

                    <!--end::Documents-->
                </div>
                <!--end::Order summary-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                        <!--begin::Orders-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                <!--begin::Payment address-->
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <!--begin::Background-->
                                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                        <img src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px" />
                                    </div>
                                    <!--end::Background-->
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Payment Address</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">{{$order_user->address1}}
                                        </br>{{$order_user->address2}}
                                        <br />{{$order_user->postcode}},
                                        <br />{{$order_user->city}},
                                        <br />{{$order_user->country}}.
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Payment address-->
                                <!--begin::Shipping address-->
                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                    <!--begin::Background-->
                                    <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                        <img src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px" />
                                    </div>
                                    <!--end::Background-->
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Shipping Address</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">{{$order_user->address1}}
                                        </br>{{$order_user->address2}}
                                        <br />{{$order_user->postcode}},
                                        <br />{{$order_user->city}},
                                        <br />{{$order_user->country}}.
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Shipping address-->
                            </div>
                            <!--begin::Product List-->
                            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order #{{$order->order_id}}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-175px">Product</th>
                                                    <th class="min-w-100px text-end">Model no</th>
                                                    <th class="min-w-70px text-end">Qty</th>
                                                    <th class="min-w-100px text-end">Unit Price</th>
                                                    <th class="min-w-100px text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <!--begin::Products-->
                                                @foreach($order['orderProduct'] as $row)
                                                @php
                                                $product= App\Models\Product::find($row->product_id);
                                                @endphp
                                                <tr>
                                                    <!--begin::Product-->
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Thumbnail-->
                                                            <a href="{{route('admin.product.view_details',$row->id)}}"
                                                                class="symbol symbol-50px">
                                                                <span class="symbol-label"
                                                                    style="background-image:url({{asset('public/assets/images/product/'.$product->image)}});"></span>
                                                            </a>
                                                            <!--end::Thumbnail-->
                                                            <!--begin::Title-->
                                                            <div class="ms-5">
                                                                <a href="{{route('admin.product.view_details',$row->id)}}"
                                                                    class="fw-bolder text-gray-600 text-hover-primary">{{$row->product_name}}
                                                                    1</a>
                                                                <div class="fs-7 text-muted">Delivery Date:
                                                                    {{ $order->delivery_date->format('d/m/Y')}}
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </td>
                                                    <!--end::Product-->
                                                    <!--begin::SKU-->
                                                    <td class="text-end">{{$row->model_no}}</td>
                                                    <!--end::SKU-->
                                                    <!--begin::Quantity-->
                                                    <td class="text-end">{{$row->quantity}}</td>

                                                    @php
                                                    $vatSingleQty =($row->price*$gs->vat)/ 100;
                                                    $vatWithQty =(($row->price*$gs->vat)/ 100)*$row->quantity;

                                                    @endphp
                                                    <!--end::Quantity-->
                                                    <!--begin::Price-->
                                                    @if($gs->cart_page_vat==1)

                                                    <td class="text-end">{{$gs->currency}}&nbsp;&nbsp;{{$row->price}}
                                                    </td>
                                                    <!--end::Price-->
                                                    <!--begin::Total-->
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$row->total_price}}</td>
                                                    @else

                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$row->price + $vatSingleQty}}
                                                    </td>
                                                    <!--end::Price-->
                                                    <!--begin::Total-->
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$row->total_price +$vatWithQty}}
                                                    </td>
                                                    @endif
                                                    <!--end::Total-->
                                                </tr>
                                                @endforeach

                                                @if($gs->cart_page_vat==1)
                                                <tr>
                                                   
                                                    <td colspan="4" class="text-end">Subtotal</td>
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->subtotal}}
                                                    </td>

                                                   
                                                </tr>


                                                @if(!empty($order->coupon_code))

                                                <tr>
                                                    @if($order->amount_type=='fixed')

                                                    <td colspan="4" class="text-end">
                                                        Discount({{$gs->currency}}&nbsp;&nbsp;
                                                        {{$order->discount_amount}} off)</td>

                                                    @else
                                                    <td colspan="4" class="text-end">Discount({{$order->amount}} % off)
                                                    </td>

                                                    @endif
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp; -{{$order->discount_amount}}
                                                    </td>




                                                </tr>
                                                @else


                                                @endif

                                                <!--end::Subtotal-->
                                                <!--begin::VAT-->
                                                <tr>
                                                    <td colspan="4" class="text-end">VAT ({{$gs->vat}}%)
                                                    </td>
                                                    <td class="text-end">{{$gs->currency}}&nbsp;&nbsp;
                                                        {{$order->vat}}</td>
                                                </tr>
                                                @else

                                                <tr>
                                                


                                                    <td colspan="4" class="text-end">Subtotal</td>
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->subtotal}}
                                                    </td>


                                                </tr>
                                                @if(!empty($order->coupon_code))

                                                <tr>
                                                    @if($order->amount_type=='fixed')

                                                    <td colspan="4" class="text-end">
                                                        Discount({{$gs->currency}}&nbsp;&nbsp;
                                                        {{$order->discount_amount}} off)</td>

                                                    @else
                                                    <td colspan="4" class="text-end">Discount({{$order->amount}} % off)
                                                    </td>

                                                    @endif
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp; -{{$order->discount_amount}}
                                                    </td>




                                                </tr>
                                                @else


                                                @endif
                                                <!--end::Subtotal-->
                                                <!--begin::VAT-->



                                                @endif
                                                <!--end::VAT-->
                                                <!--begin::Shipping-->
                                                <tr>
                                                    <td colspan="4" class="text-end">Shipping
                                                        Rate({{$order->delivery}})</td>
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->shipping}}
                                                    </td>
                                                </tr>
                                                @if(!empty($order->giftcard_amount))
                                                <tr>
                                                    <td colspan="4" class="text-end">Giftcard</td>
                                                    <td class="text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->giftcard_amount}}
                                                    </td>
                                                </tr>
                                                @endif
                                                <!--end::Shipping-->
                                                <!--begin::Grand total-->
                                                <tr>
                                                    <td colspan="4" class="fs-3 text-dark fw-bolder text-end">Grand
                                                        Total</td>
                                                    <td class="text-dark fs-3 fw-boldest text-end">
                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->grand_total - $order->giftcard_amount}}
                                                    </td>
                                                </tr>
                                                <!--end::Grand total-->
                                                <!--end::Grand total-->
                                            </tbody>
                                            <!--end::Table head-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Product List-->
                        </div>
                        <!--end::Orders-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                        <!--begin::Orders-->
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Order history-->
                            <div class="card card-flush py-4 flex-row-fluid">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order History</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Date Added</th>
                                                    <th class="min-w-175px">Comment</th>
                                                    <th class="min-w-70px">Order Status</th>

                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                @foreach($order['orderStatus'] as $row)
                                                <tr>
                                                    <!--begin::Date-->
                                                    <td>{{$row->delivery_date}}</td>
                                                    <!--end::Date-->
                                                    <!--begin::Comment-->
                                                    <td>{{$row->comment}}</td>
                                                    <!--end::Comment-->
                                                    <!--begin::Status-->
                                                    <td>
                                                        <!--begin::Badges-->
                                                        <div class="badge badge-light-success">{{$row->status}}</div>
                                                        <!--end::Badges-->
                                                    </td>
                                                    <!--end::Status-->
                                                    <!--begin::Customer Notified-->

                                                    <!--end::Customer Notified-->
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Table head-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Order history-->
                            <!--begin::Order data-->

                            <!--end::Order data-->
                        </div>
                        <!--end::Orders-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Order details page-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
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
                        <a href="#" class="text-muted text-hover-primary">{{$table}}</a>
                    </li>
                    &nbsp;&nbsp;


                    <form method="post" action="{{route('admin.account.download')}}">
                        @csrf
                        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                            <!--begin::Item-->



                            <li class="breadcrumb-item text-muted">
                                <input type="hidden" name="from" value="{{ request()->input('from') }}" />
                            </li>

                            <li class="breadcrumb-item text-muted">
                                <input type="hidden" name="to" value="{{ request()->input('to') }}" />
                            </li>

                            <li class="breadcrumb-item text-muted">
                                <button type="submit" class="btn btn-success">Download Pdf</button>
                            </li>


                            <!--end::Item-->
                        </ul>


                    </form>

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
            @include('error.message')
            <!--begin::Category-->
            <div class="card card-flush">
                <form method="get" route="? ">

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"><button value="" class=" btn btn-secondary form-control">Period
                                        From </button></th>
                                <th scope="col"><button value="" class=" btn btn-secondary form-control">To</button>
                                <th scope="col"><a href="{{route('admin.accounting')}}"
                                        class=" btn btn-secondary form-control">Reset</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th> <input type="date" class="form-control" name="from"
                                        value="{{ request()->input('from') }}" /> </th>
                                <td><input type="date" class="form-control" name="to"
                                        value="{{ request()->input('to') }}" /></td>

                                <td><button value="" class=" btn btn-secondary form-control">Search</button></td>



                            </tr>

                        </tbody>
                    </table>


                </form>


                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Selling Price</th>
                                <th scope="col">Giftcard Selling Price</th>

                                <th scope="col">Total Vat</th>
                                <th scope="col">Total Shipping Charge</th>

                                <th scope="col">Total Discount Amount</th>
                                <th scope="col">Total Giftcard Amount</th>
                                <th scope="col">Grand Total</th>
                                <!-- <th scope="col">Total Total Discount</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>

                                <td>{{$selling}} {{$gs->currency}}</td>
                                <td>{{$giftcard}} {{$gs->currency}}</td>
                                <td>{{$vat}} {{$gs->currency}}</td>

                                <td>{{$shipping}} {{$gs->currency}}</td>

                                <td>{{$discount_amount}} {{$gs->currency}}</td>
                                <td> -{{$giftcard_amount }} {{$gs->currency}}</td>
                                <td>{{$grand_total + $giftcard }} {{$gs->currency}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--begin::Card title-->
                    <div class="card-title">


                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                class="form-control form-control-solid w-250px ps-14"
                                placeholder="Search Product Name" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add customer-->
                        <!-- <a href="{{route('admin.employee.add')}}" class="btn btn-primary">Add Employee</a> -->
                        <!--end::Add customer-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="hidden" data-kt-check="true"
                                            data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                            value="1" />
                                    </div>
                                </th>
                                <th class="min-w-70px">Order ID</th>
                                <th class="min-w-70px">Order Date</th>
                                <th class="min-w-70px"> Name</th>
                                <th class="min-w-70px">Selling Price</th>
                                <th class="min-w-70px">Giftcard Selling Price</th>
                                <th class="min-w-70px">vat</th>
                                <th class="min-w-70px">Shipping Charge</th>
                                <th class="min-w-70px">Discount</th>
                                <th class="min-w-70px">Gift card Amount</th>
                                <th class="min-w-70px">Grand Total</th>
                                <!-- <th class="min-w-70px">Vat</th> -->



                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->

                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->

                            @foreach($account as $row)
                            @php
                            $orderProduct =App\Models\OrderProduct::where('order_id',$row->id)->get();
                            @endphp
                            @if(empty($row->gift_card_id))

                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="hidden" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Category=-->
                                <td>
                                    <a href="{{route('admin.order.details',$row->order_id)}}">{{$row->order_id}}</a>
                                </td>
                                <td>{{ $row->created_at->format('d/m/Y')}}</td>
                                <td>
                                    @foreach($orderProduct as $pro)
                                    {{ $pro->product_name}}<br>
                                    @endforeach
                                
                                </td>


                                <td> {{ $row->subtotal}} &nbsp;{{$gs->currency}} </td>
                                <td>  </td>
                                <td> {{$row->vat}} &nbsp;{{$gs->currency}}

                                </td>
                                <td> {{ $row->shipping}} &nbsp;{{$gs->currency}} </td>
                                <td>@if(!empty($row->discount_amount)) {{ $row->discount_amount}} &nbsp;{{$gs->currency}} @endif </td>
                                <td>@if(!empty($row->giftcard_amount)) -{{ $row->giftcard_amount}} &nbsp;{{$gs->currency}} @endif </td>
                                <td> {{ $row->grand_total}} &nbsp;{{$gs->currency}} </td>

                                <!-- <td>
                                    {{$row->vat}}
                               
                                </td> -->

                                <!--end::Action=-->
                            </tr>
                            @else
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="hidden" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Category=-->
                                <td>
                                <a href="{{url('admin/giftcard/order')}}">{{$row->gift_card_id}}</a>
                                </td>
                                <td>{{ $row->created_at->format('d/m/Y')}}</td>
                                <td>
                                    {{$row->giftcard_name}}
                                </td>


                                <td>  </td>
                                <td> @if(!empty($row->giftcard_purchase_price)){{ $row->giftcard_purchase_price}}
                                    &nbsp;{{$gs->currency}}@else @endif </td>
                                <td> 

                                </td>
                                <td> </td>
                                <td>  </td>
                                <td> </td>
                                <td> {{ $row->giftcard_purchase_price}} &nbsp;{{$gs->currency}} </td>

                                <!-- <td>
                                    {{$row->vat}}
                               
                                </td> -->

                                <!--end::Action=-->
                            </tr>


                            @endif
                            <!--end::Table row-->

                            @endforeach
                            <!--end::Table row-->
                        </tbody>

                        <!--end::Table body-->
                    </table>

                    <!--end::Table-->
                </div>


                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection
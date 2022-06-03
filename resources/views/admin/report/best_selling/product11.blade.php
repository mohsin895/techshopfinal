@extends('layout.admin.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    @include('admin.report.topbar')
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                            <input type="text" data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->

                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <!-- <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                            value="1" />
                                    </div>
                                </th> -->
                                <th class="min-w-200px">Product</th>
                                <th class="text-center min-w-100px">Model No</th>
                                <th class="text-center min-w-70px">Total Qt</th>
                                <th class="text-center min-w-70px">Total Sell Qt</th>
                                <th class="text-center min-w-70px">Stock Quantity</th>
                                <th class="text-center min-w-100px">Buying Price</th>
                                <th class="text-center min-w-100px">Selling Price</th>
                                <!-- <th class="text-center min-w-100px">Rating</th>
                                <th class="text-center min-w-100px">Status</th> -->
                                <th class="text-center min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->
                        

                            @foreach($product as $row)
                            @php
                            $expireTreshold1 = Carbon\Carbon::now()->addDays(120);
                            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->where('created_at','<' ,$expireTreshold1)->sum('quantity');
                            $expireTreshold2 = Carbon\Carbon::now()->addDays(120);
                            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->where('created_at','<' ,$expireTreshold2)->sum('quantity');
                            $sellQuantityr =round($sellQuantity);
                         
                            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
                            $bestSellingProduct = round(($gs->best_selling_product*$totalQuantity)/100);
                        
                       
                            @endphp
                           

                            @if($sellQuantityr > $bestSellingProduct)

                            <tr>
                                <!--begin::Checkbox-->
                                <!-- <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td> -->
                                <!--end::Checkbox-->
                                <!--begin::Category=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Thumbnail-->
                                        <a href="{{route('admin.product.edit',$row->id)}}" class="symbol symbol-50px">
                                            <span class="symbol-label"
                                                style="background-image:url({{asset('public/assets/images/product/'.$row->image)}});"></span>
                                        </a>
                                        <!--end::Thumbnail-->
                                        <div class="ms-5">
                                            <!--begin::Title-->
                                            <a href="{{route('admin.product.edit',$row->id)}}"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                data-kt-ecommerce-product-filter="product_name">{{$row->product_name}}</a>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                </td>
                                <!--end::Category=-->
                                <!--begin::SKU=-->
                                <td class="text-center pe-0">
                                    <span class="fw-bolder">{{$row->model_no}} </span>
                                </td>
                                <!--center::SKU=-->
                                <!--begin::Qty=-->
                                <td class="text-center pe-0" data-order="45">
                                    <span class="fw-bolder ms-3">
                                        {{$totalQuantity}}
                                    </span>
                                </td>
                                <td class="text-center pe-0">
                                    <span class="fw-bolder">{{$sellQuantity}}</span>
                                </td>
                                <td class="text-center pe-0">
                                    <span class="fw-bolder">{{$totalQuantity - $sellQuantity }}</span>
                                </td>
                                <!--center::Qty=-->
                                <!--begin::Price=-->
                                <td class="text-center pe-0">
                                    <span class="fw-bolder text-dark">
                                        <input class=" form-control buying_price" style="width:100px;" type="text"
                                            data-id="{{$row->id}}" value="{{$row->buying_price}}"></span>


                                </td>
                                <td class="text-center pe-0">
                                    <span class="fw-bolder text-dark">
                                        <input class=" form-control price" style="width:100px;" type="text"
                                            data-id="{{$row->id}}" value="{{$row->price}}">
                                    </span>

                                </td>
                                <!--end::Price=-->
                                <!--begin::Rating-->

                                <!--end::Rating-->
                                <!--begin::Status=-->
                                <!-- <td class="text-end pe-0" data-order="Inactive"> -->
                                <!--begin::Badges-->
                                <!-- <div class="badge badge-light-danger">Inactive</div> -->
                                <!--end::Badges-->
                                <!-- </td> -->
                                <!--end::Status=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('admin.product.edit',$row->id)}}"
                                                class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" record="product" recordid="{{ $row->id }}"
                                                class="menu-link px-3 confirmDelete">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            @else

                            @endif

                            @endforeach




                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection
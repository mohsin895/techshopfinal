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


                    <form method="post" action="{{route('admin.debit.download')}}">
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
                                <th scope="col"><a href="{{route('admin.debit')}}"
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
                                <th scope="col"> Product Cost</th>
                                <th scope="col">Extra Cost</th>
                                <th scope='col'>Total Cost</th>


                                <!-- <th scope="col">Total Total Discount</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>{{$product_cost}} {{$gs->currency}}</td>
                                <td>{{$extra_cost}} {{$gs->currency}}</td>
                                <td>{{$total_cost}} {{$gs->currency}}</td>

                            </tr>
                        </tbody>
                    </table>
                    <!--begin::Card title-->
                    <div class="card-title">


                        <!--begin::Search-->

                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add customer-->
                        <a href="#" class="menu-link px-3 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_subcategory">{{$add_title}}</a>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                @include('admin.model.account.cost')
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
                                <th class="min-w-70px">#</th>
                                <th class="min-w-70px">Cost Name</th>
                                <th class="min-w-70px">Buying Price</th>
                                <th scope='col'>Action</th>

                                <!-- <th class="min-w-70px">Vat</th> -->



                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->

                        <tbody class="fw-bold text-gray-600">
                            <!--begin::Table row-->

                            @foreach($account as $row)

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
                                    {{ $row->created_at->format('d/m/Y')}}
                                </td>
                                <td>{{ $row->cost_name}}</td>


                                <td> {{ $row->buying_price}} &nbsp;{{$gs->currency}} </td>
                                @if(empty($row->product_id))
                                <td>
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
                                            <a href="#" class="menu-link px-3 btn " data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_subcategory_edit{{$row->id}}">edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" record="extraCost" recordid="{{ $row->id }}"
                                                class="menu-link px-3 confirmDelete">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                @else
                                <td> <a href="{{route('admin.product.view_details',$row->product_id)}}">View Products
                                        Details</a></td>


                                @endif


                                <!-- <td>
                                    {{$row->vat}}
                               
                                </td> -->

                                <!--end::Action=-->
                            </tr>
                            <!--end::Table row-->

                            @include('admin.model.account.cost')

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
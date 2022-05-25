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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Details</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="{{route('admin.dashboard')}}"
                            class="text-muted text-hover-primary">User</a></li>
                    <!--end::Item-->
                    <!--begin::Item-->

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
    @php
    
    $user_details = App\Models\User::find($withdraw->user_id);
   
    
    @endphp
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
                               
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#"
                                    class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$user_details->name}}</a>
                                <!--end::Name-->
                                <!--begin::Email-->

                                <!--end::Email-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder">Details</div>
                                <!--begin::Badge-->
                                <div class="badge badge-light-info d-inline">Premium user</div>
                                <!--begin::Badge-->
                            </div>
                            <!--end::Details toggle-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--begin::Details content-->
                            <div class="pb-5 fs-6">
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Account ID</div>
                                <div class="text-gray-600">ID-45453423</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Billing Email</div>
                                <div class="text-gray-600">
                                    <a href="#" class="text-gray-600 text-hover-primary">{{$user_details->email}}</a>
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">{{$user_details->address1}}</div>
                                <div class="text-gray-600">{{$user_details->pincode}},
                                    <br />{{$user_details->city}}
                                    <br />{{$user_details->country}}
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->

                                <!--begin::Details item-->
                                <!--begin::Details item-->
                               
                        
                               
                                <!-- <div class="fw-bolder mt-5">Latest Transaction</div>
                                <div class="text-gray-600">
                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                        class="text-gray-600 text-hover-primary">#14534</a>
                                </div> -->
                                <!--begin::Details item-->
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_customer_overview">Overview</a>
                        </li>

                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
                            
                           

                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>User Withdraw Income History</h2>
                                    </div>
                                    <!--end::Card title-->
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

                                                <th>Status</th>
                                                <th>Amount</th>

                                                <th class="min-w-100px">Date</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                           
                                            <tr>
                                                <!--begin::order=-->

                                                <!--end::order=-->
                                                <!--begin::Status=-->
                                                <td>
                                                    <span class="badge badge-light-success">@if($withdraw->status=='1')
                                                        <div class="badge badge-light-success">Success</div>
                                                        @elseif ($withdraw->status=='2')
                                                        <div class="badge badge-light-danger">Draft</div>
                                                        @elseif ($withdraw->status=='3')
                                                        <div class="badge badge-light-danger">Cancel</div>
                                                        @else
                                                        <div class="badge badge-light-danger">new</div>
                                                        @endif
                                                    </span>
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td>{{$gs->currency}} &nbsp;&nbsp;{{$withdraw->amount}}</td>

                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{$withdraw->created_at->toDayDateTimeString()}}</td>
                                                <!--end::Date=-->
                                            </tr>
                                           


                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->

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
            <!--begin::Modal - New Address-->


            <!--end::Modal - Add task-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
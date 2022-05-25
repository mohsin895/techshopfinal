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
    
    $totalWithdraw = App\Models\Withdraw::where('user_id', $user_details->id)->sum('amount');
    $referallAmount = App\Models\OrderProduct::where('referral_id',$user_details->referral_id)->sum('price');
    $user_details->range_amount;
    if ($user_details->range_amount == 0) {
    $amount = 0;
    } else {
    $amount = ($user_details->commision * $referallAmount) / $user_details->range_amount;
    }
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
                           
                            <!--end::Summary-->
                            <!--begin::Details toggle-->
                            <div class="d-flex flex-stack fs-4 py-3">
                                <div class="fw-bolder">Details</div>
                                <!--begin::Badge-->
                                <div class="badge badge-light-info d-inline">@if($user_details->gender=='femal') <i class="fa fa-female bigfont" ></i> @elseif($user_details->gender=='male') <i class="fa fa-male bigfont"></i> @else @endif {{$user_details->name}}</div>
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
                                <div class="fw-bolder mt-5">Mobile Number</div>
                                <div class="text-gray-600">
                                    {{$user_details->phone}}
                                </div>
                                <div class="fw-bolder mt-5">Billing Email</div>
                                <div class="text-gray-600">
                                    {{$user_details->email}}
                                </div>
                                <div class="fw-bolder mt-5">Gender</div>
                                <div class="text-gray-600">
                                    {{$user_details->gender}}
                                </div>
                                <div class="fw-bolder mt-5">Date of Birth</div>
                                <div class="text-gray-600">
                                    {{$user_details->date_of_birth}}
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">{{$user_details->address1}}</div>
                                <div class="text-gray-600">{{$user_details->pincode}}
                                    <br />{{$user_details->city}}
                                    <br />{{$user_details->country}}
                                </div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->

                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Total Income</div>
                                <div class="text-gray-600">
                                  {{$amount}}&nbsp;&nbsp;{{$gs->currency}}
                                </div>
                                <div class="fw-bolder mt-5">Total Withdraw</div>
                                <div class="text-gray-600">
                                   {{$totalWithdraw}}&nbsp;&nbsp;{{$gs->currency}}
                                </div>
                                <div class="fw-bolder mt-5">Net Balance</div>
                                <div class="text-gray-600">
  {{$amount - $totalWithdraw}}&nbsp;&nbsp;{{$gs->currency}}
                                </div>
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
                            
                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Transaction History</h2>
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
                                                <th class="min-w-100px">order No.</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                
                                                <th class="min-w-100px">Date</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            <!--begin::Table row-->
                                            @foreach($user_order as $row)
                                            <tr>
                                                <!--begin::order=-->
                                                <td>
                                                    <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-600 text-hover-primary mb-1">#{{$row->order_id}}</a>
                                                </td>
                                                <!--end::order=-->
                                                <!--begin::Status=-->
                                                <td>
                                                    <span class="badge badge-light-success">{{$row->status}}</span>
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td>{{$gs->currency}} &nbsp;&nbsp;{{$row->grand_total}}</td>
                                                <!--end::Amount=-->
                                                <!--begin::Amount=-->
                                            
                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                                <!--end::Date=-->
                                            </tr>
                                            @endforeach


                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>

                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>User Referral Transaction History</h2>
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
                                                <th class="min-w-100px">order No.</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Referral Id</th>
                                              
                                                <th class="min-w-100px">Date</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            <!--begin::Table row-->
                                            @foreach($user_referral_order as $row)
                                            <tr>
                                                <!--begin::order=-->
                                                <td>
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary mb-1">#{{$row->order_id}}</a>
                                                </td>
                                                <!--end::order=-->
                                                <!--begin::Status=-->
                                                <td>
                                                    <span class="badge badge-light-success">{{$row->status}}</span>
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td>{{$gs->currency}} &nbsp;&nbsp;{{$row->price}}</td>
                                                <td>{{$row->referral_id}}</td>
                                                <!--end::Amount=-->
                                                <!--begin::Amount=-->
                                               
                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                                <!--end::Date=-->
                                            </tr>
                                            @endforeach


                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>

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
                                            @php
                                            $withdraw =
                                            App\Models\Withdraw::where('user_id',$user_details->id)->orderBy('id','DESC')->get();
                                            @endphp
                                            <!--begin::Table row-->
                                            @foreach($withdraw as $row)
                                            <tr>
                                                <!--begin::order=-->

                                                <!--end::order=-->
                                                <!--begin::Status=-->
                                                <td>
                                                    <span class="badge badge-light-success">@if($row->status=='1')
                                                        <div class="badge badge-light-success">Success</div>
                                                        @elseif ($row->status=='2')
                                                        <div class="badge badge-light-danger">Draft</div>
                                                        @elseif ($row->status=='3')
                                                        <div class="badge badge-light-danger">Cancel</div>
                                                        @else
                                                        <div class="badge badge-light-danger">new</div>
                                                        @endif
                                                    </span>
                                                </td>
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td>{{$gs->currency}} &nbsp;&nbsp;{{$row->amount}}</td>

                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                                <!--end::Date=-->
                                            </tr>
                                            @endforeach


                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>

                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>User Blog Post</h2>
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

                                                <th>Post Title</th>
                                               

                                                <th class="min-w-100px">Date</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-bold text-gray-600">
                                            @php
                                            $userBlog =
                                            App\Models\BlogPost::where('user_id',$user_details->id)->orderBy('id','DESC')->get();
                                            @endphp
                                            <!--begin::Table row-->
                                            @foreach($userBlog as $row)
                                            <tr>
                                                <!--begin::order=-->

                                                <!--end::order=-->
                                                <!--begin::Status=-->
                                               
                                                <!--end::Status=-->
                                                <!--begin::Amount=-->
                                                <td><a href="{{route('blog.post.details',$row->slug)}}">{{$row->title}}</a></td>

                                                <!--end::Amount=-->
                                                <!--begin::Date=-->
                                                <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                                <!--end::Date=-->
                                            </tr>
                                            @endforeach


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
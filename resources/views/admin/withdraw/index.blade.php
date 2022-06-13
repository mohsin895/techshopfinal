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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Withdraw</h1>
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
                    <li class="breadcrumb-item text-muted">Withdraw</li>
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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
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
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->
                            <div class="w-150px me-3">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Status"
                                    data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="new">New</option> 
                                    <option value="pending">Pending</option>
                                    <option value="paid">Paid</option>
                                    <option value="cancel">Cancel</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                           
                      
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
           
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <!-- <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div>
                                </th> -->
                                <th class="min-w-125px">Customer Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Mobile</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Account Number</th>
                                <th class="min-w-125px">Account Type</th>
                                <th class="min-w-125px">Toal Income</th>
                                <th class="min-w-125px">Wirhdraw Amount</th>

                                <th class="min-w-125px">Net Balance</th>
                                <th class="min-w-125px">Withdraw Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                        @foreach($withdraw as $row)
                            @php
                            $user = App\Models\User::find($row->user_id);
                            $totalWithdraw = App\Models\Withdraw::where('user_id', $user->id)->sum('amount');
                            $referallAmount = App\Models\OrderProduct::where('referral_id',$user->referral_id)->sum('price');
                            $user->range_amount;
                            if ($user->range_amount == 0) {
                            $amount = 0;
                            } else {
                            $amount = ($user->commision * $referallAmount) / $user->range_amount;
                            }
                            @endphp
                            <tr>
                                <!--begin::Checkbox-->
                                <!-- <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td> -->
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="{{route('admin.user.details',$row->user_id)}}"
                                        class="text-gray-800 text-hover-primary mb-1">{{$user->name}}</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="{{route('admin.user.details',$row->user_id)}}" class="text-gray-600 text-hover-primary mb-1">{{$user->email}}</a>
                                </td>
                                <td>{{$row->phone}}</td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    @if($row->status=='0')
                                    <div class="badge badge-light-danger">New</div>
                                    @elseif ($row->status=='1')
                                    <div class="badge badge-light-danger">Pending</div>
                                    @elseif ($row->status=='2')
                                    <div class="badge badge-light-success">Paid</div>
                                    @elseif ($row->status=='3')
                                    <div class="badge badge-light-danger">Cancel</div>
                              
                                    
                                    @endif





                                  
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>{{$row->account_number}}</td>
                                <td>{{$row->account_type}}</td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>{{$amount}} &nbsp;&nbsp;{{$gs->currency}}</td>
                                
                                <td>{{$row->amount}}&nbsp;&nbsp; {{$gs->currency}}</td>
                                <td>{{$amount - $totalWithdraw}}&nbsp;&nbsp; {{$gs->currency}}</td>

                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>{{$row->created_at->toDayDateTimeString()}}</td>
                                <!--end::Date=-->
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
                                            <a href="{{route('admin.user.details',$user->id)}}"
                                                class="menu-link px-3">View User Details</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{route('admin.withdraw.details',$user->id)}}"
                                                class="menu-link px-3">View Withdraw</a>
                                        </div>
               


                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_withdraw{{$row->id}}">Update Status</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            @include('admin.model.user.withdraw')
                          @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
          
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
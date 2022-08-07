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
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Role and Permission
            </div>

        </div>
        <div class="card-body">

            @if(session()->has('not_permitted'))
            <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close"
                    data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
            @endif
            <section class="forms">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                               

                                <form method="post" action="{{route('admin.role.setPermission')}}">
                                    @csrf
                                    <div class="card-body">
                                        <input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">{{$lims_role_data->name}}
                                                            Group Permission</th>
                                                    </tr>
                                                    <tr>

                                                        <th colspan="5" class="text-center">

                                                            <input type="checkbox" id="select_all">
                                                            <label for="select_all">All Permissions</label>

                                                        </th>
                                                    </tr>

                                                </thead>

                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Order Parts</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Details</th>
                                                        <th class="text-center">Invoice</th>

                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>All Orders </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("order_index", $all_permission))
                                                                <input type="checkbox" value="1" id="order_index"
                                                                    name="order_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="order_index"
                                                                    name="order_index" />
                                                                @endif
                                                                <label for="order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("order_details", $all_permission))
                                                                <input type="checkbox" value="1" id="order_details"
                                                                    name="order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="order_details"
                                                                    name="order_details">
                                                                @endif
                                                                <label for="order_details"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("order_invoice", $all_permission))
                                                                <input type="checkbox" value="1" id="order_invoice"
                                                                    name="order_invoice" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="order_invoice"
                                                                    name="order_invoice" />
                                                                @endif
                                                                <label for="order_invoice"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("order_status", $all_permission))
                                                                <input type="checkbox" value="1" id="order_status"
                                                                    name="order_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="order_status"
                                                                    name="order_status" />
                                                                @endif
                                                                <label for="order_status"></label>

                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>New Orders</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("new_order_index", $all_permission))
                                                                <input type="checkbox" value="1" id="new_order_index"
                                                                    name="new_order_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="new_order_index"
                                                                    name="new_order_index" />
                                                                @endif
                                                                <label for="new_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("new_order_details", $all_permission))
                                                                <input type="checkbox" value="1" id="new_order_details"
                                                                    name="new_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="new_order_details"
                                                                    name="new_order_details">
                                                                @endif
                                                                <label for="new_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("new_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1" id="new_order_invoice"
                                                                    name="new_order_invoice" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="new_order_invoice"
                                                                    name="new_order_invoice" />
                                                                @endif
                                                                <label for="new_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("new_order_status", $all_permission))
                                                                <input type="checkbox" value="1" id="new_order_status"
                                                                    name="new_order_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="new_order_status"
                                                                    name="new_order_status" />
                                                                @endif
                                                                <label for="new_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Processing Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("processing_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_index"
                                                                    name="processing_order_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_index"
                                                                    name="processing_order_index" />
                                                                @endif
                                                                <label for="processing_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("processing_order_details",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_details"
                                                                    name="processing_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_details"
                                                                    name="processing_order_details">
                                                                @endif
                                                                <label for="processing_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("processing_order_invoice",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_invoice"
                                                                    name="processing_order_invoice" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_invoice"
                                                                    name="processing_order_invoice" />
                                                                @endif
                                                                <label for="processing_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("processing_order_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_status"
                                                                    name="processing_order_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="processing_order_status"
                                                                    name="processing_order_status" />
                                                                @endif
                                                                <label for="processing_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td>Packaging Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("packaging_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_index"
                                                                    name="packaging_order_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_index"
                                                                    name="packaging_order_index">
                                                                @endif
                                                                <label for="packaging_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("packaging_order_details",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_details"
                                                                    name="packaging_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_details"
                                                                    name="packaging_order_details">
                                                                @endif
                                                                <label for="packaging_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("packaging_order_invoice",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_invoice"
                                                                    name="packaging_order_invoice" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_invoice"
                                                                    name="packaging_order_invoice">
                                                                @endif
                                                                <label for="packaging_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("packaging_order_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_status"
                                                                    name="packaging_order_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="packaging_order_status"
                                                                    name="packaging_order_status">
                                                                @endif
                                                                <label for="packaging_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td>Waiting for Delivery Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("waiting_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_index" name="waiting_order_index"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_index" name="waiting_order_index">
                                                                @endif
                                                                <label for="waiting_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("waiting_order_details", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_details"
                                                                    name="waiting_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_details"
                                                                    name="waiting_order_details">
                                                                @endif
                                                                <label for="waiting_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("waiting_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1" id="waiting_order_invoice"
                                                                    name="waiting_order_invoice" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="waiting_order_invoice"
                                                                    name="waiting_order_invoice">
                                                                @endif
                                                                <label for="waiting_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("waiting_order_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_status"
                                                                    name="waiting_order_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="waiting_order_status"
                                                                    name="waiting_order_status">
                                                                @endif
                                                                <label for="waiting_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>Shipping Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("shipping_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_index"
                                                                    name="shipping_order_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_index"
                                                                    name="shipping_order_index">
                                                                @endif
                                                                <label for="shipping_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("shipping_order_details", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_details"
                                                                    name="shipping_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_details"
                                                                    name="shipping_order_details">
                                                                @endif
                                                                <label for="shipping_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("shipping_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_invoice"
                                                                    name="shipping_order_invoice" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_invoice"
                                                                    name="shipping_order_invoice">
                                                                @endif
                                                                <label for="shipping_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("shipping_order_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_status"
                                                                    name="shipping_order_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_order_status"
                                                                    name="shipping_order_status">
                                                                @endif
                                                                <label for="shipping_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td>Delivered Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("deliverd_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_index"
                                                                    name="deliverd_order_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_index"
                                                                    name="deliverd_order_index">
                                                                @endif
                                                                <label for="deliverd_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("deliverd_order_details", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_details"
                                                                    name="deliverd_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_details"
                                                                    name="deliverd_order_details">
                                                                @endif
                                                                <label for="deliverd_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("deliverd_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_invoice"
                                                                    name="deliverd_order_invoice" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_invoice"
                                                                    name="deliverd_order_invoice">
                                                                @endif
                                                                <label for="deliverd_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("deliverd_order_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_status"
                                                                    name="deliverd_order_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="deliverd_order_status"
                                                                    name="deliverd_order_status">
                                                                @endif
                                                                <label for="deliverd_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Completed Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("complete_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_index"
                                                                    name="complete_order_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_index"
                                                                    name="complete_order_index" />
                                                                @endif
                                                                <label for="complete_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("complete_order_details", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_details"
                                                                    name="complete_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_details"
                                                                    name="complete_order_details">
                                                                @endif
                                                                <label for="complete_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("complete_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_invoice"
                                                                    name="complete_order_invoice" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_invoice"
                                                                    name="complete_order_invoice" />
                                                                @endif
                                                                <label for="complete_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("complete_order_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_status"
                                                                    name="complete_order_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="complete_order_status"
                                                                    name="complete_order_status" />
                                                                @endif
                                                                <label for="complete_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Canceled Order</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("canceled_order_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_index"
                                                                    name="canceled_order_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_index"
                                                                    name="canceled_order_index" />
                                                                @endif
                                                                <label for="canceled_order_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("canceled_order_details",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_details"
                                                                    name="canceled_order_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_details"
                                                                    name="canceled_order_details">
                                                                @endif
                                                                <label for="canceled_order_details"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("canceled_order_invoice", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_invoice"
                                                                    name="canceled_order_invoice" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_invoice"
                                                                    name="canceled_order_invoice" />
                                                                @endif
                                                                <label for="canceled_order_invoice"></label>

                                                            </div> -->
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("canceled_order_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_status"
                                                                    name="canceled_order_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="canceled_order_status"
                                                                    name="canceled_order_status" />
                                                                @endif
                                                                <label for="canceled_order_status"></label>

                                                            </div> -->
                                                        </td>

                                                    </tr>





                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Product ,Employee And
                                                            Permission Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Add</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Product </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("product_index", $all_permission))
                                                                <input type="checkbox" value="1" id="product_index"
                                                                    name="product_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="product_index"
                                                                    name="product_index" />
                                                                @endif
                                                                <label for="product_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("product_create", $all_permission))
                                                                <input type="checkbox" value="1" id="product_create"
                                                                    name="product_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="product_create"
                                                                    name="product_create">
                                                                @endif
                                                                <label for="product_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("product_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="product_edit"
                                                                    name="product_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="product_edit"
                                                                    name="product_edit" />
                                                                @endif
                                                                <label for="product_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("product_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="product_delete"
                                                                    name="product_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="product_delete"
                                                                    name="product_delete" />
                                                                @endif
                                                                <label for="product_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("product_status", $all_permission))
                                                                <input type="checkbox" value="1" id="product_status"
                                                                    name="product_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="product_status"
                                                                    name="product_status">
                                                                @endif
                                                                <label for="product_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Category</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("category_index", $all_permission))
                                                                <input type="checkbox" value="1" id="category_index"
                                                                    name="category_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="category_index"
                                                                    name="category_index" />
                                                                @endif
                                                                <label for="category_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("category_create", $all_permission))
                                                                <input type="checkbox" value="1" id="category_create"
                                                                    name="category_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="category_create"
                                                                    name="category_create">
                                                                @endif
                                                                <label for="category_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("category_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="category_edit"
                                                                    name="category_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="category_edit"
                                                                    name="category_edit" />
                                                                @endif
                                                                <label for="category_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("category_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="category_delete"
                                                                    name="category_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="category_delete"
                                                                    name="category_delete" />
                                                                @endif
                                                                <label for="category_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("category_status", $all_permission))
                                                                <input type="checkbox" value="1" id="category_status"
                                                                    name="category_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="category_status"
                                                                    name="category_status">
                                                                @endif
                                                                <label for="category_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Sub Category</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("subcategory_index", $all_permission))
                                                                <input type="checkbox" value="1" id="subcategory_index"
                                                                    name="subcategory_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="subcategory_index"
                                                                    name="subcategory_index" />
                                                                @endif
                                                                <label for="subcategory_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("subcategory_create", $all_permission))
                                                                <input type="checkbox" value="1" id="subcategory_create"
                                                                    name="subcategory_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="subcategory_create"
                                                                    name="subcategory_create">
                                                                @endif
                                                                <label for="subcategory_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("subcategory_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="subcategory_edit"
                                                                    name="subcategory_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="subcategory_edit"
                                                                    name="subcategory_edit" />
                                                                @endif
                                                                <label for="subcategory_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("subcategory_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="subcategory_delete"
                                                                    name="subcategory_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="subcategory_delete"
                                                                    name="subcategory_delete" />
                                                                @endif
                                                                <label for="subcategory_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("subcategory_status", $all_permission))
                                                                <input type="checkbox" value="1" id="subcategory_status"
                                                                    name="subcategory_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="subcategory_status"
                                                                    name="subcategory_status">
                                                                @endif
                                                                <label for="subcategory_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Admin Employee</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("admin_staff_index", $all_permission))
                                                                <input type="checkbox" value="1" id="admin_staff_index"
                                                                    name="admin_staff_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="admin_staff_index"
                                                                    name="admin_staff_index">
                                                                @endif
                                                                <label for="admin_staff_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("admin_staff_create", $all_permission))
                                                                <input type="checkbox" value="1" id="admin_staff_create"
                                                                    name="admin_staff_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="admin_staff_create"
                                                                    name="admin_staff_create">
                                                                @endif
                                                                <label for="admin_staff_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("admin_staff_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="admin_staff_edit"
                                                                    name="admin_staff_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="admin_staff_edit"
                                                                    name="admin_staff_edit">
                                                                @endif
                                                                <label for="admin_staff_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("admin_staff_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="admin_staff_delete"
                                                                    name="admin_staff_delete" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="admin_staff_delete"
                                                                    name="admin_staff_delete">
                                                                @endif
                                                                <label for="admin_staff_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("admin_staff_status", $all_permission))
                                                                <input type="checkbox" value="1" id="admin_staff_status"
                                                                    name="admin_staff_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="admin_staff_status"
                                                                    name="admin_staff_status">
                                                                @endif
                                                                <label for="admin_staff_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Role & Permission</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("role_permission_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_index"
                                                                    name="role_permission_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_index"
                                                                    name="role_permission_index" />
                                                                @endif
                                                                <label for="role_permission_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("role_permission_create", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_create"
                                                                    name="role_permission_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_create"
                                                                    name="role_permission_create">
                                                                @endif
                                                                <label for="role_permission_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("role_permission_edit", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_edit"
                                                                    name="role_permission_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_edit"
                                                                    name="role_permission_edit" />
                                                                @endif
                                                                <label for="role_permission_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("role_permission_delete", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_delete"
                                                                    name="role_permission_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_delete"
                                                                    name="role_permission_delete" />
                                                                @endif
                                                                <label for="role_permission_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("role_permission_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_status"
                                                                    name="role_permission_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="role_permission_status"
                                                                    name="role_permission_status">
                                                                @endif
                                                                <label for="role_permission_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flash sale Products</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("flash_sale_product_index",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_product_index"
                                                                    name="flash_sale_product_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_product_index"
                                                                    name="flash_sale_product_index" />
                                                                @endif
                                                                <label for="flash_sale_product_index"></label>

                                                            </div>
                                                        </td>

                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("flash_sale_products_create",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_create"
                                                                    name="flash_sale_products_create" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_create"
                                                                    name="flash_sale_products_create" />
                                                                @endif
                                                                <label for="flash_sale_products_create"></label>

                                                            </div>
                                                        </td>

                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("flash_sale_products_edit",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_edit"
                                                                    name="flash_sale_products_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_edit"
                                                                    name="flash_sale_products_edit">
                                                                @endif
                                                                <label for="flash_sale_products_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("flash_sale_products_delete",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_delete"
                                                                    name="flash_sale_products_delete" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_delete"
                                                                    name="flash_sale_products_delete">
                                                                @endif
                                                                <label for="flash_sale_products_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("flash_sale_products_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_status"
                                                                    name="flash_sale_products_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="flash_sale_products_status"
                                                                    name="flash_sale_products_status">
                                                                @endif
                                                                <label for="flash_sale_products_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Others</td>
                                                        <td class="text-center"> View Stock Low Products
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("stock_low_products", $all_permission))
                                                                <input type="checkbox" value="1" id="stock_low_products"
                                                                    name="stock_low_products" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="stock_low_products"
                                                                    name="stock_low_products">
                                                                @endif
                                                                <label for="stock_low_products"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Stock Out Products
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("stock_out_products",
                                                                $all_permission))
                                                                <input type="checkbox" value="1" id="stock_out_products"
                                                                    name="stock_out_products" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="stock_out_products"
                                                                    name="stock_out_products">
                                                                @endif
                                                                <label for="stock_out_products"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Expired date Products
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("expired_date_products",
                                                                $all_permission))
                                                                <input type="checkbox" value="1" id="expired_date_products"
                                                                    name="expired_date_products" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="expired_date_products"
                                                                    name="expired_date_products">
                                                                @endif
                                                                <label for="expired_date_products"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">Upcoming Expire date Products
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("upcomming_expired_date_products",
                                                                $all_permission))
                                                                <input type="checkbox" value="1" id="upcomming_expired_date_products"
                                                                    name="upcomming_expired_date_products" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="upcomming_expired_date_products"
                                                                    name="upcomming_expired_date_products">
                                                                @endif
                                                                <label for="upcomming_expired_date_products"></label>

                                                            </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Account Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Add</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Debit </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("debit_index", $all_permission))
                                                                <input type="checkbox" value="1" id="debit_index"
                                                                    name="debit_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="debit_index"
                                                                    name="debit_index" />
                                                                @endif
                                                                <label for="debit_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("debit_create", $all_permission))
                                                                <input type="checkbox" value="1" id="debit_create"
                                                                    name="debit_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="debit_create"
                                                                    name="debit_create">
                                                                @endif
                                                                <label for="debit_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("debit_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="debit_edit"
                                                                    name="debit_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="debit_edit"
                                                                    name="debit_edit" />
                                                                @endif
                                                                <label for="debit_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("debit_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="debit_delete"
                                                                    name="debit_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="debit_delete"
                                                                    name="debit_delete" />
                                                                @endif
                                                                <label for="debit_delete"></label>

                                                            </div>
                                                        </td>
                                                  
                                                    </tr>

                                                    <tr>
                                                        <td>Others</td>
                                                        <td class="text-center"> Credit View
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("creadit_view", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="creadit_view" name="creadit_view"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="creadit_view" name="creadit_view">
                                                                @endif
                                                                <label for="creadit_view"></label>

                                                            </div>
                                                        </td>
                                                     

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>


                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">GIftcard Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Add</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Giftcard </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("giftcard_index", $all_permission))
                                                                <input type="checkbox" value="1" id="giftcard_index"
                                                                    name="giftcard_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="giftcard_index"
                                                                    name="giftcard_index" />
                                                                @endif
                                                                <label for="giftcard_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("giftcard_create", $all_permission))
                                                                <input type="checkbox" value="1" id="giftcard_create"
                                                                    name="giftcard_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="giftcard_create"
                                                                    name="giftcard_create">
                                                                @endif
                                                                <label for="giftcard_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("giftcard_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="giftcard_edit"
                                                                    name="giftcard_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="giftcard_edit"
                                                                    name="giftcard_edit" />
                                                                @endif
                                                                <label for="giftcard_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("giftcard_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="giftcard_delete"
                                                                    name="giftcard_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="giftcard_delete"
                                                                    name="giftcard_delete" />
                                                                @endif
                                                                <label for="giftcard_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("giftcard_status", $all_permission))
                                                                <input type="checkbox" value="1" id="giftcard_status"
                                                                    name="giftcard_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="giftcard_status"
                                                                    name="giftcard_status">
                                                                @endif
                                                                <label for="giftcard_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Others</td>
                                                        <td class="text-center"> Giftcard Order View
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("giftcard_order_view", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="giftcard_order_view" name="giftcard_order_view"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="giftcard_order_view" name="giftcard_order_view">
                                                                @endif
                                                                <label for="giftcard_order_view"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Giftcard Order Status
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("giftcard_order_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="giftcard_order_status"
                                                                    name="giftcard_order_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="giftcard_order_status"
                                                                    name="giftcard_order_status">
                                                                @endif
                                                                <label for="giftcard_order_status"></label>

                                                            </div>
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Users Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                        <th class="text-center">Send mail</th>
                                                        <th class="text-center">View Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>All Users </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("users_index", $all_permission))
                                                                <input type="checkbox" value="1" id="users_index"
                                                                    name="users_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="users_index"
                                                                    name="users_index" />
                                                                @endif
                                                                <label for="users_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="users_edit"
                                                                    name="users_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="users_edit"
                                                                    name="users_edit">
                                                                @endif
                                                                <label for="users_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="users_delete"
                                                                    name="users_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="users_delete"
                                                                    name="users_delete" />
                                                                @endif
                                                                <label for="users_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_send_mail", $all_permission))
                                                                <input type="checkbox" value="1" id="users_send_mail"
                                                                    name="users_send_mail" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="users_send_mail"
                                                                    name="users_send_mail" />
                                                                @endif
                                                                <label for="users_send_mail"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_view_details", $all_permission))
                                                                <input type="checkbox" value="1" id="users_view_details"
                                                                    name="users_view_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="users_view_details"
                                                                    name="users_view_details">
                                                                @endif
                                                                <label for="users_view_details"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Others</td>
                                                        <td class="text-center"> View Todat Birthday User
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("today_birthday_users", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="today_birthday_users"
                                                                    name="today_birthday_users" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="today_birthday_users"
                                                                    name="today_birthday_users">
                                                                @endif
                                                                <label for="today_birthday_users"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> This Month Birthday User
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("this_month_birthday_user",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="this_month_birthday_user"
                                                                    name="this_month_birthday_user" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="this_month_birthday_user"
                                                                    name="this_month_birthday_user">
                                                                @endif
                                                                <label for="this_month_birthday_user"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Users Message
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_message",
                                                                $all_permission))
                                                                <input type="checkbox" value="1" id="users_message"
                                                                    name="users_message" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="users_message"
                                                                    name="users_message">
                                                                @endif
                                                                <label for="users_message"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Semd email All Users
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("send_email_all_users",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="send_email_all_users"
                                                                    name="send_email_all_users" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="send_email_all_users"
                                                                    name="send_email_all_users">
                                                                @endif
                                                                <label for="send_email_all_users"></label>

                                                            </div>
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Users Referral Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">View User Details</th>
                                                        <th class="text-center">View Withdraw</th>
                                                        <th class="text-center">Update Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Users Withdraw </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("view_users_withdraw", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_users_withdraw" name="view_users_withdraw"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_users_withdraw"
                                                                    name="view_users_withdraw" />
                                                                @endif
                                                                <label for="view_users_withdraw"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("view_users_withdraw_details",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_users_withdraw_details"
                                                                    name="view_users_withdraw_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_users_withdraw_details"
                                                                    name="view_users_withdraw_details">
                                                                @endif
                                                                <label for="view_users_withdraw_details"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("view_withdraw", $all_permission))
                                                                <input type="checkbox" value="1" id="view_withdraw"
                                                                    name="view_withdraw" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="view_withdraw"
                                                                    name="view_withdraw" />
                                                                @endif
                                                                <label for="view_withdraw"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("view_wihtdraw_status", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_wihtdraw_status"
                                                                    name="view_wihtdraw_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_wihtdraw_status"
                                                                    name="view_wihtdraw_status" />
                                                                @endif
                                                                <label for="view_wihtdraw_status"></label>

                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Users Referral Details </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("view_referral_details", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_referral_details"
                                                                    name="view_referral_details" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_referral_details"
                                                                    name="view_referral_details" />
                                                                @endif
                                                                <label for="view_referral_details"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("view_referral_users_details",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_referral_users_details"
                                                                    name="view_referral_users_details" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_referral_users_details"
                                                                    name="view_referral_users_details">
                                                                @endif
                                                                <label for="view_referral_users_details"></label>

                                                            </div>
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Blog  Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Add</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Blog Post </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_post_index", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_post_index"
                                                                    name="blog_post_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_post_index"
                                                                    name="blog_post_index" />
                                                                @endif
                                                                <label for="blog_post_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_post_create", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_post_create"
                                                                    name="blog_post_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_post_create"
                                                                    name="blog_post_create">
                                                                @endif
                                                                <label for="blog_post_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("bloog_post_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="bloog_post_edit"
                                                                    name="bloog_post_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="bloog_post_edit"
                                                                    name="bloog_post_edit" />
                                                                @endif
                                                                <label for="bloog_post_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_post_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_post_delete"
                                                                    name="blog_post_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_post_delete"
                                                                    name="blog_post_delete" />
                                                                @endif
                                                                <label for="blog_post_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_post_status", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_post_status"
                                                                    name="blog_post_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_post_status"
                                                                    name="blog_post_status">
                                                                @endif
                                                                <label for="blog_post_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>BLog Category</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_category_index", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_category_index"
                                                                    name="blog_category_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_category_index"
                                                                    name="blog_category_index" />
                                                                @endif
                                                                <label for="blog_category_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_category_create", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_category_create"
                                                                    name="blog_category_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_category_create"
                                                                    name="blog_category_create">
                                                                @endif
                                                                <label for="blog_category_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_category_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_category_edit"
                                                                    name="blog_category_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_category_edit"
                                                                    name="blog_category_edit" />
                                                                @endif
                                                                <label for="blog_category_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_category_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_category_delete"
                                                                    name="blog_category_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_category_delete"
                                                                    name="blog_category_delete" />
                                                                @endif
                                                                <label for="blog_category_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_category_status", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_category_status"
                                                                    name="blog_category_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_category_status"
                                                                    name="blog_category_status">
                                                                @endif
                                                                <label for="blog_category_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Blog Sub Category</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_subcategory_index", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_subcategory_index"
                                                                    name="blog_subcategory_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_subcategory_index"
                                                                    name="blog_subcategory_index" />
                                                                @endif
                                                                <label for="blog_subcategory_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_subcategory_create", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_subcategory_create"
                                                                    name="blog_subcategory_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_subcategory_create"
                                                                    name="blog_subcategory_create">
                                                                @endif
                                                                <label for="blog_subcategory_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_subcategory_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_subcategory_edit"
                                                                    name="blog_subcategory_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_subcategory_edit"
                                                                    name="blog_subcategory_edit" />
                                                                @endif
                                                                <label for="blog_subcategory_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_subcategory_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_subcategory_delete"
                                                                    name="blog_subcategory_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_subcategory_delete"
                                                                    name="blog_subcategory_delete" />
                                                                @endif
                                                                <label for="blog_subcategory_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_subcategory_status", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_subcategory_status"
                                                                    name="blog_subcategory_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_subcategory_status"
                                                                    name="blog_subcategory_status">
                                                                @endif
                                                                <label for="blog_subcategory_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Blog Slider</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_slider_index", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_slider_index"
                                                                    name="blog_slider_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_slider_index"
                                                                    name="blog_slider_index">
                                                                @endif
                                                                <label for="blog_slider_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_slider_create", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_slider_create"
                                                                    name="blog_slider_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_slider_create"
                                                                    name="blog_slider_create">
                                                                @endif
                                                                <label for="blog_slider_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_slider_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_slider_edit"
                                                                    name="blog_slider_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_slider_edit"
                                                                    name="blog_slider_edit">
                                                                @endif
                                                                <label for="blog_slider_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_slider_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_slider_delete"
                                                                    name="blog_slider_delete" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_slider_delete"
                                                                    name="blog_slider_delete">
                                                                @endif
                                                                <label for="blog_slider_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_slider_status", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_slider_status"
                                                                    name="blog_slider_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_slider_status"
                                                                    name="blog_slider_status">
                                                                @endif
                                                                <label for="blog_slider_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Blog User > All User Blog Post</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_user_post_index", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_user_post_index"
                                                                    name="blog_user_post_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_user_post_index"
                                                                    name="blog_user_post_index">
                                                                @endif
                                                                <label for="blog_user_post_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                           
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_user_post_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_user_post_edit"
                                                                    name="blog_user_post_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_user_post_edit"
                                                                    name="blog_user_post_edit">
                                                                @endif
                                                                <label for="blog_user_post_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_user_post_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="blog_user_post_delete"
                                                                    name="blog_user_post_delete" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="blog_user_post_delete"
                                                                    name="blog_user_post_delete">
                                                                @endif
                                                                <label for="blog_user_post_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Blog User Part</td>
                                                        <td class="text-center"> Blog User Comment
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("blog_user_post_coment", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="blog_user_post_coment"
                                                                    name="blog_user_post_coment" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="blog_user_post_coment"
                                                                    name="blog_user_post_coment">
                                                                @endif
                                                                <label for="blog_user_post_coment"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Blog User Comment Reply
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("blog_coment_reply",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="blog_coment_reply"
                                                                    name="blog_coment_reply" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="blog_coment_reply"
                                                                    name="blog_coment_reply">
                                                                @endif
                                                                <label for="blog_coment_reply"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Users Message
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("users_message",
                                                                $all_permission))
                                                                <input type="checkbox" value="1" id="users_message"
                                                                    name="users_message" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="users_message"
                                                                    name="users_message">
                                                                @endif
                                                                <label for="users_message"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Semd email All Users
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("send_email_all_users",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="send_email_all_users"
                                                                    name="send_email_all_users" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="send_email_all_users"
                                                                    name="send_email_all_users">
                                                                @endif
                                                                <label for="send_email_all_users"></label>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Products Review & Rating, Question and
                                                            Answers Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Reply</th>
                                                        <th class="text-center"> Status</th>
                                                        <th class="text-center"> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Question </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("view_product_question", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_product_question"
                                                                    name="view_product_question" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_product_question"
                                                                    name="view_product_question" />
                                                                @endif
                                                                <label for="view_product_question"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("reply_product_question", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="reply_product_question"
                                                                    name="reply_product_question" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="reply_product_question"
                                                                    name="reply_product_question">
                                                                @endif
                                                                <label for="reply_product_question"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("product_question_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="product_question_status"
                                                                    name="product_question_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="product_question_status"
                                                                    name="product_question_status" />
                                                                @endif
                                                                <label for="product_question_status"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Answers </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("view_products_answer", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_products_answer"
                                                                    name="view_products_answer" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_products_answer"
                                                                    name="view_products_answer" />
                                                                @endif
                                                                <label for="view_products_answer"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("view_products_answer_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="view_products_answer_status"
                                                                    name="view_products_answer_status" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="view_products_answer_status"
                                                                    name="view_products_answer_status" />
                                                                @endif
                                                                <label for="view_products_answer_status"></label>

                                                            </div>
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td>Review & Rating </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("show_review_rating", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="show_review_rating"
                                                                    name="show_review_rating" checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="show_review_rating"
                                                                    name="show_review_rating" />
                                                                @endif
                                                                <label for="show_review_rating"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">
                                                           
                                                        </td>


                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="card-body">

<div class="table-responsive">
    <table class="table table-bordered permission-table">
        <thead>
            <tr>
                <th colspan="6" class="text-center">Event</th>
            </tr>
            <tr>
                <th rowspan="2" class="text-center">Module Name</th>

            </tr>
            <tr>
                <th class="text-center">View</th>
                <th class="text-center">add</th>
                <th class="text-center"> edit</th>
                <th class="text-center"> delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Event </td>
                <td class="text-center">
                    <div class="icheckbox_square-blue checked"
                        aria-checked="false" aria-disabled="false">

                        @if(in_array("event_index", $all_permission))
                        <input type="checkbox" value="1"
                            id="event_index"
                            name="event_index" checked />
                        @else
                        <input type="checkbox" value="1"
                            id="event_index"
                            name="event_index" />
                        @endif
                        <label for="event_index"></label>

                    </div>
                </td>
                <td class="text-center">
                    <div class="icheckbox_square-blue" aria-checked="false"
                        aria-disabled="false">

                        @if(in_array("event_add", $all_permission))
                        <input type="checkbox" value="1"
                            id="event_add"
                            name="event_add" checked>
                        @else
                        <input type="checkbox" value="1"
                            id="event_add"
                            name="event_add">
                        @endif
                        <label for="event_add"></label>

                    </div>
                </td>
                <td class="text-center">
                    <div class="icheckbox_square-blue" aria-checked="false"
                        aria-disabled="false">

                        @if(in_array("event_edit",
                        $all_permission))
                        <input type="checkbox" value="1"
                            id="event_edit"
                            name="event_edit" checked />
                        @else
                        <input type="checkbox" value="1"
                            id="event_edit"
                            name="event_edit" />
                        @endif
                        <label for="event_edit"></label>

                    </div>
                </td>
                <td class="text-center">
                <div class="icheckbox_square-blue" aria-checked="false"
                        aria-disabled="false">

                        @if(in_array("event_delete",
                        $all_permission))
                        <input type="checkbox" value="1"
                            id="event_delete"
                            name="event_delete" checked />
                        @else
                        <input type="checkbox" value="1"
                            id="event_delete"
                            name="event_delete" />
                        @endif
                        <label for="event_delete"></label>

                    </div>
                </td>

            </tr>

            <tr>
                <td>Analytics </td>
                <td class="text-center">
                    <div class="icheckbox_square-blue checked"
                        aria-checked="false" aria-disabled="false">

                        @if(in_array("anaylites_view", $all_permission))
                        <input type="checkbox" value="1"
                            id="anaylites_view"
                            name="anaylites_view" checked />
                        @else
                        <input type="checkbox" value="1"
                            id="anaylites_view"
                            name="anaylites_view" />
                        @endif
                        <label for="anaylites_view"></label>

                    </div>
                </td>
                <td class="text-center">

                </td>
                <td class="text-center">
                   
                </td>
                <td class="text-center">
                   
                   </td>


            </tr>


        </tbody>
    </table>
</div>

</div>


                                    <div class="card-body">
                                        <input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">General Setting Part</th>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2" class="text-center">Module Name</th>

                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">View</th>
                                                        <th class="text-center">Add</th>
                                                        <th class="text-center">Edit</th>
                                                        <th class="text-center">Delete</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Coupon Code </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("coupon_code_index", $all_permission))
                                                                <input type="checkbox" value="1" id="coupon_code_index"
                                                                    name="coupon_code_index" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="coupon_code_index"
                                                                    name="coupon_code_index" />
                                                                @endif
                                                                <label for="coupon_code_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("coupon_code_create", $all_permission))
                                                                <input type="checkbox" value="1" id="coupon_code_create"
                                                                    name="coupon_code_create" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="coupon_code_create"
                                                                    name="coupon_code_create">
                                                                @endif
                                                                <label for="coupon_code_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("coupon_code_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="coupon_code_edit"
                                                                    name="coupon_code_edit" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="coupon_code_edit"
                                                                    name="coupon_code_edit" />
                                                                @endif
                                                                <label for="coupon_code_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("coupon_code_delete", $all_permission))
                                                                <input type="checkbox" value="1" id="coupon_code_delete"
                                                                    name="coupon_code_delete" checked />
                                                                @else
                                                                <input type="checkbox" value="1" id="coupon_code_delete"
                                                                    name="coupon_code_delete" />
                                                                @endif
                                                                <label for="coupon_code_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("coupon_code_status", $all_permission))
                                                                <input type="checkbox" value="1" id="coupon_code_status"
                                                                    name="coupon_code_status" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="coupon_code_status"
                                                                    name="coupon_code_status">
                                                                @endif
                                                                <label for="coupon_code_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Frontend Slider</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_slider_index",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_index"
                                                                    name="general_setting_frontend_slider_index"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_index"
                                                                    name="general_setting_frontend_slider_index" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_slider_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_slider_create",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_create"
                                                                    name="general_setting_frontend_slider_create"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_create"
                                                                    name="general_setting_frontend_slider_create">
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_slider_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_slider_edit",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_edit"
                                                                    name="general_setting_frontend_slider_edit"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_edit"
                                                                    name="general_setting_frontend_slider_edit" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_slider_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_slider_delete",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_delete"
                                                                    name="general_setting_frontend_slider_delete"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_delete"
                                                                    name="general_setting_frontend_slider_delete" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_slider_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_slider_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_status"
                                                                    name="general_setting_frontend_slider_status"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_slider_status"
                                                                    name="general_setting_frontend_slider_status">
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_slider_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Frontend Banner</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_banner_index",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_index"
                                                                    name="general_setting_frontend_banner_index"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_index"
                                                                    name="general_setting_frontend_banner_index" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_banner_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_banner_create",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_create"
                                                                    name="general_setting_frontend_banner_create"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_create"
                                                                    name="general_setting_frontend_banner_create">
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_banner_create"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_banner_edit",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_edit"
                                                                    name="general_setting_frontend_banner_edit"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_edit"
                                                                    name="general_setting_frontend_banner_edit" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_banner_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_banner_delete",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_delete"
                                                                    name="general_setting_frontend_banner_delete"
                                                                    checked />
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_delete"
                                                                    name="general_setting_frontend_banner_delete" />
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_banner_delete"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("general_setting_frontend_banner_status",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_status"
                                                                    name="general_setting_frontend_banner_status"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="general_setting_frontend_banner_status"
                                                                    name="general_setting_frontend_banner_status">
                                                                @endif
                                                                <label
                                                                    for="general_setting_frontend_banner_status"></label>

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Shipping Charge</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("shipping_charge_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_charge_index"
                                                                    name="shipping_charge_index" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_charge_index"
                                                                    name="shipping_charge_index">
                                                                @endif
                                                                <label for="shipping_charge_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("shipping_charge_edit", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_charge_edit"
                                                                    name="shipping_charge_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="shipping_charge_edit"
                                                                    name="shipping_charge_edit">
                                                                @endif
                                                                <label for="shipping_charge_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>


                                                    <tr>

                                                        <td>Site Setup</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("site_setup_view", $all_permission))
                                                                <input type="checkbox" value="1" id="site_setup_view"
                                                                    name="site_setup_view" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="site_setup_view"
                                                                    name="site_setup_view">
                                                                @endif
                                                                <label for="site_setup_view"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("site_setup_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="site_setup_edit"
                                                                    name="site_setup_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="site_setup_edit"
                                                                    name="site_setup_edit">
                                                                @endif
                                                                <label for="site_setup_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Email Setting</td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("email_setting_index", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="email_setting_index" name="email_setting_index"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="email_setting_index" name="email_setting_index">
                                                                @endif
                                                                <label for="email_setting_index"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("email_setting_edit", $all_permission))
                                                                <input type="checkbox" value="1" id="email_setting_edit"
                                                                    name="email_setting_edit" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="email_setting_edit"
                                                                    name="email_setting_edit">
                                                                @endif
                                                                <label for="email_setting_edit"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>Others</td>
                                                        <td class="text-center"> Empty Database
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">
                                                                @if(in_array("empty_database_view", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="empty_database_view" name="empty_database_view"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="empty_database_view" name="empty_database_view">
                                                                @endif
                                                                <label for="empty_database_view"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Cache Clear
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("cache_clear_view", $all_permission))
                                                                <input type="checkbox" value="1" id="cache_clear_view"
                                                                    name="cache_clear_view" checked>
                                                                @else
                                                                <input type="checkbox" value="1" id="cache_clear_view"
                                                                    name="cache_clear_view">
                                                                @endif
                                                                <label for="cache_clear_view"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered permission-table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="text-center">Other Parts</th>
                                                    </tr>
                                 
                                                </thead>
                                                <tbody>
                                                   

                                                    <tr>
                                                        <td></td>
                                                        <td class="text-center"> Dashboard
                                                            <div class="icheckbox_square-blue checked"
                                                                aria-checked="false" aria-disabled="false">

                                                                @if(in_array("dashboard_view", $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="dashboard_view" name="dashboard_view"
                                                                    checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="dashboard_view" name="dashboard_view">
                                                                @endif
                                                                <label for="dashboard_view"></label>

                                                            </div>
                                                        </td>
                                                        <td class="text-center"> Analytics
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("analytice_view",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="analytice_view"
                                                                    name="analytice_view" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="analytice_view"
                                                                    name="analytice_view">
                                                                @endif
                                                                <label for="analytice_view"></label>

                                                            </div>
                                                        </td>

                                                        <td class="text-center"> Products Report
                                                            <div class="icheckbox_square-blue" aria-checked="false"
                                                                aria-disabled="false">

                                                                @if(in_array("products_reporst_view",
                                                                $all_permission))
                                                                <input type="checkbox" value="1"
                                                                    id="products_reporst_view"
                                                                    name="products_reporst_view" checked>
                                                                @else
                                                                <input type="checkbox" value="1"
                                                                    id="products_reporst_view"
                                                                    name="products_reporst_view">
                                                                @endif
                                                                <label for="products_reporst_view"></label>

                                                            </div>
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>





            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Post-->
</div>




<script type="text/javascript">
$("ul#setting").siblings('a').attr('aria-expanded', 'true');
$("ul#setting").addClass("show");
$("ul#setting #role-menu").addClass("active");

$("#select_all").on("change", function() {
    if ($(this).is(':checked')) {
        $("tbody input[type='checkbox']").prop('checked', true);
    } else {
        $("tbody input[type='checkbox']").prop('checked', false);
    }
});
</script>

@endsection
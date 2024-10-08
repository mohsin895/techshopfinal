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
                        <a href="{{route('admin.subcategory.index')}}"
                            class="text-muted text-hover-primary">{{$table}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.subcategory.add')}}" class="text-muted text-hover-primary">{{$add}}</a>
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
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" method="post"
                action="{{route('admin.couponcode.update',$couponcode->id)}}" enctype="multipart/form-data">
                @csrf


                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Coupon Code </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="coupon_code" class="form-control mb-2"
                                                placeholder="Product Coupon Code" value="{{$couponcode->coupon_code}}"
                                                required />
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>

                                        <!--end::Input group-->
                                    </div>
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Number of Use </label>
                                            (if unlimited please check this box else uncheck and enter use time) <input type="checkbox" name="unlimited" value="1" @if($couponcode->unlimited==1) checked @endif id="checkbox1" />
                                            <div id="autoUpdate" class="autoUpdate">
                                             @if(empty($couponcode->unlimited))
                                                <input type="number" name="use_time" class="form-control mb-2"
                                                    placeholder="Coupon use time" value="{{$couponcode->use_time}}"  />
                                                    @else 
                                                    
                                                <input type="number" name="use_time" class="form-control mb-2"
                                                    placeholder="Coupon use time"   />

                                                    @endif
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>

                                    </div>


                                    <!--begin::Card header-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Coupon Amount </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="amount" class="form-control mb-2"
                                                placeholder="Product Coupon Amount" value="{{$couponcode->amount}}"
                                                required />
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>

                                    </div>

                                    <div class="card-body pt-0">
                                        <!--begin::Select store template-->
                                        <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a
                                            Select Amount Type</label>
                                        <!--end::Select store template-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option"
                                            id="kt_ecommerce_add_product_store_template" name="amount_type" required>

                                            <option selected="selected">Select amount type</option>

                                            <option value="percentage" @if($couponcode->amount_type=='percentage')
                                                selected @endif>Percentage</option>
                                            <option value="fixed" @if($couponcode->amount_type=='fixed') selected
                                                @endif>Fixed</option>


                                        </select>
                                        <!--end::Select2-->

                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card body-->


                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Expired Date </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" name="expiry_date" class="form-control mb-2"
                                                placeholder="Counpon Code Expired Date"
                                                value="{{$couponcode->expiry_date}}" required />
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>

                                    </div>

                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Coupon Code purpose</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="purpose" class="form-control mb-2"
                                                placeholder=" Coupon Code purpose" value="{{$couponcode->purpose}}" required />
                                            <!--end::Input-->
                                            <!--begin::Description-->

                                            <!--end::Description-->
                                        </div>

                                        <!--end::Input group-->
                                    </div>
                                </div>

                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Meta options-->

                        <!--end::Automation-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route('admin.couponcode.index')}}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>


                            </button>
                            <!--end::Button-->
                        </div>
                    </div>

                </div>

                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

<script>
$(document).ready(function() {
    $('#checkbox1').change(function() {
        if (!this.checked)
            //  ^
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');
    });
});
</script>

@endsection
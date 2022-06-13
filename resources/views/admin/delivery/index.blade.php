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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{$title}}
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">{{$table}}</span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
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
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->

                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>General</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form"
                                    action="{{route('admin.delivery.rate')}}" method="post">
                                    @csrf
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Flate Rate</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the title of the store for SEO."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="flat_rate"
                                                value="{{$shippingCharge->flat_rate}}" />
                                            <!--end::Input-->

                                        </div>
</div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Express delivery Rate</span>
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Set the description of the store for SEO."></i>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    name="express_delivery" value="{{$shippingCharge->express_delivery}}">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                       

                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <div class="separator mb-6"></div>
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->

                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>


@endsection
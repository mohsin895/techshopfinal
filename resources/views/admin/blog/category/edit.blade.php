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
                        <a href="{{route('admin.category.index')}}" class="text-muted text-hover-primary">{{$table}}</a>
                    </li>
					<li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.category.add')}}" class="text-muted text-hover-primary">{{$add}}</a>
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
                action="{{route('admin.blog.category.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
              

                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                            @include('error.message')
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Category Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="cat_name" class="form-control mb-2" placeholder="Product name"
                                    value="{{$category->cat_name}}" />
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
                                <label class="required form-label">Home Page Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="homa_page_name" value="{{$category->homa_page_name}}" class="form-control mb-2" placeholder="Home Page Name"
                                    value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                               
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                           
                            <!--end::Input group-->
                        </div>
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Home Page Serial Number</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="serial_number" value="{{$category->serial_number}}" class="form-control mb-2" placeholder="Home Page Serial Number"
                                    value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                               
                                <!--end::Description-->
                            </div>
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
                        <a href="{{route('admin.blog.category')}}"
                            id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>


                        </button>
                        <!--end::Button-->
                    </div>
                </div>

                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection
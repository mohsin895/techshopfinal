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
                action="{{route('admin.subcategory.update',$subcategory->id)}}" enctype="multipart/form-data">
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
						<div class="card card-flush py-4">
                                    <!--begin::Card header-->

                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select store template-->
                                        <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a
                                            Select Cateroy</label>
                                        <!--end::Select store template-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select an option"
                                            id="kt_ecommerce_add_product_store_template" name="parent_id">
                                            <option></option>
                                            <option >Select Category</option>
                                            @foreach($category as $row)
                                            <option value="{{$row->id}}" @if($row->id == $subcategory->parent_id) ? selected=""; @endif>{{$row->cat_name}}</option>
                                            @endforeach

                                        </select>
                                        <!--end::Select2-->

                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card body-->
                                </div>



                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Sub Category </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="cat_name" class="form-control mb-2"
                                            placeholder="SubCategory name" value="{{$subcategory->cat_name}}" />
                                        <!--end::Input-->
                                        <!--begin::Description-->

                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!-- <div> -->
                                        <!--begin::Label-->
                                        <!-- <label class="form-label">Description</label> -->
                                        <!--end::Label-->
                                        <!-- <div id="kt_ecommerce_add_category_meta_description" class="min-h-100px mb-2">
                                            <textarea name="description" class="min-h-200px mb-2">{{$subcategory->description}}</textarea></div>
                                    </div> -->
                                    <!--end::Input group-->
                                </div>
                            <div>
                               
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Meta options-->

                    <!--end::Automation-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('admin.subcategory.index')}}"
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
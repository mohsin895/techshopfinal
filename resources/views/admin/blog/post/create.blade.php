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
                action="{{route('admin.blog.post.insert')}}" enctype="multipart/form-data">
                @csrf
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Thumbnail</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3"
                                data-kt-image-input="true"
                                style="background-image: url(assets/media/svg/files/blank-image.svg)">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <!--begin::Icon-->
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--end::Icon-->
                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg
                                image files are accepted,image size:less then 100kb</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->

                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select"
                                name="status">
                                <option></option>
                                <option value="New">New</option>
                                <option value="published">Published</option>


                                <option value="inactive">Inactive</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->

                            <!--end::Description-->
                            <!--begin::Datepicker-->

                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->
                    <!--begin::Template settings-->

                    <!--end::Template settings-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->

                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="mb-10 fv-row">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label">Categories</label>
                                <!--end::Label-->
                                <!--begin::Select2-->
                                <select class="form-select mb-2" name="parent_id" id="parent_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>
                                    @foreach($category as $row)
                                    <option value="{{$row->id}}">{{$row->cat_name}}</option>
                                    @endforeach
                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->

                            </div>

                            <div class="mb-10 fv-row">
                                <!--begin::Input group-->
                                <!--begin::Label-->
                                <label class="form-label">Sub Categories</label>
                                <!--end::Label-->
                                <!--begin::Select2-->
                                <select class="form-select mb-2" name="subcat_id" id="subcat_id" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option></option>

                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->

                            </div>
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Post Title</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control mb-2" placeholder="Post Title"
                                    value="" />
                                <!--end::Input-->
                                <!--begin::Description-->

                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Description</label>
                                <!--end::Label-->
                                <div>
                                    <textarea name="description" rows="4" cols="100" class="ckeditor"></textarea>


                                </div>
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
                        <a href="{{route('admin.category.index')}}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Save </span>


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
<script type="text/javascript">
$(function() {
    $(document).on('change', '#parent_id', function() {

        var parent_id = $(this).val();
        //    alert(parent_id);

        $.ajax({
            url: "{{route('admin.get_blogcategory')}}",
            type: "GET",
            data: {
                parent_id: parent_id
            },
            success: function(data) {
                var html = '<option value="">Select SubCategory</option>';
                $.each(data, function(key, v) {
                    html += '<option value ="' + v.id + '"  data-name="' + v
                        .cat_name + '">' + v.cat_name + '</option>';
                });
                $('#subcat_id').html(html);
            }
        });
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('.summernote').summernote();
});
</script>

@endsection
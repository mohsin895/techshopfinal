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
                                    action="{{route('admin.general.setting')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <!-- <div class="card card-flush py-4">
                                      
                                        <div class="card-header">
                                          
                                            <div class="card-title">
                                                <h2>Login Page Image</h2>
                                            </div>
                                           
                                        </div>

                                      
                                        <div class="card-body text-center pt-0">
                                            
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->login_image)}})" >
                                               
                                                <div class="image-input-wrapper w-382px h-544px"></div>
                                              
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                 
                                                    <input type="file" name="login_image" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                           
                                                </label>
                                               
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                               
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                           
                                            </div>
                                         
                                            <div class="text-muted fs-7">Set the  Login image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted,size:width:382px,height:544px.</div>
                                          
                                        </div>


                                     
                                    </div> -->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Site Logo</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>

                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->site_logo)}})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="site_logo" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the site Logo image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted, size:width:70px,height:50px.</div>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Card body-->
                                    </div>

                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Dashboard Logo</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>

                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->dashboard_logo)}})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="dashboard_logo" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the Dashboard Logo image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted,size:width:269px,height:56px.</div>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Card body-->
                                    </div>




                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Fav Icon</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->favicon)}})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="favicon" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the Fav icon image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted,size:width:257px,height:65px.</div>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Card body-->
                                    </div>
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Blog Logo</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>

                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->blog_logo)}})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="blog_logo" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the Blog Logo image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted,size:width:32px,height:32px.</div>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Card body-->
                                    </div>
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Blog FavIcon</h2>
                                            </div>
                                            <!--end::Card title-->
                                        </div>

                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body text-center pt-0">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-empty image-input-outline mb-3"
                                                data-kt-image-input="true"
                                                style="background-image: url({{asset('public/assets/images/setting/'.$gs->blog_favicon)}})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-150px h-150px"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="blog_favicon" multiple=""
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the fav icon image. Only *.png,
                                                *.jpg and *.jpeg
                                                image files are accepted,size:width:32px,height:32px.</div>
                                            <!--end::Description-->
                                        </div>


                                        <!--end::Card body-->
                                    </div>

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Shop Title</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Website  Shop Title"></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="site_title"
                                                value="{{$gs->site_title}}" />
                                            <!--end::Input-->

                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Blog Title</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Blog  Website Title."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                name="website_name" value="{{$gs->website_name}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Currency</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="E-commerce Currency."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="currency"
                                                value="{{$gs->currency}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Bkash Number</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter Your Bkash Number."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="bkash"
                                                value="{{$gs->bkash}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Rocket Number</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter Your Rokcet Number."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="rocket"
                                                value="{{$gs->rocket}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Nagad Number</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter Nagad Number."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="nogod"
                                                value="{{$gs->nogod}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>User Commission(%)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="User Commission."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="commission"
                                                value="{{$gs->commission}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>

                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>User Vat on purchase Product(%)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Product Vat."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="vat"
                                                value="{{$gs->vat}}">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">

                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Low Count Product</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Low Count Product."></i>
                                            </label>

                                        </div>
                                        <div class="col-md-9">

                                            <input type="number" class="form-control form-control-solid" name="quantity"
                                                value="{{$gs->quantity}}">

                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">

                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Best Selling Product(%)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Best Selling Product."></i>
                                            </label>

                                        </div>
                                        <div class="col-md-9">

                                            <input type="number" class="form-control form-control-solid"
                                                name="best_selling_product" value="{{$gs->best_selling_product}}">

                                        </div>
                                    </div>
                                    <!-- <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                      
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Less Selling Product(%)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Less Selling Product."></i>
                                            </label>
                                      
                                        </div>
                                        <div class="col-md-9">
                                       
                                            <input type="number" class="form-control form-control-solid"
                                                name="less_selling_product" value="{{$gs->less_selling_product}}"> 
                                         
                                        </div>
                                    </div> -->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Company Email</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Company Email."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="email1"
                                                value="{{$gs->email1}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Landing Page Flash Sale/Banner</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Landing Page Flash Sale/Slider."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Status"
                                                data-kt-ecommerce-order-filter="status" name="flash_slider">
                                                <option value="3" @if($gs->flash_slider==3) selected ;@endif >Nothing
                                                </option>
                                                <option value="1" @if($gs->flash_slider==1) selected ;@endif>Flash Sale
                                                </option>
                                                <option value="2" @if($gs->flash_slider==2) selected ;@endif>Banner
                                                </option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span> empty Database</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Landing Page Flash Sale/Slider."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="database_show"
                                                data-kt-ecommerce-order-filter="database_show" name="database_show">

                                                <option value="1" @if($gs->database_show==1) selected ;@endif>Show
                                                </option>
                                                <option value="2" @if($gs->database_show==2) selected ;@endif>Hide
                                                </option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span> Expired date</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Landing Page Flash Sale/Slider."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="expired_date"
                                                data-kt-ecommerce-order-filter="expired_date" name="expired_date">

                                                <option value="1" @if($gs->expired_date==1) selected ;@endif>Show
                                                </option>
                                                <option value="2" @if($gs->expired_date==2) selected ;@endif>Hide
                                                </option>

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Show Upcoming Expire date product</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Landing Page Flash Sale/Slider."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="upcoming_expired_date"
                                                data-kt-ecommerce-order-filter="upcoming_expired_date"
                                                name="upcoming_expired_date">
                                                <option >Select Day</option>

                                                <option value="1"@if($gs->upcoming_expired_date==1) selected ;@endif>1 Days</option>
                                                <option value="2"@if($gs->upcoming_expired_date==2) selected ;@endif>2 Days</option>
                                                <option value="3"@if($gs->upcoming_expired_date==3) selected ;@endif>3 Days</option>
                                                <option value="4"@if($gs->upcoming_expired_date==4) selected ;@endif>4 Days</option>
                                                <option value="5"@if($gs->upcoming_expired_date==5) selected ;@endif>5 Days</option>
                                                <option value="6"@if($gs->upcoming_expired_date==6) selected ;@endif>6 Days</option>
                                                <option value="7"@if($gs->upcoming_expired_date==7) selected ;@endif>7 Days</option>
                                                <option value="8"@if($gs->upcoming_expired_date==8) selected ;@endif>8 Days</option>
                                                <option value="9"@if($gs->upcoming_expired_date==9) selected ;@endif>9 Days</option>
                                                <option value="10"@if($gs->upcoming_expired_date==10) selected ;@endif>10 Days</option>
                                                <option value="11"@if($gs->upcoming_expired_date==11) selected ;@endif>11 Days</option>
                                                <option value="12"@if($gs->upcoming_expired_date==12) selected ;@endif>12 Days</option>
                                                <option value="13"@if($gs->upcoming_expired_date==13) selected ;@endif>13 Days</option>
                                                <option value="14"@if($gs->upcoming_expired_date==14) selected ;@endif>14 Days</option>
                                                <option value="15"@if($gs->upcoming_expired_date==15) selected ;@endif>15 Days</option>
                                                <option value="16"@if($gs->upcoming_expired_date==16) selected ;@endif>16 Days</option>
                                                <option value="17"@if($gs->upcoming_expired_date==17) selected ;@endif>17 Days</option>
                                                <option value="18"@if($gs->upcoming_expired_date==18) selected ;@endif>18 Days</option>
                                                <option value="19"@if($gs->upcoming_expired_date==19) selected ;@endif>19 Days</option>
                                                <option value="20"@if($gs->upcoming_expired_date==20) selected ;@endif>20 Days</option>
                                                <option value="21"@if($gs->upcoming_expired_date==21) selected ;@endif>21 Days</option>
                                                <option value="22"@if($gs->upcoming_expired_date==22) selected ;@endif>22 Days</option>
                                                <option value="23"@if($gs->upcoming_expired_date==23) selected ;@endif>23 Days</option>
                                                <option value="24"@if($gs->upcoming_expired_date==24) selected ;@endif>24 Days</option>
                                                <option value="25"@if($gs->upcoming_expired_date==25) selected ;@endif>25 Days</option>
                                                <option value="26"@if($gs->upcoming_expired_date==26) selected ;@endif>26 Days</option>
                                                <option value="27"@if($gs->upcoming_expired_date==27) selected ;@endif>27 Days</option>
                                                <option value="28"@if($gs->upcoming_expired_date==28) selected ;@endif>28 Days</option>
                                                <option value="29"@if($gs->upcoming_expired_date==29) selected ;@endif>29 Days</option>
                                                <option value="30"@if($gs->upcoming_expired_date==30) selected ;@endif>30 Days</option>
                                               

                                            </select>
                                            <!--end::Input-->
                                        </div>
                                    </div>

                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Facebook Page Link</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Facebook Page."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="link" class="form-control form-control-solid"
                                                name="facebook_page" value="{{$gs->facebook_page}}"
                                                data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Facebook Group</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Facebook Group."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="url" class="form-control form-control-solid"
                                                name="facebook_group" value="{{$gs->facebook_group}}"
                                                data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Twitter Link</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Twitter Link."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="url" class="form-control form-control-solid" name="twiter"
                                                value="{{$gs->twiter}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Instagram Link</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Instagram Link."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="url" class="form-control form-control-solid" name="instagram"
                                                value="{{$gs->instagram}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Youtube Link</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Youtube Link."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="url" class="form-control form-control-solid" name="youtube"
                                                value="{{$gs->youtube}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Linkedin Link</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Linkedin Link."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="url" class="form-control form-control-solid" name="linkdi"
                                                value="{{$gs->linkdi}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Company Phone Number</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Company Phone Number."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="mobile1"
                                                value="{{$gs->mobile1}}" data-kt-ecommerce-settings-type="tagify" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!-- <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                        
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Company Mobile2</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set keywords for the store separated by a comma."></i>
                                            </label>
                                           
                                        </div>
                                        <div class="col-md-9">
                                          
                                            <input type="text" class="form-control form-control-solid" name="mobile2"
                                                value="{{$gs->mobile2}}" data-kt-ecommerce-settings-type="tagify" />
                                        
                                        </div>
                                    </div> -->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Company Address</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Company Address."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="address" id="" cols="30"
                                                rows="10">{{$gs->address}}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Meta_description</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Meta_description."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="meta_description" id="" cols="30"
                                                rows="10">{{$gs->meta_description}}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>

                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Meta Viewport</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Meta Viewport."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="meta_viewport" id="" cols="30"
                                                rows="10">{{$gs->meta_viewport}}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Blog About Us</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Blog About Us."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="blog_about_us" id="" cols="30" rows="10"
                                                class="ckeditor">{!! $gs->blog_about_us !!}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Term & Condition</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Term & Condition."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="t_c" id="" cols="30" rows="10"
                                                class="ckeditor">{!! $gs->t_c !!}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Warranty and Replacement</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Warranty and Replacement."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="w_r" id="" cols="30" rows="10"
                                                class="ckeditor">{!! $gs->w_r !!}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span> About Us</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title=" About Us."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="about_us" id="" cols="30" rows="10"
                                                class="ckeditor">{!! $gs->about_us !!}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Privacy Policy</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Privacy Policy."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="privecy_policy" id="" cols="30" rows="10"
                                                class="ckeditor">{!! $gs->privecy_policy !!}</textarea>

                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!-- <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                        
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Facebook Pixel Code</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Facebook Pixel Code."></i>
                                            </label>
                                          
                                        </div>
                                        <div class="col-md-9">
                                           
                                            <textarea name="facebook_pixel" id="" cols="30"
                                                rows="10" class="ckeditor">{!! $gs->facebook_pixel !!}</textarea>

                                        </div>
                                    </div> -->

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

<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
@endsection
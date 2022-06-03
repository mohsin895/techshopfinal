<div class="toolbar" id="kt_toolbar">
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
                <form method="post" route="{{route('admin.report')}}">
                    @csrf
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">{{$table}}</a>
                    </li>

                    <li class="breadcrumb-item text-muted text-right">

                        <!--begin::Input group-->
                        <!--begin::Label-->

                        <!--end::Label-->
                        <!--begin::Select2-->
                        <select class="form-select mb-2" name="month" id="parent_id" data-control="select2"
                            data-hide-search="true" data-placeholder="Select an option"
                            data-kt-ecommerce-order-filter="Month" required>
                            <option></option>
                            <option value="30">Last Month</option>
                            <option value="60">Last Two Month</option>
                            <option value="90">Last Three Month</option>
                            <option value="120">Last Four Month</option>
                            <option value="150">Last Five Month</option>
                            <option value="180">Last Six Month</option>
                            <option value="300">Last ten Month</option>
                            <option value="360">Last twelve Month</option>
                            <option value="450">Last fifteen Month</option>
                            <option value="600">Last Twenty Month</option>
                            <option value="720">Last Twenty four Month</option>

                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->


                    </li>
                    <li class="breadcrumb-item text-muted text-right">
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="Select Product Lavel" data-kt-ecommerce-order-filter="Product Lavel"
                            name="product_label" required value="{{ request()->input('product_label') }}">
                            <option></option>


                            <option value="best_Selling">Best Selling Product</option>
                            <option value="less_selling">Less selling Product</option>
                            <option value="selling">Selling Product</option>
                            <option value="naver_selling">Naver Selling Product</option>
                          



                        </select>

                    </li>

                    <li class="breadcrumb-item text-muted text-right">
                    <button type="submit" class="btn btn-warning">Submit
                                                </button>

                    </li>


                    <!--end::Item-->
                </ul>
                </form>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>

</div>
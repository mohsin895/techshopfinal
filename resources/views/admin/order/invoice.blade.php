<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>{{$gs->site_title}}</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
   
    <link rel="shortcut icon" href="{{asset('assets/images/setting/'.$gs->favicon)}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/admin')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/admin')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="print-content-only header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="{{route('admin.dashboard')}}">
                        <img alt="Logo" src="{{asset('assets/images/setting/'.$gs->site_logo)}}" class="h-25px logo" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.5"
                                    d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                    fill="black" />
                                <path
                                    d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                @include('layout.admin.left_sidebar')
                <!--end::Aside menu-->
                <!--begin::Footer-->
               
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layout.admin.header')
                @php
                $user = App\Models\User::find($order->user_id);

                @endphp
                <!--end::Header-->
                <!--begin::Content-->
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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Invoice </h1>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <span class="h-20px border-gray-300 border-start mx-4"></span>
                                <!--end::Separator-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="{{route('admin.dashboard')}}"
                                            class="text-muted text-hover-primary">Dashboard</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Invoice Manager</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">View Invoices</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-dark">Invoice </li>
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
                            <!-- begin::Invoice 3-->
                            <div class="card">
                                <!-- begin::Body-->
                                <div class="card-body py-20">
                                    <!-- begin::Wrapper-->
                                    <div class="mw-lg-950px mx-auto w-100">

                                        <div class="container">
                                            <div class="row">
                                            <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7 text-center">INVOICE</h4>
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-4">
                                                    <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">

                                                    {{$user->name}}</br>
                                                    <span class="fs-6">({{$user->email}})</span>
                                                    <br />
                                                    </h4>
                                                    
                                                </div>
                                                
                                                <div class="col-6 col-lg-6 col-md-6 col-sm-4" style="text-align: right;">
                                                
                                                        <img alt="Logo"
                                                            src="{{asset('assets/images/setting/'.$gs->site_logo)}}"
                                                            class="w-50" style=""/></br>
                                                            {{$gs->site_title}}, {{$gs->address}} <br>{{$gs->mobile1}}
                                                  

                                                    
                                                </div>

                                                <!-- Force next columns to break to new line at md breakpoint and up -->
                                                <div class="w-100 d-none d-md-block"></div>


                                            </div>
                                        </div>
                                        <!-- begin::Header-->

                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="container">
										<span class="text-muted fs-5">Here are your order details. We
                                                        thank you for your purchase.</span>
                                            <div class="pb-6">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column gap-7 gap-md-10">


                                                    <!--begin::Separator-->
                                                    <!--begin::Order details-->
                                                    <div class="row">
                                                        <div class="col-6 col-lg-6 col-md-6 col-sm-4"> <span class="text-muted">Order
                                                                ID</span>
                                                            <span class="fs-5">#{{$order->order_id}}</span>
                                                            </br><span class="text-muted">Mobile No</span>
                                                            <span class="fs-5">{{$order->phone}}</span>
                                                            </br>
                                                            <span class="text-muted">Billing Address</span></br>
                                                            <span class="fs-6">{{$user->address1}},
                                                                <br />{{$user->postcode}},
                                                                <br />{{$user->city}},
                                                                <br />{{$user->country}}.</span>


                                                        </div>
                                                        <div class="col-6 col-lg-6 col-md-6 col-sm-4" style="text-align: right;"> <span
                                                                class="text-muted">Date</span>
                                                            <span
                                                                class="fs-5">{{ $order->created_at->toDayDateTimeString()}}</span><br>
                                                            <span class="text-muted">Shipping Address</span></br>
                                                            <span class="fs-6">{{$user->address2}},
                                                                <br />{{$user->postcode}},
                                                                <br />{{$user->city}},
                                                                <br />{{$user->country}}.</span>

                                                        </div>
                                                    </div>

                                                    <!-- Force next columns to break to new line at md breakpoint and up -->

                                                </div>

                                                <!--end::Billing & shipping-->
                                                <!--begin:Order summary-->
                                                <div class="d-flex justify-content-between flex-column">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive border-bottom mb-9">
                                                        <table
                                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                            <thead>
                                                                <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                                    <th class="min-w-175px pb-2">Products</th>
                                                                    <th class="min-w-70px text-end pb-2">Model No</th>
                                                                    <th class="min-w-80px text-end pb-2">QTY</th>
                                                                    <th class="min-w-100px text-end pb-2">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-bold text-gray-600">
                                                                <!--begin::Products-->
                                                                @foreach($order['orderProduct'] as $row)
                                                                @php
                                                                $product = App\Models\Product::find($row->product_id);

                                                                @endphp
                                                                <tr>
                                                                    <!--begin::Product-->
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Thumbnail-->
                                                                            <img alt="Logo"
                                                                                src="{{asset('assets/images/product/'.$product->image)}}"
                                                                                class="w-50" />
                                                                            <!-- <a href="#" class="symbol symbol-50px">
																				<img alt="Logo" src="{{asset('assets/images/product/'.$product->image)}}" class="w-100" />
																				</a> -->
                                                                            <!--end::Thumbnail-->
                                                                            <!--begin::Title-->
                                                                            <div class="ms-5">
                                                                                <div class="fw-bolder">
                                                                                    {{$row->product_name}}</div>
                                                                                <div class="fs-7 text-muted">Delivery
                                                                                    Date: 03/03/2022</div>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                    </td>
                                                                    <!--end::Product-->
                                                                    <!--begin::SKU-->
                                                                    <td class="text-end">{{$row->model_no}}</td>
                                                                    <!--end::SKU-->
                                                                    <!--begin::Quantity-->
                                                                    <td class="text-end">{{$row->quantity}}</td>
                                                                    <!--end::Quantity-->
                                                                    <!--begin::Total-->
                                                                    <td class="text-end">
                                                                        {{$gs->currency}}&nbsp;&nbsp;{{$row->quantity*$row->price}}
                                                                    </td>
                                                                    <!--end::Total-->
                                                                </tr>
                                                                @endforeach
                                                                <!--end::Products-->
                                                                <!--begin::Subtotal-->
                                                                <tr>
                                                                    <td colspan="3" class="text-end">Subtotal</td>
                                                                    <td class="text-end">
                                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->subtotal}}
                                                                    </td>
                                                                </tr>
                                                                <!--end::Subtotal-->
                                                                <!--begin::VAT-->
                                                                <tr>
                                                                    <td colspan="3" class="text-end">VAT ({{$gs->vat}}%)
                                                                    </td>
                                                                    <td class="text-end">{{$gs->currency}}&nbsp;&nbsp;
                                                                        {{$order->vat}}</td>
                                                                </tr>
                                                                <!--end::VAT-->
                                                                <!--begin::Shipping-->
                                                                <tr>
                                                                    <td colspan="3" class="text-end">Shipping Rate({{$order->delivery}})</td>
                                                                    <td class="text-end">
                                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->shipping}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3" class="text-end">Giftcard</td>
                                                                    <td class="text-end">
                                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->giftcard_amount}}
                                                                    </td>
                                                                </tr>
                                                                <!--end::Shipping-->
                                                                <!--begin::Grand total-->
                                                                <tr>
                                                                    <td colspan="3"
                                                                        class="fs-3 text-dark fw-bolder text-end">Grand
                                                                        Total</td>
                                                                    <td class="text-dark fs-3 fw-boldest text-end">
                                                                        {{$gs->currency}}&nbsp;&nbsp;{{$order->grand_total - $order->giftcard_amount}}
                                                                    </td>
                                                                </tr>
                                                                <!--end::Grand total-->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end:Order summary-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                        <!-- begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                            <!-- begin::Actions-->
                                            <div class="my-1 me-5">
                                                <!-- begin::Pint-->
                                                <button type="button" class="btn btn-success my-1 me-12"
                                                    onclick="window.print();">Print Invoice</button>
                                                <!-- end::Pint-->
                                                <!-- begin::Download-->
                                                <!-- <button type="button" class="btn btn-light-success my-1">Download</button> -->
                                                <!-- end::Download-->
                                            </div>
                                            <!-- end::Actions-->
                                            <!-- begin::Action-->

                                            <!-- end::Action-->
                                        </div>
                                        <!-- end::Footer-->
                                    </div>
                                    <!-- end::Wrapper-->
                                </div>
                                <!-- end::Body-->
                            </div>
                            <!-- end::Invoice 1-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layout.admin.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <script>
    var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{asset('assets/admin')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('assets/admin')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{asset('assets/admin')}}/assets/js/widgets.bundle.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/custom/widgets.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{asset('assets/admin')}}/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
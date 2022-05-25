@php
$withdraw = App\Models\Notification::where('withdraw_id','!=',null)->get();
@endphp
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{route('admin.dashboard')}}" class="d-lg-none">
                <img alt="Logo" src="{{asset('public/assets/images/setting/'.$gs->dashboard_logo)}}" class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item here show menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">Dashboards</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div class="menu-item">
                                    <a class="menu-link active py-3" href="{{url('admin/user')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Manage</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/user/message')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Message</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/withdraw')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Withdraw</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/user/blog/user_post')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Blog Manage</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/category')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Category</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/subcategory')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Sub Category</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/product')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Product</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/banner')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Banner</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/slider')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Slider</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/giftcard')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">GiftCard</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/order')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">All Order</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/general-setting')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Site Setup</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-3" href="{{url('admin/setting/mail_setting')}}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Email Setting</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <a  href="{{route('admin.user.index') }}" >
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">
                                    <a id="notf_user" class="dropdown-toggle-1" href="{{route('admin.user.index') }}">new Register
                                        <i class="far fa-user"></i>
                                        <span data-href="{{ route('admin.user-notf-count') }}"
                                            id="user-notf-count">{{ App\Models\Notification::countRegistration() }}</span>
                                    </a>
                                </span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px"
                                data-href="{{ route('admin.user-notf-show') }}" id="user-notf-show">


                            </div>
                        </div>
</a>
                        
                        <a  href="{{route('admin.order.new') }}" >
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-lg-down-accordion me-lg-1" >
                            <span class="menu-link py-3">
                                <span class="menu-title"><a id="notf_order" class="dropdown-toggle-1"
                                        href="{{route('admin.order.new') }}">new Order
                                        <i class="far fa-newspaper"></i>
                                        <span data-href="{{ route('admin.order-notf-count') }}"
                                            id="order-notf-count">{{ App\Models\Notification::countOrder() }}</span>
                                    </a></span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px"
                                data-href="{{ route('admin.order-notf-show') }}" id="order-notf-show">


                            </div>
                        </div>
                         </a>
                         <a  href="{{route('admin.withdraw.index') }}" >
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title"> 
                                    <a id="notf_withdraw" class="dropdown-toggle-1" href="{{route('admin.withdraw.index') }}"> withdraw message
                                        <i class="far fa-envelope"></i>
                                        <span data-href="{{ route('admin.withdraw-notf-count') }}"
                                            id="withdraw-notf-count">{{ App\Models\Notification::countWithdraw() }}</span>
                                    </a>
                                </span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px"
                                data-href="{{ route('admin.withdraw-notf-show') }}" id="withdraw-notf-show">


                            </div>
                        </div>
</a>
<a  href="{{route('admin.giftcard.index') }}" >
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                            class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <span class="menu-title">
                                    <a id="notf_giftcard" class="dropdown-toggle-1" href="{{route('admin.giftcard.index') }}">GiftCard Order
                                        <i class="far fa-envelope"></i>
                                        <span data-href="{{ route('admin.giftcard-notf-count') }}"
                                            id="giftcard-notf-count">{{ App\Models\Notification::countGiftcard() }}</span>
                                    </a>
                                </span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px"
                                data-href="{{ route('admin.giftcard-notf-show') }}" id="giftcard-notf-show">


                            </div>
                        </div>
</a>

                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <a href="{{route('admin.order.new') }}">
                                    <span class="menu-title">Total New Order


                                        ({{ App\Models\Order::countNewOrder() }})

                                    </span>
                                </a>

                            </span>

                        </div>
                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                            <span class="menu-link py-3">
                                <a href="{{route('admin.order.processing') }}">
                                    <span class="menu-title">Total Processing Order


                                        ({{ App\Models\Order::countProcessingOrder() }})

                                    </span>
                                </a>

                            </span>

                        </div>

                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0">

                <!--end::Quick links-->
                <!--begin::Theme mode-->

                <!--end::Theme mode-->
                <!--begin::User menu-->
                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img src="{{asset('public/assets/images/admin/profile/'.Auth::guard('admin')->user()->image)}}"
                            alt="user" />
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo"
                                        src="{{asset('public/assets/images/admin/profile/'.Auth::guard('admin')->user()->image)}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                        {{Auth::guard('admin')->user()->name}}
                                    </div>
                                    <a href="#"
                                        class="fw-bold text-muted text-hover-primary fs-7">{{Auth::guard('admin')->user()->email}}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{route('admin.account_setting')}}" class="menu-link px-5">My
                                Profile</a>
                        </div>


                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="{{route('admin.setting')}}" class="menu-link px-5">Account
                                Settings</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{route('admin.logout')}}" class="menu-link px-5">Sign Out</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->

                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
                <!--begin::Header menu toggle-->

                <!--end::Header menu toggle-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>

        <!--end::Wrapper-->
    </div>

    <!--end::Container-->
</div>
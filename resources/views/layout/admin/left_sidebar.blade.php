@php
$all_order= App\Models\Order::count('id');
$new_order= App\Models\Order::where('status','New')->count('id');
$processing_order= App\Models\Order::where('status','Processing')->count('id');
$packaging_order= App\Models\Order::where('status','Packaging')->count('id');
$pending_order= App\Models\Order::where('status','Waiting For Delivery')->count('id');
$shipping_order= App\Models\Order::where('status','Shipping')->count('id');
$delivered_order= App\Models\Order::where('status','Delivered')->count('id');
$complete_order= App\Models\Order::where('status','Completed')->count('id');
$cancel_order= App\Models\Order::where('status','Cancelled')->count('id');

$new_giftcard_order= App\Models\GiftCardOrder::where('status','New')->count('id');
$product = App\Models\Qty::orderBy('id','desc')->get();
$gs = App\Models\GeneralSetting::first();

$totalproduct= App\Models\Product::get();
$flashsellingproduct= App\Models\Product::where('flash_sale',1)->count('id');
$mytime = Carbon\Carbon::now();
$expireddate = $mytime->toDateString();
$expireddateproduct= App\Models\Product::where('expired_date', '<', $expireddate)->count('id');

    @endphp

    @foreach($product as $row)
    @php
    $totalQuantity = App\Models\Product::find($row->product_id);

    @endphp

    @endforeach
    <?php $number = 0; ?>
    @foreach($totalproduct as $row)
    @php
    $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
    $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
    $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
    @endphp
    @if($sellQuantity ==$totalQuantity )
    <?php $number++ ?>
    @else
    @endif
    @endforeach

    <?php $neversellingproduct = 0; ?>
    @foreach($totalproduct as $row)
    @php
    if(!empty($row->expired_date)){
    $dyaTimenow = Carbon\Carbon::now()->toDateString();
    $dyaTimeexpired = $row->expired_date;
    $diff_in_days = $dyaTimeexpired->diffInDays($dyaTimenow);

    }else{

    }
    $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
    $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
    $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
    @endphp
    @if(!empty($row->expired_date))

    @if($diff_in_days < $gs->upcoming_expired_date)
        <?php $neversellingproduct++ ?>
        @else
        @endif
        @endif
        @endforeach

        <?php $lownumber = 0; ?>
        @foreach($totalproduct as $row)
        @php
        $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
        $stockLowQty = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
        $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
        $low = $stockLowQty - $sellQuantity
        @endphp
        @if($low <= $gs->quantity && $low > 0)
            <?php $lownumber++ ?>
            @else
            @endif
            @endforeach


            <?php $lastmonthnotselling = 0; ?>
            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->whereMonth('created_at',
            date('m'))->whereYear('created_at', date('Y'))->sum('quantity');
            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            @endphp
            @if($sellQuantity == 0 )
            <?php $lastmonthnotselling++ ?>
            @else

            @endif

            @endforeach

            <?php $lastmonthselling = 0; ?>
            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->whereMonth('created_at',
            date('m'))->whereYear('created_at', date('Y'))->sum('quantity');
            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            @endphp
            @if($sellQuantity != 0 )
            <?php $lastmonthselling++ ?>
            @else
            @endif
            @endforeach

            <?php $lastyearnotselling = 0; ?>
            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->whereYear('created_at',
            date('Y'))->sum('quantity');
            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            @endphp
            @if($sellQuantity == 0 )
            <?php $lastyearnotselling++ ?>
            @else
            @endif

            @endforeach

            <?php $lastyearselling= 0; ?>
            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->whereYear('created_at',
            date('Y'))->sum('quantity');
            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            @endphp
            @if($sellQuantity != 0 )
            <?php $lastyearselling++ ?>
            @else

            @endif

            @endforeach


            <?php $bestselling= 0; ?>

            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            $sellQuantityr =round($sellQuantity);

            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            $bestSellingProduct = round(($gs->best_selling_product*$sellQuantity)/100);


            @endphp


            @if($sellQuantityr = $bestSellingProduct)
            <?php $bestselling++ ?>
            @else
            @endif

            @endforeach

            <?php $lessselling= 0; ?>

            @foreach($totalproduct as $row)
            @php
            $totalQuantity = App\Models\Qty::where('product_id',$row->id)->sum('quantity');
            $sellQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            $sellQuantityr =round($sellQuantity);

            $stockOutQuantity = App\Models\OrderProduct::where('product_id',$row->id)->sum('quantity');
            $bestSellingProduct = round(($gs->best_selling_product*$sellQuantity)/100);


            @endphp


            @if($sellQuantityr > $bestSellingProduct)
            <?php $lessselling++ ?>
            @else
            @endif

            @endforeach
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                    data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                        id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $dashboard_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'dashboard_view'],
                    ['role_id', $role->id]
                ])->first();
                $analytice_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'analytice_view'],
                    ['role_id', $role->id]
                ])->first();

                $products_reporst_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'products_reporst_view'],
                    ['role_id', $role->id]
                ])->first();


                $event_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                ['permissions.name', 'event_index'],
                ['role_id', $role->id]
                ])->first();
                $anaylites_view_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                ['permissions.name', 'anaylites_view'],
                ['role_id', $role->id]
                ])->first();

            ?>
                        @if($dashboard_view_permission_active)
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                            <a href="{{route('admin.dashboard')}}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Dashboards</span>
                                    <span class="menu-arrow"></span>
                                </span>
                            </a>

                        </div>
                        @endif
                        @if($analytice_view_permission_active)
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                            <a href="{{route('admin.order.chart')}}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Analytics</span>
                                    <span class="menu-arrow"></span>
                                </span>
                            </a>

                        </div>
                        @endif
                        @if($products_reporst_view_permission_active)

                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                            <a href="{{route('admin.report')}}">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Product Reports</span>
                                    <span class="menu-arrow"></span>
                                </span>
                            </a>

                        </div>
                        @endif

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Marketing</span>

                                <span class="menu-arrow"></span>
                            </span>


                            @if($event_index_permission_active )
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Event</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.event.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($anaylites_view_permission_active )
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <a href="{{route('admin.event.chart')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Market Anaylist</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif


                        </div>


                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Orders</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'order_index'],
                    ['role_id', $role->id]
                ])->first();
                $new_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'new_order_index'],
                    ['role_id', $role->id]
                ])->first();

                $processing_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'processing_order_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $packaging_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'packaging_order_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $waiting_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'waiting_order_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $shipping_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'shipping_order_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $deliverd_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'deliverd_order_index'],
                    ['role_id', $role->id]
                ])->first();
                $complete_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'complete_order_index'],
                    ['role_id', $role->id]
                ])->first();
                $canceled_order_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'canceled_order_index'],
                    ['role_id', $role->id]
                ])->first();

            ?>
                            @if($order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.index')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> All Order({{$all_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($new_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.new')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> New Order({{$new_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($processing_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.processing')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Processing Order({{$processing_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($packaging_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.packaging')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Packaging Order({{$packaging_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($waiting_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.pending')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Waiting For Delivery
                                                Order({{$pending_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($shipping_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.shipping')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Shipping Order({{$shipping_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($deliverd_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.delivered')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Delivered Order({{$delivered_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($complete_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.complete')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Completed Order({{$complete_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($canceled_order_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.order.cancel')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Cancelled Order({{$cancel_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Products</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php
            $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
            $product_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'product_index'],
                    ['role_id', $role->id]
                ])->first();
                $category_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'category_index'],
                    ['role_id', $role->id]
                ])->first();

                $subcategory_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'subcategory_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $flash_sale_product_index_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'flash_sale_product_index'],
                    ['role_id', $role->id]
                ])->first();
                
                $stock_low_products_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'stock_low_products'],
                    ['role_id', $role->id]
                ])->first();
                
                $stock_out_products_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'stock_out_products'],
                    ['role_id', $role->id]
                ])->first();
                $expired_date_products_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'expired_date_products'],
                    ['role_id', $role->id]
                ])->first();
                $upcomming_expired_date_products_permission_active = DB::table('permissions')
                ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where([
                    ['permissions.name', 'upcomming_expired_date_products'],
                    ['role_id', $role->id]
                ])->first();
                
              

            ?>
                            @if($category_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Category</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.category.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($subcategory_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Sub Category</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.subcategory.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($product_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Product</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.product.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif

                            @if($stock_low_products_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.product.stock.low')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">

                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>

                                            </span>
                                            <span class="menu-title">Stock Low Product({{$lownumber}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($stock_out_products_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.product.stock.out')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Stock out Product({{ $number }})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($flash_sale_product_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Flash Sale Product({{$flashsellingproduct}})</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.flash_sale_product.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif

                            @if($expired_date_products_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <a href="{{route('admin.product.expired_date')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Expired Date
                                                Product({{$expireddateproduct}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif

                            @if($upcomming_expired_date_products_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <a href="{{route('admin.product.upcoming_expired')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Upcomming Expire Date
                                                Product({{$neversellingproduct}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif



                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Coupon Code and Gift Card</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $giftcard_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'giftcard_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $giftcard_order_view_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'giftcard_order_view'],
                    ['role_id', $role->id]
                    ])->first();

                    $coupon_code_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'coupon_code_index'],
                    ['role_id', $role->id]
                    ])->first();

                    ?>
                            @if($giftcard_index_permission_active)

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.giftcard.order')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">GiftCard Order({{$new_giftcard_order}})</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($giftcard_order_view_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">GiftCard</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.giftcard.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif

                            @if($coupon_code_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Coupon Code</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.couponcode.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif

                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Users</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $users_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'users_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $today_birthday_users_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'today_birthday_users'],
                    ['role_id', $role->id]
                    ])->first();
                    $this_month_birthday_user_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'this_month_birthday_user'],
                    ['role_id', $role->id]
                    ])->first();
                    $users_message_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'users_message'],
                    ['role_id', $role->id]
                    ])->first();
                    

                    ?>
                            @if($users_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.index')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">All User</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif

                            @if($today_birthday_users_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.today-birthday')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Today Birthday User</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if( $this_month_birthday_user_permission_active)

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.monthly-birthday')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">This Month Birthday User</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($users_message_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.message')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Users Message</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif


                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Users Referral</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $view_users_withdraw_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'view_users_withdraw'],
                    ['role_id', $role->id]
                    ])->first();
                    $view_referral_details_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'view_referral_details'],
                    ['role_id', $role->id]
                    ])->first();
                   
                    

                    ?>
                            @if($view_users_withdraw_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.withdraw.index')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Users Withdraw</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif

                            @if($view_referral_details_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.referral.index')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">Users Referral Details</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif


                        </div>


                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Blog User</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $blog_user_post_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_user_post_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $blog_user_post_coment_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_user_post_coment'],
                    ['role_id', $role->id]
                    ])->first();
                   
                    

                    ?>
                            @if($blog_user_post_index_permission_active)

                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.blog.index')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title">All User Blog Post</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($blog_user_post_coment_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">User Blog Comment</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.blog.post.comment')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"> View & Reply</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif

                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Blog Part</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $blog_post_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_post_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $blog_category_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_category_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $blog_subcategory_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_subcategory_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $blog_slider_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'blog_slider_index'],
                    ['role_id', $role->id]
                    ])->first();
                   
                    

                    ?>
                            @if($blog_post_index_permission_active)

                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Category</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.blog.category')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($blog_category_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Sub Category</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.blog.subcategory.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($blog_subcategory_index_permission_active )
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Blog Post</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.blog.post.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($blog_slider_index_permission_active)

                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Blog Slider</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.blog.slider.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif


                        </div>

                        <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                   

                    $admin_staff_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'admin_staff_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $role_permission_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'role_permission_index'],
                    ['role_id', $role->id]
                    ])->first();
                   
                   
                    

                    ?>

                        
                        @if($admin_staff_index_permission_active)

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Employee</span>

                                <span class="menu-arrow"></span>
                            </span>



                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Employee</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.employee.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>
                        @endif

                        @if($role_permission_index_permission_active)
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Role Permission</span>

                                <span class="menu-arrow"></span>
                            </span>



                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Role Permission</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.role.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                        @endif





                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Product Review & Raint, Question &
                                    Answer</span>

                                <span class="menu-arrow"></span>
                            </span>
                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $view_product_question_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'view_product_question'],
                    ['role_id', $role->id]
                    ])->first();
                    $view_products_answer_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'view_products_answer'],
                    ['role_id', $role->id]
                    ])->first();
                    $show_review_rating_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'show_review_rating'],
                    ['role_id', $role->id]
                    ])->first();
                   
                   
                    

                    ?>
                            @if($view_product_question_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Question</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.user.product.comment')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View & Reply</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($view_products_answer_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.product.question.answer')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Answer</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($show_review_rating_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.user.product.review_rating')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Review & Rating</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif

                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">

                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">General Setting</span>

                                <span class="menu-arrow"></span>
                            </span>

                            <?php 
                    $role = DB::table('roles')->find(Auth::guard('admin')->user()->role_id);
                    $email_setting_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'email_setting_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $cache_clear_view_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'cache_clear_view'],
                    ['role_id', $role->id]
                    ])->first();
                    $empty_database_view_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'empty_database_view'],
                    ['role_id', $role->id]
                    ])->first();
                    $site_setup_view_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'site_setup_view'],
                    ['role_id', $role->id]
                    ])->first();
                    $shipping_charge_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'shipping_charge_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $general_setting_frontend_banner_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'general_setting_frontend_banner_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $general_setting_frontend_slider_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'general_setting_frontend_slider_index'],
                    ['role_id', $role->id]
                    ])->first();
                    $coupon_code_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                    ['permissions.name', 'coupon_code_index'],
                    ['role_id', $role->id]
                    ])->first();
                   
                   
                    

                    ?>
                            @if($site_setup_view_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.general.setting')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Site setup</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                          
                            @if($general_setting_frontend_slider_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Frontend Slider</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.slider.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($general_setting_frontend_banner_index_permission_active)
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Frontend Banner</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.banner.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add & View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endif
                            @if($email_setting_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.general.mail')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Email Setting</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($shipping_charge_index_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.delivery.rate')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Shipping Charge</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                            @if($empty_database_view_permission_active)
                            @if($gs->database_show == 1)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.setting.database')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Empty database </span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>


                            </div>
                            @else
                            @endif
                            @endif
                            @if( $cache_clear_view_permission_active)
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a href="{{route('admin.admin-cache-clear')}}">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black" />
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title"> Cache Clear</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                    </a>
                                </div>

                            </div>
                            @endif
                        </div>






                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
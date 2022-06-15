@extends('layout.admin.master')
@section('content')
@php 

$list=array();
$month = Carbon\Carbon::now()->format("m");
$year = Carbon\Carbon::now()->format("Y");

for($d=1; $d<=31; $d++)
{
    $time=mktime(12, 0, 0, $month, $d, $year);          
    if (date('m', $time)==$month)       
        $list[]=date('Y-m-d', $time);
        $cars_together = implode(", ", $list);
}


$mytime1 = Carbon\Carbon::now();
$mytime11= $mytime1->format("Y-m-d");
$mytime12 = Carbon\Carbon::now()->subDay(1);
$mytime22= $mytime12->format("Y-m-d");
$mytime13 = Carbon\Carbon::now()->subDay(2);
$mytime23= $mytime13->format("Y-m-d");
$mytime14 = Carbon\Carbon::now()->subDay(3);
$mytime24= $mytime14->format("Y-m-d");
$mytime15 = Carbon\Carbon::now()->subDay(4);
$mytime25= $mytime15->format("Y-m-d");
$mytime16 = Carbon\Carbon::now()->subDay(5);
$mytime26= $mytime16->format("Y-m-d");
$mytime17 = Carbon\Carbon::now()->subDay(6);
$mytime27= $mytime17->format("Y-m-d");
$mytime18 = Carbon\Carbon::now()->subDay(7);
$mytime28= $mytime18->format("Y-m-d");
$mytime19 = Carbon\Carbon::now()->subDay(8);
$mytime29= $mytime19->format("Y-m-d");
$mytime112 = Carbon\Carbon::now()->subDay(9);
$mytime31= $mytime112->format("Y-m-d");
$mytime113 = Carbon\Carbon::now()->subDay(10);
$mytime32= $mytime113->format("Y-m-d");
$mytime114 = Carbon\Carbon::now()->subDay(11);
$mytime33= $mytime114->format("Y-m-d");
$mytime115 = Carbon\Carbon::now()->subDay(12);
$mytime34= $mytime115->format("Y-m-d");
$mytime116 = Carbon\Carbon::now()->subDay(13);
$mytime35= $mytime116->format("Y-m-d");
$mytime117 = Carbon\Carbon::now()->subDay(14);
$mytime36= $mytime117->format("Y-m-d");
$mytime118 = Carbon\Carbon::now()->subDay(15);
$mytime37= $mytime118->format("Y-m-d");
$mytime119 = Carbon\Carbon::now()->subDay(16);
$mytime38= $mytime119->format("Y-m-d");

$mytime121 = Carbon\Carbon::now()->subDay(17);
$mytime39= $mytime121->format("Y-m-d");
$mytime122 = Carbon\Carbon::now()->subDay(18);
$mytime40= $mytime122->format("Y-m-d");
$mytime123 = Carbon\Carbon::now()->subDay(19);
$mytime41= $mytime123->format("Y-m-d");
$mytime124 = Carbon\Carbon::now()->subDay(20);
$mytime42= $mytime124->format("Y-m-d");
$mytime125 = Carbon\Carbon::now()->subDay(21);
$mytime43= $mytime125->format("Y-m-d");


$eventdatetime1 = Carbon\Carbon::now();
$eventdate1= $eventdatetime1->format("y-m-d");
$event1 = App\Models\Event::where('event_date',$eventdate1)->count('id');
$eventdatetime2 = Carbon\Carbon::now()->subDay(1);
$eventdate2= $eventdatetime2->format("y-m-d");
$event2 = App\Models\Event::where('event_date',$eventdate2)->count('id');
$eventdatetime3 = Carbon\Carbon::now()->subDay(2);
$eventdate3= $eventdatetime3->format("y-m-d");
$event3 = App\Models\Event::where('event_date',$eventdate3)->count('id');
$eventdatetime4 = Carbon\Carbon::now()->subDay(3);
$eventdate4= $eventdatetime4->format("y-m-d");
$event4 = App\Models\Event::where('event_date',$eventdate4)->count('id');
$eventdatetime5 = Carbon\Carbon::now()->subDay(4);
$eventdate5= $eventdatetime5->format("y-m-d");
$event5 = App\Models\Event::where('event_date',$eventdate5)->count('id');
$eventdatetime6 = Carbon\Carbon::now()->subDay(5);
$eventdate6= $eventdatetime6->format("y-m-d");
$event6 = App\Models\Event::where('event_date',$eventdate6)->count('id');
$eventdatetime7 = Carbon\Carbon::now()->subDay(6);
$eventdate7= $eventdatetime7->format("y-m-d");
$event7 = App\Models\Event::where('event_date',$eventdate7)->count('id');
$eventdatetime8 = Carbon\Carbon::now()->subDay(7);
$eventdate8= $eventdatetime8->format("y-m-d");
$event8 = App\Models\Event::where('event_date',$eventdate8)->count('id');
$eventdatetime9 = Carbon\Carbon::now()->subDay(8);
$eventdate9= $eventdatetime9->format("y-m-d");
$event9 = App\Models\Event::where('event_date',$eventdate9)->count('id');
$eventdatetime10 = Carbon\Carbon::now()->subDay(9);
$eventdate10= $eventdatetime10->format("y-m-d");
$event10 = App\Models\Event::where('event_date',$eventdate10)->count('id');

$eventdatetime11 = Carbon\Carbon::now()->subDay(10);
$eventdate11= $eventdatetime11->format("y-m-d");
$event11 = App\Models\Event::where('event_date',$eventdate10)->count('id');
$eventdatetime12 = Carbon\Carbon::now()->subDay(11);
$eventdate12= $eventdatetime12->format("y-m-d");
$event12 = App\Models\Event::where('event_date',$eventdate12)->count('id');
$eventdatetime13 = Carbon\Carbon::now()->subDay(12);
$eventdate13= $eventdatetime13->format("y-m-d");
$event13 = App\Models\Event::where('event_date',$eventdate13)->count('id');
$eventdatetime14 = Carbon\Carbon::now()->subDay(13);
$eventdate14= $eventdatetime14->format("y-m-d");
$event14 = App\Models\Event::where('event_date',$eventdate14)->count('id');
$eventdatetime15 = Carbon\Carbon::now()->subDay(14);
$eventdate15= $eventdatetime15->format("y-m-d");
$event15 = App\Models\Event::where('event_date',$eventdate15)->count('id');
$eventdatetime16 = Carbon\Carbon::now()->subDay(15);
$eventdate16= $eventdatetime16->format("y-m-d");
$event16 = App\Models\Event::where('event_date',$eventdate16)->count('id');
$eventdatetime17 = Carbon\Carbon::now()->subDay(16);
$eventdate17= $eventdatetime17->format("y-m-d");
$event17 = App\Models\Event::where('event_date',$eventdate17)->count('id');
$eventdatetime18 = Carbon\Carbon::now()->subDay(17);
$eventdate18= $eventdatetime18->format("y-m-d");
$event18 = App\Models\Event::where('event_date',$eventdate18)->count('id');
$eventdatetime19 = Carbon\Carbon::now()->subDay(18);
$eventdate19= $eventdatetime19->format("y-m-d");
$event19 = App\Models\Event::where('event_date',$eventdate19)->count('id');
$eventdatetime20 = Carbon\Carbon::now()->subDay(19);
$eventdate20= $eventdatetime20->format("y-m-d");
$event20 = App\Models\Event::where('event_date',$eventdate20)->count('id');
$eventdatetime21 = Carbon\Carbon::now()->subDay(20);
$eventdate21= $eventdatetime21->format("y-m-d");
$event21 = App\Models\Event::where('event_date',$eventdate21)->count('id');
$eventdatetime22 = Carbon\Carbon::now()->subDay(21);
$eventdate22= $eventdatetime22->format("y-m-d");
$event22 = App\Models\Event::where('event_date',$eventdate22)->count('id');




$orderDate1 = Carbon\Carbon::now();
$orderDateString1=$orderDate1->format("y-m-d");
$order1 = App\Models\Order::where('order_date',$orderDateString1)->count('id');
$orderDate2 = Carbon\Carbon::now()->subDay(1);

$orderDateString2=$orderDate2->format("y-m-d");
$order2 = App\Models\Order::where('order_date',$orderDateString2)->count('id');
$orderDate3 = Carbon\Carbon::now()->subDay(2);
$orderDateString3=$orderDate3->format("y-m-d");
$order3 = App\Models\Order::where('order_date',$orderDateString3)->count('id');
$orderDate4 = Carbon\Carbon::now()->subDay(3);
$orderDateString4=$orderDate4->format("y-m-d");
$order4 = App\Models\Order::where('order_date',$orderDateString4)->count('id');
$orderDate5 = Carbon\Carbon::now()->subDay(4);
$orderDateString5=$orderDate5->format("y-m-d");
$order5 = App\Models\Order::where('order_date',$orderDateString5)->count('id');
$orderDate6 = Carbon\Carbon::now()->subDay(5);
$orderDateString6=$orderDate6->format("y-m-d");
$order6 = App\Models\Order::where('order_date',$orderDateString6)->count('id');

$orderDate7 = Carbon\Carbon::now()->subDay(6);
$orderDateString7=$orderDate7->format("y-m-d");
$order7 = App\Models\Order::where('order_date',$orderDateString7)->count('id');
$orderDate8 = Carbon\Carbon::now()->subDay(7);
$orderDateString8=$orderDate8->format("y-m-d");
$order8 = App\Models\Order::where('order_date',$orderDateString8)->count('id');
$orderDate9 = Carbon\Carbon::now()->subDay(8);
$orderDateString9=$orderDate9->format("y-m-d");
$order9 = App\Models\Order::where('order_date',$orderDateString9)->count('id');
$orderDate10 = Carbon\Carbon::now()->subDay(9);
$orderDateString10=$orderDate10->format("y-m-d");
$order10 = App\Models\Order::where('order_date',$orderDateString10)->count('id');
$orderDate11 = Carbon\Carbon::now()->subDay(10);
$orderDateString11=$orderDate11->format("y-m-d");
$order11 = App\Models\Order::where('order_date',$orderDateString11)->count('id');
$orderDate12 = Carbon\Carbon::now()->subDay(11);
$orderDateString12=$orderDate12->format("y-m-d");
$order12 = App\Models\Order::where('order_date',$orderDateString12)->count('id');
$orderDate13 = Carbon\Carbon::now()->subDay(12);
$orderDateString13=$orderDate13->format("y-m-d");
$order13 = App\Models\Order::where('order_date',$orderDateString13)->count('id');
$orderDate14 = Carbon\Carbon::now()->subDay(13);
$orderDateString14=$orderDate14->format("y-m-d");
$order14 = App\Models\Order::where('order_date',$orderDateString14)->count('id');

$orderDate15 = Carbon\Carbon::now()->subDay(14);

$orderDateString15=$orderDate15->format("y-m-d");
$order15 = App\Models\Order::where('order_date',$orderDateString15)->count('id');
$orderDate16 = Carbon\Carbon::now()->subDay(15);
$orderDateString16=$orderDate16->format("y-m-d");
$order16 = App\Models\Order::where('order_date',$orderDateString16)->count('id');

$orderDate17 = Carbon\Carbon::now()->subDay(16);
$orderDateString17=$orderDate17->format("y-m-d");
$order17 = App\Models\Order::where('order_date',$orderDateString17)->count('id');
$orderDate18 = Carbon\Carbon::now()->subDay(17);
$orderDateString18=$orderDate18->format("y-m-d");
$order18 = App\Models\Order::where('order_date',$orderDateString18)->count('id');
$orderDate19 = Carbon\Carbon::now()->subDay(18);
$orderDateString19=$orderDate19->format("y-m-d");
$order19 = App\Models\Order::where('order_date',$orderDateString19)->count('id');
$orderDate20 = Carbon\Carbon::now()->subDay(19);
$orderDateString20=$orderDate20->format("y-m-d");
$order20 = App\Models\Order::where('order_date',$orderDateString20)->count('id');
$orderDate21 = Carbon\Carbon::now()->subDay(20);
$orderDateString21=$orderDate21->format("y-m-d");
$order21= App\Models\Order::where('order_date',$orderDateString21)->count('id');
$orderDate22 = Carbon\Carbon::now()->subDay(21);
$orderDateString22=$orderDate22->format("y-m-d");
$order22 = App\Models\Order::where('order_date',$orderDateString22)->count('id');


@endphp
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
     
                <!--end::Title-->
                <!--begin::Separator-->
                
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <form method="post" action="{{route('admin.employee.download')}}">
                        @csrf
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                   
                    
                  
                    <li class="breadcrumb-item text-muted">
                    <input type="date" class="form-control" name="from"
                                        value="{{ request()->input('from') }}" />
                    </li>

                    <li class="breadcrumb-item text-muted">
                    <input type="date" class="form-control" name="to"
                                        value="{{ request()->input('to') }}" />
                    </li>

                    <li class="breadcrumb-item text-muted">
                    <button type="submit" class="btn btn-success">Download Pdf</button>
                    </li>


                    <!--end::Item-->
                </ul>

                
                </form>

                <form method="get" action="{{route('admin.orders.export')}}">
                        @csrf
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                  
                    
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <li class="breadcrumb-item text-muted">
                    <input type="date" class="form-control" name="from"
                                        value="{{ request()->input('from') }}" />
                    </li>

                    <li class="breadcrumb-item text-muted">
                    <input type="date" class="form-control" name="to"
                                        value="{{ request()->input('to') }}" />
                    </li>

                    <li class="breadcrumb-item text-muted">
                    <button type="submit" class="btn btn-success">download excel</button>
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
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            @include('error.message')
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" style="font-size:30px">Average Order Per Customer</th>
                            <th scope="col" style="font-size:30px"><?=$customer ? $order/$customer : 0 ?></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" style="font-size:30px">Total Customer</th>
                            <td style="font-size:30px">{{$customer}}</td>

                        </tr>
                        <tr>
                            <th scope="row" style="font-size:30px">Total Order</th>
                            <td style="font-size:30px">{{$order}}</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-size:30px">Total Active User(last Two Month)</th>
                            <td colspan="2" style="font-size:30px">{{$last_two_month_login}}</td>

                        </tr>
                        <tr>
                            <th scope="row" style="font-size:30px">Total InActive User(More Then last Two Month)</th>
                            <td colspan="2" style="font-size:30px">{{$last_two_month_inactive}}</td>

                        </tr>
                    </tbody>
                </table>



                <!--end::Card header-->
                <!--begin::Card body-->

                <form method="get" route="? ">

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"><button value="" class=" btn btn-secondary form-control">Period
                                        From </button></th>
                                <th scope="col"><button value="" class=" btn btn-secondary form-control">To</button>
                                <th scope="col"><a href="{{route('admin.event.chart')}}"
                                        class=" btn btn-secondary form-control">Reset</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th> <input type="date" class="form-control" name="from"
                                        value="{{ request()->input('from') }}" /> </th>
                                <td><input type="date" class="form-control" name="to"
                                        value="{{ request()->input('to') }}" /></td>

                                <td><button value="" class=" btn btn-secondary form-control">Search</button></td>
                               


                            </tr>

                        </tbody>
                    </table>


                </form>



                <?php $total_amount = 0; ?>
                <?php $total_qty = 0; ?>
                <?php $total_revenue = 0; ?>
                @if(!empty($order_product))
                <!--begin::Table row-->
                @foreach($order_product  as $row)
                @php
                $product= App\Models\Product::find($row->product_id);
                $productqty = App\Models\OrderProduct::where('product_id',$product->id)->sum('quantity');

                @endphp

                <?php $total_amount =  $total_amount + (($product->price*$productqty) - ($product->buying_price*$productqty)); ?>
                <?php $total_qty =  $total_qty + $productqty; ?>

                <?php $total_revenue =  $total_revenue + (($product->price*$productqty)); ?>
                @endforeach
                @else

                @endif

                <?php $total_event_cost = 0; ?>

                @if(!empty($event))
                <!--begin::Table row-->
                @foreach($event as $row)


                <?php $total_event_cost =  $total_event_cost + ($row->event_cost); ?>

                @endforeach
                @else

                @endif
                <div class="card-body pt-0">

                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class="min-w-70px">Event Name</th>
                                <th class="min-w-70px">Event Date</th>
                                <th class="min-w-70px">Event Per Order</th>
                                <th class="min-w-70px">Event Cost</th>

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->

                        <tbody class="fw-bold text-gray-600">
                            @if(!empty($event))
                            <!--begin::Table row-->
                            @foreach($event as $row)

                            <tr>

                                <td>


                                    {{ $row->event_name}}

                                </td>

                                <td>{{ $row->event_date}}</td>
                                <td>{{ $row->order_number}}</td>

                                <td>{{$gs->currency}}&nbsp;&nbsp;{{$row->event_cost}}</td>

                            </tr>


                            @endforeach
                            @else

                            @endif
                            <!--end::Table row-->
                        </tbody>

                        <!--end::Table body-->
                    </table>
                    <hr>
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class="min-w-70px">Total Revenue</th>
                                <th class="min-w-70px">{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_revenue; ?></th>


                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->

                        <tbody class="fw-bold text-gray-600">


                            <tr>
                                <td>
                                    Total Profit
                                </td>

                                <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount - $total_event_cost; ?></td>

                            </tr>

                            <tr>
                                <td>
                                    Total Product Sale(Qty)
                                </td>

                                <td><?php echo $total_qty; ?></td>

                            </tr>



                            <!--end::Table row-->
                        </tbody>

                        <!--end::Table body-->
                    </table>
                    <!--begin::Table-->

                    <!--end::Table-->
                </div>

                <hr>
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

                                <th class="min-w-70px">Product Name</th>
                                <th class="min-w-70px">Buying Price</th>
                                <th class="min-w-70px">Selling Price</th>
                                <th class="min-w-70px">Product Qty</th>

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->

                        <tbody class="fw-bold text-gray-600">
                            @if(!empty($order_product))
                            <!--begin::Table row-->
                            @foreach($order_product as $row)
                            @php
                            $product= App\Models\OrderProduct::find($row->product_id);
                            $productqty =
                            App\Models\OrderProduct::where('product_id',$product->id)->sum('quantity');

                            @endphp
                            <tr>

                                <td>


                                    {{ $product->product_name}}

                                </td>
                                <td>{{$gs->currency}}&nbsp;&nbsp;{{ $product->buying_price}}</td>

                                <td>{{$gs->currency}}&nbsp;&nbsp;{{ $product->price}}</td>

                                <td>{{$productqty}}</td>
                                <!--end::Category=-->
                                <!--begin::Type=-->
                                <!-- <td>
                                   
                                    <div class=""><input type="checkbox" {{$row->status=='1'? 'checked':''}}
                                            id="categoryStatus" data-id="{{$row->id}}" data-toggle="toggle"
                                            data-on="Enabled" data-off="Disabled"></div>
                                   
                                </td> -->
                                <!--end::Type=-->
                                <!--begin::Action=-->

                                <!--end::Action=-->
                            </tr>
                            <!--end::Table row-->

                            @endforeach
                            @else

                            @endif
                            <!--end::Table row-->
                        </tbody>

                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>

                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-8">
                        <div class="col-xl-12">
                            <!--begin::Charts Widget 1-->
                            <div class="card card-xl-stretch mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Event with Order</span>
                      
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                  
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Charts Widget 1-->
                        </div>

                        

                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                    <!--begin::Row-->

                    <!--end::Row-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection

@push('order_js')
<script>


   

  

    // Charts widgets
    var initChartsWidget1 = function() {
        var element = document.getElementById("kt_charts_widget_1_chart");

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-danger');
        var secondaryColor = KTUtil.getCssVariableValue('--bs-primary');

        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Event Number',
                data: [{{$event1}}, {{$event2}}, {{$event3}}, {{$event4}}, {{$event5}}, {{$event6}}, {{$event7}}, {{$event8}}, {{$event9}}, {{$event10}}, {{$event11}}, {{$event12}}, {{$event13}}, {{$event14}}, {{$event15}}, {{$event16}}, {{$event17}}, {{$event18}}, {{$event19}}, {{$event20}}, {{$event21}}, {{$event22}}]
            }, {
                name: 'Order Number',
                data: [{{$order1}},{{$order2}},{{$order3}},{{$order4}},{{$order5}},{{$order6}},{{$order7}},{{$order8}},{{$order9}},{{$order10}},{{$order11}},{{$order12}},{{$order13}},{{$order14}},{{$order15}},{{$order16}},{{$order17}},{{$order18}},{{$order19}},{{$order20}},{{$order21}},{{$order22}}]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    borderRadius: 4
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['{{$mytime11}}', '{{$mytime22}}', '{{$mytime23}}', '{{$mytime24}}', '{{$mytime25}}', '{{$mytime26}}','{{$mytime27}}','{{$mytime28}}','{{$mytime29}}','{{$mytime31}}','{{$mytime32}}','{{$mytime33}}','{{$mytime34}}','{{$mytime35}}','{{$mytime36}}','{{$mytime37}}','{{$mytime38}}','{{$mytime39}}','{{$mytime40}}','{{$mytime41}}','{{$mytime42}}','{{$mytime43}}'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return  val 
                    }
                }
            },
            colors: [baseColor, secondaryColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();      
    }

  
    var initChartsWidget2 = function() {
        var element = document.getElementById("kt_charts_widget_2_chart");

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-danger');
        var secondaryColor = KTUtil.getCssVariableValue('--bs-primary');

        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Event Number',
                data: [{{$event1}}, {{$event2}}, {{$event3}}, {{$event4}}, {{$event5}}, {{$event6}}, {{$event7}}, {{$event8}}, {{$event9}}, {{$event10}}, {{$event11}}, {{$event12}}, {{$event13}}, {{$event14}}, {{$event15}}, {{$event16}}, {{$event17}}, {{$event18}}, {{$event19}}, {{$event20}}, {{$event21}}, {{$event22}}]
            }, {
                name: 'Order Number',
                data: [{{$order1}},{{$order2}},{{$order3}},{{$order4}},{{$order5}},{{$order6}},{{$order7}},{{$order8}},{{$order9}},{{$order10}},{{$order11}},{{$order12}},{{$order13}},{{$order14}},{{$order15}},{{$order16}},{{$order17}},{{$order18}},{{$order19}},{{$order20}},{{$order21}},{{$order22}}]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    borderRadius: 4
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['{{$mytime11}}', '{{$mytime22}}', '{{$mytime23}}', '{{$mytime24}}', '{{$mytime25}}', '{{$mytime26}}','{{$mytime27}}','{{$mytime28}}','{{$mytime29}}','{{$mytime31}}','{{$mytime32}}','{{$mytime33}}','{{$mytime34}}','{{$mytime35}}','{{$mytime36}}','{{$mytime37}}','{{$mytime38}}','{{$mytime39}}','{{$mytime40}}','{{$mytime41}}','{{$mytime42}}','{{$mytime43}}'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return  val 
                    }
                }
            },
            colors: [baseColor, secondaryColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();      
    }
   



    </script>
@endpush
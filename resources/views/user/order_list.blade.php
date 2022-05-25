@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="my-order">
    <div class="content-section">
        <div class="d-flex">
            <div class="row col-lg-12">

                @include('user.setting.sider_bar')
                <div class="col-12 col-md-8 col-lg-8 col-sm-12 mt-5">
                    <div class="my-order-section mr-0">
                        <div class="card filter-section">
                            <div class="d-flex align-items-center ml-0 mr-0">
                                <div class="title-header ml-0 ">
                                    <p class="title text-capitalize">My product order</p>
                                    <p class="sub-title text-capitalize">Your total order: {{$ordercount}}</p>
                                    @include('error.message')
                                </div>

                                <!-- <form class="d-flex mr-0">
                            <div class="order-id form-inline">
                                <label for="order_id" class="form-control-label">Order Id:</label>
                                <input type="text" id="order_id" name="order_id" class="form-control ml-2"
                                    placeholder="Order Id" value="" />
                            </div>
                            <div class="status">
                                <label for="status" class="form-control-label">Status:</label>
                                <select class="custom-select" id="status" name="status">
                                    <option value="Processing">Processing</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Cancel">Cancel</option>
                                    <option value="Hold">Hold</option>
                                    <option value="Printing">Printing</option>
                                    <option value="Complete">Complete</option>
                                </select>
                            </div>

                            <div class="button-filter">
                                <button type="submit" class="btn btn-filter-submit">Submit</button>
                            </div>
                        </form> -->
                            </div>
                        </div>
                        <div class="card order-section mt-2 col-12 col-lg-12 col-md-12 col-sm-12">
                            @foreach($order_list as $row)
                            @php
                            $countProduct =
                            App\Models\OrderProduct::where('randomOrder_id',$row->order_id)->count('product_id');
                            $orderProduct = App\Models\OrderProduct::where('randomOrder_id',$row->order_id)->get();

                            @endphp
                            <div class="item ml-0">
                                <div class="order-heading col-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class=" ">
                                        <p class="ml-0">Order Id: <span>{{$row->order_id}}</span>
                                            (<span>{{$countProduct}}</span> items)</p>

                                        <p>Status: <span>{{$row->status}}</span></p>
                                        <p>Payable : <span class="amount">TK. {{$row->grand_total}}</span></p>
                                        @if($row->status == 'New')

                                        <form method="post" action="{{route('user.order.status',$row->id)}}">
                                            @csrf
                                            <input type="hidden" id="status" name="id" class="form-control ml-2"
                                                value="{{$row->id}}" />
                                            <button type="submit" class="form-control text-danger" value="">
                                                <input type="hidden" id="status" name="status" class="form-control ml-2"
                                                    value="Cancelled" />Canelled Order
                                            </button>


                                        </form>
                                        @else
                                        @endif

                                        <!--                                    <p th:if="${order.userPaymentInfo.paymentMethod.id == 4 && order.bkashTransactionId == null}">Paid to bkash# <b>01841 300 401</b></p>-->

                                        <!--                                    <p th:if="${order.userPaymentInfo.paymentMethod.id == 1 && order.transactionId == null}"><a th:href="@{'/order/place/ssl-payment?order_id=' + ${order.id}}"><button class="btn btn-payment-card">Pay by Card</button></a></p>-->
                                    </div>
                                </div>
                                <div class="order-list-wrapper mt-3">
                                    <div class="d-flex align-items-center flex-wrap ml-0">
                                        @foreach($orderProduct as $OrderProductdetails)
                                        @php
                                        $Product = App\Models\Product::find($OrderProductdetails->product_id);
                                        @endphp
                                        <div class="product-list ml-0 col-lg-12 col-md-12 col-sm-12">
                                            <div class="media">
                                                <img src="{{asset('public/assets/images/product/'.$Product->image)}}"
                                                    alt="product" class="img-fluid">

                                                <div class="media-body">
                                                    <p class="text-bold">
                                                        {{$OrderProductdetails->product_name}}</p>
                                                    <p class="brand-name">{{$OrderProductdetails->model_no}}</p>
                                                    <p class="qty">Qty: {{$OrderProductdetails->quantity}}</p>
                                                    <span class="amount">Unit Cost
                                                        TK.{{$OrderProductdetails->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
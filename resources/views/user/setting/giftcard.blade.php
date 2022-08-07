@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')

<section id="my-profile" class="profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
        @include('user.setting.sider_bar')

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-5 mb-5">
            <div class="card-group">

                <div class="card p-4">
                    <h2 class="text-center login-page-text font-weight-bold">User Giftcard Balance</h2>

                    <hr class="my-3">
                    <div id="registerError"></div>

                    <span class="text" style="font-weigth:700">GiftCard Active
                        Balance:{{$giftcard}}&nbsp;&nbsp;{{$gs->currency}}</span>
                        &nbsp;&nbsp;
                    <div class="table-responsive">
                        <table class="table">
                        
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Giftcard Name</th>
                                    <th scope="col">Purchase Price</th>
                                    <th scope="col">Giftcard Value</th>
                                    <th scope="col">Giftcard Duration</th>
                                    <th scope="col">Giftcard Status</th>
                                    <th scope="col">Giftcard Expired date</th>
                                    <th scope="col">Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($giftcardDeatils as $row)
                                @if($row->is_used == 'yes')
                                <tr style="background:red">
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->purchase_price}}&nbsp;&nbsp;{{$gs->currency}}</td>
                                    <td>{{$row->giftcard_value}}&nbsp;&nbsp;{{$gs->currency}}</td>
                                    <td>{{$row->duration}}&nbsp;days</td>
                                
                                    <td>
                                    @if($row->status =='New')
                                    Pendding
                                    @elseif($row->status =='Completed')
                                    Completed
                                    @elseif($row->status =='Cancelled')
                                    Not Approved
                                    @endif
                                    </td>
                                    <td>{{$row->expired_date}}</td>
                                    <td>Used</td>
                                </tr>
                                @else
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->purchase_price}}&nbsp;&nbsp;{{$gs->currency}}</td>
                                    <td>{{$row->giftcard_value}}&nbsp;&nbsp;{{$gs->currency}}</td>
                                    <td>{{$row->duration}}&nbsp;days</td>
                                
                                    <td>
                                    @if($row->status =='New')
                                    Pendding
                                    @elseif($row->status =='Completed')
                                    Completed
                                    @elseif($row->status =='Cancelled')
                                    Not Approved
                                    @endif
                                    </td>
                                    <td>{{$row->expired_date}}</td>
                                    <td>Not Used</td>
                                </tr>

                                @endif
                               @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>


            </div>
        </div>

    </div>
</section>

@include('layout.front.footer');

@endsection
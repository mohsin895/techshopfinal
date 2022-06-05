@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="my-profile" class="profile">
    <div class="row justify-content-center h-120vh" id="register-form-box">
       
            <div class="row col-12 col-sm-12 col-md-12 col-lg-12">

                @include('user.setting.sider_bar')
                <div class=" col-12 col-md-6 col-lg-6 mt-5">

                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Your Referral Income Balance</div>
                        <div class="card-body text-success">
                            <span class="text text-left text-bold">You Referral Total Income
                                :&nbsp;&nbsp;{{$amount}}
                                &nbsp;{{$gs->currency}}</span>
                            <p class="card-text"><span class="text text-left text-bold">You Referral Total Withdraw:

                                    {{$totalWithdraw}}&nbsp;&nbsp;{{$gs->currency}}</span></p>
                            <p class="card-text"><span class="text text-left text-bold">You Referral Net Balance:

                                    {{$amount - $totalWithdraw}}&nbsp;&nbsp;{{$gs->currency}}</span></p>
                        </div>

                    </div>











                    <div class="col-md-12 text-center mt-5">
                        <a href="{{route('user.referall.withdraw',Auth::user()->id)}}"
                            class="btn btn-success">Withdraw</a>
                    </div>
                </div>
            </div>
        </div>
   


    </div>
</section>
@endsection
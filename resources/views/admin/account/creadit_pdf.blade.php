<!doctype html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
        body{
          background: #FFFFFF;
        }
        table,
        th,
        td {
          border: 1px solid black;
          border-collapse: collapse;
        }

        .hed {
          text-align: center;
          margin-top: 100px;
        }

         tr td,
         tr th {
          padding: 7px !important;
        }

        table tr {
          padding: 10px !important;
        }
        tr:nth-child(even) {
            background-color: #FFFFFF;
        }
        .lst-title{
          margin-left: 15px;
          font-size: 20px;
        }
        .logo{
          top: 2rem;
          height: 80px;
          position: absolute;
          left: 43%;
        }
        div.text-center{
            
  text-align: center;

        }
        
        .page {
    background: var(--white);
    display: block;
    margin: 0 auto;
    position: relative;
    box-shadow: var(--pageShadow);
}

.page[size="A4"] {
    width: 21cm;
    height: 29.7cm;
    overflow: hidden;
}

         @media print {
            /* * {
                font-size:12px;
                line-height: 20px;
            }
            td,th {padding: 5px 0;} */

            .hidden-print {
                display: none !important;
            }

        }
      </style>

      <title>{{$gs->site_title}} Report</title>
    </head>

    <body>
        
        <div class="mt-5 printBtn hidden-print" printBtn="A4">
        <table>
            <tr>
                <td><a href="{{route('admin.accounting')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a> </td>
                <td><button onclick="window.print();" class="btn btn-primary"><i class="dripicons-print"></i> Print</button></td>
            </tr>
           
        </table>
       
    </div>
      <img class="logo text-center" src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}" alt="" >
      &nbsp;&nbsp;&nbsp;
      <h1 class="hed">{{$gs->site_title}}</h1>
       <div class="text-center"> {{$gs->address}}</div>
                                        <div class="text-center">{{$gs->mobile1}}</div>
                                        <div class="text-center"><a href="{{url('/')}}">{{$gs->email1}} &nbsp;
                                
                                   </a>
      <h4 class="lst-title">{{$gs->site_title}} Report</h4>
      <table style="width:100%;">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th> Sub Total</th>
            <th> Giftcard Selling Price</th>
            <th>Discount</th>
            <th> Shipping Charge</th>
            <th> Vat</th>
            <!-- <th>Giftcard</th> -->
            <th>Grand Sub Total</th>
           
          </tr>
        </thead>

        <tbody>
        <?php $subtotal_amount = 0; ?>
        <?php $total_amount = 0; ?>
        <?php $total_discount = 0; ?>
        <?php $total_vat = 0; ?>
        <?php $total_shipping = 0; ?>
        <?php $total_giftcard = 0; ?>
        <?php $giftcard_amount = 0; ?>
          @foreach($account as $data)
          <tr>
            <td>{{$data->order_id}}</td>
            <td>{{$data->user_email}}</td>
            <td>{{$data->phone}}</td>
            <td>@if(!empty($data->subtotal)){{$gs->currency}}&nbsp;&nbsp;{{$data->subtotal}}@else @endif</td>
            <?php $subtotal_amount =  $subtotal_amount + $data->subtotal; ?>
            <td>@if(!empty($data->giftcard_purchase_price)){{$gs->currency}}&nbsp;&nbsp;{{$data->giftcard_purchase_price}} @else @endif</td>
            <?php $giftcard_amount =  $giftcard_amount + $data->giftcard_purchase_price; ?>
            
            <td>@if(!empty($data->discount_amount)){{$gs->currency}}&nbsp;&nbsp;{{$data->discount_amount}} @else @endif</td>
            <?php $total_discount =  $total_discount + $data->discount_amount; ?>
            
            <td>@if(!empty($data->vat)){{$gs->currency}}&nbsp;&nbsp;{{$data->vat}} @else @endif</td>
            <?php $total_vat =  $total_vat + $data->vat; ?>
            
            <td>@if(!empty($data->shipping)){{$gs->currency}}&nbsp;&nbsp;{{$data->shipping}}@else @endif</td>
            <?php $total_shipping =  $total_shipping + $data->shipping; ?>
            
            <!-- <td>{{$gs->currency}}&nbsp;&nbsp;{{$data->giftcard_amount}}</td> -->
            <?php $total_giftcard =  $total_giftcard + $data->giftcard_amount; ?>
           
            <td>@if(!empty($data->grand_total)){{$gs->currency}}&nbsp;&nbsp;{{$data->grand_total}}
            <?php $total_amount =  $total_amount + $data->grand_total; ?> @else 
          {{$gs->currency}}&nbsp;&nbsp;{{$giftcard_amount}}
            <?php $total_amount = $total_amount + $data->giftcard_purchase_price; ?>  @endif</td>
      

          
           
          </tr>
          @endforeach
          <tr>
            <td></td>
            <td></td>
            <td></td>
            
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $subtotal_amount; ?></td>
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $giftcard_amount; ?></td>
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_discount; ?></td>
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_vat; ?></td>
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_shipping; ?></td>
            <!-- <td>{{$gs->currency}} -&nbsp;&nbsp;<?php echo $total_giftcard; ?></td> -->
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount + $giftcard_amount; ?></td>
           
           
          </tr>
        </tbody>
      </table>

    </body>

    </html>
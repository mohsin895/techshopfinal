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
                <td><a href="{{url('admin/event/chart')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</a> </td>
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
            <th>Grand Sub Total</th>
           
          </tr>
        </thead>

        <tbody>
        <?php $total_amount = 0; ?>
          @foreach($order_product as $data)
          <tr>
            <td>{{$data->order_id}}</td>
            <td>{{$data->user_email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$gs->currency}}&nbsp;&nbsp;{{$data->grand_total}}</td>
            <?php $total_amount =  $total_amount + $data->grand_total; ?>
           
          </tr>
          @endforeach
          <tr>
            <td></td>
            <td></td>
            <td>Grand Total</td>
            <td>{{$gs->currency}}&nbsp;&nbsp;<?php echo $total_amount; ?></td>
           
           
          </tr>
        </tbody>
      </table>

    </body>

    </html>
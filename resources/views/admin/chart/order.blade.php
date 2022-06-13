@extends('layout.admin.master')
@section('content')


<style>

    /* .center {
    margin: auto;
    width: 100%;
    padding: 10px;
    } */

    .bx{
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
      padding: 5px 10px 10px 0px;
      border-radius: 15px;
      width: 80%;
      align-items: center;
      margin: auto;
    }

    .bx-1{
      box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, #002db3 0px 0px 0px 1px;
      padding: 8px 8px 4px 8px;
      margin-right: 3px;
      margin-top: 3px;
    }

    .bx-2{
    
      float: center;
      text-align: center;
      font-size: 10px;
      padding: 5px 5px 0px 5px;
      margin-bottom: -10px;
      margin-top: -5px;
      margin-right: 2px;
      font-weight: bold;
      
    }
    
    .bx-2-txt{
      border: #002db3 1px solid;
      float: right;
      padding: 3px;
    }
    

</style>

{{-- order report chart start --}}

<div class="bx mb-5">
        <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Order Report</h4>
        </div>
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper monthOrderReport">
          {{-- <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>939</span> hrs <br> 
                                                                                 Avg Working Hour &emsp;&nbsp;&nbsp;: <span>31.3</span> hrs</h6></div>
            <canvas id="monthlyBar3" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">November, 2021</h5>
          </div>
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>1007</span> hrs <br> 
              Avg Working Hour &emsp;&nbsp;&nbsp;: <span>33.6</span> hrs</h6></div>
              
            <canvas id="monthlyBar2" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">December, 2021</h5>
          </div>
          <div class="swiper-slide">
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>784</span> hrs <br> 
              Avg Working Hour &emsp;&nbsp;&nbsp;: <span>26.13</span> hrs</h6></div>
            <canvas id="monthlyBar1" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3" style="color: #002db3;">January, 2022</h5>
          </div> --}}
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
  
   </div>

   {{-- order report chart ends --}}


   {{-- sell report chart starts --}}

   <div class="bx mb-5">
    <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Sell Report</h4>
    </div>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper monthSellReport">
      {{-- <div class="swiper-slide">
        <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>939</span> hrs <br> 
                                                                             Avg Working Hour &emsp;&nbsp;&nbsp;: <span>31.3</span> hrs</h6></div>
        <canvas id="monthlyBar3" style="width:50%; padding: 15px;"></canvas>
        <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">November, 2021</h5>
      </div>
      <div class="swiper-slide">
        <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>1007</span> hrs <br> 
          Avg Working Hour &emsp;&nbsp;&nbsp;: <span>33.6</span> hrs</h6></div>
          
        <canvas id="monthlyBar2" style="width:50%; padding: 15px;"></canvas>
        <h5 class="text-center pt-3" style="color: #002db3;">December, 2021</h5>
      </div>
      <div class="swiper-slide">
        <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>784</span> hrs <br> 
          Avg Working Hour &emsp;&nbsp;&nbsp;: <span>26.13</span> hrs</h6></div>
        <canvas id="monthlyBar1" style="width:50%; padding: 15px;"></canvas>
        <h5 class="text-center pt-3" style="color: #002db3;">January, 2022</h5>
      </div> --}}
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

</div>

{{-- sell report chart ends --}}

{{-- Profit report chart starts --}}

<div class="bx mb-5">
  <div class="card-title mt-3" style="padding-left: 15px; border-left: 4px solid blue;"><h4>Monthly Profit Report</h4>
  </div>
<!-- Swiper -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper monthProfitReport">
    {{-- <div class="swiper-slide">
      <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>939</span> hrs <br> 
                                                                           Avg Working Hour &emsp;&nbsp;&nbsp;: <span>31.3</span> hrs</h6></div>
      <canvas id="monthlyBar3" style="width:50%; padding: 15px;"></canvas>
      <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">November, 2021</h5>
    </div>
    <div class="swiper-slide">
      <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>1007</span> hrs <br> 
        Avg Working Hour &emsp;&nbsp;&nbsp;: <span>33.6</span> hrs</h6></div>
        
      <canvas id="monthlyBar2" style="width:50%; padding: 15px;"></canvas>
      <h5 class="text-center pt-3" style="color: #002db3;">December, 2021</h5>
    </div>
    <div class="swiper-slide">
      <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Working Hour &emsp;: <span>784</span> hrs <br> 
        Avg Working Hour &emsp;&nbsp;&nbsp;: <span>26.13</span> hrs</h6></div>
      <canvas id="monthlyBar1" style="width:50%; padding: 15px;"></canvas>
      <h5 class="text-center pt-3" style="color: #002db3;">January, 2022</h5>
    </div> --}}
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

</div>

{{-- Profit report chart ends --}}

@endsection
@push('order_js')

<!-- Chart Js -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<!-- Swiper JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



<script>
    //Initialize Swiper JS Start

  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    initialSlide: 12, // first active initialized to slide 3
  });

// Swiper JS end


let monthOrderReport = document.querySelector('.monthOrderReport');
let monthSellReport = document.querySelector('.monthSellReport');
let monthProfitReport = document.querySelector('.monthProfitReport');

function getMonthName(month) {
    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
    return monthNames[month-1];
}


//order chart js
$.ajax({
    type: "get",
    url: "../order/last12MonthOrderData",
    dataType: "json",
    success: function (response) {

        for (const IR of response) {

            const individualGraphDiv = document.createElement("div");
            individualGraphDiv.className = "swiper-slide"
            individualGraphDiv.innerHTML = `
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Order &emsp;&emsp;: <span>`+ IR.totalOrder +`</span><br> 
                                                                                Order Per Day  &emsp;: <span>`+ IR.avgOrder.toFixed(2) +`</span></h6></div>
            <canvas id="monthlyBar` +(IR.month[0])+`` +(IR.month[1]) + `" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">` + getMonthName(IR.month[0]) + `, 20`+ IR.month[1] + `</h5>`
            monthOrderReport.append(individualGraphDiv);

            var xValues = IR.dayesOfMonth;
            var yValues = IR.orderArray;
            var barColors = "#4d4dff";

            new Chart("monthlyBar"+(IR.month[0])+""+(IR.month[1])+"", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues,
                        barThickness: 20,
                        maxBarThickness: 20,
                    }]
                },

                options:{

                legend:{
                    display: false,
                },

                title: {
                    display: false,
                    text: "Monthly Order Report",
                    fontSize: 20
                },

                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                suggestedMin: 0, 
                                //suggestedMax: 30,
                                callback: function(value){
                                    return value+ " "; //For unit hrs
                                }
                            }
                        }]
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'single',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return  'Total Order : ' + tooltipItems.yLabel;
                            }
                        }
                    }
                }
            });
        }
    }
});


//sell chart js
$.ajax({
    type: "get",
    url: "../order/last12MonthSellData",
    dataType: "json",
    success: function (response) {
        // console.log(response);
        for (const IR of response) {

            const individualGraphDiv = document.createElement("div");
            individualGraphDiv.className = "swiper-slide"
            individualGraphDiv.innerHTML = `
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Sell &emsp;&emsp;: <span>`+ IR.totalSell +`</span><br> 
                                                                                Sell Per Day  &emsp;: <span>`+ IR.avgSell.toFixed(2) +`</span></h6></div>
            <canvas id="monthlySellBar` +(IR.month[0])+`` +(IR.month[1]) + `" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">` + getMonthName(IR.month[0]) + `, 20`+ IR.month[1] + `</h5>`
            monthSellReport.append(individualGraphDiv);

            var xValues = IR.dayesOfMonth;
            var yValues = IR.sellArray;
            var barColors = "#4d4dff";

            new Chart("monthlySellBar"+(IR.month[0])+""+(IR.month[1])+"", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues,
                        barThickness: 20,
                        maxBarThickness: 20,
                    }]
                },

                options:{

                legend:{
                    display: false,
                },

                title: {
                    display: false,
                    text: "Monthly Sell Report",
                    fontSize: 20
                },

                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                suggestedMin: 0, 
                                //suggestedMax: 30,
                                callback: function(value){
                                    return value+ " "; //For unit hrs
                                }
                            }
                        }]
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'single',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return  'Total Sell : ' + tooltipItems.yLabel;
                            }
                        }
                    }
                }
            });
        }
    }
});


// profit chart js
$.ajax({
    type: "get",
    url: "../order/last12MonthProfitData",
    dataType: "json",
    success: function (response) {
        // console.log(response);
        for (const IR of response) {

            const individualGraphDiv = document.createElement("div");
            individualGraphDiv.className = "swiper-slide"
            individualGraphDiv.innerHTML = `
            <div class="bx-1" style="float:right;"><h6 style="color: #002db3;">Total Profit &emsp;&emsp;: <span>`+ IR.totalProfit.toFixed(2) +` `+ IR.currency['currency'] + `</span><br> 
                                                                                Profit Per Day  &emsp;: <span>`+ IR.avgProfit.toFixed(2) +` `+ IR.currency['currency'] + `</span></h6></div>
            <canvas id="monthlyProfitBar` +(IR.month[0])+`` +(IR.month[1]) + `" style="width:50%; padding: 15px;"></canvas>
            <h5 class="text-center pt-3 monthWorkReportMY" style="color: #002db3;">` + getMonthName(IR.month[0]) + `, 20`+ IR.month[1] + `</h5>`
            monthProfitReport.append(individualGraphDiv);

            var xValues = IR.dayesOfMonth;
            var yValues = IR.ProfitArray;
            var barColors = "#4d4dff";

            new Chart("monthlyProfitBar"+(IR.month[0])+""+(IR.month[1])+"", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues,
                        barThickness: 20,
                        maxBarThickness: 20,
                    }]
                },

                options:{

                legend:{
                    display: false,
                },

                title: {
                    display: false,
                    text: "Monthly Profit Report",
                    fontSize: 20
                },

                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                suggestedMin: 0, 
                                //suggestedMax: 30,
                                callback: function(value){
                                    return value+ " "; //For unit hrs
                                }
                            }
                        }]
                    },
                    tooltips: {
                        enabled: true,
                        mode: 'single',
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return  'Total Profit : ' + tooltipItems.yLabel.toFixed(2) +' '+ IR.currency['currency'];
                            }
                        }
                    }
                }
            });
        }
    }
});
</script>

@endpush
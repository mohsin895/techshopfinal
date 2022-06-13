<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\GeneralSetting;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class OrderChartController extends Controller
{
   
    public function index()
 {
   
   $data['day1_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                         ->whereDay('created_at',Carbon::now()->day)->count();
                        
  $data['day2_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                         ->whereDay('created_at',Carbon::now()->subDay(1))->count();
                         
  $data['day3_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(2))->count();
                      //  dd($data['day3_orders']);
   $data['day4_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(3))->count();
                       
  $data['day5_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(4))->count();
  $data['day6_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                     ->whereDay('created_at',Carbon::now()->subDay(5))->count();
                  
   $data['day7_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                        ->whereDay('created_at',Carbon::now()->subDay(6))->count();
                        $dm   =  Carbon::now()->addMonth();
                        $data['day2_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                        ->whereDay('created_at',Carbon::now()->subDay(1))->count();
                        
 $data['day8_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(7))->count();
  $data['day9_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(8))->count();
 $data['day10_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(9))->count();
 $data['day11_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
 
                    ->whereDay('created_at',Carbon::now()->subDay(10))->count();
                 
  $data['day12_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(11))->count();


   $data['day13_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                         ->whereDay('created_at',Carbon::now()->subDay(12))->count();
                         
  $data['day16_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(15))->count();
 $data['day14_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(13))->count();
  $data['day15_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(14))->count();
  $data['day17_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                     ->whereDay('created_at',Carbon::now()->subDay(16))->count();
                  
   $data['day18_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                        ->whereDay('created_at',Carbon::now()->subDay(17))->count();
                        
    $data['day19_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
  
                        ->whereDay('created_at',Carbon::now()->subDay(18))->count();
                        
 $data['day20_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(19))->count();
  $data['day21_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(20))->count();
 $data['day22_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                      ->whereDay('created_at',Carbon::now()->subDay(21))->count();
 $data['day23_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
 
                    ->whereDay('created_at',Carbon::now()->subDay(22))->count();
                 
  $data['day24_orders'] = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(23))->count();

                      //  Monthly Chart
    $data['current_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                      ->whereMonth('created_at',Carbon::now()->month)->count();
$data['last_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                      ->whereMonth('created_at',Carbon::now()->subMonth(1))->count();
$data['last_to_last_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(2))->count();
                    $data['last_to_three_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(3))->count();
                    $data['last_to_four_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(5))->count();
                    $data['last_to_five_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(4))->count();
                    $data['last_to_six_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(6))->count();
                    $data['last_to_seven_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(7))->count();
                    $data['last_to_eight_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(8))->count();
                    $data['last_to_nine_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(9))->count();
                    $data['last_to_ten_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(10))->count();
                    $data['last_to_eleven_month_orders'] = Order::whereYear('created_at',Carbon::now()->year)
                    ->whereMonth('created_at',Carbon::now()->subMonth(11))->count();
                     

      //  Years chart 
      
 $data['last_to_six_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(6))->count();
 $data['last_to_five_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(5))->count();     
 $data['last_to_four_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(4))->count();    
 $data['last_to_three_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(3))->count();     
      
$data['last_to_two_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(2))->count();
$data['last_year_orders'] = Order::whereYear('created_at',Carbon::now()->subYear(1))->count();
$data['current_year_orders'] = Order::whereYear('created_at',Carbon::now()->year)->count();


   return view('admin.chart.order',$data);
 }

 public function last12MonthOrderData ()
 {
  $individualReport = [];
  $today = Carbon::now()->format('d');

  for ($i=11; $i>=0; $i--) {  
    
      $Order = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month)->get();   // gets only the data from previous month

      $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at));

      //$numberofFriday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri");
      //$numberofSaturday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat");

      // $totalWorkDay = $DaysInMonth - count($numberofFriday) - count($numberofSaturday);
      $totalOrder = 0;
      $avgOrder = 0;

      $orderArray = [];
      $dayesOfMonth = [];
      $months = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month);
      for ($j=0; $j < $DaysInMonth; $j++) { 

          array_push($dayesOfMonth, ($j+1));
          $sub = DB::table( DB::raw("({$months->toSql()}) as sub"))->mergeBindings($months->getQuery())->whereDay('created_at', '=', ($j+1))->count(); 

          if ($sub != 0) {
              array_push($orderArray, ($sub));
              $totalOrder+=($sub);
          } 
          else {
              array_push($orderArray, 0);
          }
      }

      // array_push($individualReport, [
      //     'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
      //     'totalOrder' => $totalOrder,
      //     'dayesOfMonth' => $dayesOfMonth,
      //     'orderArray' => $orderArray
      // ]);

      if ($i == 0) {
        array_push($individualReport, [
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalOrder' => $totalOrder,
          'dayesOfMonth' => $dayesOfMonth,
          'orderArray' => $orderArray,
          'avgOrder' => $totalOrder/$today
      ]);
      } else {
        array_push($individualReport, [
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalOrder' => $totalOrder,
          'dayesOfMonth' => $dayesOfMonth,
          'orderArray' => $orderArray,
          'avgOrder' => $totalOrder/$DaysInMonth
      ]);
      }
      
      $totalOrder = 0;
      $orderArray = [];
    }
  return response()->json($individualReport);
}

 public function last12MonthSellData()
 {
  $individualReport = [];
  $today = Carbon::now()->format('d');

  for ($i=11; $i>=0; $i--) {  
    
      $Order = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month)->get();   // gets only the data from previous month

      $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at));

      //$numberofFriday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri");
      //$numberofSaturday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat");

      // $totalWorkDay = $DaysInMonth - count($numberofFriday) - count($numberofSaturday);
      $totalSell = 0;
      $avgSell = 0;

      $sellArray = [];
      $dayesOfMonth = [];
      $months = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month);
      for ($j=0; $j < $DaysInMonth; $j++) { 

          array_push($dayesOfMonth, ($j+1));

          $sell = DB::table( DB::raw("({$months->toSql()}) as sub"))->mergeBindings($months->getQuery())->whereDay('created_at', '=', ($j+1))->where('status','Completed')->count(); 


          if ($sell != 0) {
              array_push($sellArray, ($sell));
              $totalSell+=($sell);
          } 
          else {
              array_push($sellArray, 0);
          }
      }

      if ($i == 0) {
        array_push($individualReport, [
          'avgSell' => $totalSell/$today,
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalSell' => $totalSell,
          'dayesOfMonth' => $dayesOfMonth,
          'sellArray' => $sellArray
      ]);
      } else {
        array_push($individualReport, [
          'avgSell' => $totalSell/$DaysInMonth,
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalSell' => $totalSell,
          'dayesOfMonth' => $dayesOfMonth,
          'sellArray' => $sellArray
      ]);
      }
      
      $totalSell = 0;
      $sellArray = [];
    
  }
  
  return response()->json($individualReport);
 }

 public function last12MonthProfitData(Type $var = null)
 {
  $individualReport = [];
  $today = Carbon::now()->format('d');

  for ($i=11; $i>=0; $i--) {  
    
      $Order = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month)->get();   // gets only the data from previous month

      $DaysInMonth = cal_days_in_month(CAL_GREGORIAN,$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at));

      //$numberofFriday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "fri");
      //$numberofSaturday = $this->countAnydays($this->getMonth($attendance[0]->created_at),$this->getYear($attendance[0]->created_at), "sat");

      // $totalWorkDay = $DaysInMonth - count($numberofFriday) - count($numberofSaturday);
      $totalProfit = 0;
      $avgProfit = 0;

      $ProfitArray = [];
      $dayesOfMonth = [];
      $months = Order::whereMonth('created_at', '=', Carbon::now()->subMonth($i)->month);
      for ($j=14; $j < $DaysInMonth; $j++) { 

          array_push($dayesOfMonth, ($j+1));

          $subtotal = DB::table( DB::raw("({$months->toSql()}) as sub"))->mergeBindings($months->getQuery())->whereDay('created_at', '=', ($j+1))->where('status','Completed')->sum('subtotal'); 
          $vat = DB::table( DB::raw("({$months->toSql()}) as sub"))->mergeBindings($months->getQuery())->whereDay('created_at', '=', ($j+1))->where('status','Completed')->sum('vat'); 
          $total_buying_price = DB::table( DB::raw("({$months->toSql()}) as sub"))->mergeBindings($months->getQuery())->whereDay('created_at', '=', ($j+1))->where('status','Completed')->sum('total_buying_price'); 
          
          $Profit = $subtotal + $vat - $total_buying_price;

          if ($Profit > 0) {
              array_push($ProfitArray, ($Profit));
              $totalProfit+=($Profit);
          } 
          else {
              array_push($ProfitArray, 0);
          }
      }

      if ($i == 0) {
        array_push($individualReport, [
          'avgProfit' => $totalProfit/$today,
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalProfit' => $totalProfit,
          'dayesOfMonth' => $dayesOfMonth,
          'currency' => GeneralSetting::select('currency')->first(),
          'ProfitArray' => $ProfitArray
      ]);
      } else {
        array_push($individualReport, [
          'avgProfit' => $totalProfit/$DaysInMonth,
          'month' => [$this->getMonth($Order[0]->created_at),$this->getYear($Order[0]->created_at)],
          'totalProfit' => $totalProfit,
          'dayesOfMonth' => $dayesOfMonth,
          'currency' => GeneralSetting::select('currency')->first(),
          'ProfitArray' => $ProfitArray
      ]);
      }
      
      $totalProfit = 0;
      $ProfitArray = [];
    
  }
  
  return response()->json($individualReport);
 }

 public function getMonth($time)
 {
     $newtime = strtotime($time);
   $time->day = date('m',$newtime);
     return $time->day;
 }

 public function getDay($time)
 {
     $newtime = strtotime($time);
   $time->day = date('w',$newtime);
     return $time->day;
 }

 public function getDate($time)
 {
     $newtime = strtotime($time);
   $time->day = date('d',$newtime);
     return $time->day;
 }

 public function getYear($time)
 {
     $newtime = strtotime($time);
   $time->day = date('y',$newtime);
     return $time->day;
 }
}

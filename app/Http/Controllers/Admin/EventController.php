<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Product;
use App\Models\Order;
use App\Models\GeneralSetting;
use App\Models\OrderProduct;
use App\Models\Event;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Auth;

class EventController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('event_index')) {
      $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Event";
        $data['add_title'] = "Add Event";
        $data['event'] = Event::get();
    return view('admin.event.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{ 
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('event_add')) {
 $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show Event";
   return view('admin.event.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data = Event::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }

    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $data = new Event();
        $data->event_name = $request['event_name']; 
        $data->event_date = $request['event_date']; 
        $data->event_purpose = $request['event_purpose']; 
        $data->event_cost = $request['event_cost']; 
        $data->save(); 
       return redirect('/admin/event')->with('flash_message_success','Event added successfully');
    }

    public function edit($id)
    { $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('event_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Event";
        $data['add']="Add Event";
        $data['add_title'] = "Edit Event";
        $data['event'] = Event::find($id);
       return view('admin.event.edit',$data);} else
       return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');

    }

    public function update(Request $request,$id)
    {
        $data = Event::find($id);
        $data->event_name = $request['event_name']; 
        $data->event_date = $request['event_date']; 
        $data->event_purpose = $request['event_purpose'];
        $data->event_cost = $request['event_cost'];  
        $data->save(); 
        return redirect('/admin/event')->with('flash_message_success','Event Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('event_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Event::find($id);
    $data->delete();
    return back()->with('flash_message_success','Event has delete successfully');

} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }



    public function event_chart()
    {
      
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('anaylites_view')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Event";
        $data['add_title'] = "Add Event";
        $data['customer'] = User::count('id');
        $data['order'] = Order::count('id');
        $data['product_sell'] = Order::get();
        $data['last_two_month_login'] = User::where('last_login', '>', (new \Carbon\Carbon)->submonths(2) )->count('id');
        $data['last_two_month_inactive'] = User::where('last_login', '<', (new \Carbon\Carbon)->submonths(2) )->count('id');

        if (isset($_GET['from']) && $_GET['from'] && $_GET['to']) {
            $fromdate =  $_GET['from'];
            $todate =  $_GET['to'];
    
            $data['order_product'] = OrderProduct::whereBetween('created_at', [$fromdate, $todate])->get();
            $data['productall'] = Product::whereBetween('created_at', [$fromdate, $todate])->get();
            $data['event'] = Event::whereBetween('created_at', [$fromdate, $todate])->get();
          
          } else {
            
          }
   
      return view('admin.chart.event',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
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

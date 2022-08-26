<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderProduct;
use App\Models\Order;
use App\Models\Account;
use App\Models\Qty;
class AccountController extends Controller
{
    public function index()
    {
        
        $data['title']="Admin Dashboard";
        $data['table']="Show Credit";
        $data['add']="Add Banner";
        $data['add_title'] = "Add banner";
        // $data['account'] =Order::where('status','Completed')->orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        // $data['selling'] =Order::where('status','Completed')->sum('subtotal');
        // $data['grand_total'] =Order::where('status','Completed')->sum('grand_total');
        // $data['vat'] =Order::where('status','Completed')->sum('vat');
        // $data['shipping'] =Order::where('status','Completed')->sum('shipping');
        // $data['discount_amount'] =Order::where('status','Completed')->sum('discount_amount');
        // $data['giftcard_amount'] =Order::where('status','Completed')->sum('giftcard_amount');



        if (isset($_GET['from']) && $_GET['from'] && $_GET['to']) {
            $fromdate =  $_GET['from'];
            $todate =  $_GET['to'];
    
            // $data['order_product'] = OrderProduct::whereBetween('created_at', [$fromdate, $todate])->get();
            // $data['productall'] = Product::whereBetween('created_at', [$fromdate, $todate])->get();
            // $data['event'] = Event::whereBetween('created_at', [$fromdate, $todate])->get();



            
        $data['account'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['selling'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('subtotal');
        $data['grand_total'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('grand_total');
        $data['vat'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('vat');
        $data['shipping'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('shipping');
        $data['discount_amount'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('discount_amount');
        $data['giftcard_amount'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('giftcard_amount');
            
        $data['giftcard'] =Order::where('status','Completed')->whereBetween('created_at', [$fromdate, $todate])->sum('giftcard_purchase_price');
          
          } else {
              
        $data['account'] =Order::where('status','Completed')->orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['selling'] =Order::where('status','Completed')->sum('subtotal');
        $data['grand_total'] =Order::where('status','Completed')->sum('grand_total');
        $data['vat'] =Order::where('status','Completed')->sum('vat');
        $data['shipping'] =Order::where('status','Completed')->sum('shipping');
        $data['discount_amount'] =Order::where('status','Completed')->sum('discount_amount');
        $data['giftcard_amount'] =Order::where('status','Completed')->sum('giftcard_amount');
        $data['giftcard'] =Order::where('status','Completed')->sum('giftcard_purchase_price');
           
            
          }
        // $data['total_vat'] =OrderProduct::sum('vat');
        // dd($data['total_debit']);
        return view('admin.account.index',$data);
    }

    public function debit()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Debit";
        $data['add']="Add Cost";
        $data['add_title'] = "Add Cost";
        $data['edit_title'] = "Edit Cost";
        
        if (isset($_GET['from']) && $_GET['from'] && $_GET['to']) {
            $fromdate =  $_GET['from'];
            $todate =  $_GET['to'];
   
        $data['account'] =Account::orderBy('id','DESC')->whereBetween('created_at', [$fromdate, $todate])->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['product_cost'] =Account::where('product_id','>',0)->whereBetween('created_at', [$fromdate, $todate])->sum('buying_price');
        $data['product_qty'] =Qty::where('product_id','>',0)->whereBetween('created_at', [$fromdate, $todate])->sum('quantity');
        $data['extra_cost'] =Account::where('product_id','=',NULL)->whereBetween('created_at', [$fromdate, $todate])->sum('buying_price');
        $data['total_cost'] =Account::whereBetween('created_at', [$fromdate, $todate])->sum('buying_price');
        }else{
            
        $data['account'] =Account::orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['product_cost'] =Account::where('product_id','>',0)->sum('buying_price');
        $data['product_qty'] =Qty::sum('quantity');
        $data['extra_cost'] =Account::where('product_id','=',NULL)->sum('buying_price');
        $data['total_cost'] =Account::sum('buying_price');

        }
     
        return view('admin.account.debit',$data);
    }


    public function creadit_createPDF(Request $request)
    {


        $from_date = $request->from;
    	$to_date = $request->to;
        if( $from_date || $to_date){
         

            
        $data['account'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['selling'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('subtotal');
        $data['grand_total'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('grand_total');
        $data['vat'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('vat');
        $data['shipping'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('shipping');
        $data['discount_amount'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('discount_amount');
        $data['giftcard_amount'] =Order::where('status','Completed')->whereBetween('created_at',[$from_date,$to_date])->sum('giftcard_amount');
        
        }else{
            
        $data['account'] =Order::where('status','Completed')->orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['selling'] =Order::where('status','Completed')->sum('subtotal');
        $data['grand_total'] =Order::where('status','Completed')->sum('grand_total');
        $data['vat'] =Order::where('status','Completed')->sum('vat');
        $data['shipping'] =Order::where('status','Completed')->sum('shipping');
        $data['discount_amount'] =Order::where('status','Completed')->sum('discount_amount');
        $data['giftcard_amount'] =Order::where('status','Completed')->sum('giftcard_amount');
        }

        return view('admin.account.creadit_pdf',$data);
    }

    public function debit_createPDF(Request $request)
    {


        $from_date = $request->from;
    	$to_date = $request->to;
        if( $from_date || $to_date){
         

            
       
            $data['account'] =Account::orderBy('id','DESC')->whereBetween('created_at',[$from_date,$to_date])->get();
            // $data['total_debit'] =OrderProduct::sum('buying_price');
            $data['product_cost'] =Account::where('product_id','>',0)->whereBetween('created_at',[$from_date,$to_date])->sum('buying_price');
            $data['extra_cost'] =Account::where('product_id','=',NULL)->whereBetween('created_at',[$from_date,$to_date])->sum('buying_price');
            $data['total_cost'] =Account::whereBetween('created_at',[$from_date,$to_date])->sum('buying_price'); 
        }else{
            
        $data['account'] =Account::orderBy('id','DESC')->get();
        // $data['total_debit'] =OrderProduct::sum('buying_price');
        $data['product_cost'] =Account::where('product_id','>',0)->sum('buying_price');
        $data['extra_cost'] =Account::where('product_id','=',NULL)->sum('buying_price');
        $data['total_cost'] =Account::sum('buying_price');
        }

        return view('admin.account.debit_pdf',$data);
    }
}

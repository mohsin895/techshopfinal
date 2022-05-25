<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\OrderStatus;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        $data['order']= Order::with('orderProduct')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        // dd($data['order']);
       return view('admin.order.index',$data);
    }

    public function order_details($order_id)
    {
        $data['order']= Order::with('orderProduct','orderStatus')->where('order_id',$order_id)->first();
        $data['order_user'] = User::where('id',$data['order']->user_id)->first();
    //    dd($data['order']);
        return view('admin.order.order_details',$data);
    }

    public function order_status(Request $request,$id )
    {
       if ($request->isMethod('post')) {
        $data = $request->all();
        $order=Order::find($id);
        $order->status = $data['status'];
        $order->delivery_date = $data['delivery_date'];
        $order->save();
        if($order->save()){
            $orderStatus =new OrderStatus();
            $orderStatus->order_id = $request->order_id;
            $orderStatus->status = $request->status;
            $orderStatus->order_date = $request->order_date;
            $orderStatus->delivery_date = $request->delivery_date;
            $orderStatus->comment = $request->comment;
            $orderStatus->save();

        }
        $user = User::where('id',$order->user_id)->first();
        $order =Order::where('id',$id)->first();
        // dd($user);
        $email =$user['email'];
        $status = $data['status'];
        $orderid =$order['order_id'];
        $messageData = [
            'email'=>$user['email'],
            'name'=>$user['name'],
            'status' => $data['status'],
            'order_id' =>$order['order_id'],
            
        ];
         Mail::send('email.order.status',$messageData,function($message) use($email){
           $message->to($email)->subject('Your Order Update');
         });
         return back();
       }
    }
    public function new_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','New')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }

    public function processing_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Processing')->orderBy('id','Desc')->get();
       
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }

    public function packaging_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Packaging')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }

   
    public function pending_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Waiting For Delivery')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }

    public function shipping_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Shipping')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }

    public function delivered_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Delivered')->orderBy('id','Desc')->get();
        // dd($data['order']);
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }public function complete_order()
    {
        $data['order']= Order::with('orderProduct')->where('status','Completed')->orderBy('id','Desc')->get();
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }
    
   


    public function cancel_order()
    {
        $data['new_order']= Order::where('status','New')->count('id');
        $data['processing_order']= Order::where('status','Processing')->count('id');
        $data['packaging_order']= Order::where('status','Packaging')->count('id');
        $data['pending_order']= Order::where('status','Waiting For Delivery')->count('id');
        $data['shipping_order']= Order::where('status','Shipping')->count('id');
        $data['delivered_order']= Order::where('status','Delivered')->count('id');
        $data['complete_order']= Order::where('status','Completed')->count('id');
        $data['cancel_order']= Order::where('status','Cancelled')->count('id');
        $data['order']= Order::with('orderProduct')->where('status','Cancelled')->orderBy('id','Desc')->get();
        //  dd($data['order']);
       return view('admin.order.cancel',$data);
    }
    
    
   

    public function invoice($id)
    {
        $data['order']= Order::with('orderProduct')->where('id',$id)->first();
        //  dd($data['order']);
        return view('admin.order.invoice',$data);
    }
}

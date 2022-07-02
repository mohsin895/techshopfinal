<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\OrderStatus;
use Carbon\carbon;
use Mail;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function order_details($order_id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('order_details')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['order']= Order::with('orderProduct','orderStatus')->where('order_id',$order_id)->first();
        $data['order_user'] = User::where('id',$data['order']->user_id)->first();
    //    dd($data['order']);

        return view('admin.order.order_details',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function order_status(Request $request,$id )
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('order_status')) {
            $permissions = Role::findByName($role->name)->permissions;
       if ($request->isMethod('post')) {
        $data = $request->all();
        $order=Order::find($id);
        $order->status = $data['status'];
        $order->delivery_date = $data['delivery_date'];
        $order->admin_comment = $data['comment'];
        $order->user_comment = $data['user_comment'];
        $order->last_update_date = Carbon::now();
        $order->save();
        if($order->save()){
            $orderStatus =new OrderStatus();
            $orderStatus->order_id = $request->order_id;
            $orderStatus->status = $request->status;
            $orderStatus->order_date = $request->order_date;
            $orderStatus->delivery_date = $request->delivery_date;
            $orderStatus->comment = $request->comment;
            $orderStatus->user_comment = $request->user_comment;
            $orderStatus->save();

        }
        $user = User::where('id',$order->user_id)->first();
        $order =Order::where('id',$id)->first();
        $order = json_decode(json_encode($order),true);
        $orderStatus = OrderStatus::latest()->first();
        $orderStatus = json_decode(json_encode($orderStatus),true);

        // dd($order);
        if(!empty($request->user_comment)){
        $email =$user['email'];
        $status = $data['status'];
        $orderid =$request['product_order_id'];
        $comment =$request['user_comment'];
        $messageData = [
            'email'=>$user['email'],
            'user'=>$user,
            'status' => $data['status'],
            'order' =>$order,
            'orderStatus' =>$orderStatus,
            
        ];
         Mail::send('email.order.status',$messageData,function($message) use($email){
           $message->to($email)->subject('Your Order Update Status');
         });
        }else{
            
        }

         return back();
       }
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   
    }
    public function new_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('new_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function processing_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('processing_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function packaging_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('packaging_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

   
    public function pending_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('waiting_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function shipping_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('shipping_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function delivered_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('deliverd_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    
    public function complete_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('complete_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    
   


    public function cancel_order()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('canceled_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
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
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    
    
   

    public function invoice($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('order_invoice')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['order']= Order::with('orderProduct')->where('id',$id)->first();
        $data['birthday_user'] = User::where('id',$data['order']->user_id)->whereMonth('date_of_birth', date('m'))
    ->whereYear('date_of_birth', date('Y'))
    ->first();
        return view('admin.order.invoice',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}
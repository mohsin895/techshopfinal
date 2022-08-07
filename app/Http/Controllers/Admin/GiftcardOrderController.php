<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCardOrder;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Order;
use Auth;
use Mail;

class GiftcardOrderController extends Controller
{
    public function index()
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('giftcard_order_view')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['giftcardOrder'] = GiftCardOrder::orderBy('id','desc')->get();
        return view('admin.giftcard.order.index',$data);
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function giftorder_status(Request $request,$id )
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('giftcard_order_status')) {
            $permissions = Role::findByName($role->name)->permissions;
       if ($request->isMethod('post')) {
        $data = $request->all();
        $order=GiftCardOrder::find($id);
        $order->status = $data['status'];
        if(!empty($request->admin_comment)){
          $order->admin_comment = $data['admin_comment'];

        }else{
          $order->admin_comment = null;

        }
         if(!empty($request->user_comment)){
          $order->user_comment = $data['user_comment'];

         }else{
          $order->user_comment = null;

         }
      
        
        $order->save();
        if($order->save()){
          $order_id = $order->id;
          $order_status_giftcard =Order::where('gift_card_id',$order_id)->update(['status'=>$data['status']]);
        }
        
        $user = User::where('id',$order->user_id)->first();
        $order =GiftCardOrder::where('id',$id)->first();
        if(!empty($request->user_comment)){
        // dd($user);
        $email =$user['email'];
        $status = $data['status'];
        $orderid =$order['order_id'];
        $messageData = [
            'email'=>$user['email'],
            'user'=>$user,
            'status' => $data['status'],
            'order' =>$order,
            
        ];
         Mail::send('email.giftcard.status',$messageData,function($message) use($email){
           $message->to($email)->subject('Your giftcard Order Update');
         });
        }else{

        }
         return back();
       }
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

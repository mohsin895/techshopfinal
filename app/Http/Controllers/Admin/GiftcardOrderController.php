<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCardOrder;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
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
        $order->save();
        
        $user = User::where('id',$order->user_id)->first();
        $order =GiftCardOrder::where('id',$id)->first();
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
         Mail::send('email.giftcard.status',$messageData,function($message) use($email){
           $message->to($email)->subject('Your giftcard Order Update');
         });
         return back();
       }
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

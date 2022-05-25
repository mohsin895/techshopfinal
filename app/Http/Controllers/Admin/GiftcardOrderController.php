<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCardOrder;
use App\Models\User;
use Mail;

class GiftcardOrderController extends Controller
{
    public function index()
    {
        $data['giftcardOrder'] = GiftCardOrder::orderBy('id','desc')->get();
        return view('admin.giftcard.order.index',$data);
    }

    public function giftorder_status(Request $request,$id )
    {
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
    }
}

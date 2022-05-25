<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCard;
use App\Models\GiftCardOrder;
use App\Models\Notification;
use Carbon\Carbon;
use Mail;
use Auth;
use Session;

class GiftCardController extends Controller
{
   public function index($slug)
   {
    $data['giftcard'] = GiftCard::where('slug',$slug)->first();
    return view('front.giftcard_details',$data);
   }

   public function giftcard_purchase(Request $request)
   {
      // dd($request);
    
     
      $data['id'] = $request->input('id');
      $data['name'] = $request->input('name');
      $data['duration'] = $request->input('duration');
      $data['purchase_price'] = $request->input('purchase_price');
      $data['giftcard_value'] = $request->input('giftcard_value');
      
      
      
      return view('front.giftcard_checkout',$data);
   }
   public function checkout(Request $request)
   {
      if ($request->isMethod('post')) {
         $data = $request->all();
         // dd($data);
         $order = new GiftCardOrder();
         $order->user_id = Auth::user()->id;
         $order->giftcard_id = $data['giftcard_id'];
         $order->name = $data['name'];
         $order->phone = $data['phone'];
         $order->email = $data['email'];
         $order->transcation_number = $data['account_number'];
         $order->transcation_id = $data['transcation_id'];
         $order->account_type = $data['account_type'];
         $order->purchase_price = $data['purchase_price'];
         $order->giftcard_value = $data['giftcard_value'];
         $order->duration = $data['duration'];
         $order->expired_date = Carbon::now()->addDays($data['duration']);
         $order->save();
         $notification = new Notification;
         $notification->giftcard_id = $order->id;
         $notification->save();


         $email =$data['email'];
         $account_number = $data['account_number'];
       
         $messageData = [
             'email'=>$data['email'],
             'name'=>$data['name'],
             'account_number' => $data['account_number'],
             'transcation_id' =>$data['transcation_id'],
             'purchase_price' =>$data['purchase_price'],
             'giftcard_value' =>$data['giftcard_value'],
             
         ];
          Mail::send('email.order.giftcard',$messageData,function($message) use($email){
            $message->to($email)->subject('Your Giftcard Order');
          });
         return redirect()->route('user.account');
      }
   }
}

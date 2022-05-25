<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
Use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Str;
use App\Models\GiftCardOrder;
use Carbon\Carbon;
use App\Models\Notification;
use App\Http\Requests;
use Session;
use Mail;
use DB;

class OrderController extends Controller
{

public function order(Request $request)
{

  $giftcardOrder = Order::where('user_id',Auth::user()->id)->sum('giftcard_amount');
      $dt = Carbon::now();
      $giftcardvalue = GiftCardOrder::where('user_id',Auth::user()->id)->where('expired_date','>=', $dt->toDateString())->where('status','Completed')->sum('giftcard_value');
      // dd($giftcardvalue);
      $toatlbalancegiftcard = $giftcardvalue - $giftcardOrder;
    $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
    $userDetails = User::find($user_id);
    $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
    foreach ($userCart as $key => $product) {
      $productDetails = Product::where('id',$product->product_id)->first();
      $userCart[$key]->image = $productDetails->image;
     }
     if ($request->isMethod('post')) {
      $data = $request->all();
      $delivery = $request->input('delivery');
      Session::put('delivery',$delivery);
      $delivery = Session::get('delivery');
      $giftcard = $request->input('giftcard_amount');
      Session::put('giftcard_amount',$giftcard);
      $giftcard = Session::get('giftcard_amount');
      // dd($giftcard);

      return redirect('/user/checkout');
     };
     
  return view('user.order',compact('userCart','giftcardvalue','toatlbalancegiftcard'));
}


    public function checkout(Request $request)
    {
     
       $delivery = Session::get('delivery');
       $giftcard = Session::get('giftcard_amount');
    
      // dd($delivery);
      $giftcardOrder = Order::where('user_id',Auth::user()->id)->sum('giftcard_amount');
      $dt = Carbon::now();
      $giftcardvalue = GiftCardOrder::where('user_id',Auth::user()->id)->where('expired_date','>=', $dt->toDateString())->where('status','Completed')->sum('giftcard_value');
      // dd($giftcardvalue);
      $toatlbalancegiftcard = $giftcardvalue - $giftcardOrder;
    $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
    $userDetails = User::find($user_id);
    $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
    foreach ($userCart as $key => $product) {
      $productDetails = Product::where('id',$product->product_id)->first();
      $userCart[$key]->image = $productDetails->image;
     }
    if ($request->isMethod('post')) {
    $data = $request->all();
  //  echo "<pre>";print_r($data);die;
  
    User::where('id',$user_id)->update(['name'=>$data['name'],'address1'=>$data['address1'],'city'=>$data['city'],'address2'=>$data['address2'],
   'country'=>$data['country'],'postcode'=>$data['postcode'],'phone'=>$data['phone']]);

   $order = new Order;
   $order->user_id = $user_id;
   $order->user_email = $user_email;
   $order->order_id = rand(10000,19999);
   $order->name= $data['name'];
   $order->address1= $data['address1'];
   $order->city= $data['city'];
   $order->address2= $data['address2'];
   $order->country= $data['country'];
   $order->postcode= $data['postcode'];
   $order->phone= $data['phone'];
   $order->delivery= $data['delivery'];
   $order->subtotal= $data['subtotal'];
   $order->total_buying_price= $data['total_buying_price'];
   $order->shipping= $data['shipping'];
   $order->vat= $data['vat'];
   $order->grand_total= $data['grand_total'];
   if(!empty($data['giftcard_amount'])){
    $order->giftcard_amount= $data['giftcard_amount'];
   }else{
    $order->giftcard_amount= '0';
   }
   
   $order->order_status = "New";
   $order->status = "New";
 

   $order->save();

   $order_id = DB::getPdo()->lastInsertId();
   $notification = new Notification;
   $notification->order_id = $order->order_id;
   $notification->save();
   
   $cartProducts = DB::table('carts')->where(['user_email'=>$user_email])->get();
   foreach($cartProducts as $pro){
     $cartPro = new OrderProduct;

     $cartPro->order_id = $order_id;
     $cartPro->user_id = $user_id;
     $cartPro->randomOrder_id = $order->order_id;
     $cartPro->product_id = $pro->product_id;
     $cartPro->model_no = $pro->model_no;
     $cartPro->product_name = $pro->product_name;
  
     $cartPro->price = $pro->price;
     $cartPro->buying_price = $pro->buying_price;
     if(Auth::user()->referral_id ==$pro->referral_id){
      $cartPro->referral_id = 0;
     }else{
      $cartPro->referral_id = $pro->referral_id;

     }
     
     $cartPro->quantity = $pro->quantity;
     $cartPro->save();


   

   }
   DB::table('carts')->where('user_email',$user_email)->delete();
   $productDetails = Order::with('orders')->where('id',$order_id)->first();
  $productDetails = json_decode(json_encode($productDetails),true);
  // echo "<pre>";print_r($productDetails);die;
 $userDetails = User::where('id',$user_id)->first();
 $userDetails = json_decode(json_encode($userDetails),true);
 // echo "<pre>";print_r($userDetails);die;

  $email = $user_email;
  $messageData=[
    'email' =>$email,
    
    'order_id'=>$order_id,
    'productDetails' =>$productDetails,
    'userDetails'=>$userDetails
  ];
  Mail::send('email.order',$messageData,function($message) use($email){
    $message->to($email)->subject('order Placed - techshop');
  });
   return redirect('/user/order/details');
  
     }
     
        return view('user.checkout',compact('userCart','giftcardvalue','toatlbalancegiftcard','delivery','giftcard'));
    }

    public function order_details()
    {
        $orderDetails = Order::where('user_id',Auth::user()->id)->latest()->first();
       return view('user.order_details',compact('orderDetails'));
    }
}
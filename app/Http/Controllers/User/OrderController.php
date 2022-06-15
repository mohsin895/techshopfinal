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
use App\Models\GeneralSetting;
use App\Http\Requests;
use App\Models\CouponCode;
use App\Models\Event;
use Session;
use Mail;
use DB;

class OrderController extends Controller
{

public function order(Request $request)
{

  $user_email = Auth::user()->email;
  $userCartCount = DB::table('carts')->where(['user_email'=>$user_email])->count('id');
  if($userCartCount > 0){
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

  }else{

    $data['product']= Product::take(8)->inRandomOrder()->get();
    $data['empty_cart']= Product::take(1)->inRandomOrder()->get();
    $data['empty_cart1']= Product::take(1)->inRandomOrder()->get();
    return view('user.empty_cart',$data);

  }
 
}


    public function checkout(Request $request)
    {
      $user_email = Auth::user()->email;
      $userCartCount = DB::table('carts')->where(['user_email'=>$user_email])->count('id');
  if($userCartCount > 0){
       $delivery = Session::get('delivery');
       $giftcard = Session::get('giftcard_amount');
       $couponCode = Session::get('couponCode');
       $todayDate=Carbon::now();
       $todayDatestring = $todayDate->format("y-m-d");
      //  dd($todayDatestring);
       $event = Event::where('event_date', '<=',$todayDatestring)->first();
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
   $order->event_id = $data['event_id'];
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

   if(!empty($data['coupon_code'])){
    $order->coupon_code= $data['coupon_code'];
   }else{
    $order->coupon_code= '0';
   }
   if(!empty($data['amount_type'])){
    $order->amount_type= $data['amount_type'];
   }else{
    $order->amount_type= '0';
   }
   if(!empty($data['amount'])){
    $order->amount= $data['amount'];
   }else{
    $order->amount= '0';
   }
   
   $order->order_status = "New";
   $order->status = "New";
 

   $order->save();

   $order_id = DB::getPdo()->lastInsertId();
   $notification = new Notification;
   $notification->order_id = $order->order_id;
   $notification->save();


   $orderevent = DB::getPdo()->lastInsertId();
   $ordereventid=Event::where('id',$request->event_id)->first();
   $eventid = Event::find($ordereventid->id);
   $eventid->order_number = $eventid->order_number + 1;
   $eventid->save();
   
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
     $cartPro->total_price = $pro->price * $pro->quantity;
     $cartPro->buying_price = $pro->buying_price;
     if(Auth::user()->referral_id ==$pro->referral_id){
      $cartPro->referral_id = 0;
     }else{
      $cartPro->referral_id = $pro->referral_id;

     }
     
     $cartPro->quantity = $pro->quantity;
     $cartPro->save();

   }
   if($cartPro->save()){
    foreach($cartProducts as $product){
      $productDetails= DB::table('products')->where('id',$product->product_id)->first();
      $orderProduct = Product::find($product->product_id);
      $orderProduct->order_qty = $orderProduct->order_qty + $product->quantity;
      $orderProduct->order_price = $orderProduct->order_price + $product->price * $product->quantity;
      $orderProduct->save();
      // dd($orderProduct);
     
    }
       }
   DB::table('carts')->where('user_email',$user_email)->delete();
   $productDetails = Order::with('orders')->where('id',$order_id)->first();
  $productDetails = json_decode(json_encode($productDetails),true);
  // echo "<pre>";print_r($productDetails);die;
 $userDetails = User::where('id',$user_id)->first();
 $userDetails = json_decode(json_encode($userDetails),true);
 // echo "<pre>";print_r($userDetails);die;

  $email = $user_email;
  $gs = GeneralSetting::first();
       
       
  $subject=$gs->site_title;
  $messageData=[
    'email' =>$email,
    
    'order_id'=>$order_id,
    'productDetails' =>$productDetails,
    'userDetails'=>$userDetails
  ];
  Mail::send('email.order',$messageData,function($message) use($email,$subject){
    $message->to($email)->subject('order Placed from' .' '.$subject);
  });
   return redirect('/user/order/details');
  
     }
     
        return view('user.checkout',compact('event','userCart','giftcardvalue','toatlbalancegiftcard','delivery','giftcard','couponCode'));
      }else{

        $data['product']= Product::take(8)->inRandomOrder()->get();
        $data['empty_cart']= Product::take(1)->inRandomOrder()->get();
        $data['empty_cart1']= Product::take(1)->inRandomOrder()->get();
        return view('user.empty_cart',$data);
    
      }
    }

    public function order_details()
    {
        $orderDetails = Order::where('user_id',Auth::user()->id)->latest()->first();
       return view('user.order_details',compact('orderDetails'));
    }
}
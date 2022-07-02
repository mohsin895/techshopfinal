<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Product;
use App\Models\CouponCode;
use Auth;
use Session;
use DB;

class CartController extends Controller
{

    public function cart()
    {
        if(Auth::check()) {
            $user_email = Auth::user()->email;
            $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
            $userCartCount = DB::table('carts')->where(['user_email'=>$user_email])->count('id');
          }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('carts')->where(['session_id'=>$session_id])->get();
            $userCartCount = DB::table('carts')->where(['session_id'=>$session_id])->count('id');
            // dd($userCart);
          }

          if($userCartCount > 0){
            foreach ($userCart as $key => $product) {
              $productDetails = Product::where('id',$product->product_id)->first();
              $userCart[$key]->image = $productDetails->image;
             }
             // echo "<pre>"; print_r($userCart);die;
            return view('user.cart',compact('userCart'));

          }else{
            $data['product']= Product::take(8)->inRandomOrder()->get();
            $data['empty_cart']= Product::take(1)->inRandomOrder()->get();
            $data['empty_cart1']= Product::take(1)->inRandomOrder()->get();
            return view('user.empty_cart',$data);

          }

            
    }

public function addtocart(Request $request)
{

$data = $request->all();
//   echo "<pre>"; print_r($data);die;
 if (empty(Auth::user()->email)) {
$data['user_email']='';
}else {
  $data['user_email']= Auth::user()->email;
}



$session_id = Session::get('session_id');
 if(!isset($session_id)) {
   $session_id = Str::random(40);
   Session::put('session_id',$session_id);
 }

if (empty(Auth::check())) {
  $countProducts=DB::table('carts')->where(['product_id'=>$data['product_id'],
    'model_no'=>$data['model_no'],
    'session_id'=>$session_id])->count();
if($countProducts>0) {
 return redirect()->back()->with('flash_message_error','Product already exists in Cart!');
}
}else {
  $countProducts=DB::table('carts')->where(['product_id'=>$data['product_id'],
              'model_no'=>$data['model_no'],
              'user_email'=>$data['user_email']])->count();

if($countProducts>0) {
 return redirect()->back()->with('flash_message_error','Product already exists in Cart!');

}
}
DB::table('carts')->insert(['product_id'=>$data['product_id'],
'product_name'=>$data['product_name'],'model_no'=>$data['model_no'],
'price'=>$data['price'],'quantity'=>$data['quantity'] ,'buying_price'=>$data['buying_price'],
'user_email'=>$data['user_email'] ,'referral_id'=>$data['referral_id'],'session_id'=>$session_id]);


return back()->with('flash_message_success','Product has been added in Cart!');
}

public function updateCartQuantity($id=null,$quantity=null)
{

$getCartDetails =  DB::table('carts')->where('id',$id)->first();
  DB::table('carts')->where('id',$id)->increment('quantity',$quantity);
  return redirect('user/cart')->with('flash_message_success','Product Quantity has been update successfully ');
}
public function deleteCartProduct($id=null)
{
   
DB::table('carts')->where('id',$id )->delete();
return redirect('user/cart')->with('flash_message_success','Cart Item has delete successfully');
}


public function applyCoupon(Request $request)
{
  Session::forget('CouponAmount');
  Session::forget('CouponCode');
 
$data = $request->all();
// echo "<pre>"; print_r($data);die;
$couponCount =CouponCode::where('coupon_code',$data['coupon_code'])->count();
if ($couponCount == 0) {
return redirect()->back()->with('flash_message_error','Coupon is not valid');
}else {
$couponDetails =CouponCode::where('coupon_code',$data['coupon_code'])->first();
if($couponDetails->status==0) {
return redirect()->back()->with('flash_message_error','Coupon is not active');
}
$expiry_date = $couponDetails->expiry_date;
 $currebt_date = date('Y-m-d');
 if ($expiry_date<$currebt_date) {
   return redirect()->back()->with('flash_message_error','Coupon is expired!!');
 }
if(empty($couponDetails->unlimited)){
  if($couponDetails->use_time <= $couponDetails->order_number){
    return redirect()->back()->with('flash_message_error','Coupon code can not use!!');
   }
  }


 
 
//  dd($couponDetails);

$code = $request->get('coupon_code', '');
Session::put('couponCode',$code);
$couponCode = Session::get('couponCode');
// dd($couponCode);



return redirect()->back()->with('flash_message_success','Coupon Code successfully Applied. You are availing discount!!');
}

}
}
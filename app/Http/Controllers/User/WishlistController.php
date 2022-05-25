<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\WishList;
use Session;
use DB;
use Auth;

class WishlistController extends Controller
{

    public function index()
    {
      

        $data['wish_list_product'] = WishList::with('wishlist')->where('user_email',Auth::user()->email)->orderBy('id','desc')->get();
        // dd($data['wish_list_product']);
        $data['wish_list'] = WishList::where('user_email',Auth::user()->email)->count('id');
        // dd($data);
        return view('user.wish_list',$data);
    }
    public function insert(Request $request)
    {
       if ($request->isMethod('post')) {
      
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
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
          $countProducts=DB::table('wish_lists')->where(['product_id'=>$data['product_id'],
           
            'session_id'=>$session_id])->count();
        if($countProducts>0) {
         return redirect()->back()->with('flash_message_error','Product already exists in WishList!');
        }
        }else {
          $countProducts=DB::table('wish_lists')->where(['product_id'=>$data['product_id'],
                     
                      'user_email'=>$data['user_email']])->count();
        
        if($countProducts>0) {
         return redirect()->back()->with('flash_message_error','Product already exists in WishList!');
        
        }
        }
        DB::table('wish_lists')->insert(['product_id'=>$data['product_id'],
        
        'user_email'=>$data['user_email'] ,'session_id'=>$session_id]);
        
        
        return back()->with('flash_message_success','Product has been added in WishList!');
       }
    }


    public function delete($id)
    {
      $data = WishList::find($id);
 
    $data->delete();
    return back()->with('flash_message_success','Wish List has delete successfully');
    }

    
}

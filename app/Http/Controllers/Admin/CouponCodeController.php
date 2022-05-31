<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CouponCode;

class CouponCodeController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Coupon Code";
        $data['add']="Add Coupon Code";
        $data['add_title'] = "Add Coupon Code";
        $data['couponcode'] = CouponCode::orderBy('id','desc')->get();
     
    return view('admin.coupon_code.index',$data);
    }
public function add()
{
  
    $data['title']="Admin Dashboard";
    $data['table']="Show CouponCode";
    $data['add']="Add CouponCode";
   return view('admin.coupon_code.add',$data);
}

    public function status($id, $status)
    {

        $data = CouponCode::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $data = new CouponCode();
       $data->coupon_code = $request['coupon_code'];
       $data->amount = $request['amount'];
       $data->amount_type = $request['amount_type'];
      $data->expiry_date = $request['expiry_date'];
      $data->save();

       return redirect('/admin/couponcode')->with('flash_message_success','Coupon Code added successfully');
    }

    public function edit($id)
    {   $data['title']="Admin Dashboard";
        $data['table']="Show CouponCode";
        $data['add']="Add CouponCode";
        $data['add_title'] = "Edit CouponCode";
        
        $data['couponcode'] = CouponCode::find($id);
      
        
       return view('admin.coupon_code.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = CouponCode::find($id);
        $data->coupon_code = $request['coupon_code'];
      $data->amount = $request['amount'];
      $data->amount_type = $request['amount_type'];
      $data->expiry_date = $request['expiry_date'];
        $data->save(); 
        return redirect('/admin/couponcode')->with('flash_message_success','Coupon Code Update successfully');
    }

    public function delete($id)
    {
      $data = CouponCode::find($id);
  
    $data->delete();
    return back()->with('flash_message_success','Coupon Code has delete successfully');
    }
}
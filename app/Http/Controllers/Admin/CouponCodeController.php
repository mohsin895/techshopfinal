<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\CouponCode;
use Auth;

class CouponCodeController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('coupon_code_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Coupon Code";
        $data['add']="Add Coupon Code";
        $data['add_title'] = "Add Coupon Code";
        $data['couponcode'] = CouponCode::orderBy('id','desc')->get();
     
    return view('admin.coupon_code.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{
    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('coupon_code_create')) {
        $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show CouponCode";
    $data['add']="Add CouponCode";
   return view('admin.coupon_code.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('coupon_code_status')) {
            $permissions = Role::findByName($role->name)->permissions;

        $data = CouponCode::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $data = new CouponCode();
       $data->coupon_code = $request['coupon_code'];
       $data->amount = $request['amount'];
       $data->amount_type = $request['amount_type'];
       if(!empty($request->unlimited)){
        $data->unlimited = $request['unlimited'];

       }else{
        $data->use_time = $request['use_time'];

       }
      $data->expiry_date = $request['expiry_date'];
      $data->purpose = $request['purpose'];
      $data->save();

       return redirect('/admin/couponcode')->with('flash_message_success','Coupon Code added successfully');
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('coupon_code_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show CouponCode";
        $data['add']="Add CouponCode";
        $data['add_title'] = "Edit CouponCode";
        
        $data['couponcode'] = CouponCode::find($id);
      
        
       return view('admin.coupon_code.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update(Request $request,$id)
    {
        $data = CouponCode::find($id);
        $data->coupon_code = $request['coupon_code'];
      $data->amount = $request['amount'];
      $data->amount_type = $request['amount_type'];
      $data->expiry_date = $request['expiry_date'];
      $data->purpose = $request['purpose'];
      if(!empty($request->unlimited)){
        $data->unlimited = $request['unlimited'];

       }else{
        $data->use_time = $request['use_time'];

       }
        $data->save(); 
        return redirect('/admin/couponcode')->with('flash_message_success','Coupon Code Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('coupon_code_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = CouponCode::find($id);
  
    $data->delete();
    return back()->with('flash_message_success','Coupon Code has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function view_deatils($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('coupon_code_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Details Coupon Code";
        $data['add']="Details Coupon Code";
        // dd($data['subcategory']);
        $data['coupon_code'] = CouponCode::find($id);
        return view('admin.coupon_code.details',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}
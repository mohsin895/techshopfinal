<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
use Mail;

class WithdrawController extends Controller
{
    public function index()
    {
       
        // dd($referallAmount);
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_users_withdraw')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['withdraw'] = Withdraw::orderBy('id','DESC')->get();
        $data['user'] = User::where('is_admin',NULL)->orderBy('id','DESC')->get();
        return view('admin.withdraw.index',$data);
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    public function update(Request $request,$id)
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_wihtdraw_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $withdraw = Withdraw::find($id);
            $withdraw->status = $data['status'];
            $withdraw->save();
            $email = $data['email'];
            $account_number = $data['account_number'];
            $amount = $data['amount'];
            $status = $data['status'];
           $messageData = [
             'email'=>$email,
             'status'=>$status,
             'account_number' =>$account_number,
             'amount'=> $amount,
            
           ];
      
           Mail::send('admin.email.withdraw',$messageData,function($message) use($email){
             $message->to($email)->subject('user withdraw successfully');
           });
           return back();
        }
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function details($id)
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_users_withdraw_details')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data['withdraw'] = Withdraw::where('user_id',$id)->first();
      // dd( $data['withdraw']);
      return view('admin.withdraw.details',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function referral()
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_referral_details')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data['user'] = User::orderBy('id','DESC')->get();
      // dd($data['user']);
      return view('admin.withdraw.referral',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

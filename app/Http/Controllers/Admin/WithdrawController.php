<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;
use Auth;
use Mail;

class WithdrawController extends Controller
{
    public function index()
    {
       
        // dd($referallAmount);
        
        $data['withdraw'] = Withdraw::orderBy('id','DESC')->get();
        $data['user'] = User::where('is_admin',NULL)->orderBy('id','DESC')->get();
        return view('admin.withdraw.index',$data);
    }
    public function update(Request $request,$id)
    {
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
    }

    public function details($id)
    {
      $data['withdraw'] = Withdraw::where('user_id',$id)->first();
      // dd( $data['withdraw']);
      return view('admin.withdraw.details',$data);
    }

    public function referral()
    {
      $data['user'] = User::orderBy('id','DESC')->get();
      // dd($data['user']);
      return view('admin.withdraw.referral',$data);
    }
}

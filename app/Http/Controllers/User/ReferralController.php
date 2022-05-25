<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\OrderProduct;
use App\Models\Withdraw;
use App\Models\Notification;

class ReferralController extends Controller
{
    public function index()
    {
        $user = Auth::user()->referral_id;
        $userid = Auth::user()->id;
        $totalWithdraw = Withdraw::where('user_id', $userid)->sum('amount');

        $referallAmount = OrderProduct::where('referral_id',$user)->sum('price');
        // dd($referallAmount);
        Auth::user()->range_amount;
        if (Auth::user()->range_amount == 0) {
          $amount = 0;
        } else {
          $amount = (Auth::user()->commision * $referallAmount) / Auth::user()->range_amount;
        }
        return view('user.setting.referral_earning',compact('amount','totalWithdraw'));
    }

    public function withdraw(Request $request, $id)
    {

        $user = Auth::user()->referral_id;
        $userid = Auth::user()->id;
        $totalWithdraw = Withdraw::where('user_id', $userid)->sum('amount');

        $referallAmount = OrderProduct::where('referral_id',$user)->sum('price');
        // dd($referallAmount);
        Auth::user()->range_amount;
        if (Auth::user()->range_amount == 0) {
          $amount = 0;
        } else {
          $amount = (Auth::user()->commision * $referallAmount) / Auth::user()->range_amount;
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            if($amount < $request->amount){
                return back()->with('flash_message_error','You con not withdraw your income because your balance is low'); 
            }else{
                if($request->amount < 10){
                    return back()->with('flash_message_error','You con not withdraw your income');
                }else{
                    $withdraw= New Withdraw();
                    $withdraw->user_id = Auth::user()->id;
                    $withdraw->amount=$request->amount;
                    $withdraw->account_type = $request->account_type;
                    $withdraw->account_number = $request->account_number;
                    $withdraw->phone = $request->phone;
                    $withdraw->comment = $request->comment;
                    $withdraw->save();
        
                    $notification = new Notification;
                    $notification->withdraw_id = $withdraw->user_id;
                    $notification->save();
                    return back()->with('flash_message_success','You income withdraw successfully');
    
                }

            }
            
            // dd($data);
           
        }

        return view('user.setting.withdraw');
    }

    public function withdraw_insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $withdraw= New Withdraw();
            $withdraw->user_id = Auth::user()->id;
            $withdraw->amount=$request->amount;
            $withdraw->account_type = $request->account_type;
            $withdraw->account_number = $request->account_number;
            $withdraw->phone = $request->phone;
            $withdraw->comment = $request->comment;
            $withdraw->save();
            return back();
        }

        return view('user.setting.withdraw');
    }
}

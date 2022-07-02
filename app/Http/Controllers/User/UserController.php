<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\Order;
use App\Models\GiftCardOrder;
use App\Models\GeneralSetting;
use App\Models\BlogPost;
use Hash;
use App\Models\Notification;
use Auth;
use Mail;
use Session;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    public function index( Request $request)
    {
        $referral = Session::get('referall');
        if ($request->isMethod('post')) {
            $data=$request->all();
            // echo "<pre>";print_r($data);die;

            //
            $userCount=User::where('email', $data['email'])->count();
            if ($userCount > 0) {
              $user=User::where('email', $data['email'])->first();

            if($user->status==0) {
                return redirect()->back()->with('flash_message_forget', 'Your Acount is Inactive  !! please click here to verify email');
            }

            elseif($user->is_banned==1) {
                return redirect()->back()->with('flash_message_error', 'Your Acount is Banned  !! please Contact Admin');
            }

            else {

                if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {

                  $admin = User::find($user->id);

            $admin->last_login = Carbon::now();
            $admin->ip = \Request::getClientIp();
            $admin->save();

                    if (!empty(Session::get('session_id'))) {
                        $session_id = Session::get('session_id');
                           DB::table('carts')->where('session_id',$session_id)->update(['user_email'=>$data['email']]);
                           DB::table('wish_lists')->where('session_id',$session_id)->update(['user_email'=>$data['email']]);
                      }
                    return redirect('/')->with('flash_message_success', 'Login Successfully !!');
                    ;
                }

                else {
                    return redirect()->back()->with('flash_message_error', 'Invaild email or password');
                }

            }
              
            }else{
              return redirect()->back()->with('flash_message_error', 'Your are not registered or Try to Sign In with correct email and password');
            }


        }
        return view('user.login');
    }

    public function registration(Request $request)
    {

        $referral = Session::get('referall');
        $gs = GeneralSetting::first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $referred_by = Cookie::get('referral_id');
        //   echo "<pre>";print_r($data);die;
             $userCount = User::where('email',$data['email'])->count();
             if ($userCount>0) {
               return redirect()->back()->with('flash_message_error','Email already exists!');
             }else {
             $user = new User;
             $user->name = $data['name'];
             $user->slug = rand(11,99).$data['name'];
             $user->commision = $gs['commission'];
             $user->email = $data['email'];
             $user->phone = $data['phone'];
             $user->date_of_birth = $data['date_of_birth'];
             $user->gender = $data['gender'];
             $user->referred_by = $referred_by;
             $user->referral_id = $data['name'].rand(111,9999);
             $user->password = bcrypt($data['password']);
             $user->save();
             $notification = new Notification;
             $notification->user_id = $user->id;
             $notification->save();
              //   $email =$data['email'];
              //  $messageData = ['email'=>$data['email'],'name'=>$data['name']];
              // Mail::send('email.register',$messageData,function($message) use($email){
              //   $message->to($email)->subject('Registration with techshop');
              //   });
       
              //Send confirm emails
           
       
       
              $subject=$gs->site_title;
                $email =$data['email'];
               $messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
                Mail::send('email.confirmation',$messageData,function($message) use($email,$subject){
                  $message->to($email)->subject($subject.' '.'Say Please Confirm your  Account');
                });
       
         return redirect('/user/login')->with('flash_message_success','Please Confirm Your email to Active your account !! ');
       
            
           }
        }
        return view('user.registration');
    }

    public function confirmAccount($email) {
        $email=base64_decode($email);
        $userCount=User::where('email', $email)->count();

        if ($userCount > 0) {
            $userDetails=User::where('email', $email)->first();

            if ($userDetails->status==1) {
                return redirect('user/login')->with('flash_message_success', 'Your email account is already active . You can login');
            }

            else {
                User::where('email', $email)->update(['status'=>1]);


                $messageData=['email'=>$email,
                'name'=>$userDetails->name];

                Mail::send('user.email.welcome', $messageData, function($message) use($email) {
                        $message->to($email)->subject('Confirm to your Account');
                    }

                );

                return redirect('user/login')->with('flash_message_success', 'Your email account is  active now . You can login');
            }
        }

        else {
            abort(404);
        }
    }
    public function account_update (Request $request, $id) {
        $user=User::find($id);
        $user->name=$request['name'];
        $user->phone=$request['phone'];
        $user->city=$request['city'];
        $user->country=$request['country'];
        $user->address1=$request['address1'];

        $user->address2=$request['address2'];
        $user->postcode=$request['postcode'];

     
        $user->save();

        return redirect('user/account')->with('flash_message_success', 'Your account Update Successfully');
    }
public function logout()
{
Auth::logout();

Session::forget('session_id');
return redirect('/');
}

public function account()
{
    return view('user.setting.account');
}

public function order_list()
{
    $data['order_list'] = Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
    $data['ordercount'] = Order::where('user_id',Auth::user()->id)->count('id');

    // dd($data['order_list'] );
    return view('user.order_list',$data);
}

public function referall()
{
  return view('user.setting.referall');
}

public function forgotPassword(Request $request) {
  
    if ($request->isMethod('post')) {
        $data=$request->all();
        // echo "<pre>";print_r($data);die;
        $userCount=User::where('email', $data['email'])->count();

        if ($userCount==0) {
            return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
        }

        $userDetails=User::where('email', $data['email'])->first();

        $random_password=random_int(1000, 9999);
        $new_password=bcrypt($random_password);
        User::where('email', $data['email'])->update(['password'=>$new_password]);

        $email=$data['email'];
        $name=$userDetails->name;
        $gs = GeneralSetting::first();
       
       
          $subject=$gs->site_title;
          // dd($subject);
         
      
        $messageData=[ 
          'email'=>$email,
        'name'=>$name,
        'password'=>$random_password
      ];

        Mail::send('user.email.forgotpassword', $messageData, function($message) use($email, $subject) {
                $message->to($email)->subject('New Password From'.' ' . $subject);
            }

        );

        return redirect('/user/login')->with('flash_message_success', 'Please check your email for new password!!');

    }

    return view('user.password');

}

public function chkUserPasswordForm()
{
  return view('user.setting.update_password');
}

public function chkUserPassword(Request $request)
  {
    $data =  $request->all();
    $current_password = $data['current_pwd'];
    $user_id = Auth::user()->id;
    $check_password = User::where('id', $user_id)->first();
    if (Hash::check($current_password, $check_password->password)) {
      echo "true";
      die;
    } else {
      echo "false";
      die;
    }
  }

  public function updateUserPassword(Request $request)

  {
    if ($request->isMethod('post')) {
      $data = $request->all();

      $old_password = User::where('id', Auth::User()->id)->first();
      $current_password = $data['current_pwd'];
      if (Hash::check($current_password, $old_password->password)) {
        $password = bcrypt($data['new_pwd']);
        User::where('id', Auth::User()->id)->update(['password' => $password]);
        return back()->with('flash_message_success', ' Password update Successfully');
      } else {
        return back()->with('flash_message_error', ' Password is not  update ');
      }
    }
  }

  public function giftcard()
  {
    $data['dt'] = Carbon::now();
    $dt = Carbon::now();
    $data['giftcard'] = GiftCardOrder::where('user_id',Auth::user()->id)->where('expired_date','>=', $dt->toDateString())->where('status','Completed')->sum('giftcard_value');
     $data['order'] = Order::where('user_id',Auth::user()->id)->sum('giftcard_amount');
     $data['giftcardDeatils']=GiftcardOrder::where('user_id',Auth::user()->id)->where('expired_date','>=', $dt->toDateString())->Orderby('id','desc')->take(6)->get();
    return view('user.setting.giftcard',$data);
  }

  public function order_status(Request $request, $id)
  {
    $ordercancel = Order::find($id);
    $ordercancel->status = $request->status;
    $ordercancel->save();
    return redirect()->back()->with('flash_message_success', 'Order Cancel  Successfully !!');

  }
  public function user_blog()
  {
    $data['blog']= BlogPost::where('user_id',Auth::user()->id)->get();
    return view('user.setting.blog',$data);
  }

}

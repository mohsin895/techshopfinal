<?php

namespace App\Http\Controllers\Blog\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Notification;
use App\Models\User;
use Session;
use Mail;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        $blogproductsUrl = Session::get('productsslug');

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

                if (Auth::guard('blog')->attempt(['email'=>$data['email'], 'password'=>$data['password']])) {

                    if(empty($blogproductsUrl)){
                        return redirect('/blog/user')->with('flash_message_success', 'Login Successfully !!');

                      }else{
                        return redirect()->route('blog.post.details',$blogproductsUrl);
                        Session::forget('productsslug');
                        
                        
                      }

                    
                    // return redirect('/blog/user')->with('flash_message_success', 'Login Successfully !!');
                    
                }

                else {
                    return redirect()->back()->with('flash_message_error', 'Invaild email or password');
                }

            }
              
            }else{
              return redirect()->back()->with('flash_message_error', 'Your are not registered or Try to Sign In with correct email and password');
            }


        }
        return view('blog.user.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'gender' => 'required',
        ]);

            $data = $request->all();
            $gs = GeneralSetting::first();
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
             $user->password = bcrypt($data['password']);
             $user->save();
             $notification = new Notification;
             $notification->user_id = $user->id;
             $notification->save();
            //     $email =$data['email'];
            //    $messageData = ['email'=>$data['email'],'name'=>$data['name']];
            //   Mail::send('email.register',$messageData,function($message) use($email){
            //     $message->to($email)->subject('Registration with techshop');
            //     });
       
              //Send confirm emails
       
                $email =$data['email'];
               $messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
                Mail::send('email.blog.confirmation',$messageData,function($message) use($email){
                  $message->to($email)->subject('Confirm your  Account');
                });
       
         return redirect('/blog/login')->with('flash_message_success','Please Confirm Your email to Active your account !! ');
       
            
           }
        }
        return view('blog.user.register');
    }

    public function confirmAccount($email) {
        $email=base64_decode($email);
        $userCount=User::where('email', $email)->count();

        if ($userCount > 0) {
            $userDetails=User::where('email', $email)->first();

            if ($userDetails->status==1) {
                return redirect('blog/login')->with('flash_message_success', 'Your email account is already active . You can login');
            }

            else {
                User::where('email', $email)->update(['status'=>1]);


                $messageData=['email'=>$email,
                'name'=>$userDetails->name];

                Mail::send('user.email.welcome', $messageData, function($message) use($email) {
                        $message->to($email)->subject('Confirm to Techshop');
                    }

                );

                return redirect('blog/login')->with('flash_message_success', 'Your email account is  active now . You can login');
            }
        }

        else {
            abort(404);
        }
    }

 public function bloglogout()
{
    Session::flush();


return redirect('/blog/user');
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
        $messageData=[ 
          'email'=>$email,
        'name'=>$name,
        'password'=>$random_password
      ];

        Mail::send('user.email.forgotpassword', $messageData, function($message) use($email) {
                $message->to($email)->subject('New Password - for techshop user');
            }

        );

        return redirect('/blog/login')->with('flash_message_success', 'Please check your email for new password!!');

    }

    return view('blog.user.password');

}
}

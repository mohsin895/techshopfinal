<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\BlogPost;
use App\Models\Question;
use App\Models\Answer;
use App\Models\UserMessage;
use App\Models\Notification;
use App\Models\ReviwRating;
Use \Carbon\Carbon;
use Auth;
use Mail;


class UserController extends Controller
{
   public function index()
   {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_index')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['user'] = User::where('is_admin',NULL)->orderBy('id','DESC')->get();
    
    return view('admin.user.index',$data);
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   }
   public function user_details($id)
   {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_view_details')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['user_details'] = User::where('id',$id)->first();
    $data['user_order']= Order::where('user_id',$data['user_details']->id)->orderBy('id','DESC')->get();
    $data['user_referral_order']= OrderProduct::where('referral_id',$data['user_details']->referral_id)->orderBy('id','DESC')->get();
  
       return view('admin.user.details',$data);
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   }
   public function edit(Request $request,$id)
   {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
      if ($request->isMethod('post')) {
         $data = $request->all();
         // dd($data);
         $user = User::find($id);
         $user->commision = $data['commision'];
     
         $user->status = $data['status'];
         $user->save();
         return back();
        
      }
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
      
   }


   public function delete($id)
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
      if ($role->hasPermissionTo('users_delete')) {
          $permissions = Role::findByName($role->name)->permissions;
      $data = User::find($id);

    $data->delete();
    return back()->with('flash_message_success','User has delete successfully');
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
   public function user_blog()
   
{

   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('canceled_order_index')) {
            $permissions = Role::findByName($role->name)->permissions;
   $data['title']="Admin Dashboard";
   $data['table']="Post";
   $data['add_title'] = "Add Post";
   $data['post'] = BlogPost::orderBy('id','DESC')->get();
    return view('admin.blog.user.post',$data);
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}
public function product_comment()
{
   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_product_question')) {
            $permissions = Role::findByName($role->name)->permissions;
   $data['question'] = Question::where('user_id', '!=',0)->orderBy('id','DESC')->get();
  return view('admin.user.question',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}
public function question_status(Request $request,$id)
{
  if ($request->isMethod('post')) {
   $data=$request->all();
   $questionStatus = Question::find($id);
   $questionStatus->status = $data['status'];
   $questionStatus->save();
   return back();
 
  }
}
public function ajax_question_status($id, $status)
{

    $data = Question::find($id);
    $data->status = $status;
    if ($data->save()){
        echo "1";
    }else{
        echo "0";
    }
}

public function ajax_review_status($id, $status)
{

    $data = ReviwRating::find($id);
    $data->status = $status;
    if ($data->save()){
        echo "1";
    }else{
        echo "0";
    }
}
public function answer(Request $request)
{
   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('reply_product_question')) {
            $permissions = Role::findByName($role->name)->permissions;
   if ($request->isMethod('post')) {
     $data = $request->all();
     $question = new Answer();
     $question->user_id = Auth::guard('admin')->user()->id;
     $question->question_id = $data['question_id'];
     $question->answer = $data['answer'];
     $question->save();
     return back();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   }
}
public function product_question_answer()
{
   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_products_answer')) {
            $permissions = Role::findByName($role->name)->permissions;
   $data['answer'] = Answer::orderBy('id','DESC')->get();
   return view('admin.user.answer',$data);
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}
public function answer_status(Request $request,$id)
{
   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('view_products_answer_status')) {
            $permissions = Role::findByName($role->name)->permissions;
  if ($request->isMethod('post')) {
   $data=$request->all();
   $questionStatus = Answer::find($id);
   $questionStatus->status = $data['status'];
   $questionStatus->save();
   return back();
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
  }
}

public function message()
{
  
   $data['message']= UserMessage::orderBy('id','DESC')->get();
  return view('admin.user.message',$data);

}
public function message_answer(Request $request,$id)
{
   
   if ($request->isMethod('post')) {
      $data = $request->all();
      $message= UserMessage::find($id);
      $message->status = '1';
      $message->save();

      $email = $data['email'];
      $name = $data['name'];
      $subject = $data['subject'];
      $body = $data['body'];
      $answer = $data['answer'];
      $messageData = [
        'email'=>$email,
        'name'=>$name,
        'body'=>$body,
        'subject'=>$subject,
        'answer'=>$answer,
        
       
      ];
 
      Mail::send('admin.email.answer',$messageData,function($message) use($email){
        $message->to($email)->subject('your answer');
      });
      return back();
   }
 
}

public function today_birthday()
   {$role = Role::find(Auth::guard('admin')->user()->role_id);
      if ($role->hasPermissionTo('today_birthday_users')) {
          $permissions = Role::findByName($role->name)->permissions;
      $todaybirthday = carbon::now()->toDateString();
      // dd($todaybirthday);
    $data['user'] = User::where('is_admin',NULL)->where('date_of_birth',$todaybirthday)->orderBy('id','DESC')->get();
    
    return view('admin.user.index',$data);
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   }

   public function monthly_birthday()
   {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
      if ($role->hasPermissionTo('this_month_birthday_user')) {
          $permissions = Role::findByName($role->name)->permissions;
      // dd($todaybirthday);
    $data['user'] = User::where('is_admin',NULL)->whereMonth('date_of_birth', date('m'))
    ->whereYear('date_of_birth', date('Y'))
    ->get();
//     $birth= User::whereMonth('date_of_birth', date('m'))
// ->whereYear('date_of_birth', date('Y'))
// ->get(['id','date_of_birth']);
//     dd($birth);
    return view('admin.user.index',$data);
  } else
  return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   }

   public function review_rating()
   {
    $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('show_review_rating')) {
        $permissions = Role::findByName($role->name)->permissions;
    $data['review_rating'] = ReviwRating::where('user_id', '!=',0)->orderBy('id','DESC')->get();
    // dd($data['review_rating']);
    return view('admin.user.review_rating',$data);
   }else
   return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

}

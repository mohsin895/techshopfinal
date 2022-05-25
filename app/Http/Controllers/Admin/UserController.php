<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\BlogPost;
use App\Models\Question;
use App\Models\Answer;
use App\Models\UserMessage;
use App\Models\Notification;
use Auth;
use Mail;


class UserController extends Controller
{
   public function index()
   {
    $data['user'] = User::where('is_admin',NULL)->orderBy('id','DESC')->get();
    
    return view('admin.user.index',$data);
   }
   public function user_details($id)
   {
    $data['user_details'] = User::where('id',$id)->first();
    $data['user_order']= Order::where('user_id',$data['user_details']->id)->orderBy('id','DESC')->get();
    $data['user_referral_order']= OrderProduct::where('referral_id',$data['user_details']->referral_id)->orderBy('id','DESC')->get();
  
       return view('admin.user.details',$data);
   }
   public function edit(Request $request,$id)
   {
      if ($request->isMethod('post')) {
         $data = $request->all();
         // dd($data);
         $user = User::find($id);
         $user->commision = $data['commision'];
     
         $user->status = $data['status'];
         $user->save();
         return back();
      }
   }


   public function delete($id)
    {
      $data = User::find($id);

    $data->delete();
    return back()->with('flash_message_success','User has delete successfully');
    }
   public function user_blog()
   
{
   $data['title']="Admin Dashboard";
   $data['table']="Post";
   $data['add_title'] = "Add Post";
   $data['post'] = BlogPost::orderBy('id','DESC')->get();
    return view('admin.blog.user.post',$data);
}
public function product_comment()
{
   
   $data['question'] = Question::orderBy('id','DESC')->get();
  return view('admin.user.question',$data);
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
public function answer(Request $request)
{
   if ($request->isMethod('post')) {
     $data = $request->all();
     $question = new Answer();
     $question->user_id = Auth::guard('admin')->user()->id;
     $question->question_id = $data['question_id'];
     $question->answer = $data['answer'];
     $question->save();
     return back();
   }
}
public function product_question_answer()
{
   $data['answer'] = Answer::orderBy('id','DESC')->get();
   return view('admin.user.answer',$data);
}
public function answer_status(Request $request,$id)
{
  if ($request->isMethod('post')) {
   $data=$request->all();
   $questionStatus = Answer::find($id);
   $questionStatus->status = $data['status'];
   $questionStatus->save();
   return back();
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


}

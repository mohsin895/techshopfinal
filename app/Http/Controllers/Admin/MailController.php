<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\User;
use Mail;

class MailController extends Controller
{
    public function userEmail(Request $request)
    {
        if ($request->isMethod('post')) {
           $data = $request->all();
           $email = $data['email'];
           $subject =  $request['subject'];
           $body =  $data['body'];
         //  dd($email);
           $messageData = [
             'subject' => $request['subject'],
             'body' => $body
            
           ];
      
           Mail::send('admin.email.user',$messageData,function($message) use($email,$subject){
            $message->to($email)->subject($subject);
          });
        }
        return back();
    }
 
 
    public function all_user(Request $request)
    {
        if ($request->isMethod('post')) {
           $data = $request->all();
         
           $email = explode(',',$request->email[0]);
           $subject =  $request['subject'];
           $body =  $data['body'];
         //  dd($email);
           $messageData = [
             'subject' => $request['subject'],
             'body' => $body
            
           ];
         //   dd($email);
           Mail::send('admin.email.user',$messageData,function($message) use($email,$subject){
             $message->bcc($email)->subject($subject);
           });
        }
        return back();
    }
}

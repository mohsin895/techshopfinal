<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Mail;
use Auth;

class MailController extends Controller
{
    public function userEmail(Request $request)
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('users_send_mail')) {
            $permissions = Role::findByName($role->name)->permissions;
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
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
 
 
    public function all_user(Request $request)
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('send_email_all_users')) {
            $permissions = Role::findByName($role->name)->permissions;
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
      } else
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    
}

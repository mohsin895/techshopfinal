<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function withdraw_notf_count()
    {
        $data = Notification::where('withdraw_id','!=',null)->where('is_read','=',0)->get()->count();
        return response()->json($data);            
    } 


    public function withdraw_notf_clear()
    {
        $data = Notification::where('withdraw_id','!=',null);
        $data->delete();        
    } 

    public function withdraw_notf_show()
    {
        $datas = Notification::where('withdraw_id','!=',null)->get();
        if($datas->count() > 0){
          foreach($datas as $data){
            $data->is_read = 1;
            $data->update();
          }
        }       
        return view('admin.notification.withdraw',compact('datas'));           
    } 


    public function order_notf_count()
    {
        $data = Notification::where('order_id','!=',null)->where('is_read','=',0)->get()->count();
        return response()->json($data);            
    } 

    public function order_notf_clear()
    {
        $data = Notification::where('order_id','!=',null);
        $data->delete();        
    } 

    public function order_notf_show()
    {
        $datas = Notification::where('order_id','!=',null)->get();
        if($datas->count() > 0){
          foreach($datas as $data){
            $data->is_read = 1;
            $data->update();
          }
        }       
        return view('admin.notification.order',compact('datas'));           
    }

    public function order_notf_status()
    {
        $status = Notification::where('order_id','!=',null)->get();
        if($status->count() > 0){
          foreach($status as $data){
            $data->status = 1;
            $data->update();
          }
        }       
        return view('admin.notification.order',compact('datas'));           
    }

    

   
    public function user_notf_count()
    {
        $data = Notification::where('user_id','!=',null)->where('is_read','=',0)->get()->count();
        return response()->json($data);            
    } 

    public function user_notf_clear()
    {
        $data = Notification::where('user_id','!=',null);
        $data->delete();        
    } 

    public function user_notf_show()
    {
        $datas = Notification::where('user_id','!=',null)->get();
      
        if($datas->count() > 0){
          foreach($datas as $data){
            $data->is_read = 1;
            $data->update();
          }
        }       
        return view('admin.notification.register',compact('datas'));           
    } 

    public function giftcard_notf_count()
    {
        $data = Notification::where('giftcard_id','!=',null)->where('is_read','=',0)->get()->count();
        return response()->json($data);            
    } 

    public function giftcard_notf_clear()
    {
        $data = Notification::where('giftcard_id','!=',null);
        $data->delete();        
    } 

    public function giftcard_notf_show()
    {
        $datas = Notification::where('giftcard_id','!=',null)->get();
      
        if($datas->count() > 0){
          foreach($datas as $data){
            $data->is_read = 1;
            $data->update();
          }
        }       
        return view('admin.notification.giftcard',compact('datas'));           
    } 
}

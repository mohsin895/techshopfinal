<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public static function countWithdraw()
    {
        return Notification::where('withdraw_id','!=',null)->where('is_read','=',0)->orderBy('id','desc')->get()->count();
    }
    public static function countOrder()
    {
        return Notification::where('order_id','!=',null)->where('is_read','=',0)->orderBy('id','desc')->get()->count();
    }

    public static function countRegistration()
    {
        return Notification::where('user_id','!=',null)->where('is_read','=',0)->orderBy('id','desc')->get()->count();
    }
    public static function countGiftcard()
    {
        return Notification::where('giftcard_id','!=',null)->where('is_read','=',0)->orderBy('id','desc')->get()->count();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderProduct()
    {
       return $this->hasMany('App\Models\OrderProduct','order_id');
    }
    public function orderProducttotal()
    {
       return $this->hasMany('App\Models\OrderProduct','product_id');
    }
    public function orderStatus()
    {
       return $this->hasMany('App\Models\OrderStatus','order_id');
    }
    public function orders()
    {
    return $this->hasMany('App\Models\OrderProduct','order_id');
    }

    public static function countNewOrder()
    {
        return Order::where('status','New')->orderBy('id','desc')->get()->count();
    }
    public static function countProcessingOrder()
    {
        return Order::where('status','Processing')->orderBy('id','desc')->get()->count();
    }
    protected $dates = ['delivery_date'];
}

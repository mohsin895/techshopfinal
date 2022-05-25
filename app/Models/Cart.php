<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use DB;

class Cart extends Model
{
    use HasFactory;
    public static function cartCount(){
        if(Auth::check()){
          // User is logged in; We will use Auth
          $user_email = Auth::user()->email;
          $cartCount = DB::table('carts')->where('user_email',$user_email)->sum('quantity');
        }else{
          // User is not logged in. We will use Session
          $session_id = Session::get('session_id');
          $cartCount = DB::table('carts')->where('session_id',$session_id)->sum('quantity');
        }
        return $cartCount;
      }
}

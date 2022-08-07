<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\ReviwRating;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Support\Str;
use Auth;
use Session;

class ExtraController extends Controller
{
   public function question(Request $request, $slug=null)
   {

      $url = Session::get('slug',$slug);
      // dd($url);
      Session::put('slug',$url);
   $productsUrl = Session::get('slug');
      
      if ($request->isMethod('post')) {
        $data = $request->all();
        $question = new Question();
        if(empty(Auth::user()->id)){

         $question->user_id =0;

        }else{
        $question->user_id = Auth::user()->id;
        }
        $session_id = Session::get('session_id');
        if(! isset($session_id)){
           $session_id = Str::random(40);
           session::put('session_id',$session_id);
        }

        if(empty($session_id)){

         $question->session_id =0;

        }else{
        $question->session_id = $session_id;
        }
        $question->product_id = $data['product_id'];
        $question->question = $data['question'];
        $question->save();
        return redirect()->route('product.details',$productsUrl);
      }
$data['products'] = Product::where('slug',$slug)->first();

      return view('user.question',$data);
   }

   public function answer(Request $request,$slug=null)
   {
      if ($request->isMethod('post')) {
        $data = $request->all();
        $question = new Answer();
        $question->user_id = Auth::user()->id;
        $question->question_id = $data['question_id'];
        $question->answer = $data['answer'];
        $question->save();
        return back();
      }
   }

   public function rating_review(Request $request, $slug=null)
   {
      $url = Session::get('slug',$slug);
// dd($url);
         Session::put('slug',$url);
        $productsUrl = Session::get('slug');



      if ($request->isMethod('post')) {
        $data = $request->all();
        // dd( $data);
        $question = new ReviwRating();
        


        if(empty(Auth::user()->id)){

         $question->user_id =0;

        }else{
        $question->user_id = Auth::user()->id;
        }
        $session_id = Session::get('session_id');
        if(! isset($session_id)){
           $session_id = Str::random(40);
           session::put('session_id',$session_id);
        }

        if(empty($session_id)){

         $question->session_id =0;

        }else{
        $question->session_id = $session_id;
        }
        $question->product_id = $data['product_id'];
        $question->rating_star = $data['rating_star'];
        if(!empty($data['review_details'])){
            $question->review_details = $data['review_details'];
        }else{
            $question->review_details = 0;
        }
        
        $question->save();
        return redirect()->route('product.details',$productsUrl);
      }

      $products = Product::where('slug',$slug)->first();
      $data['orderProduct'] = OrderProduct::where('product_id',$products->id)->where('user_id',auth::user()->id)->first();
      // dd($data['orderProduct']);

      return view('user.review',$data,compact('products'));
   }

   public function autocomplete(Request $request)
   {
       $data = Product::select("product_name")
               ->where("product_name","LIKE","%{$request->query}%")
               ->get();
  
       return response()->json($data);
   }
}

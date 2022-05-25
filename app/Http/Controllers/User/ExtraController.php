<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\ReviwRating;
use Auth;

class ExtraController extends Controller
{
   public function question(Request $request)
   {
      if ($request->isMethod('post')) {
        $data = $request->all();
        $question = new Question();
        $question->user_id = Auth::user()->id;
        $question->product_id = $data['product_id'];
        $question->question = $data['question'];
        $question->save();
        return back();
      }
   }

   public function answer(Request $request)
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

   public function rating_review(Request $request)
   {
      if ($request->isMethod('post')) {
        $data = $request->all();
        // dd( $data);
        $question = new ReviwRating();
        $question->user_id = Auth::user()->id;
        $question->product_id = $data['product_id'];
        $question->rating_star = $data['rating_star'];
        if(!empty($data['review_details'])){
            $question->review_details = $data['review_details'];
        }else{
            $question->review_details = 0;
        }
        
        $question->save();
        return back();
      }
   }

   public function autocomplete(Request $request)
   {
       $data = Product::select("product_name")
               ->where("product_name","LIKE","%{$request->query}%")
               ->get();
  
       return response()->json($data);
   }
}

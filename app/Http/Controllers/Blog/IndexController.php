<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogSlider;
use App\Models\BlogPost;
use App\Models\blogCategory;
use App\Models\Slider;
use Carbon\carbon;

class IndexController extends Controller
{
    public function index()
    {
        $data['slider'] = BlogSlider::get();
        $data['baseslider']= Slider::get();
        $data['new_post'] = BlogPost::get();
        $data['ardino'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['robotic'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['avr'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['basic_electronics'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['rasbipry'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['wairles'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['home'] = BlogPost::where('cat_id',2)->where('status','published')->get();
        $data['category'] = blogCategory::where('parent_id',0)->where('status','1')->orderBy('serial_number','asc')->get();
       
        // dd($data['category']);
     return view('blog.index',$data);
    }

    public function category($slug=null)
    {
        $data['categories']= blogCategory::with('subcategory')->where('parent_id',0)->get();
        $data['new_post'] = BlogPost::where('status','published')->whereDay('created_at','>=',Carbon::now()->subDays(7))->get();
        $categoryCount = blogCategory::where('slug',$slug)->count();
        // dd($categoryCount);
        if($categoryCount>0){
          // echo "category ecists";die();
         $categoryDetails = blogCategory::catDetails($slug);
    //   echo "<pre>";print_r($categoryDetails);die();
       $categoryProduct = BlogPost::where('cat_id', $categoryDetails['catDetails'])->where('status','published');
    
       if (isset($_GET['sort']) && !empty($_GET['sort'])) {
            if ($_GET['sort']=="product_lowest") {
            $categoryProduct->orderBy('product_price','ASC');
          }else if ($_GET['sort']=="price_highest") {
            $categoryProduct->orderBy('product_price','DESC');
          }
    
            }else {
                 
            }
      
            $categoryProduct = $categoryProduct->paginate(10);
            $categoryDetails = blogCategory::where(['slug'=>$slug])->first();
             $breadcrumb = " <a href='".$categoryDetails->slug."'>
        ".$categoryDetails->cat_name."</a>";
        $relatedProducts = BlogPost::where('status','published')->get();
        //  echo "<pre>";print_r($categoryProduct);die();
         return view('blog.category',$data,compact('relatedProducts','categoryDetails','categoryProduct','breadcrumb'));
        }else{
        abort(404);
        }
          
    
      
    }
}

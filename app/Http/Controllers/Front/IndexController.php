<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\ReviwRating;
use App\Models\OrderProduct;
use Carbon\Carbon;
use App\Models\Question;
use App\Models\GiftCard;
use Illuminate\Support\Facades\Input;
use Session;
use DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
       $referral = $request->get('ref', '');
       Session::put('referall',$referral);
       $referral = Session::get('referall');
     
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        $data['homepage']= Category::with('subcategory')->where('parent_id',0)->where('status',1)->orderBy('serial_number','asc')->get();
       
        $data['slider']= Slider::get();
        $data['banner']= Banner::take(2)->orderBy('id','DESC')->get();
        $data['flash_sale_product']= Product::where('flash_sale' ,1)->take(2)->get();
       

     
        $data['ardino']= Product::where('subcat_id' ,6)->take(6)->get();
        $data['raspi']= Product::where('subcat_id' ,6)->take(6)->get();
        $data['home_automotion']= Product::where('home_automotion' ,1)->take(6)->get();
        $data['feature_product']= Product::where('feature_products' ,1)->take(6)->get();
        $data['giftcard']= GiftCard::where('status' ,1)->take(6)->get();
     
        //  dd($data['ardino']);
       return view('front.index',$data,compact('referral'));
    }

    public function category($slug=null)
    {
      $referral = Session::get('referall');
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        $categoryCount = Category::where('slug',$slug)->count();
        // dd($categoryCount);
        if($categoryCount>0){
          // echo "category ecists";die();
         $categoryDetails = Category::catDetails($slug);
    //    echo "<pre>";print_r($categoryDetails);die();
       $categoryProduct = Product::where('subcat_id', $categoryDetails['catIds']);
    
       if (isset($_GET['sort']) && !empty($_GET['sort'])) {
            if ($_GET['sort']=="product_lowest") {
            $categoryProduct->orderBy('price','ASC');
          }else if ($_GET['sort']=="price_highest") {
            $categoryProduct->orderBy('price','DESC');
          }
    
            }else {
                 
            }
      
            $categoryProduct = $categoryProduct->paginate(20);
            $categoryDetails = Category::where(['slug'=>$slug])->first();
             $breadcrumb = " <a href='".$categoryDetails->slug."'>
        ".$categoryDetails->cat_name."</a>";
        $relatedProducts = Product::get();
         // echo "<pre>";print_r($categoryProduct);die();
         return view('front.category',$data,compact('relatedProducts','categoryDetails','categoryProduct','breadcrumb'));
        }else{
        abort(404);
        }
          
    
      
    }

    public function details($slug=null)
    {
      
     
      $referral = Session::get('referall');
     

        $productDetails = Product::with('gallery','question')->where('slug',$slug)->first();
        $data['orderProduct']= OrderProduct::where('product_id',$productDetails->id)->sum('quantity');
        //  dd($data['orderProduct']);
        $data['productCategory'] = Category::where('id',$productDetails->parent_id)->first();
        $data['relatedProducts'] = Product::where('parent_id',$data['productCategory'] ->id)->get();
        $data['ratingCount'] = ReviwRating::where('product_id',$productDetails->id)->count('id');
        $data['reviewCount'] = ReviwRating::where('product_id',$productDetails->id)->count('id');
        $data['progress'] = ReviwRating::where('product_id',$productDetails->id)->sum('rating_star');
        $data['progress1'] = ReviwRating::where('product_id',$productDetails->id)->where('rating_star',1)->count('id');
        $data['progress2'] = ReviwRating::where('product_id',$productDetails->id)->where('rating_star',2)->count('id');
        $data['progress3'] = ReviwRating::where('product_id',$productDetails->id)->where('rating_star',3)->count('id');
        $data['progress4'] = ReviwRating::where('product_id',$productDetails->id)->where('rating_star',4)->count('id');
        $data['progress5'] = ReviwRating::where('product_id',$productDetails->id)->where('rating_star',5)->count('id');
        // dd($progress);
    // dd($reviewCount);
      return view('front.details',$data,compact('productDetails','referral'));
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('products')
        ->where('product_name', 'LIKE', "%{$query}%")
        ->get();
        
      $output = '<ul class="dropdown-menu" style="display:block;position: absolute;/* left: 24px; */padding-left: 14px;width: 100%;">';
      foreach($data as $row)
      {
       $output .= "
       <li id='search'><button type='submit' class='button is-white form-control' style='border:none;text-align:left'>$row->product_name </button></li>
       ";
      }
      $output .= '</ul>';
      echo $output;
     
      
     }
     
   
    }  


    public function searchProducts(Request $request)
{
 if ($request->isMethod('post')) {
   $data = $request->all();
   $categories = Category::with('subcategory')->where(['parent_id'=>0])->get();
   $search_product = $data['serach'];
   // $productsAll = Product::where('product_name','like','%'.$search_product.'%')->orWhere('product_code',$search_product)->where('status','1')->get();
  $categoryProduct=Product::where(function($query) use($search_product){
    $query->where('product_name','like','%'.$search_product.'%')
    ->orWhere('price','like'.$search_product.'%');

  })->get();
  
$breadcrumb = $search_product;
return view('front.search',compact('categories','search_product','categoryProduct','breadcrumb'));

 }
}
public function flash_sale($slug=null)
{
  if(empty($slug)){
    $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
    $relatedProducts = Product::get();
    $categoryDetails = Category::with('subcategory')->where('parent_id',0)->get();
    $categoryProduct = Product::where('flash_sale', 1);
    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
      if ($_GET['sort']=="product_lowest") {
      $categoryProduct->orderBy('price','ASC');
    }else if ($_GET['sort']=="price_highest") {
      $categoryProduct->orderBy('price','DESC');
    }

      }else {
           
      }
    $categoryProduct = $categoryProduct->paginate(20);
    $categoryDetails = Category::where(['slug'=>$slug])->first();
     $breadcrumb = " <a href=''></a>";

    return view('front.flash_sale',$data,compact('relatedProducts','categoryDetails','categoryProduct','breadcrumb'));

  }else{
    $referral = Session::get('referall');
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        $categoryCount = Category::where('slug',$slug)->count();
        // dd($categoryCount);
        if($categoryCount>0){
          // echo "category ecists";die();
         $categoryDetails = Category::catDetails($slug);
    //    echo "<pre>";print_r($categoryDetails);die();
       $categoryProduct = Product::where('subcat_id', $categoryDetails['catIds'])->where('flash_sale', 1);
    
       if (isset($_GET['sort']) && !empty($_GET['sort'])) {
            if ($_GET['sort']=="product_lowest") {
            $categoryProduct->orderBy('price','ASC');
          }else if ($_GET['sort']=="price_highest") {
            $categoryProduct->orderBy('price','DESC');
          }
    
            }else {
                 
            }
      
            $categoryProduct = $categoryProduct->paginate(20);
            $categoryDetails = Category::where(['slug'=>$slug])->first();
             $breadcrumb = " <a href='".$categoryDetails->slug."'>
        ".$categoryDetails->cat_name."</a>";
        $relatedProducts = Product::get();
         // echo "<pre>";print_r($categoryProduct);die();
         return view('front.flash_sale',$data,compact('relatedProducts','categoryDetails','categoryProduct','breadcrumb'));
        }else{
        abort(404);
        }
          

  }
  
  return view('front.flash_sale');

}

public function gift_card()
{
  $giftcard= GiftCard::where('status' ,1);

  if (isset($_GET['sort']) && !empty($_GET['sort'])) {
    if ($_GET['sort']=="product_lowest") {
    $giftcard->orderBy('purchase_price','ASC');
  }else if ($_GET['sort']=="price_highest") {
    $giftcard->orderBy('purchase_price','DESC');
  }

    }else {
         
    }

    $giftcard = $giftcard->paginate(20);
    
 
  return view('front.gift_card',compact('giftcard',));
  
}

public function message()
{
  $data['product']= Product::take(6)->inRandomOrder()->get();
 return view('nothing',$data);
}

}
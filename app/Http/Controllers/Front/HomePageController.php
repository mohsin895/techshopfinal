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
use Carbon\Carbon;

class HomePageController extends Controller
{
    public function index()
    { $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        $data['categoryProduct']= Product::where('created_at' ,'>=', Carbon::now()->subDays(7))->get();
        return view('front.home',$data);
    }
}

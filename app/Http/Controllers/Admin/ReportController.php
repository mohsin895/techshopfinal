<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\GeneralSetting;
use App\Models\Qty;
use Auth;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('products_reporst_view')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Product Report";
        $data['add']="Product Report";
        $data['add_title'] = "Add product";
        if($request->product_label=='best_Selling' && $request->month==30){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product1',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==60){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product2',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==90){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product3',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==120){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product4',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==150){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product5',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==180){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product6',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==300){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product7',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==360){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product8',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==450){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product9',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==600){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product10',$data);
 
        }elseif($request->product_label=='best_Selling' && $request->month==720){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.best_selling.product11',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==30){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product1',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==60){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product2',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==90){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product3',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==120){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product4',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==150){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product5',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==180){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product6',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==300){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product7',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==360){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product8',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==450){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product9',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==600){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product10',$data);
 
        }elseif($request->product_label=='naver_selling' && $request->month==720){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.naver_selling.product11',$data);
 
        }elseif($request->product_label=='selling' && $request->month==30){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product1',$data);
 
        }elseif($request->product_label=='selling' && $request->month==60){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product2',$data);
 
        }elseif($request->product_label=='selling' && $request->month==90){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product3',$data);
 
        }elseif($request->product_label=='selling' && $request->month==120){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product4',$data);
 
        }elseif($request->product_label=='selling' && $request->month==150){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product5',$data);
 
        }elseif($request->product_label=='selling' && $request->month==180){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product6',$data);
 
        }elseif($request->product_label=='selling' && $request->month==300){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product7',$data);
 
        }elseif($request->product_label=='selling' && $request->month==360){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product8',$data);
 
        }elseif($request->product_label=='selling' && $request->month==450){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product9',$data);
 
        }elseif($request->product_label=='selling' && $request->month==600){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product10',$data);
 
        }elseif($request->product_label=='selling' && $request->month==720){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.selling.product11',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==30){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product1',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==60){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product2',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==90){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product3',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==120){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product4',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==150){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product5',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==180){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product6',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==300){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product7',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==360){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product8',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==450){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product9',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==600){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product10',$data);
 
        }elseif($request->product_label=='less_selling' && $request->month==720){
            $data['title']="Admin Dashboard";
            $data['table']="Product Report ";
            $data['add']="Product Report";
            $data['add_title'] = "Add product";
            $data['product'] = Product::orderBy('id','desc')->get();
            return view('admin.report.less_selling.product11',$data);
 
        }
       return view('admin.report',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function report(Request $request)
    {
        dd($request);
       if($request->product_label['best_Selling']){
           return view('admin.report.best_selling1');

       }else{

       }

    }
}

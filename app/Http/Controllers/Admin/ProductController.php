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
use Carbon\carbon;
use Auth;
use Image;

class ProductController extends Controller
{
  public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('product_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
   
        // dd($data['product']);
    return view('admin.product.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function get_subcat(Request $request)
    {
        $cat_id = $request->parent_id;
        $all_sucategory = Category::where('parent_id',$cat_id)->get();
        return response()->json($all_sucategory);
    }
public function add()
{ $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('product_create')) {
        $permissions = Role::findByName($role->name)->permissions;
    
    $data['title']="Admin Dashboard";
    $data['table']="Show product";
    $data['add']="Add product";
    $data['category']= Category::where('parent_id',0)->get();

   return view('admin.product.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {

        $data = Product::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function updateBuyingPrice($id,$price){
        $product =   Product::select('id','buying_price')->find($id);
        $product->buying_price = $price;
    
        $product->save();
        }
    
        public function updateSellingPrice($id,$price){
      $product =   Product::select('id','price')->find($id);
      $product->price = $price;
    
      $product->save();
      }

      public function updateQuantity($id,$price){
        $product =   Product::select('id','quantity')->find($id);
        $product->quantity = $price;
        
        $product->save();
        }
        public function updateQuantitylow($id,$price){
            $product =   Product::select('id','quantity')->find($id);
            $product->quantity = $price;
            
            $product->save();
            }

            public function updateQuantityout($id,$price){
                $product =   Product::select('id','quantity')->find($id);
                $product->quantity = $price;
                
                $product->save();
                }
    public function insert(Request $request)
    {
    //   dd($request->all());
        $data = new Product();
        $data->parent_id = $request['parent_id']; 
        $data->subcat_id = $request['subcat_id']; 
        $data->product_name = $request['product_name']; 
        $data->model_no = $request['model_no']; 
        $data->buying_price = $request['buying_price']; 
        $data->price = $request['price']; 
        $data->quantity = $request['quantity']; 
        $data->description = $request['description']; 
        $data->expired_date = $request['expired_date']; 
        $data->summery = $request['summery']; 
        $data->document = $request['document']; 
        $data->supplier = $request['supplier']; 
        $data->specification = $request['specification']; 
        $data->slug = Str::slug($request['product_name']);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/product/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
        if ($data->save()) {
            $product_id = $data->id;

              $qty = new Qty;
              $qty->product_id = $product_id;
              $qty->quantity = $request->quantity;
              $qty->save();
                  
                    
               
        }

        if($data->save()){
            $product_id = $data->id;
            if ($request->hasFile('gallery')) {
              $galleryimages = $request->file('gallery');
              foreach ($galleryimages as $key => $image) {
               $productimage = new Gallery;
               
               // echo "<pre>";print_r(( $productimage));die();
               $image_tmp = Image::make($image);
           
               // echo $orginalName = $image->getClientOriginalName();die();
               $extension = $image->getClientOriginalExtension();
               $imageName =  rand(111,99999).time().".".$extension;
               
                   $medium_image_path = 'public/assets/images/product/gallery/'.$imageName;
         
                  
                   Image::make($image_tmp)->save($medium_image_path);
                    $productimage->galery =$imageName;
                    $productimage->product_id = $product_id;
                    $productimage->save();
                   }
                  
             }
          }
       return redirect('/admin/product')->with('flash_message_success','product added successfully');
    }

    public function edit($id)
    {   $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('product_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        
        $data['title']="Admin Dashboard";
        $data['table']="Show Product";
        $data['add']="Add Product";
        $data['add_title'] = "Edit Category";
        $data['category']= Category::where('parent_id',0)->get();
        $data['subcategory']= Category::where('parent_id','!=',0)->get();
        // dd($data['subcategory']);
        $data['product'] = Product::find($id);
    
       return view('admin.product.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update(Request $request,$id)
    {
        $data = Product::find($id);
        $data->parent_id = $request['parent_id']; 
        $data->subcat_id = $request['subcat_id']; 
        $data->product_name = $request['product_name']; 
        $data->model_no = $request['model_no']; 
        $data->buying_price = $request['buying_price']; 
        $data->price = $request['price']; 
        $data->quantity = $request['quantity']; 
        $data->description = $request['description']; 
        $data->expired_date = $request['expired_date'];
        $data->summery = $request['summery']; 
        $data->document = $request['document']; 
        $data->supplier = $request['supplier']; 
        $data->specification = $request['specification']; 
        $data->slug = Str::slug($request['product_name']);
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/product/'.$data->image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/product/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 

        if ($data->save()) {
            $product_id = $data->id;

              $qty = new Qty;
              $qty->product_id = $product_id;
              $qty->quantity = $request->quantity;
              $qty->save();
                  
                    
               
        }
        return redirect('/admin/product')->with('flash_message_success','product Update successfully');
    }

    public function update_qty(Request $request,$id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('product_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $product =Product::find($id);
        if($product->id){
            $product_id = $product->id;
            // dd($product_id);
            $qty_id=Qty::where('product_id',$product_id)->get();
            // dd($qty_id);
            foreach($qty_id as $key => $qty){
                
             $qty->quantity = $request['quantity'][$key];

            $qty->save();
            
           
          
            }

            return back()->with('flash_message_success','Product Quantity Update Successfulle');
        } else
        return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
        }
        
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('product_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Product::find($id);
      unlink("public/assets/images/product/".$data->image);
      $galleryImage = Gallery::where('product_id',$data->id)->get();
      foreach($galleryImage as $gallery){
        unlink("public/assets/images/product/gallery/".$gallery->galery);
      }

    $data->delete();
    return back()->with('flash_message_success','product has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function stock_low()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('stock_low_products')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Stock Low Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $gs = GeneralSetting::first();
        $data['product'] = Product::orderBy('id','desc')->get();
    
        return view('admin.product.low',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function stock_out()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('stock_out_products')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Stock Out Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
   
        return view('admin.product.out',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function top_selling()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Top Selling Product";
        $data['add']="Top Selling Product";
        $data['add_title'] = "Top Selling product";
        $data['product'] = Product::orderBy('id','desc')->get();
        // dd($data['product'] );
        return view('admin.product.top_selling',$data);
    }

    public function expired_date()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('expired_date_products')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Less Selling Product";
        $data['add']="Less Selling Product";
        $data['add_title'] = "Less Selling product";
        $mytime = Carbon::now();
        $expireddate = $mytime->toDateString();
        $data['product'] = Product::where('expired_date', '<', $expireddate)->orderBy('id','desc')->get();
        // dd($data['product'] );
        return view('admin.product.less_selling',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function upcoming_expired()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Up Comming Expired Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        
        $data['product'] = Product::orderBy('id','desc')->get();
        return view('admin.product.never_selling',$data);
    }


    public function last_month_selling()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Last Month Selling Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
        return view('admin.product.last_month_selling_product',$data);
    }

    public function last_month_not_selling()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Last Month Selling Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
        return view('admin.product.last_month_not_selling_product',$data);
    }

    public function last_year_selling()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Last Year Selling Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
        return view('admin.product.last_year_selling_product',$data);
    }
    public function last_year_not_selling()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Last Year Selling Product";
        $data['add']="Add Product";
        $data['add_title'] = "Add product";
        $data['product'] = Product::orderBy('id','desc')->get();
        return view('admin.product.last_year_not_selling_product',$data);
    }

    public function view_deatils($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('product_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Details Product";
        $data['add']="Details Product";
        $data['add_title'] = "Edit Category";
        $data['category']= Category::where('parent_id',0)->get();
        $data['subcategory']= Category::where('parent_id','!=',0)->get();
        // dd($data['subcategory']);
        $data['product'] = Product::find($id);
    
        return view('admin.product.details',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Gallery;
use Auth;
use Image;
use File;

class CategoryController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Category";
        $data['add_title'] = "Add Category";
        $data['category'] = Category::where('parent_id',0)->get();
    return view('admin.category.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{ 
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_create')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show Category";
   return view('admin.category.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data = Category::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }

    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'serial_number' => 'unique:categories',
            'cat_name' => 'unique:categories',
            
        ]);
        $data = new Category();
        $data->cat_name = $request['cat_name']; 
        $data->homa_page_name = $request['homa_page_name']; 
        $data->serial_number = $request['serial_number']; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'assets/images/category/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/category')->with('flash_message_success','Category added successfully');
    }

    public function edit($id)
    { $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        
        $data['title']="Admin Dashboard";
        $data['table']="Show Category";
        $data['add']="Add Category";
        $data['add_title'] = "Edit Category";
        $data['category'] = Category::find($id);
       return view('admin.category.edit',$data);} else
       return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');

    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'serial_number' => 'unique:categories',
           
            
        ]);
        $data = Category::find($id);
        $data->cat_name = $request['cat_name']; 
        $data->homa_page_name = $request['homa_page_name']; 
        $data->serial_number = $request['serial_number']; 
        $data->description = $request['description']; 
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'assets/images/category/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/category')->with('flash_message_success','Category Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('category_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Category::find($id);
    
      $subcategory=SubCategory::where('cat_id',$data->id)->get();
      $product=Product::where('cat_id',$data->id)->get();
      foreach($subcategory as $subcat){
        
      }

      foreach($product as $pro){
        unlink("assets/images/product/".$pro->image);
        $gallery=Gallery::where('product_id',$pro->id)->get();
       foreach($gallery as $image){
        unlink("assets/images/product/gallery",$image->galery); 
       }
     
      }
    $data->delete();
    return back()->with('flash_message_success','Category has delete successfully');

} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function customField(){
        $data['title'] = "Custom Field";
        $data['table'] = "Custom Field";
        return view('admin.category.custom_field',$data);
    }
}

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
use Auth;
use Image;

class SubCategoryController extends Controller
{
    public function index()
    {$role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('subcategory_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show SubCategory";
        $data['add']="Add SubCategory";
        $data['add_title'] = "Add Category";
        $data['subcategory'] = Category::where('parent_id','!=',0)->get();
    return view('admin.sub_category.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{$role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('subcategory_create')) {
        $permissions = Role::findByName($role->name)->permissions;
    $data['category'] = Category::where('parent_id',0)->get();
    $data['title']="Admin Dashboard";
    $data['table']="Show SubCategory";
    $data['add']="Add SubCategory";
   return view('admin.sub_category.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('subcategory_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data = SubCategory::find($id);
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
        $data = new Category();
        $data->parent_id = $request['parent_id']; 
        $data->cat_name = $request['cat_name']; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/subcategory/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/subcategory')->with('flash_message_success','Category added successfully');
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('subcategory_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show SubCategory";
        $data['add']="Add SubCategory";
        $data['add_title'] = "Edit Category";
        
        $data['subcategory'] = Category::find($id);
        $data['category'] = Category::where('parent_id',0)->get();
        
       return view('admin.sub_category.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update(Request $request,$id)
    {
        $data = Category::find($id);
        $data->parent_id = $request['parent_id']; 
        $data->cat_name = $request['cat_name']; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']); 
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/subcategory/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/subcategory')->with('flash_message_success','Category Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('subcategory_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Category::find($id);
  
    $data->delete();
    return back()->with('flash_message_success','Category has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

}

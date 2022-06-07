<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use App\Models\BlogSubCategory;
use App\Models\BlogPost;
use App\Models\Gallery;
use Auth;


class BlogCategoryController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_category_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Category";
        $data['add_title'] = "Add Category";
        $data['category'] = blogCategory::where('parent_id',0)->get();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    return view('admin.blog.category.index',$data);
    }
public function add()
{ 
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_category_create')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show Category";
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   return view('admin.blog.category.create',$data);
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_category_status')) {
            $permissions = Role::findByName($role->name)->permissions;

        $data = BlogCategory::find($id);
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
        $validated = $request->validate([
            'serial_number' => 'unique:blog_categories',
            'cat_name' => 'unique:blog_categories',
            
        ]);
        // dd($request->all());
        $data = new blogCategory();
        $data->cat_name = $request['cat_name']; 
        $data->homa_page_name = $request['homa_page_name']; 
        $data->serial_number = $request['serial_number']; 
        $data->parent_id = '0'; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
      
        $data->save(); 
       return redirect('/admin/blog/category')->with('flash_message_success','Blog Category added successfully');
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_category_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        
        $data['title']="Admin Dashboard";
        $data['table']="Show Category";
        $data['add']="Add Category";
        $data['add_title'] = "Edit Category";
        $data['category'] = blogCategory::find($id);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
       return view('admin.blog.category.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
          
            'serial_number' => 'unique:blog_categories',
            
        ]);
        $data = blogCategory::find($id);
        $data->cat_name = $request['cat_name']; 
        $data->homa_page_name = $request['homa_page_name']; 
        $data->serial_number = $request['serial_number']; 
        $data->parent_id = '0'; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
        $data->save(); 
        return redirect('/admin/blog/category')->with('flash_message_success','Blog Category Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_category_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = blogCategory::find($id);
     
      
    $data->delete();
    return back()->with('flash_message_success','Blog Category has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use Auth;

class BlogSubCategoryController extends Controller
{
    public function index()
    {$role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_subcategory_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Category";
        $data['add'] = "Add SubCategory";
        $data['subcategory'] = blogCategory::where('parent_id','!=',0)->get();
    return view('admin.blog.subcategory.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{ 
    
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_subcategory_create')) {
            $permissions = Role::findByName($role->name)->permissions;$data['title']="Admin Dashboard";
    $data['table']="Show Category";
    $data['add'] = "Add SubCategory";
    $data['subcategory'] = blogCategory::where('parent_id',0)->get();
   return view('admin.blog.subcategory.create',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_subcategory_status')) {
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
        // dd($request->all());
        $data = new blogCategory();
        $data->cat_name = $request['cat_name']; 
        $data->parent_id = $request['parent_id']; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
      
        $data->save(); 
       return redirect('/admin/blog/subcategory')->with('flash_message_success','Blog Category added successfully');
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_subcategory_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Category";
        $data['add']="Add Category";
        $data['add_title'] = "Edit Category";
        $data['category'] = blogCategory::where('parent_id',0)->get();
        $data['subcategory'] = blogCategory::find($id);
       return view('admin.blog.subcategory.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update(Request $request,$id)
    {
        $data = blogCategory::find($id);
        $data->cat_name = $request['cat_name']; 
        $data->parent_id = $request['parent_id']; 
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['cat_name']);
        $data->save(); 
        return redirect('/admin/blog/subcategory')->with('flash_message_success','Blog Category Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_subcategory_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = blogCategory::find($id);
     
      
    $data->delete();
    return back()->with('flash_message_success','Blog Category has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

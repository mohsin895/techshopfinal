<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use App\Models\BlogSubCategory;
use App\Models\BlogPost;
use App\Models\Gallery;


class BlogCategoryController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Category";
        $data['add_title'] = "Add Category";
        $data['category'] = blogCategory::where('parent_id',0)->get();
    return view('admin.blog.category.index',$data);
    }
public function add()
{  $data['title']="Admin Dashboard";
    $data['table']="Show Category";
   return view('admin.blog.category.create',$data);
}

    public function status($id, $status)
    {

        $data = BlogCategory::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
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
    {  $data['title']="Admin Dashboard";
        $data['table']="Show Category";
        $data['add']="Add Category";
        $data['add_title'] = "Edit Category";
        $data['category'] = blogCategory::find($id);
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
      $data = blogCategory::find($id);
     
      
    $data->delete();
    return back()->with('flash_message_success','Blog Category has delete successfully');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use Image;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show SubCategory";
        $data['add']="Add SubCategory";
        $data['add_title'] = "Add Category";
        $data['subcategory'] = Category::where('parent_id','!=',0)->get();
    return view('admin.sub_category.index',$data);
    }
public function add()
{
    $data['category'] = Category::where('parent_id',0)->get();
    $data['title']="Admin Dashboard";
    $data['table']="Show SubCategory";
    $data['add']="Add SubCategory";
   return view('admin.sub_category.add',$data);
}

    public function status($id, $status)
    {

        $data = SubCategory::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
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
    {   $data['title']="Admin Dashboard";
        $data['table']="Show SubCategory";
        $data['add']="Add SubCategory";
        $data['add_title'] = "Edit Category";
        
        $data['subcategory'] = Category::find($id);
        $data['category'] = Category::where('parent_id',0)->get();
        
       return view('admin.sub_category.edit',$data);
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
      $data = Category::find($id);
  
    $data->delete();
    return back()->with('flash_message_success','Category has delete successfully');
    }

}

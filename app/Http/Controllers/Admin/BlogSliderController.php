<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\BlogSlider;
use Image;
use Auth;

class BlogSliderController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_slider_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
        $data['add_title'] = "Add slider";
        $data['slider'] = BlogSlider::get();
    return view('admin.blog.slider.index',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
public function add()
{$role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('blog_slider_create')) {
        $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
   return view('admin.blog.slider.create',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_slider_status')) {
            $permissions = Role::findByName($role->name)->permissions;

            
        $data = BlogSlider::find($id);
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
        //  dd($request->all());
        $data = new BlogSlider();
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/blog/slider/' . $filename;

                Image::make($image_tmp)->resize(1230, 370)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/blog/slider')->with('flash_message_success','slider added successfully');
    }

    public function edit($id)
    {  
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_slider_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
        $data['add_title'] = "Edit slider";
        $data['slider'] = BlogSlider::find($id);
       return view('admin.blog.slider.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function update(Request $request,$id)
    {
        $data = BlogSlider::find($id);
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/blog/slider/'.$data->image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/blog/slider/' . $filename;

                Image::make($image_tmp)->resize(1230, 370)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/blog/slider')->with('flash_message_success','slider Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_slider_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = BlogSlider::find($id);
      unlink("public/assets/images/blog/slider/".$data->image);
    $data->delete();
    return back()->with('flash_message_success','slider has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

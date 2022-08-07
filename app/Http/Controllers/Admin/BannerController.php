<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;
use Auth;
use File;

class BannerController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('general_setting_frontend_banner_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Banner";
        $data['add']="Add Banner";
        $data['add_title'] = "Add banner";
        $data['banner'] = Banner::get();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    return view('admin.banner.index',$data);
    }
public function add()
{
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('general_setting_frontend_banner_create')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show Banner";
    $data['add']="Add Banner";
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   return view('admin.banner.create',$data);
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('general_setting_frontend_banner_status')) {
            $permissions = Role::findByName($role->name)->permissions;

        $data = Banner::find($id);
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
        $data = new banner();
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/banner/' . $filename;

                Image::make($image_tmp)->resize(508, 245)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/banner')->with('flash_message_success','banner added successfully');
    }

    public function edit($id)
    {  
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('general_setting_frontend_banner_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Banner";
        $data['add']="Add Banner";
        $data['add_title'] = "Edit banner";
        $data['banner'] = Banner::find($id);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
       return view('admin.banner.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = Banner::find($id);
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/banner/'.$data->image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/banner/' . $filename;

                Image::make($image_tmp)->resize(508, 245)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/banner')->with('flash_message_success','banner Update successfully');
    }

    public function delete($id)
    {$role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('general_setting_frontend_banner_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Banner::find($id);
      unlink("public/assets/images/banner/".$data->image);
    $data->delete();
    return back()->with('flash_message_success','banner has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

}
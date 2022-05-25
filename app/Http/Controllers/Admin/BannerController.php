<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Image;

class BannerController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Banner";
        $data['add']="Add Banner";
        $data['add_title'] = "Add banner";
        $data['banner'] = Banner::get();
    return view('admin.banner.index',$data);
    }
public function add()
{$data['title']="Admin Dashboard";
    $data['table']="Show Banner";
    $data['add']="Add Banner";
   return view('admin.banner.create',$data);
}

    public function status($id, $status)
    {

        $data = Banner::find($id);
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
    {   $data['title']="Admin Dashboard";
        $data['table']="Show Banner";
        $data['add']="Add Banner";
        $data['add_title'] = "Edit banner";
        $data['banner'] = Banner::find($id);
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

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/banner')->with('flash_message_success','banner Update successfully');
    }

    public function delete($id)
    {
      $data = Banner::find($id);
      unlink("public/assets/images/banner/".$data->image);
    $data->delete();
    return back()->with('flash_message_success','banner has delete successfully');
    }

}

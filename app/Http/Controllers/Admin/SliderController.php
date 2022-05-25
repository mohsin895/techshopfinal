<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;

class SliderController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
        $data['add_title'] = "Add slider";
        $data['slider'] = Slider::get();
    return view('admin.slider.index',$data);
    }
public function add()
{
    $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
   return view('admin.slider.create',$data);
}

    public function status($id, $status)
    {

        $data = Slider::find($id);
        $data->status = $status;
        if ($data->save()){
            echo "1";
        }else{
            echo "0";
        }
    }

    public function insert(Request $request)
    {
        //  dd($request->all());
        $data = new Slider();
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/slider/' . $filename;

                Image::make($image_tmp)->resize(1037,293)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/slider')->with('flash_message_success','slider added successfully');
    }

    public function edit($id)
    {   $data['title']="Admin Dashboard";
        $data['table']="Show Slider";
        $data['add']="Add Slider";
        $data['add_title'] = "Edit slider";
        $data['slider'] = Slider::find($id);
       return view('admin.slider.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = Slider::find($id);
        $data->title = $request['title']; 
        $data->description = $request['description']; 
        $data->link = $request['link'];
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/slider/'.$data->image);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/slider/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/slider')->with('flash_message_success','slider Update successfully');
    }

    public function delete($id)
    {
      $data = Slider::find($id);
      unlink("public/assets/images/slider/".$data->image);
    $data->delete();
    return back()->with('flash_message_success','slider has delete successfully');
    }

}

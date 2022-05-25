<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCard;
use Illuminate\Support\Str;
use Image;

class GiftCardController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Show GiftCard";
        $data['add']="Add GiftCard";
        $data['add_title'] = "Add GiftCard";
        $data['giftcard'] = GiftCard::get();
    return view('admin.giftcard.index',$data);
    }
public function add()
{$data['title']="Admin Dashboard";
    $data['table']="Show GuftCard";
    $data['add']="Add GuftCard";
   return view('admin.giftcard.create',$data);
}

    public function status($id, $status)
    {

        $data = GiftCard::find($id);
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
        $data = new GiftCard();
        $data->name = $request['name'];
        $data->slug = Str::slug($request['name']); 
        $data->duration = $request['duration']; 
        $data->purchase_price = $request['purchase_price'];
        $data->giftcard_value = $request['giftcard_value'];
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/giftcard/' . $filename;

                Image::make($image_tmp)->resize(508, 245)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/giftcard')->with('flash_message_success','Giftcard added successfully');
    }

    public function edit($id)
    {   $data['title']="Admin Dashboard";
        $data['table']="Show Giftcard";
        $data['add']="Add Giftcard";
        $data['add_title'] = "Edit Giftcard";
        $data['giftcard'] = GiftCard::find($id);
       return view('admin.giftcard.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $data = GiftCard::find($id);
        $data->name = $request['name']; 
        $data->duration = $request['duration']; 
        $data->purchase_price = $request['purchase_price'];
        $data->giftcard_value = $request['giftcard_value'];
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/giftcard/'.$data->image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/giftcard/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/giftcard')->with('flash_message_success','GiftCard Update successfully');
    }

    public function delete($id)
    {
      $data = GiftCard::find($id);
      unlink("public/assets/images/giftcard/".$data->image);
    $data->delete();
    return back()->with('flash_message_success','GiftCard has delete successfully');
    }

}

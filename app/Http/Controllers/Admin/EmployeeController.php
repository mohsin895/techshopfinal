<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

use Mail;
use Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Employee";
        $data['add_title'] = "Add Employee";
        $data['lims_role_all'] = Roles::get();
        $data['employee'] = User::where('is_admin','admin')->get();
    return view('admin.employee.index',$data);
    }
public function add()
{  $data['title']="Admin Dashboard";
    $data['table']="Show Employee";
    $data['lims_role_all'] = Roles::get();
   return view('admin.employee.add',$data);
}

    public function status($id, $status)
    {

        $data = User::find($id);
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
        if ($request->isMethod('post')) {
            $data = $request->all();
            $staff = User::where('email', $data['email'])->count();
            if ($staff > 0) {
                return back()->with('flash_message_error', 'Email already Exists');
            } else {
                $role = new User();
                $role->name = $data['name'];
                $role->role_id = $data['role_id'];
                $role->email = $data['email'];
                $role->is_admin = 'admin';
                $role->password = bcrypt($data['password']);
                $role->save();
                return redirect('/admin/employee')->with('flash_message_success', 'Admin staff Added Successfully');
            }
        }
       
    }

    public function edit($id)
    {  $data['title']="Admin Dashboard";
        $data['table']="Show Employee";
        $data['add']="Add employee";
        $data['add_title'] = "Edit Employee";
        $data['employee'] = User::find($id);
        $data['lims_role_all'] = Roles::get();
       return view('admin.employee.edit',$data);
    }

    public function update(Request $request,$id)
    {
       
        $data = User::find($id);
        $data->cat_name = $request['cat_name']; 
        $data->homa_page_name = $request['homa_page_name']; 
        $data->serial_number = $request['serial_number']; 
        $data->description = $request['description']; 
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'assets/images/User/' . $filename;

                Image::make($image_tmp)->resize(150, 120)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/User')->with('flash_message_success','User Update successfully');
    }

    public function delete($id)
    {
      $data = User::find($id);
    
    
    $data->delete();
    return back()->with('flash_message_success','Employee has delete successfully');
    }

}

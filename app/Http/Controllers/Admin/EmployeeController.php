<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Roles;
use Auth;
use Mail;
use Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('admin_staff_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Employee";
        $data['add_title'] = "Add Employee";
        $data['lims_role_all'] = Roles::get();
        $data['employee'] = User::where('is_admin','admin')->get();

         } else
            return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    return view('admin.employee.index',$data);
    }



public function add()
{  $role = Role::find(Auth::guard('admin')->user()->role_id);
    if ($role->hasPermissionTo('admin_staff_create')) {
        $permissions = Role::findByName($role->name)->permissions;
    
    $data['title']="Admin Dashboard";
    $data['table']="Show Employee";
    $data['lims_role_all'] = Roles::get();
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   return view('admin.employee.add',$data);
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('admin_staff_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data = User::find($id);
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
                $role->status = '1';
                $role->password = bcrypt($data['password']);
                $role->save();
                return redirect('/admin/employee')->with('flash_message_success', 'Admin staff Added Successfully');
            }
        }
       
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('admin_staff_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Employee";
        $data['add']="Add employee";
        $data['add_title'] = "Edit Employee";
        $data['employee'] = User::find($id);
        $data['lims_role_all'] = Roles::get();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
       return view('admin.employee.edit',$data);
    }

    public function update(Request $request,$id)
    {

       
        $data = User::find($id);
        $data->name = $request['name']; 
        $data->email = $request['email']; 
        $data->role_id = $request['role_id'];  
        $data->password = bcrypt($request['password']);
        $data->save(); 
        return redirect('/admin/employee')->with('flash_message_success','User Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('admin_staff_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = User::find($id);
    
    
    $data->delete();
    return back()->with('flash_message_success','Employee has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    
    }


}
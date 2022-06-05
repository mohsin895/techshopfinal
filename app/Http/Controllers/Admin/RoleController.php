<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Roles;

class RoleController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Role";
        $data['add_title'] = "Add ROle";
        $data['role'] = Roles::get();
      
    return view('admin.role.index',$data);
    }
public function add()
{  $data['title']="Admin Dashboard";
    $data['table']="Show ROle";
    $data['role'] = Roles::get();
   return view('admin.role.add',$data);
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
            $role = new Roles();
            $role->name = $data['name'];
            $role->save();
            return redirect('/admin/role')->with('flash_message_success', 'Admin Role Added Successfully');
        }
       
    }

    public function edit($id)
    {  $data['title']="Admin Dashboard";
        $data['table']="Show Role";
        $data['add']="Add Role";
        $data['add_title'] = "Edit Role";
        $data['role'] = Roles::find($id);
       return view('admin.role.edit',$data);
    }

    public function update(Request $request,$id)
    {
       
        $data = Roles::find($id);
        $data->name = $request['name']; 
        $data->save(); 
        return redirect('/admin/role')->with('flash_message_success','Role Update successfully');
    }

    public function delete($id)
    {
      $data = Roles::find($id);
    
    
    $data->delete();
    return back()->with('flash_message_success','Role has delete successfully');
    }

    public function permission($id)
    {

        $data['title']="Admin Dashboard";
        $data['table']="Show Permission";
        $data['add']="Add Permission";
        $data['add_title'] = "Edit Permission";
            $lims_role_data = Roles::find($id);
            $permissions = Role::findByName($lims_role_data->name)->permissions;
            foreach ($permissions as $permission)
                $all_permission[] = $permission->name;
            if (empty($all_permission))
                $all_permission[] = 'dummy text';
            return view('admin.role.permission',$data, compact('lims_role_data', 'all_permission'));
        
    }

}

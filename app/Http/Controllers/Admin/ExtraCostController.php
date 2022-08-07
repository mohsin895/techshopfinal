<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Account;
use App\Models\Roles;
use Auth;

class ExtraCostController extends Controller
{
    
    public function insert(Request $request,$id = NULL)
    {
    
        if(empty($id)){
            $role = Role::find(Auth::guard('admin')->user()->role_id);
            if ($role->hasPermissionTo('debit_create')) {
                $permissions = Role::findByName($role->name)->permissions;
        // dd($request->all());
        if ($request->isMethod('post')) {
            $data = $request->all();
          
                $cost = new Account();
                $cost->cost_name = $data['cost_name'];
                $cost->buying_price = $data['buying_price'];
                $cost->cost_name = $data['cost_name'];
                $cost->buying_date = $data['buying_date'];
                $cost->save();
                return redirect('/admin/account/debit')->with('flash_message_success', 'Extra Cost Added Successfully');
            
        }

    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }else{
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('debit_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        if ($request->isMethod('post')) {
            $data = $request->all();
          
                $cost =Account::find($id);
                $cost->cost_name = $data['cost_name'];
                $cost->buying_price = $data['buying_price'];
                $cost->cost_name = $data['cost_name'];
                $cost->buying_date = $data['buying_date'];
                $cost->save();
                return redirect('/admin/account/debit')->with('flash_message_success', 'Extra Cost Added Successfully');
            
        }

    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');

    }
       
    }



    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('debit_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Account::find($id);
    
    
    $data->delete();
    return back()->with('flash_message_success','Cost has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    
    }

}

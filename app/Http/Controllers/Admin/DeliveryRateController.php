<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\ShippingCharge;
use Auth;

class DeliveryRateController extends Controller
{
    public function index(Request $request )
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('shipping_charge_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $setting = ShippingCharge::latest()->first();
            $setting->flat_rate = $data['flat_rate'];
            $setting->express_delivery = $data['express_delivery'];
            $setting->save();
            return back();
        }
        $data['shippingCharge']= ShippingCharge::latest()->first();
        $data['title'] = "Admin Dashboard";
        $data['table'] = "General Setting";
        return view('admin.delivery.index',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
}

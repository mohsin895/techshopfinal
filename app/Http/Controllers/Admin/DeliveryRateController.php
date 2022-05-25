<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;

class DeliveryRateController extends Controller
{
    public function index(Request $request )
    {
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
    }
}

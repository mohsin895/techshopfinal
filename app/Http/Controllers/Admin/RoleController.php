<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Roles;
use Auth;

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
{ 
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('role_permission_create')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show ROle";
    $data['role'] = Roles::get();
   return view('admin.role.add',$data);
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
}

    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('role_permission_status')) {
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
        $validated = $request->validate([
            'name' => 'required|unique:roles',
            
        ]);

        if ($request->isMethod('post')) {
            $data = $request->all();
            $role = new Roles();
            $role->name = $data['name'];
            $role->save();
            return redirect('/admin/role')->with('flash_message_success', 'Admin Role Added Successfully');
        }
       
    }

    public function edit($id)
    { 
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('role_permission_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Show Role";
        $data['add']="Add Role";
        $data['add_title'] = "Edit Role";
        $data['role'] = Roles::find($id);
       return view('admin.role.edit',$data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
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
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('role_permission_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = Roles::find($id);
    
    
    $data->delete();
    return back()->with('flash_message_success','Role has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
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


    public function setPermission(Request $request)
       {
        $role = Role::firstOrCreate(['id' => $request['role_id']]);

        if ($request->has('order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'order_index']);
            if (!$role->hasPermissionTo('order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('order_index');

        if ($request->has('order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'order_details']);
            if (!$role->hasPermissionTo('order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('order_details');

        if ($request->has('order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'order_invoice']);
            if (!$role->hasPermissionTo('order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('order_invoice');

        if ($request->has('order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'order_status']);
            if (!$role->hasPermissionTo('order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('order_status');

        if ($request->has('new_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'new_order_index']);
            if (!$role->hasPermissionTo('new_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('new_order_index');

        if ($request->has('new_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'new_order_details']);
            if (!$role->hasPermissionTo('new_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('new_order_details');

        if ($request->has('new_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'new_order_invoice']);
            if (!$role->hasPermissionTo('new_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('new_order_invoice');

        if ($request->has('new_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'new_order_status']);
            if (!$role->hasPermissionTo('new_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('new_order_status');

        if ($request->has('processing_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'processing_order_index']);
            if (!$role->hasPermissionTo('processing_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('processing_order_index');

        if ($request->has('processing_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'processing_order_details']);
            if (!$role->hasPermissionTo('processing_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('processing_order_details');

        if ($request->has('processing_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'processing_order_invoice']);
            if (!$role->hasPermissionTo('processing_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('processing_order_invoice');

        if ($request->has('processing_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'processing_order_status']);
            if (!$role->hasPermissionTo('processing_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('processing_order_status');

        if ($request->has('packaging_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'packaging_order_index']);
            if (!$role->hasPermissionTo('packaging_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('packaging_order_index');

        if ($request->has('packaging_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'packaging_order_details']);
            if (!$role->hasPermissionTo('packaging_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('packaging_order_details');

        if ($request->has('packaging_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'packaging_order_invoice']);
            if (!$role->hasPermissionTo('packaging_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('packaging_order_invoice');

        if ($request->has('packaging_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'packaging_order_status']);
            if (!$role->hasPermissionTo('packaging_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('packaging_order_status');

        if ($request->has('waiting_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'waiting_order_index']);
            if (!$role->hasPermissionTo('waiting_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('waiting_order_index');

        if ($request->has('waiting_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'waiting_order_details']);
            if (!$role->hasPermissionTo('waiting_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('waiting_order_details');

        if ($request->has('waiting_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'waiting_order_invoice']);
            if (!$role->hasPermissionTo('waiting_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('waiting_order_invoice');

        if ($request->has('waiting_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'waiting_order_status']);
            if (!$role->hasPermissionTo('waiting_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('waiting_order_status');

        if ($request->has('shipping_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_order_index']);
            if (!$role->hasPermissionTo('shipping_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_order_index');

        if ($request->has('shipping_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_order_details']);
            if (!$role->hasPermissionTo('shipping_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_order_details');

        if ($request->has('shipping_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_order_invoice']);
            if (!$role->hasPermissionTo('shipping_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_order_invoice');

        if ($request->has('shipping_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_order_status']);
            if (!$role->hasPermissionTo('shipping_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_order_status');

        if ($request->has('deliverd_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'deliverd_order_index']);
            if (!$role->hasPermissionTo('deliverd_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('deliverd_order_index');

        if ($request->has('deliverd_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'deliverd_order_details']);
            if (!$role->hasPermissionTo('deliverd_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('deliverd_order_details');

        if ($request->has('deliverd_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'deliverd_order_invoice']);
            if (!$role->hasPermissionTo('deliverd_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('deliverd_order_invoice');

        if ($request->has('deliverd_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'deliverd_order_status']);
            if (!$role->hasPermissionTo('deliverd_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('deliverd_order_status');

        if ($request->has('complete_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'complete_order_index']);
            if (!$role->hasPermissionTo('complete_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('complete_order_index');

        if ($request->has('complete_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'complete_order_details']);
            if (!$role->hasPermissionTo('complete_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('complete_order_details');

        if ($request->has('complete_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'complete_order_invoice']);
            if (!$role->hasPermissionTo('complete_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('complete_order_invoice');

        if ($request->has('complete_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'complete_order_status']);
            if (!$role->hasPermissionTo('complete_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('complete_order_status');

        if ($request->has('canceled_order_index')) {
            $permission = Permission::firstOrCreate(['name' => 'canceled_order_index']);
            if (!$role->hasPermissionTo('canceled_order_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('canceled_order_index');

        if ($request->has('canceled_order_details')) {
            $permission = Permission::firstOrCreate(['name' => 'canceled_order_details']);
            if (!$role->hasPermissionTo('canceled_order_details')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('canceled_order_details');

        if ($request->has('canceled_order_invoice')) {
            $permission = Permission::firstOrCreate(['name' => 'canceled_order_invoice']);
            if (!$role->hasPermissionTo('canceled_order_invoice')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('canceled_order_invoice');

        if ($request->has('canceled_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'canceled_order_status']);
            if (!$role->hasPermissionTo('canceled_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('canceled_order_status');

        if ($request->has('product_index')) {
            $permission = Permission::firstOrCreate(['name' => 'product_index']);
            if (!$role->hasPermissionTo('product_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_index');

        if ($request->has('product_create')) {
            $permission = Permission::firstOrCreate(['name' => 'product_create']);
            if (!$role->hasPermissionTo('product_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_create');

        if ($request->has('product_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'product_edit']);
            if (!$role->hasPermissionTo('product_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_edit');

        if ($request->has('product_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'product_delete']);
            if (!$role->hasPermissionTo('product_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_delete');

            
        if ($request->has('product_status')) {
            $permission = Permission::firstOrCreate(['name' => 'product_status']);
            if (!$role->hasPermissionTo('product_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_status');

        if ($request->has('category_index')) {
            $permission = Permission::firstOrCreate(['name' => 'category_index']);
            if (!$role->hasPermissionTo('category_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_index');

        if ($request->has('category_create')) {
            $permission = Permission::firstOrCreate(['name' => 'category_create']);
            if (!$role->hasPermissionTo('category_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_create');

        if ($request->has('category_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'category_edit']);
            if (!$role->hasPermissionTo('category_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_edit');
        // Billing and site Fees
        if ($request->has('category_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'category_delete']);
            if (!$role->hasPermissionTo('category_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_delete');

        if ($request->has('category_status')) {
            $permission = Permission::firstOrCreate(['name' => 'category_status']);
            if (!$role->hasPermissionTo('category_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('category_status');

        if ($request->has('subcategory_index')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_index']);
            if (!$role->hasPermissionTo('subcategory_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_index');

        if ($request->has('subcategory_create')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_create']);
            if (!$role->hasPermissionTo('subcategory_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_create');

        // Banner 
        if ($request->has('subcategory_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_edit']);
            if (!$role->hasPermissionTo('subcategory_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_edit');

        if ($request->has('subcategory_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_delete']);
            if (!$role->hasPermissionTo('subcategory_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_delete');

        if ($request->has('subcategory_status')) {
            $permission = Permission::firstOrCreate(['name' => 'subcategory_status']);
            if (!$role->hasPermissionTo('subcategory_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('subcategory_status');

        if ($request->has('admin_staff_index')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_index']);
            if (!$role->hasPermissionTo('admin_staff_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_index');

        if ($request->has('admin_staff_create')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_create']);
            if (!$role->hasPermissionTo('admin_staff_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_create');

        // Function
        if ($request->has('admin_staff_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_edit']);
            if (!$role->hasPermissionTo('admin_staff_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_edit');

        if ($request->has('admin_staff_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_delete']);
            if (!$role->hasPermissionTo('admin_staff_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_delete');

        if ($request->has('admin_staff_status')) {
            $permission = Permission::firstOrCreate(['name' => 'admin_staff_status']);
            if (!$role->hasPermissionTo('admin_staff_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('admin_staff_status');

        if ($request->has('role_permission_index')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_index']);
            if (!$role->hasPermissionTo('role_permission_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_index');

        if ($request->has('role_permission_create')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_create']);
            if (!$role->hasPermissionTo('role_permission_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_create');

        // Auction
        if ($request->has('role_permission_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_edit']);
            if (!$role->hasPermissionTo('role_permission_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_edit');


        if ($request->has('role_permission_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_delete']);
            if (!$role->hasPermissionTo('role_permission_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_delete');


        if ($request->has('role_permission_status')) {
            $permission = Permission::firstOrCreate(['name' => 'role_permission_status']);
            if (!$role->hasPermissionTo('role_permission_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('role_permission_status');


        // Business page
        if ($request->has('flash_sale_product_index')) {
            $permission = Permission::firstOrCreate(['name' => 'flash_sale_product_index']);
            if (!$role->hasPermissionTo('flash_sale_product_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('flash_sale_product_index');

        if ($request->has('flash_sale_products_create')) {
            $permission = Permission::firstOrCreate(['name' => 'flash_sale_products_create']);
            if (!$role->hasPermissionTo('flash_sale_products_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('flash_sale_products_create');

        if ($request->has('flash_sale_products_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'flash_sale_products_edit']);
            if (!$role->hasPermissionTo('flash_sale_products_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('flash_sale_products_edit');

        if ($request->has('flash_sale_products_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'flash_sale_products_delete']);
            if (!$role->hasPermissionTo('flash_sale_products_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('flash_sale_products_delete');


        // Email Settings
        if ($request->has('flash_sale_products_status')) {
            $permission = Permission::firstOrCreate(['name' => 'flash_sale_products_status']);
            if (!$role->hasPermissionTo('flash_sale_products_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('flash_sale_products_status');


        if ($request->has('stock_low_products')) {
            $permission = Permission::firstOrCreate(['name' => 'stock_low_products']);
            if (!$role->hasPermissionTo('stock_low_products')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('stock_low_products');


        if ($request->has('stock_out_products')) {
            $permission = Permission::firstOrCreate(['name' => 'stock_out_products']);
            if (!$role->hasPermissionTo('stock_out_products')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('stock_out_products');


        // Advanced
        if ($request->has('giftcard_index')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_index']);
            if (!$role->hasPermissionTo('giftcard_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_index');


        if ($request->has('giftcard_create')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_create']);
            if (!$role->hasPermissionTo('giftcard_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_create');


        if ($request->has('giftcard_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_edit']);
            if (!$role->hasPermissionTo('giftcard_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_edit');

        // User Special Price
        if ($request->has('giftcard_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_delete']);
            if (!$role->hasPermissionTo('giftcard_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_delete');


        if ($request->has('giftcard_status')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_status']);
            if (!$role->hasPermissionTo('giftcard_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_status');

        // Report View
        if ($request->has('giftcard_order_view')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_order_view']);
            if (!$role->hasPermissionTo('giftcard_order_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_order_view');


        if ($request->has('giftcard_order_status')) {
            $permission = Permission::firstOrCreate(['name' => 'giftcard_order_status']);
            if (!$role->hasPermissionTo('giftcard_order_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('giftcard_order_status');

        if ($request->has('users_index')) {
            $permission = Permission::firstOrCreate(['name' => 'users_index']);
            if (!$role->hasPermissionTo('users_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_index');

            //start second
            if ($request->has('users_edit')) {
                $permission = Permission::firstOrCreate(['name' => 'users_edit']);
                if (!$role->hasPermissionTo('users_edit')) {
                    $role->givePermissionTo($permission);
                }
            } else
                $role->revokePermissionTo('users_edit');

                if ($request->has('users_delete')) {
                    $permission = Permission::firstOrCreate(['name' => 'users_delete']);
                    if (!$role->hasPermissionTo('users_delete')) {
                        $role->givePermissionTo($permission);
                    }
                } else
                    $role->revokePermissionTo('users_delete');

if ($request->has('users_send_mail')) {
$permission = Permission::firstOrCreate(['name' => 'users_send_mail']);
if (!$role->hasPermissionTo('users_send_mail')) {
$role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('users_send_mail');

if ($request->has('users_view_details')) {
$permission = Permission::firstOrCreate(['name' => 'users_view_details']);
if (!$role->hasPermissionTo('users_view_details')) {
    $role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('users_view_details');

if ($request->has('today_birthday_users')) {
    $permission = Permission::firstOrCreate(['name' => 'today_birthday_users']);
    if (!$role->hasPermissionTo('today_birthday_users')) {
        $role->givePermissionTo($permission);
    }
} else
    $role->revokePermissionTo('today_birthday_users');
    if ($request->has('this_month_birthday_user')) {
        $permission = Permission::firstOrCreate(['name' => 'this_month_birthday_user']);
        if (!$role->hasPermissionTo('this_month_birthday_user')) {
            $role->givePermissionTo($permission);
        }
    } else
        $role->revokePermissionTo('this_month_birthday_user');

        if ($request->has('users_message')) {
            $permission = Permission::firstOrCreate(['name' => 'users_message']);
            if (!$role->hasPermissionTo('users_message')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_message');
            if ($request->has('send_email_all_users')) {
                $permission = Permission::firstOrCreate(['name' => 'send_email_all_users']);
                if (!$role->hasPermissionTo('send_email_all_users')) {
                    $role->givePermissionTo($permission);
                }
            } else
                $role->revokePermissionTo('send_email_all_users');

                if ($request->has('view_users_withdraw')) {
                    $permission = Permission::firstOrCreate(['name' => 'view_users_withdraw']);
                    if (!$role->hasPermissionTo('view_users_withdraw')) {
                        $role->givePermissionTo($permission);
                    }
                } else
                    $role->revokePermissionTo('view_users_withdraw');
                    
                    if ($request->has('view_users_withdraw_details')) {
                        $permission = Permission::firstOrCreate(['name' => 'view_users_withdraw_details']);
                        if (!$role->hasPermissionTo('view_users_withdraw_details')) {
                            $role->givePermissionTo($permission);
                        }
                    } else
                        $role->revokePermissionTo('view_users_withdraw_details');

        if ($request->has('view_withdraw')) {
            $permission = Permission::firstOrCreate(['name' => 'view_withdraw']);
            if (!$role->hasPermissionTo('view_withdraw')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('view_withdraw');
            if ($request->has('view_wihtdraw_status')) {
                $permission = Permission::firstOrCreate(['name' => 'view_wihtdraw_status']);
                if (!$role->hasPermissionTo('view_wihtdraw_status')) {
                    $role->givePermissionTo($permission);
                }
            } else
                $role->revokePermissionTo('view_wihtdraw_status');
if ($request->has('view_referral_details')) {
$permission = Permission::firstOrCreate(['name' => 'view_referral_details']);
if (!$role->hasPermissionTo('view_referral_details')) {
$role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('view_referral_details');
if ($request->has('view_referral_users_details')) {
$permission = Permission::firstOrCreate(['name' => 'view_referral_users_details']);
if (!$role->hasPermissionTo('view_referral_users_details')) {
$role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('view_referral_users_details');
if ($request->has('blog_post_index')) {
$permission = Permission::firstOrCreate(['name' => 'blog_post_index']);
if (!$role->hasPermissionTo('blog_post_index')) {
$role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('blog_post_index');
if ($request->has('blog_post_create')) {
$permission = Permission::firstOrCreate(['name' => 'blog_post_create']);
if (!$role->hasPermissionTo('blog_post_create')) {
    $role->givePermissionTo($permission);
}
} else
$role->revokePermissionTo('blog_post_create');
if ($request->has('bloog_post_edit')) {
    $permission = Permission::firstOrCreate(['name' => 'bloog_post_edit']);
    if (!$role->hasPermissionTo('bloog_post_edit')) {
        $role->givePermissionTo($permission);
    }
} else
    $role->revokePermissionTo('bloog_post_edit');
    if ($request->has('blog_post_delete')) {
        $permission = Permission::firstOrCreate(['name' => 'blog_post_delete']);
        if (!$role->hasPermissionTo('blog_post_delete')) {
            $role->givePermissionTo($permission);
        }
    } else
        $role->revokePermissionTo('blog_post_delete');

        //third therm

        if ($request->has('blog_post_status')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_post_status']);
            if (!$role->hasPermissionTo('blog_post_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_post_status');

        if ($request->has('blog_category_index')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_category_index']);
            if (!$role->hasPermissionTo('blog_category_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_category_index');

        if ($request->has('blog_category_create')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_category_create']);
            if (!$role->hasPermissionTo('blog_category_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_category_create');

        if ($request->has('blog_category_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_category_edit']);
            if (!$role->hasPermissionTo('blog_category_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_category_edit');

        if ($request->has('blog_category_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_category_delete']);
            if (!$role->hasPermissionTo('blog_category_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_category_delete');

        if ($request->has('blog_category_status')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_category_status']);
            if (!$role->hasPermissionTo('blog_category_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_category_status');

        if ($request->has('blog_subcategory_index')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_subcategory_index']);
            if (!$role->hasPermissionTo('blog_subcategory_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_subcategory_index');

        if ($request->has('blog_subcategory_create')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_subcategory_create']);
            if (!$role->hasPermissionTo('blog_subcategory_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_subcategory_create');

        if ($request->has('blog_subcategory_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_subcategory_edit']);
            if (!$role->hasPermissionTo('blog_subcategory_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_subcategory_edit');

        if ($request->has('blog_subcategory_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_subcategory_delete']);
            if (!$role->hasPermissionTo('blog_subcategory_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_subcategory_delete');

        if ($request->has('blog_subcategory_status')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_subcategory_status']);
            if (!$role->hasPermissionTo('blog_subcategory_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_subcategory_status');

        if ($request->has('blog_slider_index')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_slider_index']);
            if (!$role->hasPermissionTo('blog_slider_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_slider_index');

        if ($request->has('blog_slider_create')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_slider_create']);
            if (!$role->hasPermissionTo('blog_slider_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_slider_create');

        if ($request->has('blog_slider_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_slider_delete']);
            if (!$role->hasPermissionTo('blog_slider_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_slider_delete');

        if ($request->has('blog_slider_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_slider_edit']);
            if (!$role->hasPermissionTo('blog_slider_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_slider_edit');

        if ($request->has('blog_slider_status')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_slider_status']);
            if (!$role->hasPermissionTo('blog_slider_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_slider_status');

        if ($request->has('blog_user_post_index')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_user_post_index']);
            if (!$role->hasPermissionTo('blog_user_post_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_user_post_index');

        if ($request->has('blog_user_post_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_user_post_edit']);
            if (!$role->hasPermissionTo('blog_user_post_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_user_post_edit');

        if ($request->has('blog_user_post_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_user_post_delete']);
            if (!$role->hasPermissionTo('blog_user_post_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_user_post_delete');

        if ($request->has('blog_user_post_coment')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_user_post_coment']);
            if (!$role->hasPermissionTo('blog_user_post_coment')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_user_post_coment');

        if ($request->has('blog_coment_reply')) {
            $permission = Permission::firstOrCreate(['name' => 'blog_coment_reply']);
            if (!$role->hasPermissionTo('blog_coment_reply')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('blog_coment_reply');

        if ($request->has('users_message')) {
            $permission = Permission::firstOrCreate(['name' => 'users_message']);
            if (!$role->hasPermissionTo('users_message')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('users_message');

        if ($request->has('send_email_all_users')) {
            $permission = Permission::firstOrCreate(['name' => 'send_email_all_users']);
            if (!$role->hasPermissionTo('send_email_all_users')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('send_email_all_users');

        if ($request->has('view_product_question')) {
            $permission = Permission::firstOrCreate(['name' => 'view_product_question']);
            if (!$role->hasPermissionTo('view_product_question')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('view_product_question');

        if ($request->has('reply_product_question')) {
            $permission = Permission::firstOrCreate(['name' => 'reply_product_question']);
            if (!$role->hasPermissionTo('reply_product_question')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('reply_product_question');

        if ($request->has('product_question_status')) {
            $permission = Permission::firstOrCreate(['name' => 'product_question_status']);
            if (!$role->hasPermissionTo('product_question_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('product_question_status');

        if ($request->has('view_products_answer')) {
            $permission = Permission::firstOrCreate(['name' => 'view_products_answer']);
            if (!$role->hasPermissionTo('view_products_answer')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('view_products_answer');

        if ($request->has('view_products_answer_status')) {
            $permission = Permission::firstOrCreate(['name' => 'view_products_answer_status']);
            if (!$role->hasPermissionTo('view_products_answer_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('view_products_answer_status');

        if ($request->has('coupon_code_index')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_index']);
            if (!$role->hasPermissionTo('coupon_code_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_index');

        if ($request->has('coupon_code_create')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_create']);
            if (!$role->hasPermissionTo('coupon_code_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_create');

        if ($request->has('coupon_code_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_edit']);
            if (!$role->hasPermissionTo('coupon_code_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_edit');

        if ($request->has('coupon_code_status')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_status']);
            if (!$role->hasPermissionTo('coupon_code_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_status');

        if ($request->has('coupon_code_status')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_status']);
            if (!$role->hasPermissionTo('coupon_code_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_status');

        if ($request->has('general_setting_frontend_slider_index')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_slider_index']);
            if (!$role->hasPermissionTo('general_setting_frontend_slider_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_slider_index');

        if ($request->has('general_setting_frontend_slider_create')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_slider_create']);
            if (!$role->hasPermissionTo('general_setting_frontend_slider_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_slider_create');

        if ($request->has('general_setting_frontend_slider_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_slider_edit']);
            if (!$role->hasPermissionTo('general_setting_frontend_slider_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_slider_edit');

        if ($request->has('general_setting_frontend_slider_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_slider_delete']);
            if (!$role->hasPermissionTo('general_setting_frontend_slider_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_slider_delete');

        if ($request->has('general_setting_frontend_slider_status')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_slider_status']);
            if (!$role->hasPermissionTo('general_setting_frontend_slider_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_slider_status');

        if ($request->has('general_setting_frontend_banner_index')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_banner_index']);
            if (!$role->hasPermissionTo('general_setting_frontend_banner_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_banner_index');

        if ($request->has('general_setting_frontend_banner_create')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_banner_create']);
            if (!$role->hasPermissionTo('general_setting_frontend_banner_create')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_banner_create');

            
        if ($request->has('general_setting_frontend_banner_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_banner_delete']);
            if (!$role->hasPermissionTo('general_setting_frontend_banner_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_banner_delete');

        if ($request->has('general_setting_frontend_banner_status')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_banner_status']);
            if (!$role->hasPermissionTo('general_setting_frontend_banner_status')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_banner_status');

        if ($request->has('general_setting_frontend_banner_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'general_setting_frontend_banner_edit']);
            if (!$role->hasPermissionTo('general_setting_frontend_banner_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('general_setting_frontend_banner_edit');

        if ($request->has('shipping_charge_index')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_charge_index']);
            if (!$role->hasPermissionTo('shipping_charge_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_charge_index');
        // Billing and site Fees
        if ($request->has('shipping_charge_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'shipping_charge_edit']);
            if (!$role->hasPermissionTo('shipping_charge_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('shipping_charge_edit');

        if ($request->has('site_setup_view')) {
            $permission = Permission::firstOrCreate(['name' => 'site_setup_view']);
            if (!$role->hasPermissionTo('site_setup_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('site_setup_view');

        if ($request->has('site_setup_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'site_setup_edit']);
            if (!$role->hasPermissionTo('site_setup_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('site_setup_edit');

        if ($request->has('email_setting_index')) {
            $permission = Permission::firstOrCreate(['name' => 'email_setting_index']);
            if (!$role->hasPermissionTo('email_setting_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('email_setting_index');

        // Banner 
        if ($request->has('email_setting_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'email_setting_edit']);
            if (!$role->hasPermissionTo('email_setting_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('email_setting_edit');

        if ($request->has('empty_database_view')) {
            $permission = Permission::firstOrCreate(['name' => 'empty_database_view']);
            if (!$role->hasPermissionTo('empty_database_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('empty_database_view');

        if ($request->has('cache_clear_view')) {
            $permission = Permission::firstOrCreate(['name' => 'cache_clear_view']);
            if (!$role->hasPermissionTo('cache_clear_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('cache_clear_view');

        if ($request->has('dashboard_view')) {
            $permission = Permission::firstOrCreate(['name' => 'dashboard_view']);
            if (!$role->hasPermissionTo('dashboard_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('dashboard_view');

        if ($request->has('analytice_view')) {
            $permission = Permission::firstOrCreate(['name' => 'analytice_view']);
            if (!$role->hasPermissionTo('analytice_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('analytice_view');

        // Function
        if ($request->has('products_reporst_view')) {
            $permission = Permission::firstOrCreate(['name' => 'products_reporst_view']);
            if (!$role->hasPermissionTo('products_reporst_view')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('products_reporst_view');

        if ($request->has('coupon_code_delete')) {
            $permission = Permission::firstOrCreate(['name' => 'coupon_code_delete']);
            if (!$role->hasPermissionTo('coupon_code_delete')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('coupon_code_delete');

            if ($request->has('expired_date_products')) {
                $permission = Permission::firstOrCreate(['name' => 'expired_date_products']);
                if (!$role->hasPermissionTo('expired_date_products')) {
                    $role->givePermissionTo($permission);
                }
            } else
                $role->revokePermissionTo('expired_date_products');
                if ($request->has('upcomming_expired_date_products')) {
                    $permission = Permission::firstOrCreate(['name' => 'upcomming_expired_date_products']);
                    if (!$role->hasPermissionTo('upcomming_expired_date_products')) {
                        $role->givePermissionTo($permission);
                    }
                } else
                    $role->revokePermissionTo('upcomming_expired_date_products');

        if ($request->has('event_index')) {
            $permission = Permission::firstOrCreate(['name' => 'event_index']);
            if (!$role->hasPermissionTo('event_index')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('event_index');
            if ($request->has('event_add')) {
                $permission = Permission::firstOrCreate(['name' => 'event_add']);
                if (!$role->hasPermissionTo('event_add')) {
                    $role->givePermissionTo($permission);
                }
            } else
        $role->revokePermissionTo('event_add');
        if ($request->has('event_edit')) {
            $permission = Permission::firstOrCreate(['name' => 'event_edit']);
            if (!$role->hasPermissionTo('event_edit')) {
                $role->givePermissionTo($permission);
            }
        } else
            $role->revokePermissionTo('event_edit');
            if ($request->has('event_delete')) {
                $permission = Permission::firstOrCreate(['name' => 'event_delete']);
                if (!$role->hasPermissionTo('event_delete')) {
                    $role->givePermissionTo($permission);
                }
            } else
                $role->revokePermissionTo('event_delete');
                if ($request->has('anaylites_view')) {
                    $permission = Permission::firstOrCreate(['name' => 'anaylites_view']);
                    if (!$role->hasPermissionTo('anaylites_view')) {
                        $role->givePermissionTo($permission);
                    }
                } else
                    $role->revokePermissionTo('anaylites_view');
                    if ($request->has('show_review_rating')) {
                        $permission = Permission::firstOrCreate(['name' => 'show_review_rating']);
                        if (!$role->hasPermissionTo('show_review_rating')) {
                            $role->givePermissionTo($permission);
                        }
                    } else
                        $role->revokePermissionTo('show_review_rating');

                    
                        




                        if ($request->has('debit_index')) {
                            $permission = Permission::firstOrCreate(['name' => 'debit_index']);
                            if (!$role->hasPermissionTo('debit_index')) {
                                $role->givePermissionTo($permission);
                            }
                        } else
                            $role->revokePermissionTo('debit_index');
    
                            if ($request->has('debit_create')) {
                                $permission = Permission::firstOrCreate(['name' => 'debit_create']);
                                if (!$role->hasPermissionTo('debit_create')) {
                                    $role->givePermissionTo($permission);
                                }
                            } else
                                $role->revokePermissionTo('debit_create');
        
                                if ($request->has('debit_edit')) {
                                    $permission = Permission::firstOrCreate(['name' => 'debit_edit']);
                                    if (!$role->hasPermissionTo('debit_edit')) {
                                        $role->givePermissionTo($permission);
                                    }
                                } else
                                    $role->revokePermissionTo('debit_edit');
            
                                    if ($request->has('debit_delete')) {
                                        $permission = Permission::firstOrCreate(['name' => 'debit_delete']);
                                        if (!$role->hasPermissionTo('debit_delete')) {
                                            $role->givePermissionTo($permission);
                                        }
                                    } else
                                        $role->revokePermissionTo('debit_delete');
                
                                        if ($request->has('creadit_view')) {
                                            $permission = Permission::firstOrCreate(['name' => 'creadit_view']);
                                            if (!$role->hasPermissionTo('creadit_view')) {
                                                $role->givePermissionTo($permission);
                                            }
                                        } else
                                            $role->revokePermissionTo('creadit_view');
                    


        return redirect('admin/role')->with('flash_message_success', 'Permission updated successfully');
       }

}
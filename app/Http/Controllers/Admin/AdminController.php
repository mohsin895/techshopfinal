<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
use Session;
use App\Models\User;
use Hash;
use Image;

class AdminController extends Controller
{
    public function index()
    {
      $role = Role::find(Auth::guard('admin')->user()->role_id);
      if ($role->hasPermissionTo('dashboard_view')) {
          $permissions = Role::findByName($role->name)->permissions;
      
        return view('admin.dashboard');
      } else
      return view('admin.employee_dashboard');
      return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function login()
    {
       return view('admin.login');
    }

    public function admin_login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $validatedData = $request->validate([
              'email' => ['required', 'email', 'max:255'],
              'password' => ['required'],
            ]);
           
            $checkAdmin = User::where('email', $data['email'])->first();
            if ($checkAdmin->is_admin == 'admin' && $checkAdmin->status == 1) {
              if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('admin/dashboard')->with('flash_message_success', 'Login Successfully !');
              } else {
                return redirect()->back()->with('flash_message_error', 'Invalid Email or Password');
              }
            } else {
              return redirect('/')->with('flash_message_error', 'Your are not permited !');
            }

          }
    }

public function account_setting()
{
  $data['title']="Admin Dashboard";
  $data['table']="Account Setting";
  $data['add']="Account";
  $data['add_title'] = "Add banner";
  return view('admin.account',$data);
}

public function setting()
{
  $data['title']="Admin Dashboard";
  $data['table']="Account Setting";
  $data['add']="Account";
  $data['add_title'] = "Add banner";
  return view('admin.setting',$data);
}
    public function logout()
  {
    Session::flush();
    return redirect('/');
  }

  public function account_update(Request $request)
  {
    $admin_id = Auth::guard('admin')->user()->id;
    if ($request->isMethod('post')) {
      $data = $request->all();
      //  dd($data);

      $admin = User::find($admin_id);
      $admin->name = $data['name'];
      
      $admin->email = $data['email'];
      $admin->phone = $data['phone'];
      if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111, 99999) . '.' . $extension;
          $large_image_path = 'assets/images/admin/profile/' . $filename;

          Image::make($image_tmp)->resize(600, 600)->save($large_image_path);
          $admin->image = $filename;
        }
      }
      $admin->save();
      return redirect()->back()->with('flash_message_success', 'Profile Update Successfully!!');
    }
  }

  public function forgotPassword(Request $request)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();

      $userCount = User::where('email', $data['email'])->count();
      if ($userCount == 0) {
        return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
      }
      $userDetails = User::where('email', $data['email'])->first();

      $random_password = random_int(1000, 9999);
      $new_password = bcrypt($random_password);
      User::where('email', $data['email'])->update(['password' => $new_password]);

      $email = $data['email'];
      $name = $userDetails->name;
      $messageData = [
        'email' => $email,
        'name' => $name,
        'password' => $random_password
      ];
      Mail::send('admin.email.forgotpassword', $messageData, function ($message) use ($email) {
        $message->to($email)->subject('New Password - techshop');
      });

      return redirect('techshop')->with('flash_message_success', 'Please check your email for new password!!');
    }

    return view('admin.forget_password');
  }

  public function password_setting()
  {
    $adminPassword = User::where(['email' => Auth::guard('admin')->user()->email])->first();
    // echo "<pre>";print_r($adminDetails);die;
    return view('admin.admin_password', compact('adminPassword'));
  }
  public function checkPass(Request $request)
  {
    $data = $request->all();

    $user = User::find(Auth::guard('admin')->user()->id);


    if (!Hash::check($data['current_pwd'], $user->password)) {
      echo "false";
      die;
    } else {
      echo "true";
      die;
    }
  }


  public function updatePassword(Request $request)

  {

    $request->validate([

      'new_password' => ['required'],
      'confirm_password' => ['same:new_password'],
    ]);

    if ($request->isMethod('post')) {
      $data = $request->all();

      $admin_id = Auth::guard('admin')->user()->id;

      $userDetails = User::find($admin_id);
      // echo"<pre>";print_r($userDetails);die();


      if (!Hash::check($data['current_pwd'], $userDetails['password'])) {
        return redirect()->route('admin.password.setting')->with('flash_message_error', ' Current password in not match ');
      } else {


        $userDetails->password = Hash::make($data['new_password']);

        $userDetails->save();
        return redirect()->route('admin.password.setting')->with('flash_message_success', ' Password update Successfully');
      }
    }
  }




}
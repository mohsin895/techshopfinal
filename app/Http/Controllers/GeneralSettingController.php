<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UserMessage;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Hash;
use Auth;
use DB;
use File;
use Mail;
use Image;

class GeneralSettingController extends Controller
{

    public function database()
    {
        return view('admin.general.database');
    }

    public function emptyDatabase(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('empty_database_view')) {
            $permissions = Role::findByName($role->name)->permissions;
            $superAdmin = User::where('id',2)->first();
            $password = $superAdmin->password;
            
            $enterPassword=Hash::make($request->password);
            // dd($enterPassword);
            if(Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])){
                
        $tables = DB::select('SHOW TABLES');
      
        //    dd($tables);
            $str = 'Tables_in_' . env('DB_DATABASE');
            //  dd($str);
            foreach ($tables as $table) {
                if($table->$str != 'accounts' && $table->$str != 'general_settings' && $table->$str != 'migrations' && $table->$str != 'teams' && $table->$str != 'team_invitations' && $table->$str != 'users' && $table->$str != 'model_has_permissions' && $table->$str != 'model_has_roles' && $table->$str != 'permissions' && $table->$str != 'roles' && $table->$str != 'role_has_permissions' && $table->$str !='shipping_charges') {
                    DB::table($table->$str)->truncate();    
                }
            }
            return redirect()->back()->with('flash_message_success', 'Database cleared successfully');

            }else{
                return redirect()->back()->with('flash_message_error', 'Database can not clear because your enter password can not match');

            }
       
        
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }



    public function general_setting(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('site_setup_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $setting = GeneralSetting::latest()->first();
            $setting->email1 = $data['email1'];
          
            $setting->mobile1 = $data['mobile1'];
            $setting->bkash = $data['bkash'];
            $setting->nogod = $data['nogod'];
            $setting->rocket = $data['rocket'];
            $setting->address = $data['address'];
            $setting->database_show = $data['database_show'];
            $setting->expired_date = $data['expired_date'];
            $setting->commission = $data['commission'];
            $setting->quantity = $data['quantity'];
            $setting->vat = $data['vat'];
            $setting->website_name = $data['website_name'];
            $setting->currency = $data['currency'];
            $setting->site_title = $data['site_title'];
            $setting->flash_slider = $data['flash_slider'];
            $setting->facebook_page = $data['facebook_page'];
            $setting->facebook_group = $data['facebook_group'];
            $setting->twiter = $data['twiter'];
            $setting->instagram = $data['instagram'];
            $setting->youtube = $data['youtube'];
            $setting->linkdi = $data['linkdi'];
            $setting->blog_about_us = $data['blog_about_us'];
            $setting->meta_description = $data['meta_description'];
            $setting->best_selling_product = $data['best_selling_product'];
            $setting->t_c = $data['t_c'];
            $setting->w_r = $data['w_r'];
            $setting->about_us = $data['about_us'];
            $setting->privecy_policy = $data['privecy_policy'];
            $setting->discord = $data['discord'];
            $setting->section_1 = $data['section_1'];
            $setting->section_2 = $data['section_2'];
            $setting->section_3 = $data['section_3'];
            $setting->section_4 = $data['section_4'];
            $setting->shipping_policy = $data['shipping_policy'];
            $setting->cart_page_vat = $data['cart_page_vat'];
         
            $setting->meta_viewport = $data['meta_viewport'];
            $setting->upcoming_expired_date = $data['upcoming_expired_date'];
            //login Image
            if ($request->hasFile('login_image')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->login_image);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('login_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;
                    if(File::exists($large_image_path)){
                        unlink($large_image_path);
                    }

                    Image::make($image_tmp)->resize(382, 544)->save($large_image_path);
                    $setting->login_image = $filename;
                }
            }

            //logo
            if ($request->hasFile('site_logo')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->site_logo);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('site_logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(78, 78)->save($large_image_path);
                    $setting->site_logo = $filename;
                }
            }

//dahsboard Logo
if ($request->hasFile('dashboard_logo')) {
    $imagePath = public_path('public/assets/images/setting/'.$setting->dashboard_logo);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
    $image_tmp = $request->file('dashboard_logo');
    if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename = rand(111, 99999) . '.' . $extension;
        $large_image_path = 'public/assets/images/setting/' . $filename;

        Image::make($image_tmp)->resize(75,75)->save($large_image_path);
        $setting->dashboard_logo = $filename;
    }
}

//Blog Logo
if ($request->hasFile('blog_logo')) {
    $imagePath = public_path('public/assets/images/setting/'.$setting->blog_logo);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
    $image_tmp = $request->file('blog_logo');
    if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename = rand(111, 99999) . '.' . $extension;
        $large_image_path = 'public/assets/images/setting/' . $filename;

        Image::make($image_tmp)->resize(75,75)->save($large_image_path);
        $setting->blog_logo = $filename;
    }
}
            //fabicon


            if ($request->hasFile('favicon')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->favicon);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('favicon');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(32, 32)->save($large_image_path);
                    $setting->favicon = $filename;
                }
            }

            //blog fabicon


            if ($request->hasFile('blog_favicon')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->blog_favicon);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('blog_favicon');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(32, 32)->save($large_image_path);
                    $setting->blog_favicon = $filename;
                }
            }
            $setting->save();

            return back()->with('flash_message_success', 'General Setting update successfully');
        }
        $gs = GeneralSetting::latest()->first();
        $data['title'] = "Admin Dashboard";
        $data['table'] = "General Setting";
        return view('admin.general.setting', $data, compact('gs'));
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }


    public function mailSetting()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('email_setting_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title'] = "Admin Dashboard ";
        $data['table'] = "Email Configuration";
        return view('admin.general.mail_setting', $data);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function mailSettingStore(Request $request)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('email_setting_edit')) {
            $permissions = Role::findByName($role->name)->permissions;

        $data = $request->all();
    
        //writting mail info in .env file
        $path = base_path('.env');
        // dd($path);
        $searchArray = array('MAIL_HOST=' . env('MAIL_HOST') . '' , 'MAIL_PORT=' . env('MAIL_PORT') . ''  , 'MAIL_FROM_NAME="' . env('MAIL_FROM_NAME') . '"' , 'MAIL_FROM_EMAIL="' . env('MAIL_FROM_EMAIL') . '"' , 'MAIL_USERNAME=' . env('MAIL_USERNAME') . '' , 'MAIL_PASSWORD=' . env('MAIL_PASSWORD') . '');
        //    return $searchArray;

        $replaceArray = array('MAIL_HOST=' . $data['mail_host'] . '' , 'MAIL_PORT=' . $data['port'] . ''  , 'MAIL_FROM_NAME="' . $data['mail_name'] . '"' , 'MAIL_FROM_EMAIL="' . $data['email_name'] . '"' , 'MAIL_USERNAME=' . $data['mail_username'] . '' , 'MAIL_PASSWORD=' . $data['password'] . '');
        // return $replaceArray;
        file_put_contents($path, str_replace($searchArray, $replaceArray, file_get_contents($path)));

        return redirect()->back()->with('message', 'Data updated successfully');

    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }

    public function t_c()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.term_condition',$data);
    }

    public function about_Us()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.about_us',$data);
    }
    public function warranty_and_replacement()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.warranty_and_replacement',$data);
    }
    public function privacy_policy()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.privacy_policy',$data);
    }

    public function shipping_policy()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.shipping-policy',$data);
    }

    public function contact_us()
    {
        $data['categories']= Category::with('subcategory')->where('parent_id',0)->get();
        return view('front.contact_us',$data);
    }

    public function user_contact(Request $request)
    {
       if ($request->isMethod('post')) {
        $data = $request->all();
        // dd($data);
        $setting = new UserMessage();
        $setting->name = $data['name'];
        $setting->email = $data['email'];
        $setting->phone = $data['phone'];
        $setting->subject = $data['subject'];
        $setting->body = $data['body'];
        $setting->save();

        $email =$data['email'];
        $messageData = [
            'email'=>$data['email'],
        'name'=>$data['name'],
        'subject'=>$data['subject'],
        'body'=>$data['body'],
    ];
       Mail::send('user.email.message',$messageData,function($message) use($email){
         $message->to($email)->subject('Your Message in techshop');
         });
        return back();
       }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Models\BlogPost;
use App\Models\blogCategory;
use App\Models\BlogComment;
use App\Models\BlogPostCommentReply;
use DB;
use Auth;
use Image;
use File;

class BlogPostController extends Controller
{
    public function index()
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_post_index')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Post";
        $data['add_title'] = "Add Post";
        $data['post'] = BlogPost::orderBy('id','DESC')->get();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    return view('admin.blog.post.index',$data);
    }
public function add()
{ 
    $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_post_create')) {
            $permissions = Role::findByName($role->name)->permissions;
    $data['title']="Admin Dashboard";
    $data['table']="Show Post";
    $data['category'] = blogCategory::where('parent_id',0)->get();
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
   return view('admin.blog.post.create',$data);
}
public function get_subcat(Request $request)
{
    $cat_id = $request->parent_id;
    $all_sucategory = blogCategory::where('parent_id',$cat_id)->get();
    return response()->json($all_sucategory);
}
    public function status($id, $status)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_post_status')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data = Category::find($id);
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
            'image' => 'image|max:100 |dimensions:width=800,height=400',
            
        ]);
        $data = new BlogPost();
        if(Auth::guard('admin')){
            $data->user_id = Auth::guard('admin')->user()->id;
        }else{
            $data->user_id = Auth::guard('blog')->user()->id;

        }
         
        $data->cat_id = $request['parent_id']; 
        $data->subcat_id = $request['subcat_id']; 
        $data->title = $request['title']; 
        $data->status = $request['status'];
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['title']);
        if ($request->hasFile('image')) {
            $imagePath = public_path('public/assets/images/blog/'.$data->image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/blog/' . $filename;
                

                Image::make($image_tmp)->resize(800, 400)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/blog/post')->with('flash_message_success','Post added successfully');
    }

    public function edit($id)
    {  
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('bloog_post_edit')) {
            $permissions = Role::findByName($role->name)->permissions;
        
        $data['title']="Admin Dashboard";
        $data['table']="Show Post";
        $data['add']="Add Post";
        $data['add_title'] = "Edit Post";
        $data['category'] = blogCategory::where('parent_id',0)->get();
        $data['subcategory'] = blogCategory::where('parent_id','!=',0)->get();
        $data['post'] = BlogPost::find($id);
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
       return view('admin.blog.post.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'image' => 'image|max:100 |dimensions:width=800,height=400',
            
        ]);

        $data = BlogPost::find($id);
        $data->cat_id = $request['parent_id']; 
        $data->subcat_id = $request['subcat_id']; 
        $data->title = $request['title']; 
        $data->status = $request['status'];
        $data->description = $request['description']; 
        $data->slug = Str::slug($request['title']);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/blog/' . $filename;

                Image::make($image_tmp)->resize(800, 400)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/blog/post')->with('flash_message_success','Post Update successfully');
    }

    public function delete($id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_post_delete')) {
            $permissions = Role::findByName($role->name)->permissions;
      $data = BlogPost::find($id);
      unlink("public/assets/images/blog/".$data->image);
    
    $data->delete();
    return back()->with('flash_message_success','Post has delete successfully');
} else
return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
    }
    public function comment(Request $request)
    {

        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_user_post_coment')) {
            $permissions = Role::findByName($role->name)->permissions;
        $data['title']="Admin Dashboard";
        $data['table']="Post comment";
        $data['add_title'] = "Add Post";
        $data['post'] = BlogComment::orderBy('id','DESC')->get();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
        return view('admin.blog.post.reply',$data);
    }

    public function post_rply(Request $request,$id)
    {

        
        $data['title']="Admin Dashboard";
        $data['table']="Post comment";
        $data['add_title'] = "Add Post";
        $data['post_coment'] = BlogComment::find($id);
        $data['category'] = blogCategory::where('parent_id',0)->get();
        $data['subcategory'] = blogCategory::where('parent_id','!=',0)->get();
   
        return view('admin.blog.post.comment_edit',$data);
    }

    public function post_rply_admin(Request $request,$id)
    {
        $role = Role::find(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo('blog_coment_reply')) {
            $permissions = Role::findByName($role->name)->permissions;
        $updateStatus = DB::table('blog_comments')->where('id',$id)->update(['status'=>$request['status']]);
       
        $post = new BlogPostCommentReply;
        $post->comment_id = $request->id;
        $post->comment = $request->comment;
        $post->save();
    } else
    return redirect()->back()->with('flash_message_error', 'Sorry! You are not allowed to access this module');
        return redirect('admin/blog/post/comment');
    }


}

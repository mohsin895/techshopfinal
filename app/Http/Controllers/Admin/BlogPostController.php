<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BlogPost;
use App\Models\blogCategory;
use App\Models\BlogComment;
use App\Models\BlogPostCommentReply;
use DB;
use Auth;
use Image;

class BlogPostController extends Controller
{
    public function index()
    {
        $data['title']="Admin Dashboard";
        $data['table']="Post";
        $data['add_title'] = "Add Post";
        $data['post'] = BlogPost::orderBy('id','DESC')->get();
    return view('admin.blog.post.index',$data);
    }
public function add()
{  $data['title']="Admin Dashboard";
    $data['table']="Show Post";
    $data['category'] = blogCategory::where('parent_id',0)->get();
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

        $data = Category::find($id);
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

        $validated = $request->validate([
            'image' => 'required|image|max:100',
            
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
                

                Image::make($image_tmp)->resize(1290, 645)->save($large_image_path);
                $data->image = $filename;
            }
        }


        $data->save(); 
       return redirect('/admin/blog/post')->with('flash_message_success','Post added successfully');
    }

    public function edit($id)
    {  $data['title']="Admin Dashboard";
        $data['table']="Show Post";
        $data['add']="Add Post";
        $data['add_title'] = "Edit Post";
        $data['category'] = blogCategory::where('parent_id',0)->get();
        $data['subcategory'] = blogCategory::where('parent_id','!=',0)->get();
        $data['post'] = BlogPost::find($id);
       return view('admin.blog.post.edit',$data);
    }

    public function update(Request $request,$id)
    {
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

                Image::make($image_tmp)->resize(1290, 645)->save($large_image_path);
                $data->image = $filename;
            }
        }
        $data->save(); 
        return redirect('/admin/blog/post')->with('flash_message_success','Post Update successfully');
    }

    public function delete($id)
    {
      $data = BlogPost::find($id);
      unlink("public/assets/images/blog/".$data->image);
    
    $data->delete();
    return back()->with('flash_message_success','Post has delete successfully');
    }
    public function comment(Request $request)
    {
        $data['title']="Admin Dashboard";
        $data['table']="Post comment";
        $data['add_title'] = "Add Post";
        $data['post'] = BlogComment::orderBy('id','DESC')->get();

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
        $updateStatus = DB::table('blog_comments')->where('id',$id)->update(['status'=>$request['status']]);
       
        $post = new BlogPostCommentReply;
        $post->comment_id = $request->id;
        $post->comment = $request->comment;
        $post->save();

        return redirect('admin/blog/post/comment');
    }


}

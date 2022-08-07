<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\BlogComment;
use Illuminate\Support\Str;
use Carbon\carbon;
use Auth;
use Image;
use Session;

class PostController extends Controller
{
   public function index()
   {
    $data['post'] = BlogPost::where('status','published')->orderBy('id','DESC')->paginate(20);
    $data['new_post'] = BlogPost::where('status','published')->whereDay('created_at','>=',Carbon::now()->subDays(7))->get();
    // dd($data['new_post']);

       return view('blog.post',$data);
   }
   public function post_details($slug)
   {
    $urlblog = Session::get('productsslug',$slug);
    //  dd($url);
    Session::put('productsslug',$urlblog);
 $blogproductsUrl = Session::get('productsslug');
       
       $data['post'] = BlogPost::where('slug',$slug)->first();
       $data['post_comment'] = BlogComment::where('post_id',$data['post']->id)->where('status','published')->get();
       $data['related_post'] = BlogPost::where('cat_id',$data['post']->cat_id)->where('status','published')->get();
       return view('blog.post_details',$data);
   }
   public function post()
   {
       return view('blog.user.post');
   }
   public function insert(Request $request)
   {
    //   dd($request->all());
    $validated = $request->validate([
        'image' => 'image|max:100 |dimensions:width=800,height=400',
        
    ]);
       $data = new BlogPost();
       $data->user_id = Auth::guard('blog')->user()->id; 
       $data->title = $request['title']; 
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
      return back()->with('flash_message_success','post added successfully');
   }

   public function comment(Request $request)
   {
    //   dd($request->all());
       $data = new BlogComment();
       $data->post_id = $request['post_id']; 
       $data->name = $request['name']; 
       $data->email = $request['email']; 
       $data->website = $request['website']; 
       $data->comment = $request['comment']; 
      

       $data->save(); 
      return back()->with('flash_message_success','Comment added successfully');
   }
}

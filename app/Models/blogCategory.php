<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogCategory extends Model
{
    use HasFactory;

    public function subcategory()
    {
        return $this->hasMany('App\Models\blogCategory','parent_id');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Models\blogCategory','parent_id');
    }
public static function category()
{
    $category = blogCategory::with('subcategories')->where('parent_id',0)->get();
    return $category;
}

    
    public static function catDetails($slug){
    
    $catDetails = blogCategory::select('id','cat_name','slug')->with(['subcategories'=>function($query){
    $query->select('id','parent_id','cat_name','slug');
    }])->where('slug',$slug)->first()->toArray();
    //  dd($catDetails);die();
    $catIds=array();
    $catIds = $catDetails['id'];
    foreach($catDetails['subcategories'] as $key=>$subcat){
    $catIds = $subcat['id'];
    
    }
     // dd($catIds);die();
     return array('catIds'=>$catIds,'catDetails'=>$catDetails);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subcategory()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }


    public function subcategories()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }
  
    
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Category','parent_id')->select('id','cat_name');
    }
    
    public static function catDetails($slug){
    
    $catDetails = Category::select('id','cat_name','slug')->with(['subcategories'=>function($query){
    $query->select('id','parent_id','cat_name','slug');
    }])->where('slug',$slug)->first()->toArray();
    // dd($catDetails);die();
    $catIds=array();
    $catIds = $catDetails['id'];
    foreach($catDetails['subcategories'] as $key=>$subcat){
    $catIds = $subcat['id'];
    
    }
     // dd($catIds);die();
     return array('catIds'=>$catIds,'catDetails'=>$catDetails);
    }
}

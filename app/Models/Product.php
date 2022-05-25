<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery','product_id');
    }

    public function category()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }

    public function question()
    {
        return $this->hasMany('App\Models\Question','product_id');
    }
    
}

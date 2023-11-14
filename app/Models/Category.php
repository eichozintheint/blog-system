<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // blogs categories

    // a blog belongsTo a category

    // a category hasMany blogs

    public function blogs(){
        return $this->hasMany(Blog::class,'cat_id'); // category_id
    }
}

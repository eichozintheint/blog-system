<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs',[
        'blogs'=>Blog::all()
    ]);
});

Route::post('/create-category',function(){
    Category::create(request()->all());
});

Route::get('/blogs/{blog:slug}',function(Blog $blog){
    return view('blog-detail',[
        'blog' => $blog
    ]);
});





// Three helper function
// 1.resource_path()
// 2.abort()
// 3.redirect()
// 4.fake()



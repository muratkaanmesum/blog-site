<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',
[
    'posts'=> Post::all(),
    'categories'=> Category::all(),
    ]);
});

Route::get('post/{post}',function(Post $post) {
    return view('post',
    [
        'post'=> $post
    ]);
});

Route::get('category/{category}',function(Category $category) {
    $posts = Post::where('id', $category->id)->get();

    return view('category',[
        'posts' => $posts,
        'category' => $category
    ]);
});


Route::get('categories',function() {
    $categories = Category::all();
    return view('categories',[
        'categories' => $categories
        ]);
});

Route::get('author/{author}',function(User $author) {
    return view('authorPosts',[
        'posts'=> $author->posts,
        'author' => $author
        ]);
});
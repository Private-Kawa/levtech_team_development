<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index(Post $post)
    {
        // dd($post->getPaginateByLimit());
    
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        if($request->file('image')){ //画像が送られてきた時だけ実行
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url]; 
        }
       $input += ['user_id'=> Auth::id()];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        // dd($post);
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($image_url);  //画像のURLを画面に表示

        
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}

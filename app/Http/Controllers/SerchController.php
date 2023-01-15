<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class SerchController extends Controller
{
   public function serch(Request $request)
   {
      $keyword = $request->input('keyword');
      
       $query = Post::query();
       
       if(!empty($keyword)){
           $query->where('title','LIKE',"%{$keyword}%")
                ->orwhere('comment','LIKE',"%{$keyword}%")
                ->orwhere('handmake','LIKE',"%{$keyword}%")
                ->orwhere('price','LIKE',"%{$keyword}%")
                ->orwhere('age','LIKE',"%{$keyword}%")
                ->orwhere('relationship','LIKE',"%{$keyword}%");
                
       }
       $posts = $query->get();
       
       return view('posts/test',compact('posts','keyword'));
       
   }

}

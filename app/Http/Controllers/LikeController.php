<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Like $like,$postId)
    {
       
         
        $user_id =  Auth::id();
      
        $like->fill(['user_id' =>$user_id,'post_id' =>$postId])->save();
        return redirect('/');
    }

    public function destroy(Like $like,$postId)
    {
         $user_id =  Auth::id();
        $like -> where('user_id',$user_id)->where('post_id',$postId)->delete();
    
       
        return redirect('/');
    }
    
    public function index(Post $post)
    {
        // dd($post->getPaginateByLimit());
       
        return view('posts/test')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    
     public function likes(){
        return $this->belongsToMany('App\Models\Post','likes','user_id','post_id')->withTimestamps();
    }  
    
        public function isLike($postId)
    {
      return $this->likes()->where('post_id',$postId)->exists();
    }
    
    public function like($postId)
    {
      if($this->isLike($postId)){
      } else {
        $this->likes()->attach($postId);
      }
      
    }
    public function unlike($postId)
    {
      if($this->isLike($postId)){
        $this->likes()->detach($postId);
      } else {
      }
    }

}

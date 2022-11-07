<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function likes(Request $request)
    {
        $post_id = $request->postId;
        $user_id = Auth::user()->id;
        $post = Post::findOrFail($request->postId);

        $post_like = Like::where(['user_id'=> $user_id,'post_id'=>$post_id])->first();

        if(like::where(['user_id'=> $user_id,'post_id'=>$post_id])->exists() ){

            $post_like->delete();

        }
        else{
            like::create([
                'user_id'=> $user_id,
                'post_id'=> $post_id
            ]);
        }
        return response()->json(['likes'=>'sucess']);
    }

}

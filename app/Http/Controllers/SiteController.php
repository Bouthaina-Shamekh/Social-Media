<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Friend;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function home()
    {

       $posts = Post::orderByDesc('id')->get();
       $comment = Comment::orderByDesc('id')->get();
       $friends = Friend::all();
       $users = User::all()->where('id','!=',Auth::User()->id);
       //dd($posts->image);
       //dd($friends->count());
       if(request()->search) {
        $users = User::where('name', 'like', '%'.request()->search.'%')->paginate(5);
    }else {
        $users = User::paginate(5);
    }

    $shareComponent = \Share::page(
        'http://127.0.0.1:8000/home',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()
    ->reddit();

       return view('site.home', compact('posts','comment','friends','users','shareComponent'));
    }


    public function post(Request $request)
    {
        Post::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,  //بتجيب الشخص الي مسجل دخول
        ]);

        $posts = Post::all();
       $comment = Comment::all();
     //  return view('site.home', compact('posts','comment'));
     return redirect()->back();


    }

    public function comment(Request $request)
    {

       $posts = Post::all();
       $comment = Comment::all();



       Comment::create([
            'content' => $request->content,
           'post_id' => $request->post_id,
           'user_id' => Auth::user()->id,
       ]);

       //$posts = Post::all();
      // $comment = Comment::all();
       return redirect()->back();
    }

    public function profile()
    {
        $posts = Post::orderByDesc('id')->get()->where('user_id', Auth::user()->id);
        $comment = Comment::orderByDesc('id')->get()->where('user_id' , Auth::user()->id);


        return view('site.profile', compact('posts','comment'));
    }

   // public function login()
   // {
    //    return view('site.login');
   // }

   // public function login_data(Request $request)
   // {
       // $request->validate([

         //   'email'=>'required',
          //  'pass'=>'required',
       // ]);

       // $email = $request->email;
       // $pass =  $request->pass;
       // return view('site.login_data',compact('email','pass'));
  //  }


   // public function register()
   // {
      //  return view('site.register');
   // }

  //  public function register_data(Request $request)
//{
      //  $request->validate([

        //    'fullname'=>'required',
         //   'email'=>'required',
         //   'pass'=>'required',
       // ]);

       // $fullname = $request->fullname;
       // $email = $request->email;
       // $pass = $request->pass;

      //  return view('site.register_data',compact('fullname','email','pass'));
   // }

    public function search()
    {
        return view('site.search');
    }
}

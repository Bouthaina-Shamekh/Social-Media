<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
       $comment = Comment::all();
       //dd($posts->image);
       $friends = Friend::all();
       if(request()->search) {
        $users = User::where('name', 'like', '%'.request()->search.'%')->paginate(5);
    }else {
        $users = User::paginate(5);
    }
    $shareComponent = \Share::page(
        'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
        'Your share text comes here',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()
    ->reddit();
       return view('site.home', compact('posts','comment','friends','users','shareComponent'));

    }
}

@extends('site.master')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-main">
            <div class="container-fluid">

            </div>
            <div class="container mt-5" style="width: 75%">
                <div class="row">
                    <div class="col ">
                        <div class="main-block">
                            <div class="coverPicture" style="background: url('{{ asset('front/img/cover.jpg')}}');"></div>
                            <div class="profilePicture" style="background: url('{{ asset('front/img/profile.jpg')}}');"></div>
                          {{--  @foreach ($posts as $post) --}}
                            <div class="FullName text-center  fs-18 ProjectColor ">
                                {{Auth::user()->name}}
                               {{-- {{$post->user->name}} --}}
                            </div>
                          {{--  @endforeach --}}
                            <!--<div class="row statistic text-center fs-16 p-3">-->
                                <!--<div class="col "><p>Ferinds</p> <br> <p>10</p></div>-->
                                <!--<div class="col border-left"><p>Posts</p> <br> <p>5</p></div>-->
                            <!--</div>-->
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col col-sm-12  mobile-shown">
                        <div class=" main-block create-section">
                            <div class="create">
                                <!--<div class="title "> <p class="p-1 ml-2 mt-1 fs-14 font-cairo font-weight-600">Add Post</p></div>-->
                                <!--<hr class="m-1">-->
                                <form action="{{ route('site.post')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                <div class="text-area pt-3">
                                    <textarea name="content" class="w-full p-3 fs-16 " style="height: 75px;resize: none;color: #666666;    border-radius: 5px;" placeholder="What About Today ?!"></textarea>
                                </div>
                                <!--<hr class="m-1">-->
                                <div class="action p-2 pr-3">
                                    <button class="float-r  p-2 fs-16 post" type="submit" style="">Post</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            </div>
                        </div>

                       {{-- <div class="main-block post-with-photo"> </div> --}}
                       <div class="main-block post-with-photo">
                        @foreach ($posts as $post)
                        <div class="Post-Box">
                            <div class="header row ">
                                <div class="col-2">
                                    <div class=" pt-2 pl-2    d-inline-block">
                                        <div class="Profile-Picture " style="background: url('{{ asset('front/img/profile.jpg')}}') "></div>
                                    </div>
                                </div>
                                <div class="col-8 p-l-0">
                                    <div class="UserName d-inline-block mt-3">
                                        <p><a href="" class="font-weight-bold">{{$post->user->name}}</a></p>
                                        <p class="lh-1-2"><a href="" class="fs-10">{{ $post->created_at->diffForHumans() }}</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="Public"></i></p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="ActionBTN text-right pr-4 pt-4">
                                        <a href="">
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-2">
                            <div class="body row">
                                <div class="details col ">
                                    <p class="px-3 " >{{$post->content}}</p>
                                </div>
                                @if ($post->image != null)
                                <div class="image col-12 " >
                                    <div class="row pr-3 pt-3 pl-3 ">
                                        <div class="col"style=" background: url('img/Cover.jpg'); height: 350px;background-size: cover;background-position: top center;"></div>
                                    </div>
                                </div>
                                @else
                                            <div> </div>
                                            @endif

                            </div>
                            <hr class="mt-0 mb-0">
                            <div class="footer ">
                                <div class="row action-btn ">
                                    <div class="col ">
                                        <p  class="py-2 footer-btn text-center"><a onclick="likes({{ $post->id }})" id="like"data-postId="{{ $post->id }}"href="#">

                                            @php
                                            if(\App\Models\like::where(['user_id'=> Auth::user()->id,'post_id'=>$post->id])->exists() ){
                                                echo'<i class="fa fa-heart" aria-hidden="true"></i>';
                                                        }
                                                else{
                                                    echo'<i class="fa fa-heart-o" aria-hidden="true"></i>';
                                                }
                                            @endphp
                                         <span class="px-1"> Like</span></a></p>
                                    </div>
                                    <div class="col border-left">
                                        <p class=" py-2 footer-btn text-center"><a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> <span class="px-1"> Comment</span></a></p>
                                    </div>
                                    <div class="col border-left">
                                        <p class=" py-2 footer-btn text-center"><a href=""><i class="fa fa-share-square-o" aria-hidden="true"></i> <span class="px-1"> Share</span></a></p>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-2">
                                <div class="row comment-list">

                                    <div class="add-comment col-12 pb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class=" pt-2 pl-2     d-inline-block">
                                                    <div class="Profile-Picture-Comment " style="background: url('{{ asset('front/img/profile.jpg')}}') "></div>
                                                </div>
                                            </div>
                                            <div class="comment-box col-10 pl-0">
                                                <div class="row pr-2 pt-2 pb-2 pl-0">
                                                    <form action="{{ route('site.comment')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="col pl-0">
                                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                                        <textarea type="text" name="content" class="p-2 fs-14 pl-3" style="width:400px ; border= 1px solid gray ; border-radius: 5px;" placeholder="Add new comment" ></textarea>

                                                    </div>
                                                 <div class="action p-2 pr-3">
                                                        <button class="float-r  p-2 fs-16 post" type="submit" style="">coment</button>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<hr class="m-3 col">-->
                                    <div class="comment col-12 ">
                                        @foreach ($post->comment as $comment)
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class=" pt-2 pl-2     d-inline-block">
                                                                <div class="Profile-Picture-Comment " style="background: url('{{ asset('front/img/profile.jpg')}}') "></div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-box col-10 pl-0">
                                                            <div class="row pr-2 pt-2 pb-2 pl-0">
                                                                <div class="col pl-0">
                                                                    <p class="pt-1 pl-2 pb-0 fs-14 " > {{$comment->content}} </p>
                                                                    <p class="p-0 pl-2 fs-10"><a href="" class="fs-10">Like </a> .
                                                                        <a href="" class="fs-10"> Comment </a> . <span class="fs-9">{{ $comment->created_at->diffForHumans() }}</span> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!--<hr class="m-3 col">-->




                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

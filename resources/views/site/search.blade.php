@extends('site.master')

 @section('content')

 <div class="limiter">
    <div class="container-login100">
        <div class="wrap-main">
            <div class="container-fluid">
                
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-3 mobile-hidden">
                        <div class="main-block">
                            <div class="coverPicture" style="background: url('img/cover.jpg');"></div>
                            <div class="profilePicture" style="background: url('img/profile.jpg');"></div>
                            <div class="FullName text-center  fs-18 ProjectColor ">
                                Ahmed M. Elhalaby
                            </div>
                            <div class="row statistic text-center fs-16 p-3">
                                <div class="col "><p>Ferinds</p> <br> <p>10</p></div>
                                <div class="col border-left"><p>Posts</p> <br> <p>5</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12  mobile-shown">
                        <div class="main-block post-without-photo">
                            <div class="Post-Box ">
                                <div class="header row ">
                                    <div class="col-2">
                                        <div class=" pt-2 pl-2    d-inline-block">
                                            <div class="Profile-Picture " style="background: url('img/profile.jpg') "></div>
                                        </div>
                                    </div>
                                    <div class="col-8 p-l-0">
                                        <div class="UserName d-inline-block mt-3">
                                            <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                            <p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="Public"></i></p>
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
                                        <p class="px-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum expedita odit ullam voluptatum. Architecto at debitis delectus doloremque enim error eum fugiat, harum, necessitatibus praesentium unde voluptates! Doloribus, sunt?</p>
                                    </div>
                                </div>
                                <hr class="mt-2 mb-0">
                                <div class="footer ">
                                    <div class="row action-btn ">
                                        <div class="col ">
                                            <p class=" py-2 footer-btn text-center"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="px-1"> Like</span></a></p>
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
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <input type="text" class="p-2 fs-14 pl-3" placeholder="Add new comment">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<hr class="m-3 col">-->

                                        <div class="comment col-12 ">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class=" pt-2 pl-2     d-inline-block">
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <p class="pt-1 pl-2 pb-0 fs-14 " > Lorem ipsum dolor sit amet. </p>
                                                            <p class="p-0 pl-2 fs-10"><a href="" class="fs-10">Like </a> .
                                                                <a href="" class="fs-10"> Comment </a> . <span class="fs-9">52m</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment col-12 pt-0">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class=" pt-2 pl-2     d-inline-block">
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <p class="pt-1 pl-2 pb-0 fs-14 " > Lorem ipsum dolor sit amet. </p>
                                                            <p class="p-0 pl-2 fs-10"><a href="" class="fs-10">Like </a> .
                                                                <a href="" class="fs-10"> Comment </a> . <span class="fs-9">52m</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-block post-with-photo">
                            <div class="Post-Box">
                                <div class="header row ">
                                    <div class="col-2">
                                        <div class=" pt-2 pl-2    d-inline-block">
                                            <div class="Profile-Picture " style="background: url('img/profile.jpg') "></div>
                                        </div>
                                    </div>
                                    <div class="col-8 p-l-0">
                                        <div class="UserName d-inline-block mt-3">
                                            <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                            <p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="Public"></i></p>
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
                                        <p class="px-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, sunt? consectetur adipisicing elit .</p>
                                    </div>
                                    <div class="image col-12 " >
                                        <div class="row pr-3 pt-3 pl-3 ">
                                            <div class="col"style=" background: url('img/Cover.jpg'); height: 350px;background-size: cover;background-position: top center;"></div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="footer ">
                                    <div class="row action-btn ">
                                        <div class="col ">
                                            <p class=" py-2 footer-btn text-center"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> <span class="px-1"> Like</span></a></p>
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
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <input type="text" class="p-2 fs-14 pl-3" placeholder="Add new comment">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<hr class="m-3 col">-->

                                        <div class="comment col-12 ">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class=" pt-2 pl-2     d-inline-block">
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <p class="pt-1 pl-2 pb-0 fs-14 " > Lorem ipsum dolor sit amet. </p>
                                                            <p class="p-0 pl-2 fs-10"><a href="" class="fs-10">Like </a> .
                                                                <a href="" class="fs-10"> Comment </a> . <span class="fs-9">52m</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment col-12 pt-0">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class=" pt-2 pl-2     d-inline-block">
                                                        <div class="Profile-Picture-Comment " style="background: url('img/profile.jpg') "></div>
                                                    </div>
                                                </div>
                                                <div class="comment-box col-10 pl-0">
                                                    <div class="row pr-2 pt-2 pb-2 pl-0">
                                                        <div class="col pl-0">
                                                            <p class="pt-1 pl-2 pb-0 fs-14 " > Lorem ipsum dolor sit amet. </p>
                                                            <p class="p-0 pl-2 fs-10"><a href="" class="fs-10">Like </a> .
                                                                <a href="" class="fs-10"> Comment </a> . <span class="fs-9">52m</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mobile-hidden">
                        <div class="main-block">
                            <div class="row">
                                <div class="col pl-4"><p class="fs-14 font-cairo font-weight-600">People you may know</p></div>
                            </div>
                            <hr class="m-1">
                            <div class="row">
                                <div class="col-3">
                                    <div class=" pt-2 pl-2 d-inline-block">
                                        <div class="Profile-Picture " style="background: url('img/profile.jpg');width: 40px;height: 40px;    border: 1.5px solid #8B54C7; "></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="UserName d-inline-block mt-3">
                                        <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                        <!--<p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Public"></i></p>-->
                                    </div>
                                </div>
                            </div>
                            <hr class="m-1">
                            <div class="row">
                                <div class="col-3">
                                    <div class=" pt-2 pl-2 d-inline-block">
                                        <div class="Profile-Picture " style="background: url('img/profile.jpg');width: 40px;height: 40px;    border: 1.5px solid #8B54C7; "></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="UserName d-inline-block mt-3">
                                        <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                        <!--<p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Public"></i></p>-->
                                    </div>
                                </div>
                            </div>
                            <hr class="m-1">
                            <div class="row">
                                <div class="col-3">
                                    <div class=" pt-2 pl-2 d-inline-block">
                                        <div class="Profile-Picture " style="background: url('img/profile.jpg');width: 40px;height: 40px;    border: 1.5px solid #8B54C7; "></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="UserName d-inline-block mt-3">
                                        <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                        <!--<p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Public"></i></p>-->
                                    </div>
                                </div>
                            </div>
                            <hr class="m-1">
                            <div class="row">
                                <div class="col-3">
                                    <div class=" pt-2 pl-2 d-inline-block">
                                        <div class="Profile-Picture " style="background: url('img/profile.jpg');width: 40px;height: 40px;    border: 1.5px solid #8B54C7; "></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="UserName d-inline-block mt-3">
                                        <p><a href="" class="font-weight-bold">Ahmed M. Elhalaby</a></p>
                                        <!--<p class="lh-1-2"><a href="" class="fs-10">22:50 PM</a> <i class="fa fa-globe fs-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Public"></i></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
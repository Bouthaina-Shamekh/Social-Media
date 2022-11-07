<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web - Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href=" {{ asset('front/favicon.ico')}}">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href=" {{ asset('front/css/vendor/bootstrap.min.css')}}" >
    <link rel="stylesheet" href=" {{ asset('front/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('front/css/vendor/animate.css')}}">
    <link rel="stylesheet" href=" {{ asset('front/css/vendor/hamburgers.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('front/css/util.css')}}">
    <link rel="stylesheet" href=" {{ asset('front/css/normalize.css')}}">
    <link rel="stylesheet" href=" {{ asset('front/css/main.css')}}">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light  bgwhite">
            <a class="navbar-brand ProjectColor" href="{{ route('site.home')}}">WebProject</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link fs-15" href="{{ route('site.home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link fs-15" href="{{ route('site.profile')}}">Profile</a>
                    </li>
                    <li class="nav-item pt-2 pl-3">
                        <form action="{{ route('site.home')}}" method="get">
                            <input type="search" class="p-1 fs-14 pl-3 input-border"  placeholder="Search .. !" name="search" value="{{ request()->search }}">
                        </form>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">


                            <a class="nav-link fs-18" href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Log out !" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
		            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    {{ csrf_field() }}
                    </form>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


 @yield('content')



<script src=" {{ asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src=" {{ asset('front/js/vendor/jquery-3.3.1.slim.min.js')}}" ></script>
<script src=" {{ asset('front/js/vendor/popper.min.js')}}" ></script>
<script src=" {{ asset('front/js/vendor/bootstrap.min.js')}}"  ></script>
<script>window.jQuery || document.write('<script src=" {{ asset('front/js/vendor/jquery-3.3.1.slim.min.js')}}"><\/script>')</script>
<script src=" {{ asset('front/js/vendor/tilt.jquery.min.js')}}"></script>
<script src=" {{ asset('front/js/plugins.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src=" {{ asset('front/js/main.js')}}"></script>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src=" {{ asset('front/https://www.google-analytics.com/analytics.js')}}" async defer></script>




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
function likes(postId){
     $("#like[data-postId='" + postId +"']").find("i").toggleClass("fa-heart-o fa-heart");
   var postId = postId;
    $.ajax({
        type:'get',
        url:"{{ route('likes') }}",
        data: { postId: postId },

        success: function (data) {
      console.log(data.likes);
        },
    error: function(error) {
    console.log(error.responseText);
        }
    });
   }

</script>

</body>
</html>

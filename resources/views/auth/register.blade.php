
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web - Project</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="favicon.ico">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset ('front/css/vendor/bootstrap.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('front/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('front/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset ('front/css/vendor/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset ('front/css/util.css')}}">
    <link rel="stylesheet" href="{{asset ('front/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset ('front/css/main.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="padding-top:153px">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset ('front/img/img-01.png')}}" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title">
                        Register
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="fullname is required">
                        <input class="input100 @error('name') is-invalid @enderror" type="text"  placeholder="Full Name"  name="name" value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" placeholder="Enter Password" name="password" required autocomplete="new-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" placeholder="Confirm Your Password" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('login')}}">
                            Log in
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="{{ asset ('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset ('front/js/vendor/jquery-3.3.1.slim.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset ('front/js/vendor/popper.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset ('front/js/vendor/bootstrap.min.js')}}" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset ('front/js/vendor/jquery-3.3.1.slim.min.js')}}"><\/script>')</script>
    <script src="{{ asset ('front/js/vendor/tilt.jquery.min.js')}}"></script>
    <script src="{{ asset ('front/js/plugins.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset ('front/js/main.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>


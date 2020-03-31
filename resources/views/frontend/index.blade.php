<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/frontend.min.css">
   
        <!-- Deleted class
            .wavedown
        -->

    <style>

        .other-section {
            position: relative;
            /* height: 100vh; */
            background-color: #f2f2f2;
        }

        .wavedown {
            position: relative;
            background: url(../images/items/wavedown.png) no-repeat center;
            background-size: cover;
            top: -16px;
            background-size: 100% 100%;
            background-color: #f2f2f2;
        }



        .doublewave {
            position: relative;
            background: url(../images/items/doublewave.png) no-repeat center;
            background-size: cover;
            top: -16px;
            background-size: 100% 100%;
            background-color: #f2f2f2;
        }

        .trusted {
            position: relative;
            top: 0px;
            text-align: center;
            width: 100%;
            font-size: 25px;
            font-family: "Raleway";
            font-weight: bold;
        }

        .upcover{
            background-color
        }

        .goldlibrary-mobile, .bronzelibrary-mobile, .silverlibrary-mobile {
            position: relative;
            width: 100%;
        }
        .goldlibrary-mobile {
            top: 0px;
            z-index: 16;
        }
        .bronzelibrary-mobile{
            top: 0px;
            overflow-x: hidden;
        }
        .silverlibrary-mobile {
            top: -322px;
            overflow-x: hidden;
        }
        .goldlibrary, .bronzelibrary, .silverlibrary {
            position: relative;
            width: 100%;
        }
        .bronzelibrary, .silverlibrary {
            position: absolute;
            width: 100%;
        }
        .goldlibrary {
            top: -40px;
            z-index: 16;
        }

        .goldjourney {
            position: relative;
            z-index: 16;
            top: -30px;
            width: 100%;
        }

        .bronzelibrary, .silverlibrary {
            top: 0px;
        }

        .other-section3 {
            background-color: #f2f2f2;
        }

        .qoutetext {
            position: relative;
            top: -220px;
            padding-left: 20%;
            padding-right: 20%;
            font-size: .9em;
            font-family: "Raleway";
        }
        .qoutetext-mobile {
            position: relative;
            top: -160px;
            padding-left: 20%;
            padding-right: 20%;
            font-size: .8em;
            font-family: "Raleway";
        }
        .commenter {
            position: relative;
            top: -150px;
            padding-left: 26%;
        }
        .bluemeaning{
            word-spacing: 1px;
            letter-spacing: 2px;
        }

        @media only screen and (min-device-width: 480px) and (max-device-width: 731px) and (orientation: landscape) {

            .banner-text-child {
                top: 150px;
            }
                    

            .form-home {
                top: 300px;
            }
            .qoutetext-mobile {
                top: -240px;
                font-size: 1em;
            }
        }

        @media only screen and (min-device-width: 480px) and (max-device-width: 823px) and (orientation: landscape) {

            .banner-text-child {
                top: 150px;
            }
                    

            .form-home {
                top: 300px;
            }
            .qoutetext-mobile {
                top: -240px;
                font-size: 1em;
            }
        }

    </style>
    
</head>
<body>
    <header class="page-header">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand text-white position-relative" href="{{ url('/') }}">
                    <img src="images/logo/bslogo.png" alt="bluesparrow logo"><span class="logoname">{{ config('app.name', 'BlueSparrow') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item list-menu">
                                <a class=" menutitle pl-4 pl-md-4" href="{{route('frontend.auth.login')}}">{{ __('Login') }}</a>
                            </li>
                            <li class="list-menu">
                                <a href="" class="btn bg-white menutitle1 pl-4 pl-md-4">Business</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="home-banner">
            <div class="bannermoon">
                <img src="images/items/bannermoon.png" class="moon-img" alt="">
            </div>
            <div class="banner-text">
                <div class="banner-text-child">
                    <h1>Welcome to BlueSparrow</h1>
                    <p class="bluemeaning">Upload and manage all your content libraries and more</p>
                </div>
            </div>
            <div class="wave1 d-none d-md-block">
                <img src="images/items/wave1.png" alt="">
            </div>
            <div class="wave2 d-none d-md-block">
                <img src="images/items/wave2.png" alt="">
                
            </div>
            <div class="form-home">
                <div class="row mx-0">
                    <div class="col-md-6 0ffset-md-6 pl-4">
                        <form method="POST" action="{{route('frontend.auth.register.post')}}" >
                            @csrf
                            <div class="row mx-0">
                                <div class="col-8">
                                    
                                    <div class="form-group">
                                        <label for=""><strong> Sign up here</strong></label>
                                        <input type="email" name="email" id="" class="form-control shadow" placeholder="Email address" style="height:50px; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                                    </div>
                                    
                                </div>
                                <div class="col-4 pl-0">
                                    <div class="form-group">
                                        <button type="submit" class="home-form-btn" style="height:50px">Send</button>
                                    </div> 
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="other-section">
            <div class="wavedown">
                <div class="trusted">
                    <p class="mt-3">Loved by</p>
                    <div class="">
                        <ul class="list-inline">
                            <li class="list-inline-item px-0 px-md-2 d-inline"><img src="images/loved/spinlet.png" style="width:15%" alt=""></li>
                            <li class="list-inline-item px-0 px-md-2 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                            <li class="list-inline-item px-2 px-md-2 d-inline"><img src="images/loved/disrupt.png" style="width:15%" alt=""></li>
                            <li class="list-inline-item px-0 px-md-2 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                            <li class="list-inline-item px-0 px-md-2 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="doublewave">
                <div class="forsm">
                    <div class="goldlibrary-mobile d-block d-md-none">
                        <img src="images/items/library.png" class="goldlibrary-img mx-auto" style="width:70%;display:block" alt="">
                        <div class="goldjourney-mobile">
                            <button class="btn d-block mx-auto bg-white goldjourney-btn">Start your journey</button>
                        </div>
                    </div>
                    <div class="bronzelibrary-mobile d-block d-md-none">
                        <img src="images/items/library.png" class="bronzelibrary-img" style="width:65%;margin-left:-4%" alt="">
                        <div class="bronzejourney-mobile">
                            <button class="btn bg-white bronzejourney-btn-mobile">Start your journey</button>
                        </div>
                    </div>
                    <div class="silverlibrary-mobile d-block d-md-none">
                        <img src="images/items/library.png" class="silverlibrary-img" style="width:65%;margin-left:40%" alt="">
                        <div class="silverjourney-mobile">
                            <button class="btn bg-white silverjourney-btn-mobile ">Start your journey</button>
                        </div>
                    </div>
                </div>
                <div class="formd">
                    <div class="goldlibrary d-none d-md-block">
                        <img src="images/items/library.png" class="goldlibrary-img mx-auto" style="width:50%;display:block" alt="">
                        <div class="goldjourney">
                            <button class="btn d-block mx-auto bg-white goldjourney-btn py-3 px-5 shadow-lg">Start your journey</button>
                        </div>
                    </div>
                    <div class="bronzelibrary d-none d-md-block">
                        <img src="images/items/library.png" class="bronzelibrary-img" style="width:45%;margin-left:10px" alt="">
                        <div class="bronzejourney">
                            <button class="btn bg-white bronzejourney-btn p-3 shadow-lg">Start your journey</button>
                        </div>
                    </div>
                    <div class="silverlibrary d-none d-md-block">
                        <img src="images/items/library.png" class="silverlibrary-img" style="width:45%;margin-left:55%" alt="">
                        <div class="silverjourney">
                            <button class="btn bg-white silverjourney-btn p-3 shadow-lg">Start your journey</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>
        <section class="other-section2 pt-5">
            <div class="row mx-0">
                <div class="col-12 col-md-8 px-md-5 px-1 pt-0 pt-md-5">
                    <h3 class="project-color">Start Growing with BlueSparrow Today</h3>
                    <img src="images/items/illustration1.png" style="width:100%" alt="Bluesparrow start growing" class="d-block d-md-none">
                    <p class="mt-3 project-text">
                        With tools to make every part of your processs more human and a support team excited to help you, getting started with BlueSparrow has never been easier.
                    </p>
                    <button class="mt-5 py-3 px-5 text-white start-journey mx-auto mx-md-0 d-flex mb-5">
                        Start your journey
                    </button>
                </div>
                <div class="col-12 col-md-4 d-none d-md-block">
                    <img src="images/items/illustration1.png" style="width:100%" alt="Bluesparrow start growing">
                </div>
            </div>
        </section>
        <section class="other-section3">
            <h3 class="text-center py-5 nexa"><strong> What our clients say about us</strong></h3>
            <div class="row mx-0">
                <div class="col-12 col-md-6">
                    <img src="images/items/comment.png" alt="" class="d-block mx-auto" style="width:80%;">
                    <p class="qoutetext d-none d-md-block">
                        &quot;Our teams are working together, we’ve optimised our processes, and we have more time to spend on strategy. BlueSparrow has been a big part of that 	&quot; 
                    </p>
                    <p class="qoutetext-mobile d-block d-md-none">
                        &quot;Our teams are working together, we’ve optimised our processes, and we have more time to spend on strategy. BlueSparrow has been a big part of that 	&quot; 
                    </p>
                    <div class="commenter">
                        <img src="images/items/7.jpg" class="rounded-circle float-left" alt="" style="width:18%">
                        <div>
                            <p class="commenter-info">CHRISTIANA ADEFARASIN<br>
                                <span>Head of Innovative & Data (IrokoTV)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="images/items/comment.png" class="d-block mx-auto" alt="" style="width:80%">
                    <p class="qoutetext d-none d-md-block">
                        “When setting up for extensive growth, it is critical to have solid content storage in place. BlueSparrow is the foundation that drives that relationship within Audibook”
                    </p>
                    <p class="qoutetext-mobile d-block d-md-none">
                        “When setting up for extensive growth, it is critical to have solid content storage in place. BlueSparrow is the foundation that drives that relationship within Audibook”
                    </p>
                    <div class="commenter">
                        <img src="images/items/7.jpg" class="rounded-circle float-left" alt="" style="width:18%">
                        <div >
                            <p class="commenter-info">KOLA AIDOGBON<br>
                                <span>Head of Innovative & Data (IrokoTV)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="pt-5">
    <img src="images/items/footerimg.png" alt="" style="width:100%;position: absolute;height: 100%;">
        <div class="footer-text"> 
            <div class="row mx-0">
                <div class="col-md-5 pl-2 pl-md-5 footerlogo">
                    <img src="images/logo/logofooter.png" class="float-left" alt="" style="width:64px">
                    <p class="footerlogoname pt-4">BlueSparrow</p>
                </div>
                <div class="col-md-2 mt-3">
                    <h6 class="mb-3"><strong> ABOUT</strong></h6>
                    <ul class="list-inline">
                        <li>FAQ</li>
                        <li class="pt-2">Support</li>
                        <li class="pt-2">Contact Us</li>
                    </ul>
                </div>
                <div class="col-md-2 mt-3">
                    <h6 class="mb-3"><strong> RESOURCES</strong></h6>
                    <ul class="list-inline">
                        <li>Community</li>
                        <li class="pt-2">Stat</li>
                        <li class="pt-2">Features</li>
                    </ul>
                </div>
                <div class="col-md-3 mt-3">
                    <h6 class="mb-3"><strong> TERMS OF USE</strong></h6>
                    <ul class="list-inline">
                        <li>Cookies</li>
                        <li class="pt-2">Polic</li>
                        <li class="pt-2">terms and privacy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/manifest.js"></script>
    <script src="js/vendor.js"></script>
    <script src="js/frontend.js"></script>

</body>
</html>
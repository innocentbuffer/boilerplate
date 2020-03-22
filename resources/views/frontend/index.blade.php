<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/frontend.min.css">
</head>
<body>
    <header class="page-header">
        <nav class="navbar navbar-expand-md navbar-light">
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
                            <li class="nav-item ">
                                <a class="nav-link menutitle text-white" href="{{route('frontend.auth.login')}}">{{ __('Login') }}</a>
                            </li>
                            <li class="">
                                <a href="" class="btn bg-white menutitle1">Business</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            <!--
            <div  class="moonshadow d-none d-md-block">
                <img src="images/items/moonshadow.png" alt="">
            </div>
            -->
            <div class="banner-text">
                <div class="banner-text-child">
                    <h1>Welcome to BlueSparrow</h1>
                    <p>Upload and manage all your content libraries and more</p>
                </div>
            </div>
            <div class="wave1">
                <img src="images/items/wave1.png" alt="">
            </div>
            <div class="wave2">
                <img src="images/items/wave2.png" alt="">
                <div class="form-home">
                    <form action="">
                        <div class="row mx-0">
                            <div class="col-md-6 0ffset-md-6 pl-4">
                                <div class="row mx-0">
                                    <div class="col-8">
                                        <form action="">
                                            <div class="form-group">
                                                <label for=""><strong> Sign up here</strong></label>
                                                <input type="email" name="" id="" class="form-control shadow" placeholder="Email address" style="height:50px; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-4 pl-0">
                                        <div class="form-group">
                                            <button type="submit" class="home-form-btn" style="height:50px">Send</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--
            <div class="form-home">
                <form action="">
                    <div class="row mx-0">
                        <div class="col-md-6 0ffset-md-6 pl-4">
                            <div class="row mx-0">
                                <div class="col-8">
                                    <form action="">
                                        <div class="form-group">
                                            <label for=""><strong> Sign up here</strong></label>
                                            <input type="email" name="" id="" class="form-control shadow" placeholder="Email address" style="height:50px; border-top-left-radius: 8px; border-bottom-left-radius: 8px;">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-4 pl-0">
                                    <div class="form-group">
                                        <button type="submit" class="home-form-btn" style="height:50px">Send</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
-->
            </div>  
        </section>
        <section class="other-section">
            <div class="wavedown">
                <img src="images/items/wavedown.png" class="wavedown-img" alt="">
            </div>
            <div class="trusted">
                <p class="mt-3">Loved by</p>
                <div class="">
                    <ul class="list-inline">
                        <li class="list-inline-item px-0 px-md-4 d-inline"><img src="images/loved/spinlet.png" style="width:15%" alt=""></li>
                        <li class="list-inline-item px-0 px-md-4 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                        <li class="list-inline-item px-2 px-md-4 d-inline"><img src="images/loved/disrupt.png" style="width:15%" alt=""></li>
                        <li class="list-inline-item px-0 px-md-4 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                        <li class="list-inline-item px-0 px-md-4 d-inline"><img src="images/loved/softcom.png" style="width:15%" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="doublewave">
                <img src="images/items/doublewave.png" class="doublewave-img" alt="">
            </div>
            <!--
            <div class="halfwave">
                <img src="images/items/halfwave.png" class="halfwave-img" alt="">
            </div>
            
            <div class="journey">
                <button class="btn d-block mx-auto bg-white">Start your journey</button>
            </div>
            -->
            <div class="goldlibrary d-none d-md-block">
                <img src="images/items/library.png" class="goldlibrary-img mx-auto" style="width:30%;display:block" alt="">
                <div class="goldjourney">
                    <button class="btn d-block mx-auto bg-white goldjourney-btn">Start your journey</button>
                </div>
            </div>
            <div class="bronzelibrary d-none d-md-block">
                <img src="images/items/library.png" class="bronzelibrary-img" style="width:25%;margin-left:20%" alt="">
                <div class="bronzejourney">
                    <button class="btn bg-white bronzejourney-btn">Start your journey</button>
                </div>
            </div>
            <div class="silverlibrary d-none d-md-block">
                <img src="images/items/library.png" class="silverlibrary-img" style="width:25%;margin-left:55%" alt="">
                <div class="silverjourney">
                    <button class="btn bg-white silverjourney-btn">Start your journey</button>
                </div>
            </div>
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
                    <button class="btn bg-white silverjourney-btn-mobile">Start your journey</button>
                </div>
            </div>
        </section>
        <section class="other-section2 pt-5">
            <div class="row mx-0">
                <div class="col-12 col-md-8 px-5">
                    <h3 class="project-color">Start Growing with BlueSparrow Today</h3>
                    <p class="mt-3 project-text">
                        With tools to make every part of your processs more human and a support team excited to help you, getting started with BlueSparrow has never been easier.
                    </p>
                    <button class="mt-3 py-3 px-5 text-white start-journey">
                        Start your journey
                    </button>
                </div>
                <div class="col-12 col-md-4">
                    <img src="images/items/illustration1.png" alt="" style="width:100%">
                </div>
            </div>
        </section>
        <section class="other-section3">
            <h3 class="text-center py-3 nexa"><strong> What our clients say about us</strong></h3>
            <div class="row mx-0">
                <div class="col-6 col-md-6">
                    <img src="images/items/comment.png" alt="" class="d-block mx-auto" style="width:80%;">
                    <p class="qoutetext">
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
                    <p class="qoutetext">
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
                <div class="col-md-5 pl-1 pl-md-5 footerlogo">
                    <img src="images/logo/logofooter.png" class="float-left" alt="" style="width:64px">
                    <p class="footerlogoname pt-4">BlueSparrow</p>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-4">ABOUT</h6>
                    <ul class="list-inline">
                        <li>FAQ</li>
                        <li class="pt-2">Support</li>
                        <li class="pt-2">Contact Us</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="mb-4">RESOURCES</h6>
                    <ul class="list-inline">
                        <li>Community</li>
                        <li class="pt-2">Stat</li>
                        <li class="pt-2">Features</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="mb-4">TERMS OF USE</h6>
                    <ul class="list-inline">
                        <li>Cookies</li>
                        <li class="pt-2">Polic</li>
                        <li class="pt-2">terms and privacy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
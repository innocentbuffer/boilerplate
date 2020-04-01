@extends('frontend.layouts.appfront')

@section('title')
    BlueSparrow
@endsection

@section('content')
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
                    <img src="images/items/library.png" class="goldlibrary-img mx-auto" style="width:100%;display:block" alt="">
                    <div class="goldsubscription-mobile">
                        <h3 class="text-center">Gold Library</h3>
                    </div>
                    <div class="goldjourney-mobile">
                        <button class="btn d-block mx-auto bg-white goldjourney-btn p-3 shadow">Start your journey</button>
                    </div>
                </div>
                <div class="bronzelibrary-mobile d-block d-md-none">
                    <img src="images/items/library.png" class="bronzelibrary-img mx-auto" style="width:100%" alt="">
                    <div class="bronzesubscription-mobile">
                        <h3 class="text-center">Silver Library</h3>
                    </div>
                    <div class="bronzejourney-mobile">
                        <button class="btn bg-white bronzejourney-btn-mobile d-block mx-auto p-3 shadow">Start your journey</button>
                    </div>
                </div>
                <div class="silverlibrary-mobile d-block d-md-none">
                    <img src="images/items/library.png" class="silverlibrary-img mx-auto" style="width:100%" alt="">
                    <div class="silversubscription-mobile">
                        <h3 class="text-center">Bronze Library</h3>
                    </div>
                    <div class="silverjourney-mobile">
                        <button class="btn bg-white silverjourney-btn-mobile d-block mx-auto p-3 shadow">Start your journey</button>
                    </div>
                </div>
            </div>
            <div class="formd">
                <div class="goldlibrary d-none d-md-block">
                    <img src="images/items/library.png" class="goldlibrary-img mx-auto" style="width:50%;display:block" alt="">
                    <div class="goldsubscription">
                        <h3 class="text-center">Gold Library</h3>
                    </div>
                    <div class="goldjourney">
                        <button class="btn d-block mx-auto bg-white goldjourney-btn py-3 px-5 shadow-lg">Start your journey</button>
                    </div>
                </div>
                <div class="bronzelibrary d-none d-md-block">
                    <img src="images/items/library.png" class="bronzelibrary-img" style="width:45%;margin-left:10px" alt="">
                    <div class="bronzesubscription">
                        <h3>Silver Library</h3>
                    </div>
                    <div class="bronzejourney">
                        <button class="btn bg-white bronzejourney-btn p-3 shadow-lg">Start your journey</button>
                    </div>
                </div>
                <div class="silverlibrary d-none d-md-block">
                    <img src="images/items/library.png" class="silverlibrary-img" style="width:45%;margin-left:55%" alt="">
                    <div class="silversubscription">
                        <h3>Bronze Library</h3>
                    </div>
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
                        <p class="commenter-info"><strong>CHRISTIANA ADEFARASIN </strong><br>
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
                        <p class="commenter-info"><strong> KOLA AIDOGBON </strong><br>
                            <span>Head of Innovative & Data (IrokoTV)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

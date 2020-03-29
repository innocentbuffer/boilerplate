<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/frontend.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />

    

</head>
<body>
    <div>

        <main>
            <div class="loginsection">
                <div class="row h-100 mx-0">
                    <div class="col-md-4 offset-md-4 bg-white pl-4">
                        <div class="card border-0 setpasswordform">
                            <div class="card-header border-0 bg-white d-flex justify-content-center">
                                <a class="text-white" href="{{ url('/') }}">
                                    <img src="{{env('APP_URL')}}/images/logo/bslogo.png" alt="bluesparrow logo"><span class="logoname-color ">{{ config('app.name', 'BlueSparrow') }}</span>
                                </a>
                            </div>

                            <div class="card border-0">

                                <div class="card-body">
                                    <form action="{{route('frontend.auth.profile.setup')}}" method="Post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <select name="country" id="" class="selectpicker countrypicker form-control" data-flag="true">
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" id="" class="form-control" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="telephone" class="form-control" placeholder="Telephone" id="telephone">
                                        </div>
                                        <div class="form-group">
                                            <select name="gender" id="" class="form-control">
                                                <option value="">Select a gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="dob" id="" class="form-control" placeholder="date of birth">
                                            <input type="hidden" name="email" value="{{$email}}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="start-journey-login text-white py-2 w-100">
                                                Set Profile
                                            </button>
                                        </div>
                                    </form>
                                    
                                </div><!-- card-body -->

                            </div><!-- card -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
</body>
</html>


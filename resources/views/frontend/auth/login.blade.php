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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/frontend.min.css">

</head>
<body>
    <div>

        <main>
            <div class="loginsection">
                <div class="row h-100 mx-0">
                    <div class="col-md-6 bg-white pl-5 pr-5">
                        <div class="card border-0 logform">
                            <div class="card-header border-0 bg-white d-flex justify-content-center">
                                <a class="text-white" href="{{ url('/') }}">
                                    <img src="images/logo/bslogo.png" alt="bluesparrow logo"><span class="logoname-color ">{{ config('app.name', 'BlueSparrow') }}</span>
                                </a>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{route('frontend.auth.login')}}">
                                    @csrf

                                    <div class="form-group mb-4">
                                        
                                        <div class="">
                                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-6">
                                            <div class="form-check pl-0">
                                                 {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            @if (Route::has('frontend.auth.password.email'))
                                                <a class="btn btn-link py-0" href="{{ route('frontend.auth.password.email') }}">
                                                    Forgot Your Password
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12">
                                            <button type="submit" class="start-journey-login text-white py-2 w-100">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block logbanner">

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>


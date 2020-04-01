<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/frontend.css">
        <link rel="stylesheet" href="css/frontend.min.css">
        
    </head>
    <body>
        <header class="page-header">
            @include('frontend.includes.header')    
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="pt-5">
            @include('frontend.includes.footer')   
        </footer>

        <script src="js/manifest.js"></script>
        <script src="js/vendor.js"></script>
        <script src="js/frontend.js"></script>

    </body>
</html>
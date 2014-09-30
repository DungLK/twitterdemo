
<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSS are placed here -->
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/bootstrap-theme.css') }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Container -->
        <div class="container">
          <h1 class="text-center">Hello, Laravel!</h1>
            <!-- Content -->
            @yield('content')

        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('assets/js/jquery-2.1.1.js') }}
        {{ HTML::script('assets/js/bootstrap.min.js') }}

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8"> 
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <link href="{{asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        
        <!-- CSS are placed here -->
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/css/bootstrap-theme.css') }}
        {{ HTML::style('assets/css/blog-home.css') }}
        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <div class="nav-global">
            @include('partials/header')
        </div>
        <!-- Container -->
        <div class="container">
        <div id="content">
          <h1 class="text-center">Hello, Laravel!</h1>
            <!-- Content -->
            @include('partials/notifications')
            @yield('content')
        </div>
        
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script('assets/js/jquery-2.1.1.js') }}
        {{ HTML::script('assets/js/bootstrap.min.js') }}

    </body>
</html>
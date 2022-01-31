    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Css -->
        @include('layouts.css')

        <title>My Blog</title>
    </head>
    <body>
        <div>
            <!-- header -->
            @include('layouts.header')
        </div>

        <!-- content -->
        <div>
            @yield('content')
        </div>


        
        
        
        <!-- Javascript -->
        @include('layouts.js')
    </body>
    </html>
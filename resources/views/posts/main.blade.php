<!doctype html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>
   
  <body class=" bg-light">
    
        <!-- Default bootstrap navbar -->
        @include('partials._navbar')
        
        <div class="container">
        @yield('content')
        </div>

        @include('partials._footer')
        @include('partials._javascript')

    </body>

</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default') !Panel de administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{asset('plugins/jquery/jquery-3.1.1.js')}}"></script>
  </head>
  <body>
    http://stackoverflow.com/questions/38582169/php-laravel-restful-api-for-android-questions
    @include('admin.template.partilas.nav')
     <section>
       @include('flash::message');
       @yield('content')
     </section>

     <footer style="text-align:center">
       Fercho Jerez
     </footer>

     <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
  </body>
</html>

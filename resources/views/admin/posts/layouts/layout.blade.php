<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Document</title>
</head>
<body>
<header>
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
   <h1>laravel Auth<h1>
  </a>
   <div class="collapse navbar-collapse" id="navbarNav">
    @yield('content_nav')
  </div>
</nav>
</header>
     @yield("content_main")
  
</body>
</html>
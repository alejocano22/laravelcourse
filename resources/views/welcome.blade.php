<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <style>
  html, body {
    background-image: url('https://www.elsetge.cat/myimg/f/121-1212743_4k-hd-wallpaper-smoke-black-background-high-resolution.jpg');
    background-size: cover;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .content {
    text-align: center;
    height: 60vh;
  }

  .title {
    font-size: 8vw;
  }

  .links > a {
    color: #636b6f;
    padding: 0 20px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .links2 > a {
    color: #636b6f;
    padding: 0 20px;
    font-size: 2vw;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  </style>
</head>
<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="content ">
      <div class="title m-b-md">
        acanom
      </div>
      <div class="links2">
        <a href="https://www.instagram.com/alejocano22">Instagram</a>
        <a href="https://github.com/alejocano22">Github</a>
        <a href="https://www.linkedin.com/in/alejocano22">Linkedin</a>
      </div>
    </div>
  </div>
</body>
</html>

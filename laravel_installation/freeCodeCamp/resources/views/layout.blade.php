<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('styles.css')}}" type="text/css" />
</head>
<body>
  <div class="header">
    <h1>Welcome To StackOverFlow</h1>
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('about')}}">About</a>
  </div>

  @yield('main_content')

  <footer>Copyright &copy; 2022 | All rights reserved</footer>
</body>
</html>
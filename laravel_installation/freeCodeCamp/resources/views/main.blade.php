<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('styles.css') }}" type="text/css" />
  <title>@yield("page_title")</title>
</head>
<body>
  @include('layouts.nav')
  <img src="{{asset('storage/banner_2.png')}}" />
  @yield("page_body")
</body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>
    @include("frontEnd.partials.meta")

    <title>@yield("title")</title>


    @include('frontEnd.partials.css')
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>
  @yield("preloader")
  @include("frontEnd.layouts.header")

  @yield('content')

  @include("frontEnd.layouts.footer")
  @include("frontEnd.partials.js")
</body>
</html>
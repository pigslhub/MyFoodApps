<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.partials.default.head')
    <title>@yield('title')</title>
    @include('includes.partials.default.styles')
  </head>
  <body>
    @yield('main')
    @include('includes.partials.default.footervarview')
    @include('includes.partials.default.scripts')
  </body>

</html>

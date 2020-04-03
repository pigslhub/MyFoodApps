<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.partials.head')
    <title>@yield('title')</title>
    @include('includes.partials.styles')
  </head>
  <body>
    @yield('main')
    @include('includes.partials.footervarview')
    @include('includes.partials.scripts')
  </body>
</html>

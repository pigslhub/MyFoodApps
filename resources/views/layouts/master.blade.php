<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.partials.head')

    <title>@yield('title') | Endless - Premium Admin Template</title>
    @include('includes.partials.styles')
  </head>
  <body>

    @yield('main')

    @include('includes.partials.scripts')
    @include('includes.partials.footervarview')
  </body>

</html>

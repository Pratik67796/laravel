<!DOCTYPE html>
<html lang="en">
 <head>
   @include('admin.layouts.partials.head')
 </head>
<body>
@include('admin.layouts.partials.nav')
@include('admin.layouts.partials.header')
@yield('content')
@include('admin.layouts.partials.footer')
@include('admin.layouts.partials.footer-scripts')
 </body>
</html>
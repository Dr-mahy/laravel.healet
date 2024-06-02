<!DOCTYPE html>
<html>

<head>
 @include('includes.head')
</head>

<body>

  <!-- header section strats -->
 @include('includes.branchheader')
  <!-- end header section -->

 @yield('content')
  <!-- info section -->
 @include('includes.info')
  <!-- end info_section -->


  <!-- footer section -->
 @include('includes.footer')
  <!-- footer section -->


  <!-- jQery -->
 @include('includes.js')

</body>

</html>
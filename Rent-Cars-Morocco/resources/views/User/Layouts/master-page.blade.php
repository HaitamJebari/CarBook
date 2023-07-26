<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/Layouts/css/open-iconic-bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/animate.css") }}">

    <link rel="stylesheet" href="{{ asset("/Layouts/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/magnific-popup.css") }}">

    <link rel="stylesheet" href="{{ asset("/Layouts/css/aos.css") }}">

    <link rel="stylesheet" href="{{ asset("/Layouts/css/ionicons.min.css") }}">

    <link rel="stylesheet" href="{{ asset("/Layouts/css/bootstrap-datepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/jquery.timepicker.css") }}">


    <link rel="stylesheet" href="{{ asset("/Layouts/css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("/Layouts/css/style.css") }}">
  </head>
  <body>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @include('user.layouts.navbar')

    @yield('content')

    @include('user.layouts.Footer')


<script src="{{ asset("/Layouts/js/jquery.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery-migrate-3.0.1.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/popper.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.easing.1.3.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.stellar.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.magnific-popup.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/aos.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.animateNumber.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/bootstrap-datepicker.js") }}"></script>
<script src="{{ asset("/Layouts/js/jquery.timepicker.min.js") }}"></script>
<script src="{{ asset("/Layouts/js/scrollax.min.js") }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset("/Layouts/js/google-map.js") }}"></script>
<script src="{{ asset("/Layouts/js/main.js") }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link href="{{ asset("/Layouts/tables/./vendor/datatables/css/jquery.dataTables.min.css") }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/Layouts/tables/./images/blue-car-logo-png.webp") }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset("/Layouts/tables/./vendor/bootstrap-select/dist/css/bootstrap-select.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/Layouts/tables/./css/style.css") }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!--========================================Login style=======================================================-->
	<link rel="icon" type="image/png" href="{{ asset("/login/images/icons/favicon.ico") }}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("Layouts/login/vendor/bootstrap/css/bootstrap.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/fonts/iconic/css/material-design-iconic-font.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/vendor/animate/animate.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/vendor/css-hamburgers/hamburgers.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/vendor/animsition/css/animsition.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/vendor/select2/select2.min.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/vendor/daterangepicker/daterangepicker.css") }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/css/util.css") }}">
        <link rel="stylesheet" type="text/css" href="{{ asset("/Layouts/login/css/main.css") }}">
    <!--===============================================================================================-->
  </head>
  <body>

    <div class="container my-5">
        @yield('content')

    </div>
{{-- @include('admin.Navbar') --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset("/Layouts/tables/./vendor/global/global.min.js") }}"></script>
	<script src="{{ asset("/Layouts/tables/./vendor/bootstrap-select/dist/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/Layouts/tables/./js/custom.min.js") }}"></script>
	<script src="{{ asset("/Layouts/tables/./js/deznav-init.js") }}"></script>

    <!-- Datatable -->
    <script src="{{ asset("/Layouts/tables/./vendor/datatables/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/Layouts/tables/./js/plugins-init/datatables.init.js") }}"></script>

<!--===========================login===================================================================-->
<script src="{{ asset("/Layouts/login/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/vendor/animsition/js/animsition.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("/Layouts/login/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/vendor/select2/select2.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/vendor/daterangepicker/moment.min.js") }}"></script>
	<script src="{{ asset("/Layouts/login/vendor/daterangepicker/daterangepicker.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/vendor/countdowntime/countdowntime.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/Layouts/login/js/main.js") }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php header("Access-Control-Allow-Origin: *"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- SEO Meta description -->
    <meta name="description" content="{{ Settings::SiteName() }} Money Transfer">
    <meta name="author" content="Soft Tech Media">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--title-->
    <title>@yield('pagetitle') | {{ Settings::SiteTitle() }}</title>
    <!--favicon icon-->
    <link rel="icon" href="{{ Settings::AssetsUrl('assets/img/favicon.png') }}" type="image/png" sizes="16x16">
    
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ Settings::AssetsUrl('assets/css/login_main.css') }}">
    <!--===============================================================================================-->
    <!--custom css-->
    <!--<link rel="stylesheet" href="{{Settings::AssetsUrl(Settings::AppCss()) }}">-->
    <!--responsive css-->
    <!--<link rel="stylesheet" href="{{ Settings::AssetsUrl(Settings::ResponsiveCss()) }}">-->
	<style type="text/css">
      .form-control {padding: 10px !important;}
    </style>
</head>
<body>
	<div class="limiter">
    	<div class="container-login100">
  			@yield('content')
        </div>
    </div>
    
    <!--===============================================================================================-->
		<script src="{{ Settings::AssetsUrl('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ Settings::AssetsUrl('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ Settings::AssetsUrl('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ Settings::AssetsUrl('assets/js/main_login.js') }}"></script>
    
  	@yield('pagescript')
</body>
</html>


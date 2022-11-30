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
    @include('templates.default.views.partial.cssincludes')
</head>
<body class="body-small">
	<noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLP7D5P" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div class="page-loader" style="display: none;">
      <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="page-container">
    	@include('templates.default.views.partial.leftmenu')
        <div id="page-wrapper" class="gray-bg" style="min-height: 578px;">
            @include('templates.default.views.partial.header')
            @yield('content')
            @include('templates.default.views.partial.footer')
    	</div>
    </div>
    @include('templates.default.views.partial.jsincludes')
    <script type="text/javascript">
	  var appUrl = "https://softtechmedia.com/";
	  
      $('#rec_country').select2();
      $('#trnx_status').select2();
      $('#payment_method').select2();
      $('#delivery_method').select2();
      $('#payout_country').select2();
      $('#agent').select2();
	</script>
	@yield('pagescript')
</body>
</html>
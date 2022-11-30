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
    <link href="{{ Settings::AssetsUrl('assets/kendo/css/web/kendo.common.min.css') }}" rel="stylesheet" />
    <link href="{{ Settings::AssetsUrl('assets/kendo/css/web/kendo.rtl.min.css') }}" rel="stylesheet" />
    <link href="{{ Settings::AssetsUrl('assets/kendo/css/web/kendo.default.min.css') }}" rel="stylesheet" />
    <link href="{{ Settings::AssetsUrl('assets/kendo/css/web/kendo.default.mobile.min.css') }}" rel="stylesheet" />
    <script src="{{ Settings::AssetsUrl('assets/kendo/js/jquery.min.js') }}"></script>
    <script src="{{ Settings::AssetsUrl('assets/kendo/js/kendo.all.min.js') }}"></script>
    <script src="{{ Settings::AssetsUrl('assets/kendo/js/kendo.timezones.min.js') }}"></script>
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
    <!--===============================================================================================-->
	<script src="{{ Settings::AssetsUrl('assets/js/yii.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/bootstrap.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/select2.full.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/yii.activeForm.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/yii.gridView.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/kv-grid-group.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/bootstrap-dialog.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/dialog-yii.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/kv-grid-export.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/jquery.resizableColumns.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/jquery.pjax.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/sweetalert2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/tooltipster.bundle.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/jquery.metisMenu.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/jquery.slimscroll.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/inspinia.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/yii_overrides.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/clipboard.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/jquery.steps.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/hellosign.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/loadingoverlay.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/bluebird.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ Settings::AssetsUrl('assets/js/main.js') }}"></script>
    <!--===============================================================================================-->
    
	@yield('pagescript')
</body>
</html>
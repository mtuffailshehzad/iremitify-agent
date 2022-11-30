@extends('templates.default.views.layouts.normal_template')
@section('pagetitle') Login @endsection
@section('content')
<div class="wrap-login100">
    <div class="login100-form-title" style="background-image: url({{ Settings::AssetsUrl('assets/img/bg-01.jpg') }});">
        <img src="{{ Settings::AssetsUrl('assets/img/tpn-logo-white.png') }}" width="250" alt="">
    </div>
    <form class="login100-form validate-form" name="loginform" id="loginform" method="post" action="{{ route('login.submit') }}">
        <span class="login100-form-title-1">
            {{trans('template_lang::login.welcome')}} {{ Settings::SiteName() }}
        </span>
        @csrf
        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <span class="label-input100">Username</span>
            <input type="text" name="username" id="username" class="input100" placeholder="Enter User Name" value="{{old('username')}}" />
            <span class="focus-input100"></span>
        </div>
        @error('Email')
        	<strong style="color:#CC3333;">{{ $message }}</strong>
      	@enderror
      	@if(isset($error['Email']))
        	<strong style="color:#CC3333;">{{ $error['Email'][0] }}</strong>
      	@endif
        <div class="wrap-input100 validate-input m-t-18" data-validate = "Password is required">
            <span class="label-input100">{{trans('template_lang::login.passwordcaption')}}</span>
            <input type="password" name="password" id="password" class="input100" placeholder="{{trans('template_lang::login.passwordplaceholder')}}" value="" />
            <span class="focus-input100"></span>
        </div>
        @error('Password')
        	<strong style="color:#CC3333;">{{ $message }}</strong>
      	@enderror
      	@if(isset($error['Password']))
        	<strong style="color:#CC3333;">{{ $error['Password'][0] }}</strong>
      	@endif
        <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" type="checkbox" name="remember" id="remember-me" />
                <label class="label-checkbox100" for="remember-me"> {{trans('template_lang::login.remembertext')}} </label>
            </div>
            <div><a href="{{ route('forgot') }}" class="txt1"> {{trans('template_lang::login.forgotlinktext')}}  </a></div>
        </div>
        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" id="loginbutton"> {{trans('template_lang::login.loginbtntext')}} </button>
        </div>
    </form>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
$('#loginform').submit(function(e){
	$("#loginbutton").html('<i class="fas fa-sync fa-spin" style="font-size:20px; color:white;"></i> Login');
	/*$("#loginbutton").css();*/
	$("#loginbutton").prop('disabled', true);
});
</script>
@endsection

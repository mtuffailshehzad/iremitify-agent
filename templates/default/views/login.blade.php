@extends('templates.default.views.layouts.normal_template')
@section('pagetitle') Login @endsection
@section('content')
<div class="container-fluid px-0">
    <div class="row g-0 min-vh-100"> 
      <div class="col-md-8" id="hero-bg">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ Settings::AssetsUrl(Settings::BackgroundImage()) }}');"></div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-center">
        <div class="container my-4 bg-llg">
          <div class="row g-0">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <div class="text-center mb-3">
                <img src="{{ Settings::AssetsUrl(Settings::SiteLogo()) }}" id="screen_logo">
              </div>
              <p id="mobile_text" class="text-center text-6">{{trans('template_lang::login.welcome')}} {{ Settings::SiteName() }}</p>
              <p class="fw-400 mb-4 text-center"><strong>{{trans('template_lang::login.welcome')}} {{ Settings::SiteName() }}</strong></p>
              <form name="loginform" id="loginform" method="post" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <div class="input-group">
                    <span class="input-group-text border-none"><i class="fa-solid fa-envelope-open-text lblue"></i></span>
                    <input type="text" name="username" id="username" class="form-control border-none" placeholder="Enter User Name" value="" />
                  </div>
                  @error('Email')
                  	<strong style="color:#CC3333;">{{ $message }}</strong>
                  @enderror
                  @if(isset($error['Email']))
                  	<strong style="color:#CC3333;">{{ $error['Email'][0] }}</strong>
                  @endif
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">{{trans('template_lang::login.passwordcaption')}}</label>
                  <div class="input-group">
                    <span class="input-group-text border-none"><i class="fa-solid fa-key-skeleton lblue"></i></span>
                    <input type="password" class="form-control border-none" name="password" id="password" placeholder="{{trans('template_lang::login.passwordplaceholder')}}" value="" />
                  </div>
                  @error('Password')
                  	<strong style="color:#CC3333;">{{ $message }}</strong>
                  @enderror
                  @if(isset($error['Password']))
                  	<strong style="color:#CC3333;">{{ $error['Password'][0] }}</strong>
                  @endif
                </div>
                <div class="row mb-3">
                  <div class="col-sm">
                    <div class="form-check form-check-inline">
                      <input type="checkbox" name="remember" id="remember-me" class="form-check-input" />
                      <label class="form-check-label" for="remember-me">{{trans('template_lang::login.remembertext')}}</label>
                    </div>
                  </div>
                  <div class="col-sm text-end"><a class="btn-link lblue" href="{{ route('forgot') }}">{{trans('template_lang::login.forgotlinktext')}}</a></div>
                </div>
                <div class="d-grid mb-3"><button type="submit" class="btn btn-login">{{trans('template_lang::login.loginbtntext')}}</button></div>
              </form>
              <p class="text-3 text-center text-muted">{{trans('template_lang::login.signuptext')}} <a class="btn-link lblue" href="{{ route('register') }}">{{trans('template_lang::login.signuplinktext')}}</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
    </div>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
$('#loginform').submit(function(e){
	$("#loginbutton").html('<i class="fas fa-sync fa-spin" style="font-size:20px; color:white;"></i> {{trans("login.loginbtntext")}}');
	$("#loginbutton").css();
	$("#loginbutton").prop('disabled', true);
});
</script>
@endsection

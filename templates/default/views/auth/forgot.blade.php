@extends('templates.default.views.layouts.normal_template')
@section('pagetitle') Login @endsection
@section('content')
<div class="wrap-login100">
    <div class="login100-form-title" style="background-image: url({{ Settings::AssetsUrl('assets/img/bg-01.jpg') }});">
        <img src="{{ Settings::AssetsUrl('assets/img/tpn-logo-white.png') }}" width="250" alt="">
    </div>
    <form class="login100-form validate-form" name="forgetpasswordform" id="forgetpasswordform" method="post" action="{{ route('forgot.submit') }}">
        <span class="login100-form-title-1 mb-0 col-12 padd-0">
            Forget Password
        </span>
        <span class="forget-pass-p">Enter register email address to reset your password.</span>
        @csrf
        <div class="wrap-input100 validate-input p-b-30" data-validate="Username is required">
            <span class="label-input100">Email Address</span>
            <input type="email" name="email" id="email" class="input100" placeholder="Enter Registered Email" value="{{old('email')}}" />
            <span class="focus-input100"></span>
        </div>
        @error('Email')
        	<strong style="color:#CC3333;">{{ $message }}</strong>
      	@enderror
      	@if(isset($error['Email']))
        	<strong style="color:#CC3333;">{{ $error['Email'][0] }}</strong>
      	@endif     
        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" id="forgotbutton"> Verify Email </button>
        </div>
    </form>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
$('#forgetpasswordform').submit(function(e){
	$("#forgotbutton").html('<i class="fas fa-sync fa-spin" style="font-size:20px; color:white;"></i> Verify Email');
	<!--$("#forgotbutton").css();-->
	$("#forgotbutton").prop('disabled', true);
});
</script>
@endsection

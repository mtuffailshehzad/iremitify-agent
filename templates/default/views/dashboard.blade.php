@extends('templates.default.views.layouts.secure_template')
@section('pagetitle') Dashboard @endsection
@section('content')
<div class="page-content">
  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
      @can('agent_profile')
      <h2>Dashboard</h2>
      @endcan
      <ul class="breadcrumb">
        <li><a href="dashboard.html">Home</a></li>
        <li>Dashboard</li>
      </ul>
    </div>
  </div>
  <div class="page-content-body wrapper wrapper-content animated">
    <div class="dashboard_slides">
      <div id="mt_slides" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#mt_slides" data-slide-to="0"></li>
          <li data-target="#mt_slides" data-slide-to="1" class="active"></li>
          <li data-target="#mt_slides" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item" id="carousel-slides">
            <img src="{{ Settings::AssetsUrl('assets/img/banner/Banner.png') }}" alt="Los Angeles">
          </div>
          <div class="item active" id="carousel-slides">
            <img src="{{ Settings::AssetsUrl('assets/img/banner/Banner_01.png') }}" alt="Chicago">
          </div>
          <div class="item" id="carousel-slides">
            <img src="{{ Settings::AssetsUrl('assets/img/banner/Banner_02.png') }}" alt="Chicago">
          </div>
        </div>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-xl-4">
        <div class="card text-white bg-warning text-black">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between border-0">
              <span class="mb-0 f-13 text-black">Uzair Awan  <span title="Agent ID" class="text-3">{ MT001 }</span></span>
            </li>
            <hr class="hr-cls">
            <li class="list-group-item d-flex justify-content-between border-0">
              <span class="mb-0">Email :</span>uzairawan@website.com
            </li>
            <hr class="hr-cls">
            <li class="list-group-item d-flex justify-content-between border-0">
              <span class="mb-0">Phone No :</span>+44 345 00000000
            </li>
            <hr class="hr-cls">
            <li class="list-group-item d-flex justify-content-between border-0">
              <span class="mb-0">Date Of Birth :</span>December, 24, 1999
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-8 col-md-8 col-lg-8 col-sm-12 col-xs-12 mt-2">
        <div class="row">
          <div class="col-xl-3 col-md-3 col-lg-3 col-sm-6 col-xs-12 mb-2">
            <div class="swiper-slide">
              <a class="tile" href="#">
                <span class="tile-container">
                  <span class="tile-content">
                    <div class="stat text-center">342</div><br>
                    <div class="title">Sucessful Tranx</div>
                  </span>
                  <span class="tile-action">
                    <div class="btn btn-block btn-default btn-outline">View &nbsp;<i class="fa-regular fa-arrow-right-long-to-line"></i></div>
                  </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-lg-3 col-sm-6 col-xs-12 mb-2">
            <div class="swiper-slide">
              <a class="tile" href="#">
                <span class="tile-container">
                  <span class="tile-content">
                    <div class="stat text-center">108</div><br>
                    <div class="title">Cancelled Tranx</div>
                  </span>
                  <span class="tile-action">
                    <div class="btn btn-block btn-default btn-outline">View &nbsp;<i class="fa-regular fa-arrow-right-long-to-line"></i></div>
                  </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-lg-3 col-sm-6 col-xs-12 mb-2">
            <div class="swiper-slide">
              <a class="tile" href="#">
                <span class="tile-container">
                  <span class="tile-content">
                    <div class="stat text-center">250</div><br>
                    <div class="title">Avaliable Balance</div>
                  </span>
                  <span class="tile-action">
                    <div class="btn btn-block btn-default btn-outline">View &nbsp;<i class="fa-regular fa-arrow-right-long-to-line"></i></div>
                  </span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-lg-3 col-sm-6 col-xs-12 mb-2">
            <div class="swiper-slide">
              <a class="tile" href="#">
                <span class="tile-container">
                  <span class="tile-content">
                    <div class="stat text-center">30</div><br>
                    <div class="title">Avaliable Limit</div>
                  </span>
                  <span class="tile-action">
                    <div class="btn btn-block btn-default btn-outline">View &nbsp;<i class="fa-regular fa-arrow-right-long-to-line"></i></div>
                  </span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">

</script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection

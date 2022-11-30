@extends('templates.default.views.layouts.kendo_layout')
@section('pagetitle') Profile @endsection
@section('content')
<div class="page-content">
  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
      <h2>My Profile</h2>
      <ul class="breadcrumb">
        <li><a href="dashboard.html">Home</a></li>
        <li>My Account</li>
        <li class="active">Profile</li>
      </ul>
    </div>
  </div>
  <div class="page-content-body wrapper wrapper-content animated">
    <div id="user-profile">
      <div alt="cover photo" class="card profile-header mb-2">
        <!-- <img src="assets/img/timeline.aa03c008.jpg" class="card-img-top"> --><!---->
        <div class="card-img-top profile-banner">&nbsp;</div>
        <div class="card-body p-0">
           <!----><!---->
           <div class="position-relative">
              <div class="profile-img-container d-flex align-items-center">
                 <div class="profile-img">
                  <img src="{{ Settings::AssetsUrl('assets/img/Uzair.png') }}" alt="profile photo" class="img-fluid rounded">
                </div>
                 <div class="profile-title ml-3" id="dir">
                    <h2 class="text-white"> Uzair Awan </h2>
                    <p class="text-white"> UI/UX Designer </p>
                 </div>
              </div>
            </div>
            <div class="stick-btns">
               <div class="tabs profile-tabs mt-2 mb-2 mt-md-0">
                  <div class="">
                     <ul role="tablist" class="nav nav-pills mb-0">
                        <li class="nav-item font-weight-bold">
                           <a href="#" target="_self" class="nav-link active">
                              <span class="d-none d-md-block">Profile</span>
                           </a>
                        </li>
                        <li class="nav-item font-weight-bold">
                           <a href="{{route('change_pass')}}" target="_self" class="nav-link">
                              <span class="d-none d-md-block">Change Password</span>
                           </a>
                        </li>
                        <li class="nav-item font-weight-bold">
                           <a href="{{route('generate_pin')}}" target="_self" class="nav-link">
                              <span class="d-none d-md-block">Generate PIN</span>
                           </a>
                        </li>
                        <li class="nav-item font-weight-bold">
                           <a href="support.html" target="_self" class="nav-link">
                              <span class="d-none d-md-block">Support</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="tab-content" id="__BVID__752__BV_tab_container_">
                     <div class="tab-pane active"></div>
                  </div>
               </div>
            </div>
        </div>
        <!-- ------ -->
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="ibox">
          <div class="ibox-title">
            <h5>General Information</h5>
            <span class="float-end"><a href="{{route('index_update')}}" class="btn-nrml">Edit &nbsp;<i class="fa-regular fa-pen-to-square "></i></a></span>
          </div>
          <div class="ibox-content">
         
            
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Name/ID</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->first_name}}/{{ $data->agent_user_id}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Last Name</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->last_name}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Email</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->email}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Phone</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->mobile_phone}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">House No</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->house_number}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Street Address</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->street_address}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">City </div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->city}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Province </div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->state_province}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Post Code</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->post_code}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Country of Birth</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->country_iso_code}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Country</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->country_name}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Time Zone</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data->time_zone}}</div>
            </div>
        
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="ibox">
          <div class="ibox-title">
            <h5>Agent Information</h5>
          </div>
          <div class="ibox-content">
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Agent/ID</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->agent_id}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Bank Name</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->business_name}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Branch Name</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->business_prefix}}</div>
            </div>
             <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">City</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->city}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Province</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->state_province}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Country</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->country_name}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Country of Birth</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->country_iso_code}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Currency</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->currency_name}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Post Code</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->post_code}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head"> Phone</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->mobile_phone}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Work Phone</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->work_phone}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Address 1</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->address1}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Address 2</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->address2}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Website</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->website}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Time Zone</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{ $data_agent->time_zone}}</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">&nbsp;</div>
              <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div>
      2022 © MT Global                    
      <div class="float-right" style="float: right;">
        Design & Develop By :<a class="" href="https://softtechmedia.com/">STM</a>                    
      </div>
    </div>
  </div>
</div>
@endsection
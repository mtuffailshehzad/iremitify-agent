@extends('templates.default.views.layouts.kendo_layout')
@section('pagetitle') Profile @endsection
@section('content')
<div class="page-content">
    <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-12">
        <h2>Update Profile</h2>
        <ul class="breadcrumb">
          <li><a href="dashboard.html">Home</a></li>
          <li>My Account</li>
          <li class="active">Update Profile</li>
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
                    <img src="assets/img/Uzair.png" alt="profile photo" class="img-fluid rounded">
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
                             <a href="profile.html" class="nav-link active">
                                <span class="d-none d-md-block">Profile</span>
                             </a>
                          </li>
                          <li class="nav-item font-weight-bold">
                             <a href="change-password.html" class="nav-link">
                                <span class="d-none d-md-block">Change Password</span>
                             </a>
                          </li>
                          <li class="nav-item font-weight-bold">
                             <a href="generate-pin.html" class="nav-link">
                                <span class="d-none d-md-block">Generate PIN</span>
                             </a>
                          </li>
                          <li class="nav-item font-weight-bold">
                             <a href="support.html" class="nav-link">
                                <span class="d-none d-md-block">Support</span>
                             </a>
                          </li>
                       </ul>
                    </div>
                    <div class="tab-content">
                       <div class="tab-pane active"></div>
                    </div>
                 </div>
              </div>
          </div>
          <!-- ------ -->
        </div>
      </div>
      <div class="row">
        <div class="ibox">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="ibox-title">
              <h5>Update General Information</h5>
            </div>
            <div class="ibox-content">
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">First Name :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="name" value="Uzair Awan">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Last Name :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="name" value="Uzair Awan">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Email :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="name" value="uzairawan121@gmail.com" disabled=""> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Phone :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="name" value="+44 000 0000000"> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">House No :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="text" value="24/12/1999"> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Street Address  :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="text" value="24/12/1999"> 
                </div>
              </div>
              {{-- <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Gander</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <span class="form-select p-0 select2-new-dropdown">
                    <select id="gander" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Select Gander">
                        <option data-icon="me-1" value="">Male</option>
                        <option data-icon="me-1" value="">Female</option>
                      </optgroup>
                    </select>
                  </span>
                </div>
              </div> --}}
              {{-- <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Nationality :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <span class="form-select p-0 select2-new-dropdown">
                    <select id="Nationality" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Select Nationality">
                        <option data-icon="me-1" value="">United Kingdom</option>
                        <option data-icon="me-1" value="">Pakistan</option>
                      </optgroup>
                    </select>
                  </span> 
                </div>
              </div> --}}
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">City  :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="text" value="24/12/1999"> 
                </div>
               </div>
               <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Province :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <span class="form-select p-0 select2-new-dropdown">
                    <select id="Nationality" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Select Nationality">
                        <option data-icon="me-1" value="">Punjab</option>
                        <option data-icon="me-1" value="">Sindh</option>
                      </optgroup>
                    </select>
                  </span> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Post Code :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <input type="text" class="form-input" name="" value=""> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country of Birth :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <span class="form-select p-0 select2-new-dropdown">
                    <select id="birht_country" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Select Country of Birth">
                        <option data-icon="me-1" value="">United Kingdom</option>
                        <option data-icon="me-1" value="">Pakistan</option>
                      </optgroup>
                    </select>
                  </span> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                  <span class="form-select p-0 select2-new-dropdown">
                    <select id="birht_country" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                      <optgroup label="Select Country of Birth">
                        <option data-icon="me-1" value="">United Kingdom</option>
                        <option data-icon="me-1" value="">Pakistan</option>
                      </optgroup>
                    </select>
                  </span> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Time Zone :</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal" align="right">
                  <input type="text" class="form-input" name="Occupation" value="UX/UI Designer"> 
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-2 col-lg-2 col-xl-2 pro-text-head">&nbsp;</div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 pro-text-normal">
                  <a href="profile.html" class="btn btn-cancel">Cancel</a>
                  <a href="profile.html" class="btn btn-save-info">Update Information</a>
                </div>
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
@extends('templates.default.views.layouts.kendo_layout')
@extends('templates.default.views.partial.jsincludes')
@section('pagetitle'){{trans("template_lang::remitter/remitter.remitter")}} @endsection
@section('content')
<div class="page-content">
   <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-lg-12">
         <h2>Remitter Profile</h2>
         <ul class="breadcrumb">
            <li><a href="dashboard.html">Home</a></li>
            <li class="active">Remitters</li>
            <li class="active">Remitter Profile</li>
         </ul>
      </div>
   </div>
   <div class="page-content-body wrapper wrapper-content animated">
      <div class="mb-3">
         <div class="row mb-1-75">
            <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 mb-1">
               <a href="customers.html" class="btn btn-back-search btn-shadow-hover btn-md mr-2">
               <i class="fa-solid fa-arrow-left icon-dblue"></i> Back to Search
               </a>
            </div>
            <div class="col-md-9 col-lg-9 col-xl-9 col-sm-12" align="right">
               <a href="create-tranx-cash-new.html" class="btn btn-cash-tranx btn-shadow-hover btn-md mr-2 mb-1">New Cash Transaction</a>
               <a href="create-tranx-bank-new.html" class="btn btn-bank-tranx btn-shadow-hover btn-md mr-2 mb-1">New Bank Transaction</a>
               <a href="#" class="btn btn-wallet-tranx btn-shadow-hover btn-md mr-2 mb-1" >Wallet Transaction</a>
            </div>
         </div>
         <div class="row mb-2">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class="ibox">
                  <div class="ibox-content">
                     <div class="d-flex card-header border-0 pt-6 mb-2">
                        <div class="col-md-9 d-flex align-items-center no-padd-left-right">
                           <div class="symbol symbol-35 flex-shrink-0 mr-3">
                              <img alt="Pic" src="{{ Settings::AssetsUrl('assets/img/150-1.jpg') }}">
                           </div>
                           <div class="card-title align-items-start flex-column">
                              <span class="card-label font-weight-bolder text-dark-75">{{$remitter['full_name']}}</span><br>
                              <span class="text-muted font-size-sm fw-400 mt-1">{{$remitter['occupation_code']}}</span>
                           </div>
                        </div>
                        <div class="col-md-3 no-padd-left-right">
                           <a href="#update-remiter-info" data-toggle="modal" class="btn btn-icon btn-md float-end" title="Edit Remitter">
                           <i class="fa-regular fa-pen-circle btn-edit-fr-profile"></i>
                           </a>
                        </div>
                     </div>
                     <hr class="hr-normal">
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Email</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['email']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Phone</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['mobile_phone']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Date Of Birth</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['date_of_birth']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Gander</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['gender']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Address</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['house_number']}},{{$remitter['street_address']}},{{$remitter['city']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">City</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['city']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Zip Code</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['post_code']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">State/Country</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['state_province']}}/{{$remitter['country_iso_code']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Nationality</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['nationality']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Occupation</div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">{{$remitter['occupation_code']}}</div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-head">Type</div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-xs-6 pro-text-normal" align="right">@if($remitter['remitter_type_code'] == 'FF')Face To Face
                    	@elseif($remitter['remitter_type_code'] == 'CC')Corporate Client
                    	@else($remitter['remitter_type_code'] == 'NF')None Face To Face
                    	@endif
            		</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="update-remiter-info" role="dialog">
               <div class="modal-dialog model-add-bene">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header model-header-bg">
                        <button type="button" class="close clsoe-btn" data-dismiss="modal">&times;</button>
                        <form  method="post" name="editremitterform" id="editremitterform" action="{{route('update_remitters')}}">
				          @csrf
				           <input type="hidden" class="form-input" name="remitter_id" id="remitter_id" value="{{$remitter['remitter_id']}}">
                        <h4 class="modal-title fw-400 white-clr">Edit Remitter Information</h4>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="inbox-content border-none">
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">First Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" id="first_name" name="first_name" value="{{$remitter['first_name']}}" placeholder="Enter First Name">
                                 @if ($errors->has('first_name'))
					                  <span class="text-danger"><strong>{{ $errors->first('first_name') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Middle Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="middle_name" id="middle_name" value="{{$remitter['middle_name']}}" placeholder="Enter Middle Name">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Last Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="last_name" id="last_name" value="{{$remitter['last_name']}}" placeholder="Enter Last Name">
                                 @if ($errors->has('last_name'))
				                  <span class="text-danger"><strong>{{ $errors->first('last_name') }}</strong></span>
				              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Fourth Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="fourth_name" id="fourth_name" value="{{$remitter['fourth_name']}}" placeholder="Enter Fourth  Name">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Post Code :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="post_code" id="post_code" value="{{$remitter['post_code']}}" placeholder="Enter Post Code (e.g : LU1 1HX)">
                                  @if ($errors->has('post_code'))
					                  <span class="text-danger"><strong>{{ $errors->first('post_code') }}</strong></span>
					              @endif
                              </div>
                              <div class="col-md-2 col-lg-2 col-xl-2 col-sm-6 col-xs-6 pro-text-head  ">
                                 <label class="col-form-label find-address">
                                 <a href="#" class="white-clrd">Find Address</a>
                                 </label>
                              </div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-6 col-xs-6 pro-text-normal">&nbsp;</div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">House # :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="house_number" id="house_number" value="{{$remitter['house_number']}}" placeholder="Enter House #">
                                 @if ($errors->has('house_number'))
					                  <span class="text-danger"><strong>{{ $errors->first('house_number') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Street Address :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="street_address" id="street_address" value="{{$remitter['street_address']}}" placeholder="Enter Street Address">
                                 @if ($errors->has('street_address'))
					                  <span class="text-danger"><strong>{{ $errors->first('street_address') }}</strong></span>
					              @endif
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">City :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="city" id="city" value="{{$remitter['city']}}" placeholder="Enter City Name">
                                  @if ($errors->has('city'))
					                  <span class="text-danger"><strong>{{ $errors->first('city') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">State/Province :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                <span class="form-select p-0 select2-new-dropdown">
                                  <select id="state_province" name="state_province" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                    <option data-icon="me-1" value="Azad Kashmir">Azad Kashmir</option>
                                    <option data-icon="me-1" value="Gilgit">Gilgit</option>
                                    <option data-icon="me-1" value="Balochistan">Balochistan</option>
                                    <option data-icon="me-1" value="Islamabad">Islamabad</option>
                                    <option data-icon="me-1" value="KPK">KPK</option>
                                    <option data-icon="me-1" value="Punjab">Punjab</option>
                                    <option data-icon="me-1" value="Sindh">Sindh</option>
                                  </select>
                                </span>
                                @if ($errors->has('state_province'))
					                  <span class="text-danger"><strong>{{ $errors->first('state_province') }}</strong></span>
					              @endif
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Phone :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="mobile_phone" id="mobile_phone" value="{{$remitter['mobile_phone']}}" placeholder="+44 000 0000000">
                                 @if ($errors->has('mobile_phone'))
					                  <span class="text-danger"><strong>{{ $errors->first('mobile_phone') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Date of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="date" class="form-input" name="date_of_birth" id="date_of_birth" value="{{$remitter['date_of_birth']}}" placeholder="DD/MM/YYYY">

                              </div>
                           </div>
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Gender :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="gender" name="gender" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select Gander">
                                         <option data-icon="me-1" value="Male"{{old('gender', $remitter['gender']) == 'Male' ? 'selected' : '' }}>{{trans("template_lang::common.male")}}</option>
                						<option data-icon="me-1" value="Female"{{old('gender', $remitter['gender']) == 'Female' ? 'selected' : '' }}>{{trans("template_lang::common.female")}}</option>
                                       </optgroup>
                                    </select>
                                 </span>
                                    @if ($errors->has('gender'))
					                  <span class="text-danger alignment"><strong>{{ $errors->first('gender') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                              	@php $countries = Utils::getSendingCountries(); @endphp
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="country_iso_code" name="country_iso_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select Country">
                                          @if(count($countries) > 0)
				                          @foreach($countries as $country)
				                          <option data-icon="me-1" value="{{ $country->country_iso_code }}"{{old('country_iso_code', $remitter['country_iso_code']) == $country->country_iso_code ? 'selected' : '' }}>{{ $country->country_name }}</option>
				                          @endforeach
				                          @endif
                                       </optgroup>
                                    </select>
                                    </span>
                                    @if ($errors->has('country_iso_code'))
					                  <span class="text-danger alignment"><strong>{{ $errors->first('country_iso_code') }}</strong></span>
					              @endif
                              </div>
                          </div>
                          <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Nationality :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                              	@php $countries = Utils::getSendingCountries(); @endphp
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="nationality" name="nationality" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select Nationality">
                                          @if(count($countries) > 0)
				                          @foreach($countries as $country)
				                          <option data-icon="me-1" value="{{ $country->country_iso_code }}"{{old('country_iso_code', $remitter['country_iso_code']) == $country->country_iso_code ? 'selected' : '' }}>{{ $country->country_name }}</option>
				                          @endforeach
				                          @endif
                                       </optgroup>
                                    </select>
                                 </span>
                                 @if ($errors->has('nationality'))
					                  <span class="text-danger alignment"><strong>{{ $errors->first('nationality') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="country_of_birth" name="country_of_birth" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select Country">
                                          <option data-icon="me-1" value="">Select Country of Birth</option>
						                     @if(count($countries) > 0)
						                          @foreach($countries as $country)
						                          <option data-icon="me-1" value="{{ $country->country_iso_code }}"{{old('country_iso_code', $remitter['country_iso_code']) == $country->country_iso_code ? 'selected' : '' }}>{{ $country->country_name }}</option>
						                          @endforeach
						                          @endif
                                       </optgroup>
                                    </select>
                                 </span>
                                  @if ($errors->has('country_of_birth'))
					                  <span class="text-danger alignment"><strong>{{ $errors->first('country_of_birth') }}</strong></span>
					              @endif
                              </div>
                          </div>
                          <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Place of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="place_of_birth" id="place_of_birth" value="{{$remitter['place_of_birth']}}" placeholder="Enter Place of Birth">
                                  @if ($errors->has('place_of_birth'))
					                  <span class="text-danger alignment"><strong>{{ $errors->first('place_of_birth') }}</strong></span>
					              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Source of income :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                              	@php $incomes = Utils::getSourceOfFund(); @endphp
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="source_of_income_code" name="source_of_income_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select income">
                                          <option data-icon="me-1" value="">Select source of income</option>
						                     @if(count($incomes) > 0)
						                          @foreach($incomes as $income)
						                    <option data-icon="me-1" value="{{ $income->Code }}"{{old('source_of_income_code', $remitter['source_of_income_code']) == $income->Code ? 'selected' : '' }}>{{ $income->Text }}</option>
						                    @endforeach
						                    @endif
                                       </optgroup>
                                    </select>
                                 </span>
                                 @if ($errors->has('source_of_income_code'))
				                  <span class="text-danger alignment"><strong>{{ $errors->first('source_of_income_code') }}</strong></span>
				              @endif
                              </div>
                          </div>
                          <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Occupation :</div>
                               @php $occupations = Utils::getOccupations(); @endphp
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                              	<span class="form-select p-0 select2-new-dropdown">
                                <select id="occupation_code" name="occupation_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
				                  <optgroup label="Select Occupation">
				                    <option data-icon="me-1" value="">Select Occupation</option>
				                     @if(count($occupations) > 0)
				                          @foreach($occupations as $occupation)
				                           <option data-icon="me-1" value="{{$occupation->Code}}"{{old('occupation_code', $remitter['occupation_code']) == $occupation->Code ? 'selected' : '' }}>{{$occupation->Text}}</option>
				                           @endforeach
				                           @endif
				                  </optgroup>
				                </select>
				              </span> 
				              @if ($errors->has('occupation_code'))
				                  <span class="text-danger alignment"><strong>{{ $errors->first('occupation_code') }}</strong></span>
				              @endif
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Type :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select data-style="form-select bg-transparent border-0" id="remitter_type_code" name="remitter_type_code" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <optgroup label="Select income">
                                          <option data-icon="me-1" value="">Select income</option>
							                <option data-icon="me-1" value="FF"{{old('remitter_type_code', $remitter['remitter_type_code']) == 'FF' ? 'selected' : '' }}>Face to Face</option>
							                <option data-icon="me-1" value="CC"{{old('remitter_type_code', $remitter['remitter_type_code']) == 'CC' ? 'selected' : '' }}>Corporate Client</option>
							                <option data-icon="me-1" value="NF"{{old('remitter_type_code', $remitter['remitter_type_code']) == 'NF' ? 'selected' : '' }}>NOne Face to Face</option>
                                       </optgroup>
                                    </select>
                                 </span>
                              </div>
                           </div><br>
                           <div>
                              <span><input type="checkbox" class="valign-sub" name="">&nbsp; Customer declared that he is aware and disclosed he is not in PEPS and sanctions OFAC List</span>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" align="right">
                           <button type="button" class="btn btn-save" data-dismiss="modal">Close</button>&nbsp;
                           <button class="btn btn-save-info float-end" type="submit">Update Information</button>
                        </div>
                     </div>
                 </form>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 no-padd-left-right">
               <div class="ibox-title">
                 <h5>Beneficiary List</h5>
                 <span class="float-end"><a href="#add-new-bene" data-toggle="modal" class="btn-nrml">Add &nbsp;<i class="fa-regular fa-plus"></i></a></span>
               </div>
               <div class="ibox">
                  <div class="ibox-content padd-15">
                     <div class="max-hgt-340 padd-10">
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-gbp"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Ana Larson</a><br>
                                <span>Habib Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-gbp"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Saad Awan</a><br>
                                <span>United Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right" >
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-ghs"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Umair Ahmad</a><br>
                                <span>Habib Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-pkr"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Uzair Awan</a><br>
                                <span>Habib Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-bdt"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Muhammad Talha</a><br>
                                <span>Faisal Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                        <div class="d-flex mb-02 padd-00-06 padd-left-0">
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-2 no-padd-left-right">
                                <div class="symbol symbol-35 flex-shrink-0 mr-3 top-5">
                                  <span class="currency-flag currency-flag-gbp"></span>
                                </div>
                              </div>
                              <div class="col-md-10 no-padd-left-right ml--5">
                                <a href="#edit-bene" data-toggle="modal"  class="text-dark">Raja Talha</a><br>
                                <span>Allied Bank Limited</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 float-end no-padd-left-right">
                            <div class="d-flex">
                              <div class="col-md-10 no-padd-left-right" align="center">
                                <span class="text-muted-dark pr-6">+44 000 0000000</span>
                                <span class="text-muted-dark">HBL00000000000</span>
                              </div>
                              <div class="col-md-2 no-padd-left-right mt-03">
                                <a href="create-tranx.html" class="btn btn-icon btn-light-send btn-sm">
                                  <span class="svg-icon svg-icon-md svg-icon-success">
                                    <i class="fa-solid fa-paper-plane dblue"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>                      
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="add-new-bene" role="dialog">
               <div class="modal-dialog model-add-bene">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header model-header-bg">
                        <button type="button" class="close clsoe-btn" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title fw-400 white-clr">Add New Beneficiary</h4>
                     </div>
                     <form  method="post" name="add-bene" id="add" action="{{route('add_bene')}}">
				      @csrf
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="inbox-content border-none">
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                 	@php $rec_countries	=	Utils::getReceivingCountries(); @endphp
                                    <select id="country_iso_code" name="country_iso_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Country</option>
                                       @if(count($rec_countries) > 0)
				                          @foreach($rec_countries as $rec_country)
				                          <option data-icon="me-1" value="{{ $rec_country->country_iso_code }}">{{ $rec_country->country_name }}</option>
				                          @endforeach
				                        @endif
                                    </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Delivery Method :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="delivery_method_code" name="delivery_method_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Delivery Method</option>
                                       <option data-icon="me-1" value="Wallet">Wallet</option>
                                       <option data-icon="me-1" value="Cash">Cash Pickup</option>
                                       <option data-icon="me-1" value="Bank">Bank Transfer</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">First Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="first_name" id="first_name" placeholder="Enter First Name">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Middle Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="middle_name" id="middle_name" placeholder="Enter Middle Name">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Last Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="last_name" id="last_name" placeholder="Enter Last Name">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Fourth  Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="fourth_name" id="fourth_name" placeholder="Enter Fourth  Name">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">House # :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="house_number" id="house_number" placeholder="Enter House #">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Address :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="address1" id="address1" placeholder="Enter Address">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">City :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <span class="form-select p-0 select2-new-dropdown">
                                   <select id="city" name="city" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                     <option data-icon="me-1" value="">Select City</option>
                                     <option data-icon="me-1" value="Gilgit">Gilgit</option>
                                     <option data-icon="me-1" value="Balochistan">Balochistan</option>
                                     <option data-icon="me-1" value="Balochistan">Islamabad</option>
                                     <option data-icon="me-1" value="KPK">KPK</option>
                                     <option data-icon="me-1" value="Punjab">Punjab</option>
                                     <option data-icon="me-1" value="Sindh">Sindh</option>
                                   </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">State/Province :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                <span class="form-select p-0 select2-new-dropdown">
                                  <select id="state_province" name="state_province" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                    <option data-icon="me-1" value="Azad Kashmir">Azad Kashmir</option>
                                    <option data-icon="me-1" value="Gilgit">Gilgit</option>
                                    <option data-icon="me-1" value="Balochistan">Balochistan</option>
                                    <option data-icon="me-1" value="Islamabad">Islamabad</option>
                                    <option data-icon="me-1" value="KPK">KPK</option>
                                    <option data-icon="me-1" value="Punjab">Punjab</option>
                                    <option data-icon="me-1" value="Sindh">Sindh</option>
                                  </select>
                                </span>
                              </div>
                             
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Phone :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="mobile_phone" id="mobile_phone" placeholder="+44 000 0000000">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Email :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="email" class="form-input" name="email" id="email" placeholder="test@website.com">
                              </div>
                           </div>
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Date of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <input type="date" class="form-input" name="date_of_birth" id="date_of_birth" >
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Gander :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="gender" name="gender" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Gander</option>
                                       <option data-icon="me-1" value="">Male</option>
                                       <option data-icon="me-1" value="">Fe Male</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Nationality :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="nationality" name="nationality" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Nationality</option>
                                       <option data-icon="me-1" value="UK">United Kingdom</option>
                                       <option data-icon="me-1" value="PAK">Pakistan</option>
                                    </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Relationship  :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                              	@php $relationships	=	Utils::getRelationships(); @endphp
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="relationship_id" name="relationship_id" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Relationship </option>
                                       @if(count($relationships) > 0)
				                          @foreach($relationships as $relationship)
                                       <option data-icon="me-1" value="{{ $relationship->Code }}">{{ $relationship->Text }}</option>
                                       @endforeach
                                       @endif
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Place of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <input type="text" class="form-input" name="place_of_birth" id="place_of_birth" placeholder="Place Of Birth">
                              </div>
                           </div><br>
                           <h3>Identification Document</h3><br>
                           <div class="row mb-2">
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Document Type :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                             	@php $docu_types	=	Utils::getDocumentsType(); @endphp
                               <span class="form-select p-0 select2-new-dropdown">
                                 <select id="document_type_code" name="document_type_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                   <option selected="">Select Document Type </option>
                                   @if(count($docu_types) > 0)
				                          @foreach($docu_types as $docu_type)
                                   <option data-icon="me-1" value="{{ $docu_type->Code }}">{{ $docu_type->Text }}</option>
                                   @endforeach
                                       @endif
                                 </select>
                               </span> 
                             </div>
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Document # :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                               <input type="number" class="form-input" name="document_number" id="document_number" placeholder="Enter Document #">
                             </div>
                           </div>
                           <div class="row mb-2">
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Issue Date :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                               <input type="date" class="form-input" name="issue_date" id="issue_date" placeholder="Enter Issue Date">
                             </div>
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Expiry Date :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                               <input type="date" class="form-input" name="expire_date" id="expire_date" placeholder="Enter Expiry Date">
                             </div>
                           </div>
                           <div class="row mb-2">
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Issuer Country :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                               <span class="form-select p-0 select2-new-dropdown">
                                 <select id="issuer_country_iso_code" name="issuer_country_iso_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                   <option selected="">Select Issuer Country </option>
                                   <option data-icon="me-1" value="">Pakistan</option>
                                   <option data-icon="me-1" value="">Afghanistan</option>
                                   <option data-icon="me-1" value="">United Kingdom</option>
                                 </select>
                               </span> 
                             </div>
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Issuer Authority :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                               <input type="number" class="form-input" name="issuing_authority" id="issuing_authority" placeholder="Enter Issuer Authority Name">
                             </div>
                           </div>
                           <div class="row mb-2">
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Front Side :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                               <input type="file" class="form-input pt-8" name="scanned_image_1" id="scanned_image_1">
                             </div>
                             <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Back Side :</div>
                             <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                               <input type="file" class="form-input pt-8" name="scanned_image_2" id="scanned_image_2">
                             </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" align="right">
                           <button type="button" class="btn btn-save" data-dismiss="modal">Close</button>&nbsp;
                           <button class="btn btn-save-info float-end" type="submit">Submit</button>
                        </div>
                     </div>
                 </form>
                  </div>
               </div>
            </div>
            <div class="modal fade" id="edit-bene" role="dialog">
               <div class="modal-dialog model-add-bene">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header model-header-bg">
                        <button type="button" class="close clsoe-btn" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title fw-400 white-clr">Edit Beneficiary Information</h4>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="inbox-content border-none">
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Country :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Country</option>
                                       <option data-icon="me-1" selected="">United Kingdom</option>
                                       <option data-icon="me-1" value="">Pakistan</option>
                                    </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Delivery Method :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Delivery Method</option>
                                       <option data-icon="me-1" selected="">Cash Pickup</option>
                                       <option data-icon="me-1" value="">Bank Transfer</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">First Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="name" Value="Malik">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Middle Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="name" Value="Muhammad">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">Last Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="name" Value="Uzair">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Fourth  Name :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="name" Value="Awan">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">House # :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="name" Value="18">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head  ">Address :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <input type="text" class="form-input" name="name" Value="G-8 Markaz">
                              </div>
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head ">City :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2 " align="right">
                                 <span class="form-select p-0 select2-new-dropdown">
                                   <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                     <option data-icon="me-1" value="">Select City</option>
                                     <option data-icon="me-1" value="" selected="">Gilgit</option>
                                     <option data-icon="me-1" value="">Balochistan</option>
                                     <option data-icon="me-1" value="">Islamabad</option>
                                     <option data-icon="me-1" value="">KPK</option>
                                     <option data-icon="me-1" value="">Punjab</option>
                                     <option data-icon="me-1" value="">Sindh</option>
                                   </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">State/Province :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                <span class="form-select p-0 select2-new-dropdown">
                                  <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                    <option data-icon="me-1" value="">Azad Kashmir</option>
                                    <option data-icon="me-1" value="">Gilgit</option>
                                    <option data-icon="me-1" value="">Balochistan</option>
                                    <option data-icon="me-1" value="" selected="">Islamabad</option>
                                    <option data-icon="me-1" value="">KPK</option>
                                    <option data-icon="me-1" value="">Punjab</option>
                                    <option data-icon="me-1" value="">Sindh</option>
                                  </select>
                                </span>
                              </div>
                             
                           </div>
                           <div class="row mb-2">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Phone :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="text" class="form-input" name="name" Value="+44 000 0000000">
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Email :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2" align="right">
                                 <input type="email" class="form-input" name="name" Value="test@website.com" disabled="">
                              </div>
                           </div>
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Date of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <input type="date" class="form-input" name="name" >
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Gander :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Gander</option>
                                       <option data-icon="me-1" value="" selected="">Male</option>
                                       <option data-icon="me-1" value="">Fe Male</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row mb-2 ">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Nationality :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Nationality</option>
                                       <option data-icon="me-1" value="" selected="">United Kingdom</option>
                                       <option data-icon="me-1" value="">Pakistan</option>
                                    </select>
                                 </span>
                              </div>
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Relationship  :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <span class="form-select p-0 select2-new-dropdown">
                                    <select id="" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                       <option>Select Relationship </option>
                                       <option data-icon="me-1" value="" selected="">Brother</option>
                                       <option data-icon="me-1" value="">Sister</option>
                                       <option data-icon="me-1" value="">Friend</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="row">
                              <div class=" col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head">Place of Birth :</div>
                              <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
                                 <input type="text" class="form-input" name="name" Value="Place Of Birth">
                              </div>
                           </div><br>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" align="right">
                           <button type="button" class="btn btn-save" data-dismiss="modal">Close</button>&nbsp;
                           <button class="btn btn-save-info float-end" type="submit">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class="ibox-content padd-5px mb-5 mx-hgt-225">
                  <div class="padd-1rem d-flex flex-column">
                     <div class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                           <span class="text-dark-75 font-weight-bolder">Transaction Summary</span>
                        </div>
                     </div>
                     <div class="main-tbl-rsp table-responsive pt-0 max-hgt-140">
                        <table class="table table-hover mb-6 table-bordered">
                           <thead>
                              <tr>
                                 <th scope="col" class="pad-05-rm">Periods</th>
                                 <th scope="col" class="pad-05-rm">L/C</th>
                                 <th scope="col" class="pad-05-rm">F/C</th>
                                 <th scope="col" class="pad-05-rm">Count</th>
                                 <th scope="col" class="pad-05-rm">Benes</th>
                              </tr>
                           </thead>
                           <tbody class="border-top-0">
                              <tr>
                                 <td class="pad-05-rm f-11">1 Year</td>
                                 <td class="pad-05-rm f-11">2225</td>
                                 <td class="pad-05-rm f-11">90727.5</td>
                                 <td class="pad-05-rm f-11">7</td>
                                 <td class="pad-05-rm f-11">3</td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11">9 Months</td>
                                 <td class="pad-05-rm f-11">2075</td>
                                 <td class="pad-05-rm f-11">75727.5</td>
                                 <td class="pad-05-rm f-11">6</td>
                                 <td class="pad-05-rm f-11">3</td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11">6 Months</td>
                                 <td class="pad-05-rm f-11">1970</td>
                                 <td class="pad-05-rm f-11">52855</td>
                                 <td class="pad-05-rm f-11">3</td>
                                 <td class="pad-05-rm f-11">2</td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11">3 Months</td>
                                 <td class="pad-05-rm f-11">1850</td>
                                 <td class="pad-05-rm f-11">25000</td>
                                 <td class="pad-05-rm f-11">1</td>
                                 <td class="pad-05-rm f-11">1</td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11">2 Months</td>
                                 <td class="pad-05-rm f-11">0</td>
                                 <td class="pad-05-rm f-11">0</td>
                                 <td class="pad-05-rm f-11">7</td>
                                 <td class="pad-05-rm f-11">0</td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11">Trans of week</td>
                                 <td class="pad-05-rm f-11">0</td>
                                 <td class="pad-05-rm f-11">0</td>
                                 <td class="pad-05-rm f-11">0</td>
                                 <td class="pad-05-rm f-11">0</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="ibox-title">
                 <h5>Documents</h5>
                 <span class="float-end"><a href="#add-document" data-toggle="modal" class="btn-nrml">Add &nbsp;<i class="fa-regular fa-plus"></i></a></span>
               </div>
               <div class="ibox-content padd-5px">
                  <div class="padd-1rem d-flex flex-column">
                     <div class="main-tbl-rsp table-responsive pt-0 max-hgt-140 overflow-x-hidden">
                        <table class="table table-hover mb-6 table-bordered">
                           <thead>
                              <tr>
                                 <th scope="col" class="pad-05-rm">&nbsp;</th>
                                 <th scope="col" class="pad-05-rm">Type</th>
                                 <th scope="col" class="pad-05-rm">Issue/Expiry</th>
                                 <th scope="col" class="pad-05-rm">Category</th>
                                 <th scope="col" class="pad-05-rm">View</th>
                              </tr>
                           </thead>
                           <tbody class="border-top-0">
                              <tr>
                                 <td class="pad-05-rm f-11 pt-6"><i class="fa-regular fa-circle-check green-clr"></i></td>
                                 <td class="pad-05-rm f-11">
                                    Passport <br>
                                    <span class="text-muted">00000000</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    10/03/2020 <br> 
                                    <span class="text-muted">12/03/2030</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    Proof of ID <br>
                                    <span class="text-muted">Pakistan</span>
                                 </td>
                                 <td>
                                    <a href="http://softtechmedia.com/ali/Agent/Latest/images/customers/150-1.jpg" class="zoom_image">
                                    <img src="http://softtechmedia.com/ali/Agent/Latest/images/customers/150-1.jpg" width="40">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11"></td>
                                 <td class="pad-05-rm f-11">
                                    Passport <br>
                                    <span class="text-muted">00000000</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    10/03/2020 <br> 
                                    <span class="text-muted">12/03/2030</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    Proof of ID <br>
                                    <span class="text-muted">Ghana</span>
                                 </td>
                                 <td>
                                    <a href="http://softtechmedia.com/ali/Agent/Latest/images/customers/150-1.jpg" class="zoom_image">
                                    <img src="http://softtechmedia.com/ali/Agent/Latest/images/customers/150-1.jpg" width="40">
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="pad-05-rm f-11 pt-6"><i class="fa-regular fa-circle-check green-clr"></i></td>
                                 <td class="pad-05-rm f-11">
                                    Passport <br>
                                    <span class="text-muted">00000000</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    10/03/2020 <br> 
                                    <span class="text-muted">12/03/2030</span>
                                 </td>
                                 <td class="pad-05-rm f-11">
                                    Proof of ID <br>
                                    <span class="text-muted">Senegal</span>
                                 </td>
                                 <td>
                                    <a href="./images/customers/img-17.jpg" class="zoom_image">
                                    <img src="http://softtechmedia.com/ali/Agent/Latest/images/customers/150-1.jpg" width="40">
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="modal fade" id="add-document" role="dialog">
                        <div class="modal-dialog model-add-bene">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header model-header-bg">
                                 <button type="button" class="close clsoe-btn" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title fw-400 white-clr">Add New Document</h4>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                 <div class="inbox-content border-none">
                                    <div class="row mb-2">
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Category  :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                                        <span class="form-select p-0 select2-new-dropdown">
                                          <select id="Document_type" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                            <option selected="">Select Document Category </option>
                                            <option data-icon="me-1" value="">Proof of Identification</option>
                                            <option data-icon="me-1" value="">Proof of Address</option>
                                            <option data-icon="me-1" value="">Source of Wealth</option>
                                            <option data-icon="me-1" value="">Source of Funds</option>
                                          </select>
                                        </span> 
                                      </div>
                                    </div>
                                    <div class="row mb-2">
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Document Type :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                                        <span class="form-select p-0 select2-new-dropdown">
                                          <select id="Document_type" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                            <option selected="">Select Document Type </option>
                                            <option data-icon="me-1" value="">Passport</option>
                                            <option data-icon="me-1" value="">Driving Licence</option>
                                            <option data-icon="me-1" value="">Identity Card</option>
                                          </select>
                                        </span> 
                                      </div>
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Document # :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                                        <input type="number" class="form-input" name="name" placeholder="Enter Document #">
                                      </div>
                                    </div>
                                    <div class="row mb-2">
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Issue Date :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                                        <input type="date" class="form-input" name="name" placeholder="Enter Issue Date">
                                      </div>
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Expiry Date :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                                        <input type="date" class="form-input" name="name" placeholder="Enter Expiry Date">
                                      </div>
                                    </div>
                                    <div class="row mb-2">
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Issuer Country :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                                        <span class="form-select p-0 select2-new-dropdown">
                                          <select id="Issuer_country" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent f-11" required="">
                                            <option selected="">Select Issuer Country </option>
                                            <option data-icon="me-1" value="">Pakistan</option>
                                            <option data-icon="me-1" value="">Afghanistan</option>
                                            <option data-icon="me-1" value="">United Kingdom</option>
                                          </select>
                                        </span> 
                                      </div>
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Issuer Authority :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                                        <input type="number" class="form-input" name="name" placeholder="Enter Issuer Authority Name">
                                      </div>
                                    </div>
                                    <div class="row mb-2">
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">Front Side :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
                                        <input type="file" class="form-input pt-8" name="name">
                                      </div>
                                      <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">Back Side :</div>
                                      <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2">
                                        <input type="file" class="form-input pt-8" name="name">
                                      </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" align="right">
                                    <button type="button" class="btn btn-save" data-dismiss="modal">Close</button>&nbsp;
                                    <button class="btn btn-save-info float-end" type="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mb-2">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <div class="ibox">
                  <div class="ibox-title">
                     <h5>Transaction's List</h5>
                  </div>
                  <div class="ibox-content">
                     <div class="main-tbl-rsp  table-responsive">
                        <table class="table table-striped table-bordered table-hover mb--0">
                           <thead>
                              <tr>
                                 <th scope="col" width="9%">Date</th>
                                 <th scope="col">Transaction #</th>
                                 <th scope="col" width="18%">Remitter</th>
                                 <th scope="col" width="22%">Beneficiary</th>
                                 <th scope="col">Delivery</th>
                                 <th scope="col">Payment</th>
                                 <th scope="col">Payout</th>
                                 <th scope="col">Amount</th>
                                 <th scope="col"></th>
                              </tr>
                           </thead>
                           <tbody class="bdr-top-none" id="scrool-row">
                              <tr>
                                 <td scope="row">
                                    02-03-2022 <br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td>
                                    <span>788262000000</span> <br>
                                    <span class="label label-inline status-cancel font-weight-bold">Cancelled</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Uzair Awan <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Jhanzaib Awan  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12"><a class="tooltips dim-black"> G-8 Markaz, Islamabad...<span>G-8 Markaz, Islamabad, Tel : +92345000000</span></a> </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td>
                                    798262000000 <br>
                                    <span class="label label-inline status-Hold font-weight-bold">Compliance Held</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Ehsan Ali<br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Saad Sadii  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td> 
                                    788262000000 <br>
                                    <span class="label label-inline status-ok font-weight-bold">Ready</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Uzair Awan<br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Jhanzaib Awan  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td> 
                                    798262000000 <br>
                                    <span class="label label-inline status-pending font-weight-bold">Pending</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Ehsan Ali <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Saad Sadii  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td> 
                                    788262000000 <br>
                                    <span class="label label-inline status-incomplete font-weight-bold">Incopmplete</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Uzair Awan <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Jhanzaib Awan  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td>
                                    798262000000 <br>
                                    <span class="label label-inline status-inprocess font-weight-bold">In-Process</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Ehsan Ali <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Saad Sadii  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    02-03-2022<br>
                                    <span class="f-12">12:00 PM</span>
                                 </td>
                                 <td>
                                    788262000000 <br>
                                    <span class="label label-inline status-paid font-weight-bold">Paid</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Uzair Awan <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Jhanzaib Awan  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td scope="row">
                                    28-03-2022<br>
                                    <span class="f-12">12:56 AM</span>
                                 </td>
                                 <td>
                                    788262000001 <br>
                                    <span class="label label-inline status-cancelling font-weight-bold">Cancelling</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-pkr me-1 valign-inhrt"></i> Muhammad Umar <br>
                                    <span class="f-12">45, street #104 food corner, Islamabad</span><span class="f-12">+44 0000000000</span>
                                 </td>
                                 <td>
                                    <i class=" currency-flag currency-flag-gbp me-1 valign-inhrt"></i> Jhanzaib Awan  <br><span class="f-12" title="Branch Name">G-8 Branch,</span> <span title="Account No" class="f-12">UBL1200000000 </span><br>
                                    <span class="f-12">G-8 Markaz, Islamabad, Tel : +92345000000 </span>
                                 </td>
                                 <td>Cash Pickup</td>
                                 <td>Bank Transfer</td>
                                 <td>
                                    United Bank Limited<br>
                                    <span class="f-12">UBL0000000000</span>
                                 </td>
                                 <td>
                                    7.3 GBP<br>
                                    <span class="f-12" title="Payout Amount">22500 PKR</span>
                                 </td>
                                 <td>
                                    <a href="#" class="btn btn-icon" title="Print Transaction">
                                    <i class="fa-regular fa-print dblue"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Re-send Transaction">
                                    <i class="fa-regular fa-recycle green"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon" title="Cancell Transaction">
                                    <i class="fa-regular fa-xmark red"></i>
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex flex-wrap py-2 mr-3">&nbsp;</div>
                        <div class="d-flex align-items-center py-3">
                           <a href="#" class="btn btn-icon btn-light mr-2 my-1"><i class="fa-solid fa-angles-left"></i></a>
                           <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1 btn-hover-dblue active">01</a>
                           <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">02</a>
                           <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">03</a>
                           <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">04</a>
                           <a href="#" class="btn btn-icon btn-light mr-2 my-1"><i class="fa-solid fa-angles-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('pagescript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
         jQuery(".zoom_image").fancybox({
               width  : '100%',
               height : '100%',
               maxWidth: "100%",
               autoSize: true,
               type   : 'image',
               beforeShow : function(){
                 //
               },
               afterClose  : function() {
                 //
               }
             });
             $(document).ready(function () {
               $('#scrool-row').DataTable({
                 "scrollX": true
               });
               $('.dataTables_length').addClass('bs-select');
             });
      </script>
      <script>
        $('input[name="datetimes"]').daterangepicker();
        $('#State_Province').select2();
      </script>
@endsection
@extends('templates.default.views.layouts.kendo_layout')
@section('pagetitle'){{trans("template_lang::remitter/remitter.add_page_title")}} @endsection
@section('content')
<style type="text/css">
  .alignment{
    float: left;
  }
</style>
<div class="page-content">
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    <h2>{{trans("template_lang::remitter/remitter.add_remitter")}}</h2>
    <ul class="breadcrumb">
      <li><a href="dashboard.html">{{trans("template_lang::common.home")}}</a></li>
      <li>{{trans("template_lang::remitter/remitter.remitters")}}</li>
      <li class="active">{{trans("template_lang::remitter/remitter.add_page_title")}}</li>
    </ul>
  </div>
</div>
<div class="page-content-body wrapper wrapper-content animated">
  <div class="row">
    <div class="ibox">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="ibox-title">
          <h5>{{trans("template_lang::remitter/remitter.add_remitter_btn")}}</h5>
        </div>
        <form  method="post" name="addremitterform" id="addremitterform" action="{{route('store_remitters')}}">
          @csrf
        <div class="ibox-content">
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.first_name")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="Enter First Name">
              @if ($errors->has('first_name'))
                  <span class="text-danger alignment" ><strong>{{ $errors->first('first_name') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.middle_name")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" placeholder="Enter Middle Name">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.last_name")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Enter Last Name">
              @if ($errors->has('last_name'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('last_name') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.fourth_name")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="fourth_name" id="fourth_name" value="{{ old('fourth_name') }}" placeholder="Enter Fourth  Name">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.post_code")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="post_code" id="post_code" value="{{ old('post_code') }}" placeholder="Enter Post Code (e.g : LU1 1HX)">
              @if ($errors->has('post_code'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('post_code') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-6 col-xs-6 pro-text-head f--10">
              <label class="col-form-label find-address text-center">
                <a href="#" class="white-clrd">{{trans("template_lang::remitter/remitter.find_address")}}</a>
              </label>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 pro-text-normal mb-2">&nbsp;</div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.house_number")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="house_number" id="house_number" value="{{ old('house_number') }}" placeholder="Enter House #">
              @if ($errors->has('house_number'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('house_number') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.street_address")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="street_address" id="street_address" value="{{ old('street_address') }}" placeholder="Enter Street Address">
              @if ($errors->has('street_address'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('street_address') }}</strong></span>
              @endif
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.city")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="city" id="city" value="{{ old('city') }}" placeholder="Enter City Name">
              @if ($errors->has('city'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('city') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.state_provance")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="state_province" name="state_province" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select State/Province">
                    <option data-icon="me-1" value="">Azad Kashmir</option>
                    <option data-icon="me-1" value="Islamabad">Islamabad</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('state_province'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('state_province') }}</strong></span>
              @endif
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.phone")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone') }}" placeholder="+44 000 0000000">
              @if ($errors->has('mobile_phone' ))
                  <span class="text-danger alignment"><strong>{{ $errors->first('mobile_phone') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.date_of_birth")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="date" class="form-input" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="DD/MM/YYYY">
              @if ($errors->has('date_of_birth'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('date_of_birth') }}</strong></span>
              @endif
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.gender")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="gender" name="gender" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select Gander">
                    <option data-icon="me-1" value="Male">{{trans("template_lang::common.male")}}</option>
                    <option data-icon="me-1" value="Female">{{trans("template_lang::common.female")}}</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('gender'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('gender') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.country")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="country_iso_code" name="country_iso_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select Gander">
                    <option data-icon="me-1" value="PAK">Pakistan</option>
                    <option data-icon="me-1" value="GHA">GHANA</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('country_iso_code'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('country_iso_code') }}</strong></span>
              @endif
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.nationality")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="nationality" name="nationality" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select Nationality">
                    <option data-icon="me-1" value="">United Kingdom</option>
                    <option data-icon="me-1" value="PAK">Pakistan</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('nationality'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('nationality') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.country_of_birth")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="country_of_birth" name="country_of_birth" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select Country of Birth">
                    <option data-icon="me-1" value="">Select Country of Birth</option>
                    <option data-icon="me-1" value="">United Kingdom</option>
                    <option data-icon="me-1" value="PAK">Pakistan</option>
                    <option data-icon="me-1" value="GHA">Ghana</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('country_of_birth'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('country_of_birth') }}</strong></span>
              @endif
            </div>
            </div>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.place_of_birth")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-8 col-xs-8 pro-text-normal mb-2" align="right">
              <input type="text" class="form-input" name="place_of_birth" id="place_of_birth" placeholder="Enter Place of Birth">
              @if ($errors->has('place_of_birth'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('place_of_birth') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.source_of_income")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              @php $incomes = Utils::getSourceOfFund(); @endphp
              <span class="form-select p-0 select2-new-dropdown">
                <select id="source_of_income_code" name="source_of_income_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select source of income">
                    <option data-icon="me-1" value="">Select source of income</option>
                     @if(count($incomes) > 0)
                          @foreach($incomes as $income)
                    <option data-icon="me-1" value="{{ $income->Code }}">{{ $income->Text }}</option>
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
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-4 col-xs-4 pro-text-head f--10">{{trans("template_lang::remitter/remitter.occupation_id")}}</div>
            @php $occupations = Utils::getOccupations(); @endphp
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="occupation_code" name="occupation_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select Occupation">
                    <option data-icon="me-1" value="">Select Occupation</option>
                     @if(count($occupations) > 0)
                          @foreach($occupations as $occupation)
                           <option data-icon="me-1" value="{{$occupation->Code}}">{{$occupation->Text}}</option>
                           @endforeach
                           @endif
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('occupation_code'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('occupation_code') }}</strong></span>
              @endif
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 col-sm-5 col-xs-5 pro-text-head f--10">{{trans("template_lang::remitter/remitter.remitter_type_id")}}</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-7 col-xs-7 pro-text-normal mb-2">
              <span class="form-select p-0 select2-new-dropdown">
                <select id="remitter_type_code" name="remitter_type_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                  <optgroup label="Select income">
                    <option data-icon="me-1" value="">Select income</option>
                    <option data-icon="me-1" value="FF">Face to Face</option>
                    <option data-icon="me-1" value="CC">Corporate Client</option>
                    <option data-icon="me-1" value="NF">NOne Face to Face</option>
                  </optgroup>
                </select>
              </span> 
              @if ($errors->has('remitter_type_code'))
                  <span class="text-danger alignment"><strong>{{ $errors->first('remitter_type_code') }}</strong></span>
              @endif
            </div>
          </div><br>
          <div class="row mb-2">
            <div class="col-md-2 col-lg-2 col-xl-2 pro-text-head f--10">&nbsp;</div>
            <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-xs-12 pro-text-normal">
              <a href="{{route('remitters')}}" class="btn btn-cancel">{{trans("template_lang::common.cancel_btn")}}</a>
              <button type="submit" class="btn btn-save-info">{{trans("template_lang::common.update_info")}}</button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection
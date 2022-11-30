@extends('templates.default.views.layouts.kendo_layout')
@section('pagetitle'){{trans("template_lang::remitter/remitter.remitter")}} @endsection
@section('content')
<div class="page-content">
  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
      <h2>Remitters List</h2>
      <ul class="breadcrumb">
        <li><a href="{{route('dashboard')}}">{{trans("template_lang::common.home")}}</a></li>
        <li class="active">{{trans("template_lang::remitter/remitter.add_page_title")}}</li>
        <li class="active">{{trans("template_lang::remitter/remitter.remitter_list")}}</li>
      </ul>
    </div>
  </div>
  <div class="page-content-body wrapper wrapper-content animated">
    <div class="row">
      <div class="col-xs-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>{{trans("template_lang::remitter/remitter.search")}}</h5>
          </div>
          <div class="ibox-content">
            <form id="search-form" class="form-horizontal" action="" method="post">
              <div class="mb-0-5">
                <div class="row">
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="number" name="remitter_id" id="remitter_id" class="form-input-new" value="" placeholder="Enter Remitter ID" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="text" name="full_name" id="full_name" class="form-input-new" value="" placeholder="Enter Name" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="email" name="email" id="email" class="form-input-new" value="" placeholder="Enter Email" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="number" name="mobile_phone" id="mobile_phone" class="form-input-new" value="" placeholder="Enter Phone Number" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2 col-padd mb-0-6">
                  	@php $countries	=	Utils::getSendingCountries(); @endphp
                    <span class="form-select p-0 select2-new-dropdown">
                      <select name="country_iso_code" id="country_iso_code" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                        <optgroup label="Select Country">
                          <option data-icon="me-1" value="">{{trans("template_lang::common.select_country")}}</option>
                          @if(count($countries) > 0)
                          @foreach($countries as $country)
                          <option data-icon="me-1" value="{{ $country->country_iso_code }}">{{ $country->country_name }}</option>
                          @endforeach
                          @endif
                        </optgroup>
                      </select>
                    </span>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="text" name="post_code" id="post_code" class="form-input-new" value="" placeholder="Enter Postcode" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="text" name="document_number" id="document_number" class="form-input-new" value="" placeholder="Enter Document #" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2">
                    <div class="form-group mb-0-6">
                      <input type="text" name="created_at" id="created_at" class="form-input-new" value="" placeholder="Enter Create Date" />
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-2 col-xl-2 col-lg-2 col-padd mb-0-6">
                    <span class="form-select p-0 select2-new-dropdown">
                      <select name="status" id="status" data-style="form-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                        <optgroup label="Select Status">
                          <option data-icon="me-1" value="">{{trans("template_lang::common.please_select_status")}}</option>
                          <option data-icon="me-1" value="1">{{trans("template_lang::common.active")}}</option>
                          <option data-icon="me-1" value="0">{{trans("template_lang::common.inactive")}}</option>
                        </optgroup>
                      </select>
                    </span>
                  </div>
                  <div class="col-sm-12 col-md-6 col-xl-6 col-lg-6 col-padd" align="right">
                    <button type="button" class="btn btn-small-nav" id="gridSearchButton">{{trans("template_lang::common.search")}}</button>
                    <button type="button" class="btn btn-default" id="gridSearchResetButton">{{trans("template_lang::common.reset")}}</button> 
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @if(session('success'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <ul>
              <li>{{session('success')}}</li>
          </ul>
      </div>
    @endif
    <div class="row">
      <div class="col-xs-12">
        <div class="ibox">
          <div class="ibox-title">
            <h5>{{trans("template_lang::remitter/remitter.list_page_title")}}</h5>
            <span class="float-end"><a href="{{route('add_remitters')}}" class="btn-nrml"><i class="fa-regular fa-plus"></i> &nbsp;Add New</a></span>
          </div>
          <div class="ibox-content">
            <div class="main-tbl-rsp table-responsive" id="grid">
              
            </div>
            <!--<div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex flex-wrap py-2 mr-3">&nbsp;</div>
              <div class="d-flex align-items-center py-3">
                  <a href="#" class="btn btn-icon btn-light mr-2 my-1"><i class="fa-solid fa-angles-left"></i></a>
                  <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1 btn-hover-dblue active">01</a>
                  <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">02</a>
                  <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">03</a>
                  <a href="#" class="btn btn-icon border-0 btn-light mr-2 my-1">04</a>
                  <a href="#" class="btn btn-icon btn-light mr-2 my-1"><i class="fa-solid fa-angles-right"></i></a>
              </div>
          </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('pagescript')
<script id="row-template" type="text/x-kendo-template">
  <tr class="tb-row records_rows" data-uid="#: uid #">
	<td class="full_name">
	  <span class="full_name">#: full_name# </span>
    </td>
	<td class="address">
		# if(house_number != '' && house_number != null) { #
	  	<span class="house_number">#: house_number# </span>
		# } #
		# if(street_address != '' && street_address != null) { #
		, <span class="street_address">#: street_address# </span>
		# } #
		# if(city != '' && city != null) { #
		, <span class="city">#: city# </span>
		# } #
    </td>
    <td class="date_of_birth">
		<span class="date_of_birth">#: date_of_birth# </span> <br />
		<span class="gender">#: gender# </span>
    </td>
    <td class="mobile_phone">
    	<span class="mobile_phone">#: mobile_phone# </span> <br />
		<span class="email">#: email# </span>
    </td>
    <td class="nationality">
      <span class="email">#: nationality# </span>
    </td>
    <td class="text-center status">
		# if(status == '1') { #
		<span class="stats-bdg-inact status-active-remitter">Active</span>
		# } else { #
		<span class="stats-bdg-inact status-inactive-remitter">In-Active</span>
		# } #
    </td>
    <td class="text-center action">
		<a href="{{url('edit/remitters')}}/#: remitter_id #" class="btn btn-icon" title="Update Remitter"> <i class="fa-regular fa-pen-to-square lblue"></i></a>
		<a href="{{url('remitters/delete')}}/#: remitter_id #" class="btn btn-icon" title="Delete Remitter"><i class="fa-regular fa-trash-can red"></i></a>
		<a href="{{url('remitters/profile')}}/#: remitter_id #" class="btn btn-icon" title="Remitter Profile"><i class="fa-solid fa-square-arrow-up-right dblue"></i></a>
    </td>
  </tr>
</script>
<script id="alt-row-template" type="text/x-kendo-template">
  <tr class="tb-row records_rows k-alt" data-uid="#: uid #">
    <td class="full_name">
	  <span class="full_name">#: full_name# </span>
    </td>
	<td class="address">
		# if(house_number != '' && house_number != null) { #
	  	<span class="house_number">#: house_number# </span>
		# } #
		# if(street_address != '' && street_address != null) { #
		, <span class="street_address">#: street_address# </span>
		# } #
		# if(city != '' && city != null) { #
		, <span class="city">#: city# </span>
		# } #
    </td>
    <td class="date_of_birth">
		<span class="date_of_birth">#: date_of_birth# </span> <br />
		<span class="gender">#: gender# </span>
    </td>
    <td class="mobile_phone">
    	<span class="mobile_phone">#: mobile_phone# </span> <br />
		<span class="email">#: email# </span>
    </td>
    <td class="nationality">
      <span class="email">#: nationality# </span>
    </td>
    <td class="text-center status">
		# if(status == '1') { #
		<span class="stats-bdg-inact status-active-remitter">Active</span>
		# } else { #
		<span class="stats-bdg-inact status-inactive-remitter">In-Active</span>
		# } #
    </td>
    <td class="text-center action">
		<a href="{{url('remitters/edit')}}/#: remitter_id #" class="btn btn-icon" title="Update Remitter"> <i class="fa-regular fa-pen-to-square lblue"></i></a>
		<a href="{{url('remitters/delete')}}/#: remitter_id #" class="btn btn-icon" title="Delete Remitter"><i class="fa-regular fa-trash-can red"></i></a>
		<a href="{{url('remitters/profile')}}/#: remitter_id #" class="btn btn-icon" title="Remitter Profile"><i class="fa-solid fa-square-arrow-up-right dblue"></i></a>
    </td>
  </tr>
</script>

<script type="text/javascript">
jQuery(function() {
    jQuery("#grid").kendoGrid({
        "columns": [{
            "field": "full_name",
            "width": "20%",
            "sortable": false,
            "title": "Name/Type"
        }, {
            "width": "25%",
            "sortable": false,
            "title": "Address"
        }, {
            "width": "13%",
            "sortable": false,
            "title": "DOB/Gander"
        }, {
            "width": "20%",
            "sortable": false,
            "title": "Phone"
        }, {
            "field": "nationality",
            "width": "13%",
            "sortable": false,
            "title": "Nationality"
        },{
            "field": "status",
            "width": "12%",
            "sortable": true,
            "title": "Status",
			"headerAttributes": { "class": "k-text-center" },
        }, {
            "width": "12%",
            "title": "Action",
			"headerAttributes": { "class": "k-text-center" },
        }],
        "dataSource": {
            "transport": {
                "read": {
                    "url": "{{route('search_remitters')}}",
                    "contentType": "application/json",
                    "type": "post",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                        "items_per_page": 30
                    }
                },
                "parameterMap": function(data) {
                    return kendo.stringify(data);
                }
            },
            "pageSize": 30,
            "schema": {
                "data": "data",
                "model": {
                    "fields": [{
                        "field": "remitter_id",
                        "type": "int"
                    }, {
                        "field": "created_at",
                        "type": "string"
                    }, {
                        "field": "full_name",
                        "type": "string"
                    }, {
                        "field": "house_number",
                        "type": "string"
                    }, {
                        "field": "street_address",
                        "type": "string"
                    }, {
                        "field": "city",
                        "type": "string"
                    }, {
                        "field": "state_province",
                        "type": "string"
                    }, {
                        "field": "post_code",
                        "type": "string"
                    }, {
                        "field": "country_iso_code",
                        "type": "string"
                    }, {
                        "field": "mobile_phone",
                        "type": "string"
                    }, {
                        "field": "email",
                        "type": "string"
                    }, {
                        "field": "agent_id",
                        "type": "int"
                    }, {
                        "field": "business_name",
                        "type": "string"
                    }, {
                        "field": "agent_city",
                        "type": "string"
                    }, {
                        "field": "status",
                        "type": "int"
                    }]
                },
                "total": "total"
            },
            "serverFiltering": false,
            "serverSorting": true,
            "serverPaging": true
        },
        "rowTemplate": kendo.template($('#row-template').html()),
        "altRowTemplate": kendo.template($('#alt-row-template').html()),
        "sortable": true,
        "height": 560,
        "filterable": false,
        "pageable": true
    });
});

$("#gridSearchResetButton").click(function (event) {
	event.preventDefault();
	
	$("#remitter_id").val('');
	$("#full_name").val('');
	$("#mobile_phone").val('');
	$("#email").val('');
	$("#post_code").val('');
	$("#country_iso_code").val('');
	$("#document_number").val('');
	$("#status").val('');
	$("#created_at").val('');
	
	$('#grid').data("kendoGrid").dataSource.read();
});
$("#gridSearchButton").click(function (event) {
	event.preventDefault();
	$('#grid').data("kendoGrid").dataSource.read(onDataRead());
});

function onDataRead(){
	return {
		remitter_id: $("#remitter_id").val().trim(),
		full_name: $("#full_name").val().trim(),
		mobile_phone: $("#mobile_phone").val().trim(),
		email: $("#email").val().trim(),
		post_code: $("#post_code").val().trim(),
		country_iso_code: $("#country_iso_code").val().trim(),
		document_number: $("#document_number").val().trim(),
		status: $("#status").val().trim(),
		created_at: $("#created_at").val().trim(),
	};
}

$('#country_iso_code').select2();
$('#status').select2();
/*$('input[name="created_at"]').daterangepicker();*/
</script>
@endsection

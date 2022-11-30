<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class RemitterRequest extends FormRequest
{
	/**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return true;
    }

	/**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function Rules()
    {
        return [
            'first_name'            =>  'required|string|max:255',
            'last_name'             =>  'required|string|max:255',
            'street_address'        =>  'required|string|max:255',
            'house_number'          =>  'required',
            'city'                  =>  'required',
            'mobile_phone'          =>  'required|max:20',
            'gender'                =>  'required',
            'date_of_birth'         =>  'required|date|before:-13 years',
            'place_of_birth'        =>  'required|string|max:255',
            'country_of_birth'      =>  'required|string|max:255',
            'occupation_code'       =>  'required|string|max:255',
            'source_of_income_code' =>  'required',
            'remitter_type_code'    =>  'required',
            'post_code'             =>  'required',
            'state_province'        =>  'required',
            'country_iso_code'      =>  'required',
        ];
    }
    public function Messages()
    {
        return [
           'first_name.required'             =>  'Remitter First Name is Required',
            'last_name.required'             =>  'Remitter Last name is Required',
            'street_address.required'        =>  'Remitter Street Address is Required',
            'house_number.required'          =>  'House Number is Required',
            'city.required'                  =>  'City is Required',
            'country_iso_code.required'      =>  'Country is Required',
            'mobile_phone.required'          =>  'Remitter Mobile Phone is Required',
            'gender.required'                =>  'Gender is Required',
            'date_of_birth.required'         =>  'Date Of Birth is Required and age should be 18 years',
            'place_of_birth.required'        =>  'place of Birth is Required',
            'country_of_birth.required'      =>  'Country Of Birth is Required',
            'occupation_code.required'       =>  'Remitter Occupation is Required',
            'remitter_type_code.required'    =>  'Remitter Type is Required',
            'source_of_income_code.required' =>  'Source Of Income is Required',
            'post_code.required'              =>  'postcode is Required',
            'state_province.required'        =>  'State Province is Required'
        ];
    }
}

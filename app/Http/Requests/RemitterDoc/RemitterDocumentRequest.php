<?php
namespace App\Http\Requests\Remitters;

use App\Repositories\UtilityRepository;
use Illuminate\Foundation\Http\FormRequest;

class RemitterDocumentRequest extends FormRequest
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
            'document_type_code' 			=>  'required|'.UtilRepository::validationRegexRules('validation_regex_entity_code'),
            'document_category_id'          =>  'required|'.UtilRepository::validationRegexRules('validation_regex_integer_value'),
            'document_number'			    =>  'required|'.UtilRepository::validationRegexRules('validation_regex_document_number'),
            'issue_date'      			    =>  'required',
            'scanned_image_1'			    =>	'required_if:old_scanned_image_1,=, ""',
            'expire_date'	                =>	'nullable|after_or_equal:issue_date',
            'scanned_image_2'	            =>	'',
            'issuer_country_iso_code'	    =>	'required|'.UtilRepository::validationRegexRules('validation_regex_country_iso_code'),
            'issuer_state_province'	        =>	'|'.UtilRepository::validationRegexRules('validation_regex_state'),
            'issuing_authority'	            =>	'',
        ];
    }
    public function Messages()
    {
        return [
            'document_category_id.required'		=>	'Document Category is required.',
			'document_type_code.required'		=>	'Document Type is required.',
			'document_number.required'			=>	'Document Number is required.',
            'issue_date.required'				=>	'Issue Date is required.',
            'scanned_image_1.required_if'		=>	'Document Front Image is required.',
            'issuer_country_iso_code.required'	=>	'Issuer Country is required.',
        ];
    }
}

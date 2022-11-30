<?php
namespace App\Transformers\beneficiaries;

use Illuminate\Support\Carbon;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

/**
 * Class Transformer
 *
 * Assists in transforming models or custom datasets
 *
 * @package STM\Transformer
 */
class BeneficiaryTransformer extends TransformerAbstract
{
	public static function Transform(Beneficiary $beneficiary)
    {
       return [
            'first_name'                        =>  isset($beneficiary->first_name) ? (string) $beneficiary->first_name : '',
            'middle_name'                       =>  isset($beneficiary->middle_name) ? (string) $beneficiary->middle_name : '',
            'last_name'                         =>  isset($beneficiary->last_name) ? (string) $beneficiary->last_name : '',
            'fourth_name'                       =>  isset($beneficiary->fourth_name) ? (string) $beneficiary->fourth_name : '',
            'remitter_id'                       =>  isset($beneficiary->remitter_id) ? (string) $beneficiary->remitter_id : '',
            'delivery_method_code'              =>  isset($beneficiary->delivery_method_code) ? (string) $beneficiary->delivery_method_code : '',
            'address1'                          =>  isset($beneficiary->address1)? (string) $beneficiary->address1 : '',
            'address2'                          =>  isset($beneficiary->address2)? (string) $beneficiary->address2 : '',
            'city'                              =>  isset($beneficiary->city) ? (string) $beneficiary->city : '',
            'state_province'                    =>  isset($beneficiary->state_province) ? (string) $beneficiary->state_province : '',
            'post_code'                         =>  isset($beneficiary->post_code) ? (string) $beneficiary->post_code : '',
            'country_iso_code'                  =>  isset($beneficiary->country_iso_code) ? (string) $beneficiary->country_iso_code : '',
            'relationship_id'                   =>  isset($beneficiary->relationship_id) ? (string) $beneficiary->relationship_id : '',
            'mobile_phone'                      =>  isset($beneficiary->mobile_phone) ? (string) $beneficiary->mobile_phone : '',
            'bank_name'                         =>  isset($beneficiary->bank_name) ? (string) $beneficiary->bank_name : '',
            'bank_code'                         =>  isset($beneficiary->bank_code) ? (string) $beneficiary->bank_code : '',
            'account_number'                    =>  isset($beneficiary->account_number) ? (string) $beneficiary->account_number : '',
            'bank_account_title'                =>  isset($beneficiary->bank_account_title) ? (string) $beneficiary->bank_account_title : '',
            'wallet_company_id'                 =>  isset($beneficiary->wallet_company_id) ? (int) $beneficiary->wallet_company_id : 0,
            'wallet_account_number'             =>  isset($beneficiary->wallet_account_number) ? (string) $beneficiary->wallet_account_number : '',
            'iban_number'                       =>  isset($beneficiary->iban_number) ? (string) $beneficiary->iban_number : '',
            'bank_branch_code'                  =>  isset($beneficiary->bank_branch_code) ? (string) $beneficiary->bank_branch_code : '',
            'routing_number'                    =>  isset($beneficiary->routing_number) ? (string) $beneficiary->routing_number : '',
            'ifsc_code'                         =>  isset($beneficiary->ifsc_code) ? (string) $beneficiary->ifsc_code : '',
            'bic_code'                          =>  isset($beneficiary->bic_code) ? (string) $beneficiary->bic_code : '',
            'sort_code'                         =>  isset($beneficiary->sort_code) ? (string) $beneficiary->sort_code : '',
            'swift_code'                        =>  isset($beneficiary->swift_code) ? (string) $beneficiary->swift_code : '',
            'utility_company_id'                =>  isset($beneficiary->utility_company_id) ? (string) $beneficiary->utility_company_id : '',
            'utility_account_number'            =>  isset($beneficiary->utility_account_number) ? (int) $beneficiary->utility_account_number : 0,
            'prepaid_card_company_id'           =>  isset($beneficiary->prepaid_card_company_id) ? (string) $beneficiary->prepaid_card_company_id : '',
            'prepaid_card_number'               =>  isset($beneficiary->prepaid_card_number) ? (string) $beneficiary->prepaid_card_number : '',
            'topup_company_id'                  =>  isset($beneficiary->topup_company_id) ? (string) $beneficiary->topup_company_id : '',
            'topup_account_number'              =>  isset($beneficiary->topup_account_number) ? (string) $beneficiary->topup_account_number : '',
            'created_at'                        =>  isset($beneficiary->created_at) && $beneficiary->created_at != "" ? date('Y-m-d H:i:s', strtotime($beneficiary->created_at)) : '',
            'updated_at'                        =>  isset($beneficiary->updated_at) && $beneficiary->updated_at != "" ? date('Y-m-d H:i:s', strtotime($beneficiary->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($beneficiary)
    {
        $transformed = [];
        isset($beneficiary["first_name"]) ? $transformed['first_name'] =  (string)$beneficiary["first_name"]:'';
        isset($beneficiary["middle_name"]) ? $transformed['middle_name'] =  (string)$beneficiary["middle_name"]:'';
        isset($beneficiary["last_name"]) ? $transformed['last_name'] =  (string)$beneficiary["last_name"]:'';
        isset($beneficiary["fourth_name"]) ? $transformed['fourth_name'] =  (string)$beneficiary["fourth_name"]:'';
        isset($beneficiary["remitter_id"]) ? $transformed['remitter_id'] =  (string)$beneficiary["remitter_id"]:'';
        isset($beneficiary["delivery_method_code"]) ? $transformed['delivery_method_code'] =  (string)$beneficiary["delivery_method_code"]:'';
        isset($beneficiary["address1"]) ? $transformed['address1'] =  (string)$beneficiary["address1"]:'';
        isset($beneficiary["address2"]) ? $transformed['address2'] =  (string)$beneficiary["address2"]:'';
        isset($beneficiary["city"]) ? $transformed['city'] =  (string)$beneficiary["city"]:'';
        isset($beneficiary["state_province"]) ? $transformed['state_province'] =  (string)$beneficiary["state_province"]:'';
        isset($beneficiary["post_code"]) ? $transformed['post_code'] =  (string)$beneficiary["post_code"]:'';
        isset($beneficiary["country_iso_code"]) ? $transformed['country_iso_code'] =  (string)$beneficiary["country_iso_code"]:'';
        isset($beneficiary["relationship_id"]) ? $transformed['relationship_id'] =  (string)$beneficiary["relationship_id"]:'';
        isset($beneficiary["mobile_phone"]) ? $transformed['mobile_phone'] =  (string)$beneficiary["mobile_phone"]:'';
        isset($beneficiary["bank_name"]) ? $transformed['bank_name'] =  (string)$beneficiary["bank_name"]:'';
        isset($beneficiary["bank_code"]) ? $transformed['bank_code'] =  (string)$beneficiary["bank_code"]:'';
        isset($beneficiary["account_number"]) ? $transformed['account_number'] =  (string)$beneficiary["account_number"]:'';
        isset($beneficiary["bank_account_title"]) ? $transformed['bank_account_title'] =  (string)$beneficiary["bank_account_title"]:'';
        isset($beneficiary["wallet_company_id"]) ? $transformed['wallet_company_id'] =  (string)$beneficiary["wallet_company_id"]:'';
        isset($beneficiary["wallet_account_number"]) ? $transformed['wallet_account_number'] =  (string)$beneficiary["wallet_account_number"]:'';
        isset($beneficiary["wallet_account_number"]) ? $transformed['wallet_account_number'] =  (string)$beneficiary["wallet_account_number"]:'';
        isset($beneficiary["iban_number"]) ? $transformed['iban_number'] =  (string)$beneficiary["iban_number"]:'';
        isset($beneficiary["bank_branch_code"]) ? $transformed['bank_branch_code'] =  (string)$beneficiary["bank_branch_code"]:'';
        isset($beneficiary["routing_number"]) ? $transformed['routing_number'] =  (string)$beneficiary["routing_number"]:'';
        isset($beneficiary["ifsc_code"]) ? $transformed['ifsc_code'] =  (string)$beneficiary["ifsc_code"]:'';
        isset($beneficiary["bic_code"]) ? $transformed['bic_code'] =  (string)$beneficiary["bic_code"]:'';
        isset($beneficiary["sort_code"]) ? $transformed['sort_code'] =  (string)$beneficiary["sort_code"]:'';
        isset($beneficiary["swift_code"]) ? $transformed['swift_code'] =  (string)$beneficiary["swift_code"]:'';
        isset($beneficiary["utility_company_id"]) ? $transformed['utility_company_id'] =  (string)$beneficiary["utility_company_id"]:'';
        isset($beneficiary["prepaid_card_company_id"]) ? $transformed['prepaid_card_company_id'] =  (string)$beneficiary["prepaid_card_company_id"]:'';
        isset($beneficiary["prepaid_card_number"]) ? $transformed['prepaid_card_number'] =  (string)$beneficiary["prepaid_card_number"]:'';
        isset($beneficiary["topup_company_id"]) ? $transformed['topup_company_id'] =  (string)$beneficiary["topup_company_id"]:'';
        isset($beneficiary["topup_account_number"]) ? $transformed['topup_account_number'] =  (string)$beneficiary["topup_account_number"]:'';


        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new BeneficiaryTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

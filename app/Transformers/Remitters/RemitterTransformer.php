<?php
namespace App\Transformers\Remitters;

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
class RemitterTransformer extends TransformerAbstract
{
	public static function Transform(Remitter $remitter)
    {
       return [
            'first_name'                        =>  isset($remitter->first_name) ? (string) $remitter->first_name : '',
            'middle_name'                       =>  isset($remitter->middle_name) ? (string) $remitter->middle_name : '',
            'last_name'                         =>  isset($remitter->last_name) ? (string) $remitter->last_name : '',
            'fourth_name'                       =>  isset($remitter->fourth_name) ? (string) $remitter->fourth_name : '',
            'house_number'                      =>  isset($remitter->house_number) ? (string) $remitter->house_number : '',
            'street_address'                    =>  isset($remitter->street_address) ? (string) $remitter->street_address : '',
            'city'                              =>  isset($remitter->city) ? (string) $remitter->city : '',
            'state_province'                    =>  isset($remitter->state_province) ? (string) $remitter->state_province : '',
            'post_code'                         =>  isset($remitter->post_code) ? (string) $remitter->post_code : '',
            'home_phone'                        =>  isset($remitter->home_phone) ? (string) $remitter->home_phone : '',
            'mobile_phone'                      =>  isset($remitter->mobile_phone) ? (string) $remitter->mobile_phone : '',
            'gender'                            =>  isset($remitter->gender) ? (string) $remitter->gender : '',
            'place_of_birth'                    =>  isset($remitter->place_of_birth) ? (string) $remitter->place_of_birth : '',
            'country_of_birth'                  =>  isset($remitter->country_of_birth) ? (string) $remitter->country_of_birth : '',
            'nationality'                       =>  isset($remitter->nationality) ? (string) $remitter->nationality : '',
            'date_of_birth'                     =>  isset($remitter->date_of_birth) && $remitter->date_of_birth != '' ? $remitter->date_of_birth : '',
            'occupation_id'                     =>  isset($remitter->occupation_id) ? (string) $remitter->occupation_id : '',
            'country_iso_code'                  =>  isset($remitter->country_iso_code) ? (string) $remitter->country_iso_code : '',
            'remitter_type_id'                  =>  isset($remitter->remitter_type_id) ? (string) $remitter->remitter_type_id : '',
            'source_of_income_id'               =>  isset($remitter->source_of_income_id) ? (string) $remitter->source_of_income_id : '',
            'referral_code'                     =>  isset($remitter->referral_code) ? (string) $remitter->referral_code : '',
            'created_at'                        =>  isset($remitter->created_at) && $remitter->created_at != "" ? date('Y-m-d H:i:s', strtotime($remitter->created_at)) : '',
            'updated_at'                        =>  isset($remitter->updated_at) && $remitter->updated_at != "" ? date('Y-m-d H:i:s', strtotime($remitter->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($remitter)
    {
        $transformed = [];
        isset($remitter["remitter_id"]) ? $transformed['remitter_id'] =  (int)$remitter["remitter_id"]:0;
        isset($remitter["first_name"]) ? $transformed['first_name'] =  (string)$remitter["first_name"]:'';
        isset($remitter["middle_name"]) ? $transformed['middle_name'] =  (string)$remitter["middle_name"]:'';
        isset($remitter["last_name"]) ? $transformed['last_name'] =  (string)$remitter["last_name"]:'';
        isset($remitter["fourth_name"]) ? $transformed['fourth_name'] =  (string)$remitter["fourth_name"]:'';
        isset($remitter["house_number"]) ? $transformed['house_number'] =  (string)$remitter["house_number"]:'';
        isset($remitter["street_address"]) ? $transformed['street_address'] =  (string)$remitter["street_address"]:'';
        isset($remitter["city"]) ? $transformed['city'] =  (string)$remitter["city"]:'';
        isset($remitter["state_province"]) ? $transformed['state_province'] =  (string)$remitter["state_province"]:'';
        isset($remitter["post_code"]) ? $transformed['post_code'] =  (string)$remitter["post_code"]:'';
        isset($remitter["mobile_phone"]) ? $transformed['mobile_phone'] =  (string)$remitter["mobile_phone"]:'';
        isset($remitter["home_phone"]) ? $transformed['home_phone'] =  (string)$remitter["home_phone"]:'';
        isset($remitter["gender"]) ? $transformed['gender'] =  (string)$remitter["gender"]:'';
        isset($remitter["place_of_birth"]) ? $transformed['place_of_birth'] =  (string)$remitter["place_of_birth"]:'';
        isset($remitter["date_of_birth"]) ? $transformed['date_of_birth'] =  (string)$remitter["date_of_birth"]:'';
        isset($remitter["country_of_birth"]) ? $transformed['country_of_birth'] =  (string)$remitter["country_of_birth"]:'';
        isset($remitter["occupation_code"]) ? $transformed['occupation_code'] =  (string)$remitter["occupation_code"]:'';
        isset($remitter["source_of_income_code"]) ? $transformed['source_of_income_code'] =  (string)$remitter["source_of_income_code"]:'';
        isset($remitter["nationality"]) ? $transformed['nationality'] =  (string)$remitter["nationality"]:'';
        isset($remitter["country_iso_code"]) ? $transformed['country_iso_code'] =  (string)$remitter["country_iso_code"]:'';
        isset($remitter["remitter_type_code"]) ? $transformed['remitter_type_code'] =  (string)$remitter["remitter_type_code"]:'';

        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new RemitterTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

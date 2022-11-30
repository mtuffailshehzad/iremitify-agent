<?php
namespace App\Transformers\User;

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
class UserTransformer extends TransformerAbstract
{
	public static function Transform(User $user)
    {
       return [
            'agent_user_id'           =>  isset($user->user_id) ? (int) $user->user_id : 0,
            'business_name'           =>  isset($user->business_name) ? (string) $user->business_name : '',
            'business_prefix'         =>  isset($user->business_prefix) ? (string) $user->business_prefix : '',
            'house_number'            =>  isset($user->house_number) ? (string) $user->house_number : '',
            'street_address'          =>  isset($user->street_address) ? (string) $user->street_address : '',
            'city'                    =>  isset($user->city) ? (string) $user->city : '',
            'state_province'          =>  isset($user->state_province) ? (string) $user->state_province : '',
            'post_code'               =>  isset($user->post_code) ? (string) $user->post_code : '',
            'country_iso_code'        =>  isset($user->country_iso_code) ? (string) $user->country_iso_code : '',
            'country_name'            =>  isset($user->country_name) ? (string) $user->country_name : '',
            'currency_iso_code'       =>  isset($user->currency_iso_code) ? (string) $user->currency_iso_code : '',
            'currency_name'           =>  isset($user->currency_name) ? (string) $user->currency_name : '',
            'mobile_phone'            =>  isset($user->mobile_phone) ? (string) $user->mobile_phone : '',
            'work_phone'              =>  isset($user->work_phone) ? (string) $user->work_phone : '',
            'email'                   =>  isset($user->email) ? (string) $user->email : '',
            'website'                 =>  isset($user->website) ? (string) $user->website : '',
            'time_zone'               =>  isset($user->time_zone) ? (string) $user->time_zone : '',
            'created_at'              =>  isset($user->created_at) && $user->created_at != "" ? date('Y-m-d H:i:s', strtotime($user->created_at)) : '',
            'updated_at'              =>  isset($user->updated_at) && $user->updated_at != "" ? date('Y-m-d H:i:s', strtotime($user->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($user)
    {
        $transformed = [];
        isset($user["user_id"]) ? $transformed['user_id'] =  (int)$user["user_id"]: 0;
        isset($user["business_name"]) ? $transformed['business_name'] =  (string)$user["business_name"]:'';
        isset($user["business_prefix"]) ? $transformed['business_prefix'] =  (string)$user["business_prefix"]:'';
        isset($user["house_number"]) ? $transformed['house_number'] =  (string)$user["house_number"]:'';
        isset($user["street_address"]) ? $transformed['street_address'] =  (string)$user["street_address"]:'';
        isset($user["city"]) ? $transformed['city'] =  (string)$user["city"]:'';
        isset($user["state_province"]) ? $transformed['state_province'] =  (string)$user["state_province"]:'';
        isset($user["post_code"]) ? $transformed['post_code'] =  (string)$user["post_code"]:'';
        isset($user["country_iso_code"]) ? $transformed['country_iso_code'] =  (string)$user["country_iso_code"]:'';
        isset($user["country_name"]) ? $transformed['country_name'] =  (string)$user["country_name"]:'';
        isset($user["currency_iso_code"]) ? $transformed['currency_iso_code'] =  (string)$user["currency_iso_code"]:'';
        isset($user["currency_name"]) ? $transformed['currency_name'] =  (string)$user["currency_name"]:'';
        isset($user["mobile_phone"]) ? $transformed['mobile_phone'] =  (string)$user["mobile_phone"]:'';
        isset($user["work_phone"]) ? $transformed['work_phone'] =  (string)$user["work_phone"]:'';
        isset($user["email"]) ? $transformed['email'] =  (string)$user["email"]:'';
        isset($user["website"]) ? $transformed['website'] =  (string)$user["website"]:'';
        isset($user["time_zone"]) ? $transformed['time_zone'] =  (string)$user["time_zone"]:'';
        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new UserTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

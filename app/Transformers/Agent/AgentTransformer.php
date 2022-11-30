<?php
namespace App\Transformers\Agent;

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
class AgentTransformer extends TransformerAbstract
{
	public static function Transform(Agent $agent)
    {
       return [
            'agent_id'                =>  isset($agent->agent_id) ? (int) $agent->agent_id : 0,
            'business_name'           =>  isset($agent->business_name) ? (string) $agent->business_name : '',
            'business_prefix'         =>  isset($agent->business_prefix) ? (string) $agent->business_prefix : '',
            'address1'                =>  isset($agent->address1) ? (string) $agent->address1 : '',
            'address2'                =>  isset($agent->address2) ? (string) $agent->address2 : '',
            'city'                    =>  isset($agent->city) ? (string) $agent->city : '',
            'state_province'          =>  isset($agent->state_province) ? (string) $agent->state_province : '',
            'post_code'               =>  isset($agent->post_code) ? (string) $agent->post_code : '',
            'country_iso_code'        =>  isset($agent->country_iso_code) ? (string) $agent->country_iso_code : '',
            'country_name'            =>  isset($agent->country_name) ? (string) $agent->country_name : '',
            'currency_iso_code'       =>  isset($agent->currency_iso_code) ? (string) $agent->currency_iso_code : '',
            'currency_name'           =>  isset($agent->currency_name) ? (string) $agent->currency_name : '',
            'mobile_phone'            =>  isset($agent->mobile_phone) ? (string) $agent->mobile_phone : '',
            'work_phone'              =>  isset($agent->work_phone) ? (string) $agent->work_phone : '',
            'email'                   =>  isset($agent->email) ? (string) $agent->email : '',
            'website'                 =>  isset($agent->website) ? (string) $agent->website : '',
            'time_zone'               =>  isset($agent->time_zone) ? (string) $agent->time_zone : '',
            'created_at'              =>  isset($agent->created_at) && $agent->created_at != "" ? date('Y-m-d H:i:s', strtotime($agent->created_at)) : '',
            'updated_at'              =>  isset($agent->updated_at) && $agent->updated_at != "" ? date('Y-m-d H:i:s', strtotime($agent->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($agent)
    {
        $transformed = [];
        isset($agent["agent_id"]) ? $transformed['agent_id'] =  (int)$agent["agent_id"]: 0;
        isset($agent["business_name"]) ? $transformed['business_name'] =  (string)$agent["business_name"]:'';
        isset($agent["business_prefix"]) ? $transformed['business_prefix'] =  (string)$agent["business_prefix"]:'';
        isset($agent["address1"]) ? $transformed['address1'] =  (string)$agent["address1"]:'';
        isset($agent["address2"]) ? $transformed['address2'] =  (string)$agent["address2"]:'';
        isset($agent["city"]) ? $transformed['city'] =  (string)$agent["city"]:'';
        isset($agent["state_province"]) ? $transformed['state_province'] =  (string)$agent["state_province"]:'';
        isset($agent["post_code"]) ? $transformed['post_code'] =  (string)$agent["post_code"]:'';
        isset($agent["country_iso_code"]) ? $transformed['country_iso_code'] =  (string)$agent["country_iso_code"]:'';
        isset($agent["country_name"]) ? $transformed['country_name'] =  (string)$agent["country_name"]:'';
        isset($agent["currency_iso_code"]) ? $transformed['currency_iso_code'] =  (string)$agent["currency_iso_code"]:'';
        isset($agent["currency_name"]) ? $transformed['currency_name'] =  (string)$agent["currency_name"]:'';
        isset($agent["mobile_phone"]) ? $transformed['mobile_phone'] =  (string)$agent["mobile_phone"]:'';
        isset($agent["work_phone"]) ? $transformed['work_phone'] =  (string)$agent["work_phone"]:'';
        isset($agent["email"]) ? $transformed['email'] =  (string)$agent["email"]:'';
        isset($agent["website"]) ? $transformed['website'] =  (string)$agent["website"]:'';
        isset($agent["time_zone"]) ? $transformed['time_zone'] =  (string)$agent["time_zone"]:'';
        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new AgentTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

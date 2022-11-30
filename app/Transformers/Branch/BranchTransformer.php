<?php
namespace App\Transformers\Branch;

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
class BranchTransformer extends TransformerAbstract
{
	public static function Transform(Branch $branch)
    {
       return [
            'agent_id'                =>  isset($branch->branch_id) ? (int) $branch->branch_id : 0 ,
            'business_name'           =>  isset($branch->business_name) ? (string) $branch->business_name : '',
            'business_prefix'         =>  isset($branch->business_prefix) ? (string) $branch->business_prefix : '',
            'address1'                =>  isset($branch->address1) ? (string) $branch->address1 : '',
            'address2'                =>  isset($branch->address2) ? (string) $branch->address2 : '',
            'city'                    =>  isset($branch->city) ? (string) $branch->city : '',
            'state_province'          =>  isset($branch->state_province) ? (string) $branch->state_province : '',
            'post_code'               =>  isset($branch->post_code) ? (string) $branch->post_code : '',
            'country_iso_code'        =>  isset($branch->country_iso_code) ? (string) $branch->country_iso_code : '',
            'country_name'            =>  isset($branch->country_name) ? (string) $branch->country_name : '',
            'currency_iso_code'       =>  isset($branch->currency_iso_code) ? (string) $branch->currency_iso_code : '',
            'currency_name'           =>  isset($branch->currency_name) ? (string) $branch->currency_name : '',
            'mobile_phone'            =>  isset($branch->mobile_phone) ? (string) $branch->mobile_phone : '',
            'work_phone'              =>  isset($branch->work_phone) ? (string) $branch->work_phone : '',
            'email'                   =>  isset($branch->email) ? (string) $branch->email : '',
            'website'                 =>  isset($branch->website) ? (string) $branch->website : '',
            'time_zone'               =>  isset($branch->time_zone) ? (string) $branch->time_zone : '',
            'created_at'              =>  isset($branch->created_at) && $branch->created_at != "" ? date('Y-m-d H:i:s', strtotime($branch->created_at)) : '',
            'updated_at'              =>  isset($branch->updated_at) && $branch->updated_at != "" ? date('Y-m-d H:i:s', strtotime($branch->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($branch)
    {
        $transformed = [];
        isset($branch["branch_id"]) ? $transformed['branch_id'] =  (int)$branch["branch_id"]:0 ;
        isset($branch["business_name"]) ? $transformed['business_name'] =  (string)$branch["business_name"]:'';
        isset($branch["business_prefix"]) ? $transformed['business_prefix'] =  (string)$branch["business_prefix"]:'';
        isset($branch["address1"]) ? $transformed['address1'] =  (string)$branch["address1"]:'';
        isset($branch["address2"]) ? $transformed['address2'] =  (string)$branch["address2"]:'';
        isset($branch["city"]) ? $transformed['city'] =  (string)$branch["city"]:'';
        isset($branch["state_province"]) ? $transformed['state_province'] =  (string)$branch["state_province"]:'';
        isset($branch["post_code"]) ? $transformed['post_code'] =  (string)$branch["post_code"]:'';
        isset($branch["country_iso_code"]) ? $transformed['country_iso_code'] =  (string)$branch["country_iso_code"]:'';
        isset($branch["country_name"]) ? $transformed['country_name'] =  (string)$branch["country_name"]:'';
        isset($branch["currency_iso_code"]) ? $transformed['currency_iso_code'] =  (string)$branch["currency_iso_code"]:'';
        isset($branch["currency_name"]) ? $transformed['currency_name'] =  (string)$branch["currency_name"]:'';
        isset($branch["mobile_phone"]) ? $transformed['mobile_phone'] =  (string)$branch["mobile_phone"]:'';
        isset($branch["work_phone"]) ? $transformed['work_phone'] =  (string)$branch["work_phone"]:'';
        isset($branch["email"]) ? $transformed['email'] =  (string)$branch["email"]:'';
        isset($branch["website"]) ? $transformed['website'] =  (string)$branch["website"]:'';
        isset($branch["time_zone"]) ? $transformed['time_zone'] =  (string)$branch["time_zone"]:'';
        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new BranchTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

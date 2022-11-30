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
            'remitter_id'                    =>  isset($remitter->remitter_id) ? (int) $remitter->remitter_id : 0,
            'document_category_id'           =>  isset($remitter->document_category_id) ? (string) $remitter->document_category_id : '',
            'document_type_code'             =>  isset($remitter->document_type_code) ? (string) $remitter->document_type_code : '',
            'document_number'                =>  isset($remitter->document_number) ? (string) $remitter->document_number : '',
            'issuer_country_iso_code'        =>  isset($remitter->issuer_country_iso_code) ? (string) $remitter->issuer_country_iso_code : '',
            'issuing_authority'              =>  isset($remitter->issuing_authority) ? (string) $remitter->issuing_authority : '',
            'issue_date'                     =>  isset($remitter->issue_date) ? (string) $remitter->issue_date : '',
            'expire_date'                    =>  isset($remitter->expire_date) ? (string) $remitter->expire_date : '',
            'scanned_image_1'                =>  isset($remitter->scanned_image_1) ? (string) $remitter->scanned_image_1 : '',
            'scanned_image_2'                =>  isset($remitter->scanned_image_2) ? (string) $remitter->scanned_image_2 : '',
            'selfie_image'                   =>  isset($remitter->selfie_image) ? (string) $remitter->selfie_image : '',
            'created_at'                     =>  isset($remitter->created_at) && $remitter->created_at != "" ? date('Y-m-d H:i:s', strtotime($remitter->created_at)) : '',
            'updated_at'                     =>  isset($remitter->updated_at) && $remitter->updated_at != "" ? date('Y-m-d H:i:s', strtotime($remitter->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($remitter)
    {
        $transformed = [];
        isset($remitter["remitter_id"]) ? $transformed['remitter_id'] =  (int)$remitter["remitter_id"]: 0;
        isset($remitter["document_category_id"]) ? $transformed['document_category_id'] =  (string)$remitter["document_category_id"]:'';
        isset($remitter["document_type_code"]) ? $transformed['document_type_code'] =  (string)$remitter["document_type_code"]:'';
        isset($remitter["document_number"]) ? $transformed['document_number'] =  (string)$remitter["document_number"]:'';
        isset($remitter["issuer_country_iso_code"]) ? $transformed['issuer_country_iso_code'] =  (string)$remitter["issuer_country_iso_code"]:'';
        isset($remitter["issuing_authority"]) ? $transformed['issuing_authority'] =  (string)$remitter["issuing_authority"]:'';
        isset($remitter["issue_date"]) ? $transformed['issue_date'] =  (string)$remitter["issue_date"]:'';
        isset($remitter["expire_date"]) ? $transformed['expire_date'] =  (string)$remitter["expire_date"]:'';
        isset($remitter["scanned_image_1"]) ? $transformed['scanned_image_1'] =  (string)$remitter["scanned_image_1"]:'';
        isset($remitter["scanned_image_2"]) ? $transformed['scanned_image_2'] =  (string)$remitter["scanned_image_2"]:'';
        isset($remitter["selfie_image"]) ? $transformed['selfie_image'] =  (string)$remitter["selfie_image"]:'';
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

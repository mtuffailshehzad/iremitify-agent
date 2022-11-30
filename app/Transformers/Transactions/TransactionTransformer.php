<?php
namespace App\Transformers\transactions;

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
class TransactionTransformer extends TransformerAbstract
{
	public static function Transform(Transaction $transaction)
    {
       return [
            'remitter_id'                       =>  isset($transaction->remitter_id) ? (int) $transaction->remitter_id : 0,
            'beneficiary_id'                    =>  isset($transaction->beneficiary_id) ? (int) $transaction->beneficiary_id : 0,
            'sending_purpose'                   =>  isset($transaction->sending_purpose) ? (string) $transaction->sending_purpose : '',
            'source_of_fund'                    =>  isset($transaction->source_of_fund) ? (string) $transaction->source_of_fund : '',
            'remitter_payment_method'           =>  isset($transaction->remitter_payment_method) ? (string) $transaction->remitter_payment_method : '',
            'delivery_method'                   =>  isset($transaction->delivery_method)? (string) $transaction->delivery_method : '',
            'source_currency_code'              =>  isset($transaction->source_currency_code)? (string) $transaction->source_currency_code : '',
            'destination_currency_code'         =>  isset($transaction->destination_currency_code) ? (string) $transaction->destination_currency_code : '',
            'source_country'                    =>  isset($transaction->source_country) ? (string) $transaction->source_country : '',
            'destination_country'               =>  isset($transaction->destination_country) ? (string) $transaction->destination_country : '',
            'destination_country_code'          =>  isset($transaction->destination_country_code) ? (string) $transaction->destination_country_code : '',
            'wallet_company_id'                 =>  isset($transaction->wallet_company_id) ? (string) $transaction->wallet_company_id : '',
            'payout_company_id'                 =>  isset($transaction->payout_company_id) ? (string) $transaction->payout_company_id : '',
            'payout_company_location_id'        =>  isset($transaction->payout_company_location_id) ? (string) $transaction->payout_company_location_id : '',
            'amount'                            =>  isset($transaction->amount) ? (string) $transaction->amount : '',
            'amount_type'                       =>  isset($transaction->amount_type) ? (string) $transaction->amount_type : '',
            'exchange_rate'                     =>  isset($transaction->exchange_rate) ? (string) $transaction->exchange_rate : '',
            'service_charges'                   =>  isset($transaction->service_charges) ? (int) $transaction->service_charges : 0,
            'system_service_charges'            =>  isset($transaction->system_service_charges) ? (string) $transaction->system_service_charges : '',
            'reference_number'                  =>  isset($transaction->reference_number) ? (string) $transaction->reference_number : '',
            'agent_payment_reference_number'    =>  isset($transaction->agent_payment_reference_number) ? (string) $transaction->agent_payment_reference_number : '',
            'use_exchange_rate'                 =>  isset($transaction->use_exchange_rate) ? (string) $transaction->use_exchange_rate : '',
            'occupation_id'                     =>  isset($transaction->occupation_id) ? (string) $transaction->occupation_id : '',
            'created_at'                        =>  isset($transaction->created_at) && $transaction->created_at != "" ? date('Y-m-d H:i:s', strtotime($transaction->created_at)) : '',
            'updated_at'                        =>  isset($transaction->updated_at) && $transaction->updated_at != "" ? date('Y-m-d H:i:s', strtotime($transaction->updated_at)) : '',
        ];
	}
    public static function TransformAvailableRequest($transaction)
    {
        $transformed = [];
        isset($transaction["remitter_id"]) ? $transformed['remitter_id'] =  (int)$transaction["remitter_id"]: 0 ;
        isset($transaction["beneficiary_id"]) ? $transformed['beneficiary_id'] =  (int)$transaction["beneficiary_id"]: 0 ;
        isset($transaction["sending_purpose"]) ? $transformed['sending_purpose'] =  (string)$transaction["sending_purpose"]:'';
        isset($transaction["source_of_fund"]) ? $transformed['source_of_fund'] =  (string)$transaction["source_of_fund"]:'';
        isset($transaction["remitter_payment_method"]) ? $transformed['remitter_payment_method'] =  (string)$transaction["remitter_payment_method"]:'';
        isset($transaction["delivery_method"]) ? $transformed['delivery_method'] =  (string)$transaction["delivery_method"]:'';
        isset($transaction["source_currency_code"]) ? $transformed['source_currency_code'] =  (string)$transaction["source_currency_code"]:'';
        isset($transaction["destination_currency_code"]) ? $transformed['destination_currency_code'] =  (string)$transaction["destination_currency_code"]:'';
        isset($transaction["source_country"]) ? $transformed['source_country'] =  (string)$transaction["source_country"]:'';
        isset($transaction["destination_country"]) ? $transsource_countryformed['destination_country'] =  (string)$transaction["destination_country"]:'';
        isset($transaction["destination_country_code"]) ? $transformed['destination_country_code'] =  (string)$transaction["destination_country_code"]:'';
        isset($transaction["wallet_company_id"]) ? $transformed['wallet_company_id'] =  (string)$transaction["wallet_company_id"]:'';
        isset($transaction["payout_company_id"]) ? $transformed['payout_company_id'] =  (string)$transaction["payout_company_id"]:'';
        isset($transaction["payout_company_location_id"]) ? $transformed['payout_company_location_id'] =  (string)$transaction["payout_company_location_id"]:'';
        isset($transaction["amount"]) ? $transformed['amount'] =  (string)$transaction["amount"]:'';
        isset($transaction["amount_type"]) ? $transformed['amount_type'] =  (string)$transaction["amount_type"]:'';
        isset($transaction["exchange_rate"]) ? $transformed['exchange_rate'] =  (string)$transaction["exchange_rate"]:'';
        isset($transaction["service_charges"]) ? $transformed['service_charges'] =  (string)$transaction["service_charges"]:'';
        isset($transaction["system_service_charges"]) ? $transformed['system_service_charges'] =  (string)$transaction["system_service_charges"]:'';
        isset($transaction["reference_number"]) ? $transformed['reference_number'] =  (string)$transaction["reference_number"]:'';
        isset($transaction["agent_payment_reference_number"]) ? $transformed['agent_payment_reference_number'] =  (string)$transaction["agent_payment_reference_number"]:'';
        isset($transaction["use_exchange_rate"]) ? $transformed['use_exchange_rate'] =  (string)$transaction["use_exchange_rate"]:'';
        isset($transaction["occupation_id"]) ? $transformed['occupation_id'] =  (int)$transaction["occupation_id"]: 0 ;
        return $transformed;
    }

    public static function TransformPaginator($pData)
    {
        $fractal    =   new Manager();
        $DataList	=	new Collection($pData->items(), new TransactionTransformer());
        $DataList->setPaginator(new IlluminatePaginatorAdapter($pData));
        $DataList  =	$fractal->createData($DataList)->toArray();
        return $DataList;
    }
}

<?php

namespace App\Repositories;

use App\Libraries\cUrlUtils;
use App\Transformers\Remitters\RemitterTransformer;
use App\Models\Remitter;
use App\Http\Requests\RemitterRequest;

class RemitterRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model    =   new Remitter();
    }

    public function search($searchData=array())
    {
        try
        {
            $searchData['limit'] = "20";
            $searchData['page'] = "1";
            $objResponse    =   cUrlUtils::post('/remitter/search', $this->PrivateParams($searchData));
            $objResult      =   $this->ParseResult($objResponse);
        }
        catch (\Exception $e)
        {
            $objResult      =	$this->ExceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function create($remitter)
    {
        try
        {
            $objResponse    =   cUrlUtils::post('/remitter/register', $this->PrivateParams($remitter));
            //print_r($objResponse);exit();
            $objResult      =   $this->ParseResult($objResponse);
        }
        catch (\Exception $e)
        {
            $objResult      =   $this->ExceptionHandler($e->getMessage());
        }
            return $objResult;
    }

    public function update($remitter)
    {
        try
        {
            $objResponse    =   cUrlUtils::post('/remitter/update',$this->PrivateParams($remitter));
            $objResult      =   $this->ParseResult($objResponse);
        }
        catch (\Exception $e)
        {
            $objResult      =   $this->ExceptionHandler($e->getMessage());
        }
        return $objResult;
    }
}

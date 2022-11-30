<?php

namespace App\Repositories;

use App\Libraries\cUrlUtils;

class BeneficiaryRepository extends BaseRepository
{

    public function __construct()
    {
        //
    }

    public function beneficiaryList($items_per_page, $searchData=array(), $sort=array(), $columns=['*'])
    {
        $objResult  =   new \stdClass();
        try {
            if ($items_per_page == ''){
                $items_per_page =   10;
            }
            $postData       =   array('items_per_page' => $items_per_page, 'data' => $this->PrivateParams($searchData), 'sort' => $sort, 'columns' => $columns);
            $objResponse    =   cUrlUtils::post('/benes/benelist', $this->PrivateParams($searchData));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }
}

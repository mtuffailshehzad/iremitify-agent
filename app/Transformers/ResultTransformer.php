<?php
namespace App\Transformers;

use App\Models\Result;
use League\Fractal\TransformerAbstract;

class ResultTransformer extends TransformerAbstract
{
    /**
     * @param Error $error
     * @return array
     */
    public function transform(Result $Result)
    {
        return [
            'Rflag'			=>	isset($Result->Rflag) ? (int) $Result->Rflag : 0,
            'Code'			=>	isset($Result->Code) ? (string) $Result->Code : '0',
            'Message'		=>	isset($Result->Message) ? (string) $Result->Message : '',
            'Description'	=>	isset($Result->Description) ? (string) $Result->Description : '',
        ];
    }
}
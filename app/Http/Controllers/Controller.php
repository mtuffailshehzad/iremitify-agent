<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Handle101($objParam)
    {
        if($objParam->Result->Rflag != 1)
        {
            if($objParam->Result->Code == "101")
            {
                return redirect('logout')->with('error101', $objParam->Result->Message);
                abort(404);
            }
        }
    }
    public function createToken($url, $timestamp)
    {
        return hash_hmac('sha256', $url.$timestamp, 'any_secretkey');
    }
    public function ValidateRequest($RequestData, $ValidateRequest)
    {
        $this->validate($RequestData, $ValidateRequest->Rules(), $ValidateRequest->Messages());
    }
}

<?php
namespace App\Libraries;

use App\Models\Result;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class cUrlUtils
{
    public static function post($api_url, $data, $headers = ['Content-Type' => 'application/json'])
    {
        $objResult  =   new \stdClass();
        try {
            $url    =	Settings::ApiBaseUrl().$api_url;
            if(Session::has('token'))
            {
                $headers['Authorization']   =   'Bearer '.Session::get('token');
            }
            $client     =   new Client();
            $response   =   $client->request('POST', $url, ['json' => $data, 'headers' => $headers]);
            $objResult  =   json_decode($response->getBody()->getContents());
        } catch (\Exception $e) {
            $result 				=	new Result();
            $result->Rflag		    =	0;
            $result->Code		    =	"99999";
            $result->Message	    =	"An internal error occurred: ";
            $result->Description	=	$e->getMessage();
            $objResult->result      =   $result;
        }
        return $objResult;
    }
}

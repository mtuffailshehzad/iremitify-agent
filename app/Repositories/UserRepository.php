<?php

namespace App\Repositories;

use App\Libraries\cUrlUtils;

class UserRepository extends BaseRepository
{

    public function __construct()
    {
        //
    }
    public function Login($data)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/token', $this->PublicParams($data));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function profile()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/profile/details', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function Permissions()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/profile/permissions', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function AppSettings()
    {
        $objResult  =   new \stdClass();
        try {
            $data['xclient']    =   '1';
            $objResponse        =   cUrlUtils::post('/settings', $this->PublicParams($data));
            $objResult          =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }
}

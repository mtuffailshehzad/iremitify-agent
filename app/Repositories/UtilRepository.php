<?php

namespace App\Repositories;

use App\Libraries\cUrlUtils;

class UtilRepository extends BaseRepository
{

    public function __construct()
    {
        //
    }
    public function SendingCountries()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/countries/sending', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function ReceivingCountries()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/countries/receiving', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayout($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/payout', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayoutBank($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/bank', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayoutWallet($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/wallet', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayoutTopup($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/topup', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayoutUtility($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/utility', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function CompaniesPayoutCard($receiving_country_iso_code)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/card', $this->PrivateParams($receiving_country_iso_code));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function PayoutCompanyBranches($payout_company_id)
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/companies/payout/branches', $this->PrivateParams($payout_company_id));
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function DocumentsCategories()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/DOCUMENTCATEGORIES', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function SendingPurpose()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/SENDINGPURPOSE', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function Relationships()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/RELATIONSHIPS', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function SourceOfFund()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/SOURCEOFFUND', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function ComplaintType()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/COMPLAINTTYPE', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function DocumentsType()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/DOCUMENTTYPES', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public function Occupations()
    {
        $objResult  =   new \stdClass();
        try {
            $objResponse    =   cUrlUtils::post('/services/lists/OCCUPATIONS', $this->PrivateParams());
            $objResult      =   $this->ParseResult($objResponse);
        } catch (\Exception $e) {
            $objResult->Result  =   $this->exceptionHandler($e->getMessage());
        }
        return $objResult;
    }

    public static function validationRegexRules($key)
    {
        return Setting($key) != '' ? 'regex:/' . Setting($key) . '/' : '';
    }
}

<?php
namespace App\Libraries;

use App;
use App\Repositories\UserRepository;
use App\Repositories\UtilRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class Utils
{
	public static function clearCache()
	{
		Artisan::call('cache:clear');
	}
	public static function clearRoute()
	{
		Artisan::call('route:clear');
	}
	public static function clearView()
	{
		Artisan::call('view:clear');
	}
	public static function clearConfig()
	{
		Artisan::call('config:clear');
	}
	public static function clearAllCache()
	{
		self::clearCache();
		self::clearRoute();
		self::clearView();
		self::clearConfig();
	}
    public static function creatAccessToken()
    {
        return Str::random(25).'-'.Session::get('auth_token').'-'.Str::random(25);
    }
    public static function getUserInfo()
    {
        $UserRepo   =   new UserRepository();
        return $UserRepo->profile();
    }
    public static function getAppSettings()
    {
        $UserRepo   =   new UserRepository();
        return $UserRepo->AppSettings();
    }
    public static function getSendingCountries()
    {
        $sending_countries      =   array();
        $UtilRepo               =   new UtilRepository();
        $objResponse            =   $UtilRepo->SendingCountries();
        if ($objResponse->Result->Rflag == 1)
        {
            $sending_countries  =   $objResponse->Data;
        }
        return $sending_countries;
    }

    public static function getReceivingCountries()
    {
        $receivingCountries        =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->ReceivingCountries();
        if ($objResponse->Result->Rflag == 1)
        {
            $receivingCountries    =   $objResponse->Data;
        }
        return $receivingCountries;
    }

    public static function getCompaniesPayout()
    {
        $companiesPayout       =   array();
        $UtilRepo               =   new UtilRepository();
        $objResponse            =   $UtilRepo->CompaniesPayout();
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayout  =   $objResponse->Data;
        }
        return $companiesPayout;
    }

    public static function getCompaniesPayoutBank($receiving_country_iso_code)
    {
        $companiesPayoutBank      =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->CompaniesPayoutBank($receiving_country_iso_code);
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayoutBank  =   $objResponse->Data;
        }
        return $companiesPayoutBank;
    }

    public static function getCompaniesPayoutWallet($receiving_country_iso_code)
    {
        $companiesPayoutWallet    =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->CompaniesPayoutWallet($receiving_country_iso_code);
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayoutWallet  =   $objResponse->Data;
        }
        return $companiesPayoutWallet;
    }

    public static function getCompaniesPayoutTopup($receiving_country_iso_code)
    {
        $companiesPayoutTopup     =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->CompaniesPayoutTopup($receiving_country_iso_code);
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayoutTopup  =   $objResponse->Data;
        }
        return $companiesPayoutTopup;
    }

    public static function getCompaniesPayoutUtility($receiving_country_iso_code)
    {
        $companiesPayoutUtility   =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->CompaniesPayoutUtility($receiving_country_iso_code);
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayoutUtility  =   $objResponse->Data;
        }
        return $companiesPayoutUtility;
    }

    public static function getCompaniesPayoutCard($receiving_country_iso_code)
    {
        $companiesPayoutCard      =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->CompaniesPayoutCard($receiving_country_iso_code);
        if ($objResponse->Result->Rflag == 1)
        {
            $companiesPayoutCard  =   $objResponse->Data;
        }
        return $companiesPayoutCard;
    }

    public static function getPayoutCompanyBranches($payout_company_id)
    {
        $payoutCompanyBranches    =   array();
        $UtilRepo                   =   new UtilRepository();
        $objResponse                =   $UtilRepo->PayoutCompanyBranches($payout_company_id);
        if ($objResponse->Result->Rflag == 1)
        {
            $payoutCompanyBranches  =   $objResponse->Data;
        }
        return $payoutCompanyBranches;
    }

    public static function getDocumentsCategories()
    {
        if (Cache::has('DocumentsCategories') && !empty(Cache::get('DocumentsCategories')))
        {
            $DocumentsCategories      =   Cache::get('DocumentsCategories');
        }
        else
        {
            $DocumentsCategories      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->DocumentsCategories();
            if ($objResponse->Result->Rflag == 1)
            {
                $DocumentsCategories  =   $objResponse->Data;
            }
        }
        return $DocumentsCategories;
    }

    public static function getSendingPurpose()
    {
        if (Cache::has('SendingPurpose') && !empty(Cache::get('SendingPurpose')))
        {
            $SendingPurpose      =   Cache::get('SendingPurpose');
        }
        else
        {
            $SendingPurpose      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->SendingPurpose();
            if ($objResponse->Result->Rflag == 1)
            {
                $SendingPurpose  =   $objResponse->Data;
            }
        }
        return $SendingPurpose;
    }

    public static function getRelationships()
    {
        if (Cache::has('Relationships') && !empty(Cache::get('Relationships')))
        {
            $Relationships      =   Cache::get('Relationships');
        }
        else
        {
            $Relationships      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->Relationships();
            if ($objResponse->Result->Rflag == 1)
            {
                $Relationships  =   $objResponse->Data;
            }
        }
        return $Relationships;
    }

    public static function getSourceOfFund()
    { 
        if (Cache::has('SourceOfFund') && !empty(Cache::get('SourceOfFund')))
        {
            $SourceOfFund      =   Cache::get('SourceOfFund');
        }
        else
        {
            $SourceOfFund      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->SourceOfFund();
            if ($objResponse->Result->Rflag == 1)
            {
                $SourceOfFund  =   $objResponse->Data;
            }
        }
        return $SourceOfFund;
    }

    public static function getsComplaintType()
    {
        if (Cache::has('ComplaintType') && !empty(Cache::get('ComplaintType')))
        {
            $ComplaintType      =   Cache::get('ComplaintType');
        }
        else
        {
            $ComplaintType      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->ComplaintType();
            if ($objResponse->Result->Rflag == 1)
            {
                $ComplaintType  =   $objResponse->Data;
            }
        }
        return $ComplaintType;
    }

    public static function getDocumentsType()
    {
        if (Cache::has('DocumentsType') && !empty(Cache::get('DocumentsType')))
        {
            $DocumentsType      =   Cache::get('DocumentsType');
        }
        else
        {
            $DocumentsType      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->DocumentsType();
            if ($objResponse->Result->Rflag == 1)
            {
                $DocumentsType  =   $objResponse->Data;
            }
        }
        return $DocumentsType;
    }

    public static function getOccupations()
    {
        if (Cache::has('Occupations') && !empty(Cache::get('Occupations')))
        {
            $Occupations      =   Cache::get('Occupations');
        }
        else
        {
            $Occupations      =   array();
            $UtilRepo               =   new UtilRepository();
            $objResponse            =   $UtilRepo->Occupations();
            if ($objResponse->Result->Rflag == 1)
            {
                $Occupations  =   $objResponse->Data;
            }
        }
        return $Occupations;
    }
    public static function getUserPermissions()
    {
        $UserPermissions    =   array();
        $UserRepo           =   new UserRepository();
        $objResponse        =   $UserRepo->Permissions();
        if ($objResponse->Result->Rflag == 1 && $objResponse->Data != null)
        {
            $UserPermissions    =   $objResponse->Data;
            $permissions        =   array();
            if (count($UserPermissions) > 0)
            {
                foreach ($UserPermissions as $permission)
                {
                    $permissions[]  =   $permission->name;
                }
            }
            Cache::put(Session::put('user_id').'_permissions', $permissions, Carbon::now()->addHours(12));
            Cache::put(Session::put('user_id').'_user_permissions', $UserPermissions, Carbon::now()->addHours(12));
        }
        return $UserPermissions;
    }
    public static function getLeftMenu()
    {
        if (Cache::has(Session::get('user_id').'_user_permissions'))
        {
            $UserPermissions    =   Cache::get(Session::get('user_id').'_user_permissions');
            if (empty($UserPermissions))
            {
                $UserPermissions    =   self::getUserPermissions();
            }
        }
        else
        {
            $UserPermissions    =   self::getUserPermissions();
        }
        $leftMenuHtml   =   '';
        if (count($UserPermissions) > 0)
        {
            foreach ($UserPermissions as $permission)
            {
                if ($permission->parent_id == '0' && $permission->show_on_menu == '1')
                {
                    $sub_permissions    =   array();
                    foreach ($UserPermissions as $sub_permission)
                    {
                        if ($permission->parent_id != '0' && $sub_permission->parent_id == $permission->parent_id && $sub_permission->show_on_menu == '1')
                        {
                            $sub_permissions[]  =   $sub_permission;
                        }
                    }
                    if (count($sub_permissions) > 0)
                    {
                        $leftMenuHtml   .=   '<li>
                                    <a href="javascript:;">
                                      <i class="'.$permission->icon.'" aria-hidden="true"></i>
                                      <span class="nav-label">'.$permission->label.'</span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-second-level collapse">';
                        foreach ($sub_permissions as $sub_permission)
                        {
                            $leftMenuHtml   .=   '<li> <a href="#">'.$sub_permission->label.'</a></li>';
                        }

                    $leftMenuHtml   .=   '</ul></li>';
                    }
                    else
                    {
                        $leftMenuHtml   .=   '<li>
                                    <a href="#">
                                      <i class="'.$permission->icon.'" aria-hidden="true"></i>
                                      <span class="nav-label">'.$permission->label.'</span>
                                    </a>
                                    </li>';
                    }
                }
            }
        }
        return $leftMenuHtml;
    }
}

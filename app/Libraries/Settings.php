<?php
namespace App\Libraries;

use File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Settings
{
    public static function SiteTitle()
    {
        return self::get('site_title');
    }

    public static function SiteName()
    {
        return self::getKeyValue('SITE_NAME');
    }

    public static function SiteLogo()
    {
        return self::get('site_logo');
    }
    public static function SiteDomain()
    {
        return self::get('site_domain' );
    }
    public static function BackgroundImage()
    {
        return self::get('background_image_filename');
    }

    public static function AppCss()
    {
        $cssFile = self::get('site_css_file');
        if ( trim($cssFile)  == "")
        {
            $cssFile = "assets/css/app.css";
        }
        return $cssFile;
    }

    public static function ResponsiveCss()
    {
        $responsive_cssFile = self::get('site_responsive_css_file');
        if ( trim($responsive_cssFile)  == "")
        {
            $responsive_cssFile = "assets/css/responsive.css";
        }
        return $responsive_cssFile;
    }

    public static function SiteAddress()
    {
        return self::get('base_url');
    }

    public static function SitePhone()
    {
        return self::get('support_phone_number');
    }

    public static function SiteWhatsApp()
    {
        return self::get('support_whatsapp_number');
    }

    public static function SiteSkype()
    {
        return self::getKeyValue('SITE_SKYPE');
    }

    public static function SiteEmail()
    {
        return self::get('support_email_address');
    }

    public static function SupportAvailability()
    {
        return self::get('support_availability_message');
    }

    public static function TermsUrl()
    {
        return self::get('terms_url' );
    }

    public static function PrivacyUrl()
    {
        return self::get('privacy_url');
    }

    public static function RefundPolicyUrl()
    {
        return self::get('refund_policy_url');
    }

    public static function AboutUsUrl()
    {
        return self::get('about_us_url');
    }

    public static function ContactUsUrl()
    {
        return self::get('contact_us_url');
    }

    public static function FAQUrl()
    {
        return self::getKeyValue('FAQ_URL');
    }
    public static function IsIncentiveAllowed()
    {
        return self::get('is_incentive_allowed');
    }
    public static function IncentivePercentage()
    {
        return self::get('incentive_percentage');
    }
    public static function IncentiveMaximumAmount()
    {
        return self::get('incentive_maximum_amount');
    }
    public static function UnsubscribeUrl()
    {
        return self::get('unsubscribe_url');
    }
    public static function RegistrationNotice()
    {
        return self::get('registration_notice');
    }
    public static function CopyMessage()
    {
        return self::get('copyright_message');
    }
    public static function CompanyFacebookUrl()
    {
        return self::get('company_facebook_url');
    }
    public static function CompanyTwitterUrl()
    {
        return self::get('company_twitter_ur');
    }
    public static function CompanyInstaUrl()
    {
        return self::get('company_insta_url');
    }
    public static function CompanyYoutubeUrl()
    {
        return self::get('company_youtube_url');
    }
    public static function CompanyAddress()
    {
        return self::get('company_address');
    }
    public static function SupportSkypeId()
    {
        return self::get('support_skype_id');
    }
    public static function IsValidateRemitterPhone()
    {
        return self::get('is_validate_remitter_phone');
    }
    public static function IsValidateBeneficiaryPhone()
    {
        return self::get('is_validate_beneficiary_phone');
    }
    public static function Is2faEnabled()
    {
        return self::get('is_2fa_enabled');
    }
    public static function IsReferralEnabled()
    {
        return self::get('is_referral_enabled');
    }
    public static function IsPromoCodeEnabled()
    {
        return self::get('is_promo_code_enabled');
    }
    public static function DefaultSourceAmount()
    {
        return self::get('default_source_amount');
    }
    public static function DefaultDeliveryMethodCode()
    {
        return self::get('default_delivery_method_code');
    }
    public static function BeneficiaryAddressFields()
    {
        return self::get('beneficiary_address_fields');
    }
    public static function SiteUrl()
    {
        return self::getKeyValue('SITE_URL');
    }

    public static function PublicSiteUrl()
    {
        return self::get('public_site_url');
    }
    public static function OnlinePortalUrl()
    {
        return self::get('online_portal_url');
    }
    public static function AssetUrl()
    {
        return self::getKeyValue('ASSET_URL');
    }

    public static function ApiBaseUrl()
    {
        return self::getKeyValue('API_BASE_URL');
    }

    public static function ApiSecretKey()
    {
        return self::getKeyValue('API_SECRET_KEY');
    }

    public static function AssetsUrl($url = '')
    {
        $asset      =   self::getKeyValue('ASSET');
        $asset_url  =   '/templates/' . config('app.template') . '/' . $url;
        if ($asset == "secure") {
            return secure_asset($asset_url);
        } else {
            return asset($asset_url);
        }
    }

    public static function PublicAssetsUrl($url = '')
    {
        $asset      =   self::getKeyValue('ASSET');
        $asset_url  =   '/public/' . $url;
        if ($asset == "secure") {
            return secure_asset($asset_url);
        } else {
            return asset($asset_url);
        }
    }
    //////////////////////////////////// Setting Common Functions /////////////////////////////////////////////////////////
    public static function getKeyValue($key)
    {
        try {
            if (Cache::has($key)) {
                $settings = Cache::store('file')->get('ApiSettings');
                if (array_key_exists($key, $settings)) {
                    return $settings[$key];
                } else {
                    $settings = self::getApiSettings();
                    if (array_key_exists($key, $settings)) {
                        return $settings[$key];
                    } else {
                        return "";
                    }
                }
            } else {
                $settings = self::getApiSettings();
                if (array_key_exists($key, $settings)) {
                    return $settings[$key];
                } else {
                    return "";
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function get($key)
    {
        try {
            if (file_exists(storage_path("app/settings/app_settings"))){
                $settings   =   json_decode(file_get_contents(storage_path("app/settings/app_settings")), true);
                if (array_key_exists($key, $settings)) {
                    return $settings[$key];
                } else {
                    $settings = self::getSettings();
                    if (array_key_exists($key, $settings)) {
                        return $settings[$key];
                    } else {
                        return "";
                    }
                }
            } else {
                $settings = self::getSettings();
                if (array_key_exists($key, $settings)) {
                    return $settings[$key];
                } else {
                    return "";
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function getApiSettings()
    {
        $settings = array();
        try {
            $settingfile	=	base_path() . '/templates/' . config('app.template') . '/settings.php';
            if(file_exists($settingfile))
            {
                $settings	=	include($settingfile);
            }
            Cache::store('file')->put('ApiSettings', $settings, 86400);
        } catch (\Exception $e) {
            $settings = array();
        }
        return $settings;
    }

    public static function getSettings()
    {
        $settings       =   self::defaultSettings();
        try {
            $objSettings    =	Utils::getAppSettings();
            if ($objSettings->Result->Rflag == 1)
            {
                if (count($objSettings->Data) > 0)
                {
                    foreach ($objSettings->Data as $setting)
                    {
                        $settings[$setting->key] =   $setting->value;
                    }
                }
            }
            Storage::makeDirectory('settings', 0775, true);
            Storage::disk('local')->put('settings/app_settings', json_encode($settings, true));
        } catch (\Exception $e) {
            $settings = array();
        }
        if (!empty($settings)){
            return $settings;
        }else{
            return self::defaultSettings();
        }
    }

    public static function defaultSettings()
    {
        return array(

            'site_id' => '',
            'site_code' => '',
            'site_title' => '',
            'site_logo' => 'assets/img/youremit-logo.png',
            'site_domain' =>   '',
            'site_css_file' => 'assets/css/app.css',
            'site_responsive_css_file' => '',
            'background_image_filename' => '',
            'base_url' => '',
            'public_site_url' => '',
            'online_portal_url' => '',
            'api_url' => '',
            'is_incentive_allowed' =>  '',
            'incentive_percentage' => '',
            'incentive_maximum_amount' => '',
            'privacy_url' => '',
            'terms_url' => '',
            'refund_policy_url' => '',
            'contact_us_url' => '',
            'about_us_url' => '',
            'unsubscribe_url' => false,
            'support_availability_message' => '',
            'registration_notice' => '',
            'copyright_message' => '',
            'company_facebook_url' => '',
            'company_twitter_url' => '',
            'company_insta_url' => '',
            'company_youtube_url' => '',
            'support_email_address' => '',
            'company_address' => '',
            'support_phone_number' => '',
            'support_skype_id' => '',
            'support_whatsapp_number' => '',
            'is_validate_remitter_phone' => '',
            'is_validate_beneficiary_phone' => '',
            'is_2fa_enabled' => '',
            'is_referral_enabled' => '',
            'is_promo_code_enabled' => '',
            'default_source_amount' => '',
            'default_delivery_method_code' => false,
            'beneficiary_address_fields' => '',


            // 'incentive_maximum_amount' => '',
            // 'is_validate_sender_phone' => false,
            // 'is_validate_bene_phone' => false,
            // 'is_2fa_enabled' => false,
            // 'facebook_app_id' => '',
            // 'facebook_app_secret' => '',
            // 'google_app_id' => '',
            // 'google_app_secret' => '',
            // 'apple_app_id' => '',
            // 'apple_app_secret' => '',
            // 'email_client' => '',
            // 'email_client_id' => '',
            // 'email_client_key' => '',
            // 'smtp_host' => '',
            // 'smtp_username' => '',
            // 'smtp_password' => '',
            // 'smtp_port' => '',
            // 'smtp_secure' => '',
            // 'api_url' => '',
            // 'default_agents' => '',
            // 'apple_app_team_id' => '',
            // 'apple_app_key_secret' => '',
            // 'site_address' => '',
            // 'support_phone' => '',
            // 'support_whatsapp' => '',
            // 'site_responsive_css_file' => 'assets/css/responsive.css',
            // 'background_image_filename' => 'assets/img/default.png',
            // 'public_site_url' => '',
            // 'online_portal_url' => '',
            // 'member_files_url' => '',
            // 'refund_policy_url' => '',
            // 'contact_us_url' => '',
            // 'about_us_url' => '',
            // 'registration_notice' => '',
            // 'is_email_to_admin_enabled' => false,
            // 'support_email_address' => '',
            // 'from_email_address' => '',
            // 'admin_email_address' => '',
            // 'company_address' => '',
            // 'support_phone_number' => '',
            // 'support_skype_id' => '',
            // 'support_whatsapp_number' => '',
            // 'user_verification_method' => '',
            // 'is_referral_enabled' => false,
            // 'is_promo_code_enabled' => false,
            // 'remitter_number_format' => '',
            // 'default_source_amount' => '100',
            // 'document_provider' => '',
            // 'external_provider_url' => '',
            // 'support_availability_message' => '',
            // 'is_transaction_limits_enabled' => false,
            // 'is_compliance_limits_enabled' => false,
            // 'is_validate_remitter_phone' => false,
            // 'is_validate_beneficiary_phone' => false,
            // 'default_delivery_method_code' => 'Cash',
            // 'beneficiary_address_fields' => '',
            // 'is_document_verify_message_enabled' => false,
            // 'external_provider_allowed_types' => '',
            // 'external_document_provider' => '',
            // 'external_provider_success_message' => '',
            // 'external_provider_error_message' => '',
            // 'onboarding_profile_required' => false,
            // 'onboarding_identification_doc_required' => false,
            // 'onboarding_address_doc_required' => false,
            // 'onboarding_sof_doc_required' => false,
            // 'onboarding_kyc_required' => false,
            // 'is_rails_bank_enabled' => false,
        );
    }
}

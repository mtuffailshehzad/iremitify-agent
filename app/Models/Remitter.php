<?php
namespace App\Models;

class Remitter
{
    protected $fillable = ['remitter_id', 'remitter_number', 'remitter_type_code', 'remitter_category_code', 'full_name', 'first_name', 'middle_name', 'last_name', 'fourth_name',
        'house_number', 'street_address', 'city', 'state_province', 'post_code', 'country_iso_code', 'currency_iso_code', 'home_phone', 'work_phone', 'mobile_phone', 'user_name',
        'fax_number', 'website', 'email', 'password', 'gender', 'place_of_birth', 'country_of_birth', 'nationality', 'date_of_birth', 'agent_id', 'branch_id', 'occupation_code',
        'source_of_income_code', 'status', 'is_verified', 'verification_date', 'verification_amount_upto', 'verification_transaction_count', 'verification_receiver_count',
        'sanctions_verification_date', 'is_sanctions_verified', 'sanction_notes', 'is_blocked', 'blocked_date', 'blocked_by', 'time_zone', 'register_source', 'referral_code',
        'referred_by_code', 'employer_company_name', 'employer_company_address', 'profile_image', 'is_email_verified', 'is_phone_number_verified', 'can_contact_by_phone',
        'can_contact_by_email', 'can_contact_by_sms', 'can_contact_by_post', 'can_receive_marketing', 'annual_income', 'annual_remittance', 'how_hear_about_us', 'residency_status',
        'father_name', 'mother_name', 'national_id_number', 'risk_level', 'preferred_receiving_country_iso_code', 'google_user_id', 'facebook_user_id', 'linkedin_user_id', 'twitter_user_id',
        'apple_user_id', 'device_type', 'device_token', 'valid_login_count', 'created_by'];
}

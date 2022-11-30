<?php
namespace App\Models;

class Beneficiary
{
    protected $fillable = ['beneficiary_id', 'full_name', 'first_name', 'middle_name', 'last_name', 'fourth_name', 'address1', 'address2', 'city',
        'state_province', 'post_code', 'country_iso_code', 'district_code', 'home_phone', 'work_phone', 'mobile_phone', 'email', 'gender', 'date_of_birth', 'payout_bank_id',
        'bank_name', 'bank_code', 'bank_branch_name', 'bank_branch_code', 'bank_account_type', 'bank_account_title', 'account_number', 'iban_number', 'routing_number', 'ifsc_code', 'bic_code', 'sort_code',
        'swift_code', 'wallet_company_id', 'wallet_account_number', 'utility_company_id', 'utility_account_number', 'utility_company_id', 'utility_account_number',
        'prepaid_card_company_id', 'prepaid_card_number', 'topup_company_id', 'topup_account_number', 'delivery_method_code', 'relationship_code', 'payout_company_id', 'remitter_id', 'father_name',
        'mother_name', 'national_id_number', 'nationality_iso_code' ];

}

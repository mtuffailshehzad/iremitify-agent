<?php
namespace App\Models;

class RemitterDocuments
{
    protected $fillable = ['remitter_id', 'agent_id', 'branch_id', 'remitter_document_id', 'document_category_id', 'document_type_id', 'document_type_code', 'document_type_name', 'document_number',
        'issuer_country_iso_code', 'issuing_authority', 'issue_date', 'expire_date', 'created_at', 'is_verified', 'scanned_image_1','scanned_image_2','selfie_image','scanned_image_1_url','scanned_image_2_url','selfie_image_url'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'competence_id', 'full_name', 'organization_name', 'city', 'birth_date', 'gender', 'nationality', 'address', 'contact_phone_number', 'contact_email', 'education_title', 'education_school_university', 'education_major', 'company_name', 'company_address', 'company_position', 'company_email', 'photo', 'identification_card', 'education_certificate', 'curriculum_vitae', 'additional_link',
    ];


    protected $table = 'tuk_form';
}

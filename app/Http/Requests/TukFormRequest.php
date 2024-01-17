<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TukFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'competence_id' => 'required|exists:competence,id',
            'full_name' => 'required|string',
            'organization_name' => 'nullable|string',
            'city' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'gender' => 'required|in:laki-laki,perempuan',
            'nationality' => 'required|in:indonesia,malaysia,japan',
            'address' => 'nullable|string',
            'contact_phone_number' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'education_title' => 'nullable|string',
            'education_school_university' => 'nullable|string',
            'education_major' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_address' => 'nullable|string',
            'company_position' => 'nullable|string',
            'company_email' => 'nullable|email',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'identification_card' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:2048',
            'education_certificate' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:2048',
            'curriculum_vitae' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'additional_link' => 'nullable|url',
        ];
    }
}

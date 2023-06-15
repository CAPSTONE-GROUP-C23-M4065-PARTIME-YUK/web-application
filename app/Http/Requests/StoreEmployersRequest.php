<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
            'company_logo' => 'required|image|mimes:jpeg,png',
            'company_website' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required|numeric',
            'company_description' => 'required',
            'company_province' => 'required',
            'company_regency' => 'required',
            'company_address' => 'required'
        ];
    }
}

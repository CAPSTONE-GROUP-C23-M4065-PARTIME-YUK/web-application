<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'title' => 'required',
            'job_category_id' => 'required',
            'description' => 'required',
            'requirement' => 'required',
            'experience' => 'required',
            'tipe_lowongan' => 'required',
            'salary' => 'required'
        ];
    }
}

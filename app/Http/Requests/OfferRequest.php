<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'FirstName_en' => 'required',
            'FirstName_ar' => 'required',
            'LastName_en' => 'required',
            'LastName_ar' => 'required',
        ] ;
    }
    public function messages()
    {
        return [
            'FirstName_en.required' => __('message.FirstName_en.required.key'),
            'FirstName_ar.required' => __('message.FirstName_ar.required.key'),
            'LastName_en.required' => __('message.LastName_en.required.key'),
            'LastName_ar.required' => __('message.LastName_ar.required.key'),
        ] ;
    }
}

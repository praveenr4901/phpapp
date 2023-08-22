<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoDueRequest extends FormRequest
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
            'clubid' => 'required|numeric|exists:clubs,clubid',
            'member_id' => 'required|numeric|exists:members,id',
        ];
    }

    public function messages()
    {
        return [
            'clubid.required' => 'club field is required',
        ];
    }
}

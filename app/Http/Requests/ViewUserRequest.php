<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ViewUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'gender' => 'required|string|max:20',
            'spouse' => 'required|string|max:255',
            'address' => 'required|string',
            'home' => 'required|numeric|digits:10',
            'office' => 'required|numeric|digits:10',
            'whatsapp' => 'required|numeric|digits:10',
            'profession' => 'required',
            'dob' => 'required|date_format:d/m/Y',
            'anniversary' => 'date_format:d/m/Y',
            'specialization' => 'string'
        ];
    }
}

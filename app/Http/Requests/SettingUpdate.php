<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdate extends FormRequest
{

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
            'system_name' => 'required|string|min:10',
            'current_session' => 'required|string',
            'address' => 'required|string|min:10',
            'system_email' => 'sometimes|nullable|email',
            'logo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',

        ];
    }

    public function attributes()
    {
        return  [
            'system_name' => 'App Name',
            'system_email' => 'Email',
            'current_session' => 'Current Session',
        ];
    }

}

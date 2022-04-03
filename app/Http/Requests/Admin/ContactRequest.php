<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => ['required'],
            'phones' => ['required'],
            'email' => ['required'],
            'phone_added' => []
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Данное поле должно быть заполенено'
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CatalogUpdateRequest extends FormRequest
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
            'name' => ['required'],
            'manufacturer' => ['required'],
            'warranty' => ['required'],
            'products' => ['required'],
            'description' => ['required'],
            'benefits' => ['required'],
            'image' => ['image']
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Данное поле должно быть заполенено',
            'image' => 'Файл должен быть изображением'
        ];
    }
}

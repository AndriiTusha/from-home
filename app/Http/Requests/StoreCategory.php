<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
        'name' => 'required|unique:categories,name,'.$this->category.'|max:64',
        'slug' => 'nullable|unique:categories,slug,'.$this->category.'|max:128',
        'img' => 'nullable|mimes:jpeg,bmp,png,gif',
        ];
    }

    public function messages()
    {
        return [
        'name.required' => 'Обязательно для заполнения',
        'name.unique' => 'Категория существует',
        'name.max' => 'Допустимо до 64 символов',
        ];
    }
}

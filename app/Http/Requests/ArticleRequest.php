<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'theme_article' => 'required|max:90',
            'text' => 'required|min:30',
            'image' => 'mimes:jpg,jpeg,png,gif|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'image.mimes' => 'Изображение должно быть файлом типа: jpg, jpeg, png,gif.',
            'image.max' => 'Размер изображения не должен превышать 2000 килобайт. ',
            'theme_article.required' => '"Заголовок" - обязательное поле.',
            'theme_article.max' => 'Поле "Заголовок" - превышает количество символов (max - 95).',
            'text.required' => '"Teкст" - обязательное поле.',
            'text.min' => 'Минимальное количество символов в поле "Текст" - 30.',

        ];
    }
}

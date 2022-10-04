<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'string',
            'content' => 'string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Это поле должно быть строчного типа',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Это поле должно быть строчного типа',
            'preview_image.required' => 'Это поле должно быть строчного типа',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле должно быть строчного типа',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле должно быть строчного типа',
            'tag_ids.array' => 'Необходимо отправить массив данных'

        ];
    }
}

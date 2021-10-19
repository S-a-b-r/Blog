<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=> 'required|string',
            'content'=> 'required',
            'preview_image' => 'required|image',
            'main_image' => 'required|image',
            'category_id'=> 'required|exists:categories,id',
            'tags_id'=> 'nullable|array',
            'tags_id.*'=> 'nullable|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны передаваться строкой',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны передаваться строкой',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.image' => 'Данный фаил не является изображением',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.image' => 'Данный фаил не является изображением'
        ]; // TODO: Change the autogenerated stub
    }
}

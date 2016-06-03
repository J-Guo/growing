<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostArticleRequest extends Request
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
            'articleName' =>'required',
            'articleCategory' => 'required|integer',
            'articleSubCate' => 'required',
            'article-editor' => 'required'
        ];
    }

    /**
     * Custom error messages
     * @return array
     */
    public function messages(){

        return [
            'articleName.required' => 'Article name is required.',
            'articleCategory.integer' => 'Category is required.',
            'articleSubCate.required' => 'Sub category is required.',
            'article-editor.required' => 'Article body is required.',

        ];
    }
}

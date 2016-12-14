<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewPost extends FormRequest
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
          'star' => 'required',
          'text' => 'required|max:15',
        ];
    }

    public function messages()
    {
        return [
            'star.required' => '評価されていません',
            'text.required'  => 'レビューテキストが入力されていません',
            'text.max' => '１５文字以内でレビューしてください',
        ];
    }
}

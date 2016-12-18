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
          'text' => 'required|max:70',
        ];
    }

    public function messages()
    {
        return [
            'star.required' => '評価されていません',
            'text.required'  => '入力値が空です',
            'text.max' => '入力された文字列が長過ぎます,70文字以内でレビューしてください',
        ];
    }
}

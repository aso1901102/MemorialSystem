<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRegisterRequest extends FormRequest
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
        $rules = [
            'words' => 'required',
            'meanings' => 'required',
            'category'  => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            // 'フィールド名.検証ルール名' => 'メッセージ'
            'words.required'    => '必ず入力してください。',
            'meanings.required' => '必ず入力してください。',
            'category.required'   => '必ず選択してください。'
        ];

        return $messages;
    }

}

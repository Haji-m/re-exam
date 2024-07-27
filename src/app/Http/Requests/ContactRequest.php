<?php

namespace App\Http\Requests;

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
            'name1' => ['required', 'string', 'max:255'],
            'name2' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'tel' => ['required','numeric', 'digits_between:4,5'],
            'address' => ['required', 'string', 'max:255'],
            'type' => ['required'],
            'content' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'name1.required' => '姓を入力してください',
            'name1.string' => '姓を文字列で入力してください',
            'name1.max' => '姓を255文字以内で入力してください',

            'name2.required' => '名を入力してください',
            'name2.string' => '名を文字列で入力してください',
            'name2.max' => '名を255文字以内で入力してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.max' => 'メールアドレスを255文字以内で入力してください',

            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数字で入力してください',
            'tel.digits_between' => '電話番号を5桁以内で入力してください',

            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以内で入力してください',

            'type.required' => 'お問い合わせ種類を選択してください',

            'content.required' => 'お問い合わせ内容を入力してください',
            'content.string' => 'お問い合わせ内容を文字列で入力してください',
            'content.max' => 'お問い合わせ内容を255文字以内で入力してください',
        ];
    }
}

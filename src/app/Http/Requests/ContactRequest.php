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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:男性,女性'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'string', 'max:8'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['nullable', 'string', 'max:255'],
            'option' => ['nullable', 'string'],//
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max:255' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max:255'
            => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.string'  => '郵便番号を文字列で入力してください',
            'postcode.max:8' => '郵便番号を8文字以下で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max:255' => '住所を255文字以下で入力してください',
            'building_name.string' => '建物名を文字列で入力してください',
            'building_name.max:255' => '建物名を255文字以下で入力してください',
            'option.max:120' => 'ご意見を120文字以下で入力してください',
        ];
    }
}

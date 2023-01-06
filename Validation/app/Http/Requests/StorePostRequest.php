<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            //
            'title'=>'required|max:4',
            'body'=>'required',
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'يرجي ادخال عنوان البوست',
        'title.max' => 'عدد الاحرف المسموح بيها 4 احرف',
        'body.required' => 'يرجي ادخال معلومات عن البوست',
    ];
}
}

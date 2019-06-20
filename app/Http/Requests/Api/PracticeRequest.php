<?php

namespace App\Http\Requests\Api;

class PracticeRequest extends FormRequest
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
            'theme'=>'required|between:1,80',
            'ember_id'=>'required|digits_between:1,20',
            'unit_name'=>'required|between:1,20',
            'practice_place'=>'required|between:1,80',
            'unit_contact'=>'required|digits_between:1,20',
            'during_date'=>'required|between:1,100',
            'price'=>'required|numeric|max:5|min:0',
//

        ];

    }
    public function messages()
    {
        return [
            'theme.required' => '请填写实践主题',
            'theme.between' => '实践主题填写的长度不大于80',

            'ember_id.required'  => '请填写id',
            'ember_id.digits_between' => 'id填写的长度不大于20',

            'unit_name.required' => '请填写实践单位联系人',
            'unit_name.between' => '填写的长度不大于20',

            'practice_place.required' => '请填写实践地点',
            'practice_place.between' => '实践地点填写的长度不大于80',

            'unit_contact.required' => '请填写联系方式',
            'unit_contact.digits_between' => '联系方式填写的长度不大于20',

            'during_date.required' => '请填写实践起止时间',
            'during_date.between' => '实践起止时间填写的长度不大于100',

            'price.required' => '请填写分数',
            'price.numeric' => '请填写正确的分数格式',
            'price.max' => '填写小于或等于5的分数',
            'price.min' => '填写大于或等于5的分数'
        ];
    }
}

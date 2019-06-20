<?php

namespace App\Http\Requests\Api;

class UserRequest extends FormRequest
{

    public function rules()
    {
        return [
            'sex' => 'required|between:1,20',
            'political_profile' => 'required|between:1,20',
            'contact' => 'required|digits_between:1,20',
            'email' => 'required|email|between:1,80',
            'family' => 'required|between:1,20',
            'grade' => 'required|between:1,20',
            'class' => 'required|between:1,20',
            'stu_id'=>'required|digits:12'

        ];
    }

    public function messages()
    {
        return [
            'sex.required' => '请填写性别',
            'sex.between' => '性别填写的长度不大于20',
            


            'political_profile.required' => '请填写政治面貌',
            'political_profile.between' => '政治面貌填写的长度不大于20',

            'contact.required' => '请填写联系方式',
            'contact.digits_between' => '联系方式填写的长度不大于20',

            'email.required' => '请填写邮箱',
            'email.between' => '邮箱填写的长度不大于80',
            'email.email' => '请填写邮箱的正确格式',

            'family.required' => '请填写院系',
            'family.between' => '填写的长度不大于20',

            'grade.required' => '请填写年级',
            'grade.between' => '填写的长度不大于20',

            'class.required' => '请填写班级',
            'class.between' => '填写的长度不大于20',

            'stu_id.required' => '请填写学号',
            'stu_id.digits' => '请填写的12位学号'

        ];
    }
}
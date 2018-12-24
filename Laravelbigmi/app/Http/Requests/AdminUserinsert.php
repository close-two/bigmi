<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
// 使用rule类
use Illuminate\Validation\Rule;
class AdminUserinsert extends FormRequest
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
        // $id = $_POST['id'];
        // 创建不需要忽略id
        $id = isset($_REQUEST['id'])?$_REQUEST['id']:'';
        return [


            //用户名规则设置,4到16个字符
            // 'name'=>'required|unique:bm_admins,name,,name|regex:/^[a-zA-Z0-9_\x{4e00}-\x{9fa5}]{3,16}/u',
            'name'=>[
            'required',
            'unique:bm_admins,name,'.$id,
            'regex:/^[a-zA-Z0-9_\x{4e00}-\x{9fa5}]{3,16}/u'
            ],

            'password'=>'required|regex:/\w{6,16}/',
            'password2'=>'required|regex:/\w{6,16}/|same:password',
            'phone'=>[
            'required',
            'regex:/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/'
            ],
            'email'=>'required|email',
            'rid'=>'unique:bm_admins,rid,NULL,id,rid,1',
            'remarks'=>'max:100'
        ];
      
    }

    public function messages(){
        return[
            'name.required'=>'用户名不能为空',
            'name.regex'=>'用户名必须为4~16个字符，字母/中文/数字/下划线',
            'name.unique'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为6-16位的任意数字字母下划线',
            'password2.required'=>'重复密码不能为空',
            'password2.regex'=>'重复密码必须为6-16位的任意数字字母下划线',
            'password2.same'=>'两次密码不一致',
            'phone.required'=>'电话不能为空',
            'phone.regex'=>'电话格式不符合,需为中国大陆手机号',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不符合',
            'rid.unique'=>'超级管理员只能一个,请重新分配角色',
            'remarks.max'=>'备注不能超过100个字符'
        ];
    }
}

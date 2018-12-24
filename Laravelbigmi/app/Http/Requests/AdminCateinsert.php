<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCateinsert extends FormRequest
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
             //用户名不能为空规则设置 required 输入的数据不能为空  regex 正则规则 unique唯一  :cates数据库名  
            'catename'=>'required|regex:/^.{3,51}$/|unique:bm_cates',
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
           
            'catename.required'=>'分类名不能为空',
            'catename.regex'=>'请输入长度为1-17位长度的分类名',
            'catename.unique'=>'分类名已存在'
        ];
    }
}

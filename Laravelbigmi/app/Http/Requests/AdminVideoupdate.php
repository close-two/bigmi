<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVideoupdate extends FormRequest
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
          ////用户名不能为空规则设置 required 输入的数据不能为空  regex 正则规则 unique唯一  :bm_ads数据库名 
            'videoname'=>'required|regex:/^.{3,21}$/',
            'source'=>'required',
            'comment'=>'regex:/^.{1,50}$/',
        ];
    }

       //自定义错误信息
    public function messages(){
        return [
           'videoname.required'=>'视频名不能为空',
            'videoname.regex'=>'请输入长度为1-7位长度的分类名',

            'source.required'=>'请写入商家',
            'comment.regex'=>'简介不能超过50个中文',
            
        ];
    }
}

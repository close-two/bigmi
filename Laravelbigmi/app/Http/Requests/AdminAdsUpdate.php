<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAdsUpdate extends FormRequest
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
            'adsname'=>'required|regex:/^.{3,51}$/',
            'source'=>'required',
            'comment'=>'regex:/^.{3,300}$/',
        ];
    }

       //自定义错误信息
    public function messages(){
        return [
           'adsname.required'=>'广告名不能为空',
            'adsname.regex'=>'请输入长度为1-17位长度的分类名',

            'source.required'=>'请写入商家',
            'comment.regex'=>'简介不能超过100个中文',
            
        ];
    }
}

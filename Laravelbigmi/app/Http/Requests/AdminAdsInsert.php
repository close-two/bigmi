<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAdsInsert extends FormRequest
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
            'adsname'=>'required|regex:/^.{2,20}$/|unique:bm_ads',
            'file'=>'required', 
            'source'=>'required',
            'comment'=>'required|regex:/^.{1,50}$/',
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
           'adsname.required'=>'广告名不能为空',
            'adsname.regex'=>'请输入长度为1-15位长度的广告名',
            'adsname.unique'=>'广告名已存在',
            'file.required'=>'请上传广告图片',
            'source.required'=>'请写入商家',
            'comment.required'=>'简介不能为空',
            'comment.regex'=>'简介不能超过50个中文',
            
        ];
    }
}

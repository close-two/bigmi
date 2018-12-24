<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminVideoinsert extends FormRequest
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


  public function rules()
    {
        return [
            ////用户名不能为空规则设置 required 输入的数据不能为空  regex 正则规则 unique唯一  :bm_ads数据库名 
            'videoname'=>'required|regex:/^.{3,51}$/|unique:bm_video',
            'video'=>'required', 
            'source'=>'required|regex:/^.{3,51}$/',
            'comment'=>'required|regex:/^.{3,300}$/',
        ];
    }

    //自定义错误信息
    public function messages(){
        return [
           'videoname.required'=>'视频标题不能为空',
            'videoname.regex'=>'请输入长度为1-15位长度的视频名',
            'videoname.unique'=>'视频标题已存在',
            'video.required'=>'请上传视频',
            'source.required'=>'请写入来源商家',
            'source.regex'=>'请输入1-17位广告商名',
            'comment.required'=>'简介不能为空',
            'comment.regex'=>'简介不能超过100个中文',
            
        ];
    }
}

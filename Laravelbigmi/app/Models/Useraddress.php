<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Useraddress extends Model
{
    protected $table="bm_user_address";
    protected $primaryKey="id";
    //该模型是否需要自动维护时间戳  false 否 true 是
    public $timestamps = false;
    //可以被批量赋值属性(字段)
    protected $fillable=['uid','address','name','phone','status'];

    //修改器方法 对获取到的数据做处理 Status 状态字段 $value 需要处理的值
    public function getStatusAttribute($value){
    	//处理字段状态
    	$status=[1=>'默认'];
    	//返回处理后的数据
    	return $status[$value];
    }
}

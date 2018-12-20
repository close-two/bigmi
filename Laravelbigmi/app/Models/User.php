<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="bm_home_user";
    //该模型是否需要自定维护时间戳
    public $timestamps=false;
    //主键
    protected $primaryKey="id";
    //可以被批量赋值属性(字段)
    protected $fillable=['name','password','email','phone','create_time','status','address','headpic','login_time'];


    //修改器方法 对获取到的数据做处理 status状态字段 $value 需要处理的值
    public function getStatusAttribute($value){
    	//处理字段状态
    	$status=[1=>'已禁用',0=>'未激活',2=>'正常'];
    	$sex=[0=>'女',1=>'男',2=>'保密'];
    	return $status[$value];
    }

     public function getSexAttribute($value){
        //处理字段状态
       
        $sex=[0=>'女',1=>'男',2=>'保密'];
        return $sex[$value];
    }
}

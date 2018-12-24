<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="bm_users";
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
 
    	return $status[$value];
    }

     public function getSexAttribute($value){
        //处理字段状态
       
        $sex=[''=>'',0=>'女',1=>'男',2=>'保密'];
        return $sex[$value];
    }

     //获取会员下所有收货地址
    public function address(){
        //hasMany 一对多  App\Models\Useraddress会员收货地址模型类   user_id两个模型关联字段
        return $this->hasMany('App\Models\Useraddress','uid');
    }
}

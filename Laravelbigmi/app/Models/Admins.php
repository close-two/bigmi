<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Admins extends Model
{
    // //定义与模型关联的数据库
    protected $table='bm_admins';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name','sex','password','phone','email','status','rid','created_at'];



  /*  public function getStatusAttribute($value){
    	$status=[0=>'已停用',1=>'已启用'];

    	return $status[$value];
    }*/

    // 管理员模型和角色模型关联,一对一
    // public function roles(){
    //     return $this->hasOne('App\Models\Roles','');
    // }

}

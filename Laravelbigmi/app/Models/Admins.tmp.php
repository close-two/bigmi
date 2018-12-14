<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    //定义与模型关联的数据库
    protected $table='bm_admins';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name','sex','password','phone','email','status','rid','created_at'];

    public function getRolesAttribute($val){
    	$rid=[1=>'超级管理员',2=>'普通管理员',3=>'客服',4=>'运营'];
    	return $rid[$val];
    }
    public function getStatusAttribute($value){
    	$status=[0=>'已停用',1=>'已启用'];
    	return $status[$value];
    }

}

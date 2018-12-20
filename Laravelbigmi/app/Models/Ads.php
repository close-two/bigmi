<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //固定属性 模型关联的数据表
    protected $table="bm_ads";
    //该模型是否需要自定维护时间戳
    public $timestamps=false;
    //主键
    protected $primaryKey="id";
    //可以被批量赋值属性(字段)
    protected $fillable=['file','status','adsname','comment','create_time','update_time','source'];


    //修改器方法 对获取到的数据做处理 status状态字段 $value 需要处理的值
    public function getStatusAttribute($value){
    	//处理字段状态
    	$status=[1=>'正在上架',0=>'已下架'];
    	return $status[$value];
    }
}

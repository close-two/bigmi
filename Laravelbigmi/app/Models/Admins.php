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



    
    // 取消该用户的角色设置,就是删除bm_admins_rodes表里面对应的数据
    static function delAdminRole($id){
        $res = DB::table('bm_admins_roles')->where('admins_id','=',$id)->delete();
        return $res;
    }


    // 管理员模型和角色模型关联,一对一
    // public function roles(){
    //     return $this->hasOne('App\Models\Roles','');
    // }

}

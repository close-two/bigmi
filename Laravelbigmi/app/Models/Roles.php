<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Roles extends Model
{
    //角色模型类

    protected $table = 'bm_roles';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','status','remarks'];

    // 取消该角色的授权,就是删除bm_rodes_nodes表里面的数据,
    // 定义为静态方法才能在控制器中用::调用
    static function delRoleNode($id){
    	$res = DB::table('bm_roles_nodes')->where('rid','=',$id)->delete();
    	return $res;
    }
    
}

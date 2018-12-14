<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //角色模型类

    protected $table = 'bm_roles';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','status','remarks'];
    
}

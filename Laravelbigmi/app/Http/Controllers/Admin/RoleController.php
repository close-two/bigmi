<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Roles;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //角色列表
        // $roleslist = DB::select("select r.id,r.name,GROUP_CONCAT(a.name) as namelist,r.remarks from bm_roles as r,bm_admins_roles as ar,bm_admins as a where ar.rid=r.id and a.id=ar.admins_id group by r.id");
        $pagesize = 5;
        $roleslist = DB::TABLE('bm_roles')->paginate($pagesize);
        foreach ($roleslist as $value) {
            $rid = $value->id;
            // 获取该角色的用户拼凑起来
            $UserOfRole = DB::TABLE('bm_admins')->SELECT('name')->WHERE('rid','=',$rid)->get()->toArray();
            $value->userlist=$UserOfRole;
        }
        return view('Admin.AdminUser.admin-role',['roleslist'=>$roleslist,'request'=>$request->all(),'pagesize'=>$pagesize]);
    }

    public function getNodeslist(){
         // 查看权限节点表所有名称
        $allnodeslist = DB::SELECT("SELECT * FROM bm_nodes");
        // var_dump($adminsNodeslist);exit;
        foreach ($allnodeslist as $value) {
            // var_dump($value);
           
                if ($value->mname=='AdminsController') {
                   $nodeslist['管理中心'][]=$value;
                }elseif ($value->mname=='RoleController') {
                     $nodeslist['角色管理'][]=$value;
                }elseif ($value->mname=='PermissionController') {
                     $nodeslist['权限管理'][]=$value;
                }
           
                if ($value->mname=='UserController') {
                    $nodeslist['用户管理'][]=$value;
                }elseif ($value->mname=='AdsController') {
                    $nodeslist['广告管理'][]=$value;
                }elseif ($value->mname=='GoodsController') {
                    $nodeslist['商品管理'][]=$value;
                }elseif ($value->mname=='OrderController') {
                    $nodeslist['订单管理'][]=$value;
                }
            

        }
        return $nodeslist;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //角色添加
        $nodeslist = $this->getNodeslist();
         return view('Admin.AdminUser.admin-role-add',['nodeslist'=>$nodeslist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $nid = $request->nid;
        $role=$request->only(['name','remarks']);
        $lastrid = DB::TABLE('bm_roles')->insertGetId($role);
        foreach ($nid as $key => $value) {
            // 封装要插入的数据
            $data['rid']=$lastrid;
            $data['nid']=$value;
            DB::table('bm_roles_nodes')->insert($data);
        }
        return redirect()->back()->with('success','添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //当前角色id的信息
        $role = Roles::find($id);
        // 查角色-权限表,查看该角色有哪些权限,有就选中状态
        $roleNode = DB::table('bm_roles_nodes')->where('rid','=',$id)->get();
        // dd($roleNode);
        if (count($roleNode)) {
            // 当前角色有权限信息
            foreach ($roleNode as $v) {
                $nid[]=$v->nid;
            }
        }else{
            $nid=array();
        }
        // var_dump($roleNode);exit;

        $nodeslist = $this->getNodeslist();       
             // var_dump($nodeslist);exit;
        return view('Admin.AdminUser.admin-role-edit',['role'=>$role,'nodeslist'=>$nodeslist,'nid'=>$nid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rid = $id;
        

        // dd($rid);
        $nid=$_POST['nid'];
        // dd($nid);
        // 删除旧的权限
        DB::table("bm_roles_nodes")->where("rid",'=',$rid)->delete();
        foreach ($nid as $key => $value) {
            // 封装要插入的数据
            $data['rid']=$rid;
            $data['nid']=$value;
            DB::table('bm_roles_nodes')->insert($data);
        }
        return redirect()->back()->with('success','权限分配修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
    // ajax删除
    public function del(Request $request){
        // $r = Roles::delRoleNode($id);
        // echo $r;
        $id = $request->input('id');
        // 删除角色和赋给该角色对应的权限
        if (Roles::destroy($id)&&Roles::delRoleNode($id)) {
            echo 1;
        }else{
            echo 0;
        }
    }

    // ajax批量删除
    public function delBatch(Request $request){
        $delid = $request->input('delid');
        if ($delid == '') {
            echo "请至少选中一条数据";exit;
        }
        foreach ($delid as $key => $value) {
            $bool = Roles::destroy($value)&&Roles::delRoleNode($value);
        }
        if ($bool) {
            echo 1;
        }else{
            echo 0;
        }
    }

}

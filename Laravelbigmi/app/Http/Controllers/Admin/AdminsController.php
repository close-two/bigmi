<?php
/**
*管理员列表模块
*/
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;
//导入表单请求校验类
use App\Http\Requests\AdminUserinsert;
// 导入要调用的模型类
use App\Models\Admins;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //管理员列表
        $startTime = $request->input("startTime").' 00:00:00';//补完整时间字符串,用于比较时间区间
        $endTime = $request->input("endTime").' 00:00:00';
        $k = $request->input('keywords');
        $pagesize = 5;
        // var_dump($startTime);exit;
        if ($startTime==' 00:00:00'||$endTime==' 00:00:00') {
            $admins=Admins::where('name','like','%'.$k.'%')->paginate($pagesize);
        }else{
            $admins=Admins::whereBetween('created_at',[$startTime,$endTime])->where('name','like','%'.$k.'%')->paginate($pagesize);
        }

        // var_dump($count);exit;
        $roleslist = DB::table('bm_roles')->select('id','name')->orderBy('id','asc')->get();
        return view('Admin.AdminUser.admin-list',['admins'=>$admins,'request'=>$request->all(),'roleslist'=>$roleslist,'pagesize'=>$pagesize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加管理员
        $roleslist = DB::table('bm_roles')->select('id','name')->orderBy('id','asc')->get();
        return view('Admin.AdminUser.admin-add',['roleslist'=>$roleslist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserinsert $request)
    {
        //
        // 创建管理员的同时给该用户赋角色,将数据插入bm_admins_rodes表
        // dd($request->all());exit;
        $data = $request->except(['password2','_token']);

        $data['password']=Hash::make($data['password']);
        $data['created_at']=date('Y-m-d H:i:s');
        $data['status']=1;
        // dd($data);exit;
        // 获取插入的最后id
        $lastAdminId = DB::TABLE('bm_admins')->insertGetId($data);
        // 拼接要插入到bm_admins_roles的数据
        $adminRole['admins_id'] = $lastAdminId;
        $adminRole['rid'] = $data['rid'];
        $bool = DB::TABLE('bm_admins_roles')->insert($adminRole);
        if ($lastAdminId&&$bool) {
            return redirect()->back()->with('success','添加成功(#^.^#)');
        }else{
            return redirect('/admins/create')->with('error','添加失败');
        }
        // dd($data);
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
        //
        $admin = Admins::find($id);
        $roleslist = DB::table('bm_roles')->select('id','name')->orderBy('id','asc')->get();
        // dd($roleslist);exit;
        return view('Admin.AdminUser.admin-edit',['admin'=>$admin,'roleslist'=>$roleslist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserinsert $request, Admins $admins ,$id)
    {
        //
        // dd($id);exit;
        $data = $request->except(['_token','_method','password2']);
        $data['password']=Hash::make($data['password']);
        // var_dump($data);exit;
        $adminBool = Admins::where('id','=',$id)->update($data);
        
        // 修复角色不变,更新不了的bug
        $adminRoleDel = DB::TABLE('bm_admins_roles')->WHERE('admins_id','=',$id)->delete();
        $adminRoleIns = DB::TABLE('bm_admins_roles')->insert(['admins_id'=>$id,'rid'=>$data['rid']]);
        if ($adminBool&&$adminRoleDel&&$adminRoleIns) {
            return redirect()->back()->with('success','修改成功');
        }else{
            return redirect('/admins/$id','数据修改失败');
        }
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
        $id = $request->input('id');
        // 删除用户的同时,取消该用户的角色设置,就是删除bm_admins_rodes表里面对应的数据
        if (Admins::destroy($id)&&Admins::delAdminRole($id)) {
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
            $bool = Admins::destroy($value)&&Admins::delAdminRole($value);
        }
        if ($bool) {
            echo 1;
        }else{
            echo 0;
        }
    }



    // ajax停用
    public function stop(Request $request){
        $id = $request->input('id');
        // echo $id;
        if (Admins::where('id','=',$id)->update(['status'=>0])) {
            echo 1;
        }else{
            echo 0;
        }
    }
    // ajax启用
    public function start(Request $request){
        $id = $request->input('id');
        // echo $id;
        if (Admins::where('id','=',$id)->update(['status'=>1])) {
            echo 1;
        }else{
            echo 0;
        }
    }

}

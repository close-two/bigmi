<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //权限节点列表
        $k = $request->input('keywords');
        // $permissionlist = DB::select('select * from bm_nodes where name like "%.{$k}.%"');
        $pagesize = 10;
        $permissionlist = DB::table('bm_nodes')->where('name','like','%'.$k.'%')->paginate($pagesize);

        // var_dump($permissionlist);exit;
        return view('Admin.AdminUser.admin-permission',['permissionlist'=>$permissionlist,'request'=>$request->all(),'pagesize'=>$pagesize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //权限节点添加
        return view('Admin.AdminUser.admin-permission-add');
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
        $data = $request->except('_token');
        $bool = DB::TABLE('bm_nodes')->insert($data);
        if ($bool) {
            return redirect('/permissions')->with('success','添加成功');
        }else{
            return redirect()->back()->with('error','添加失败');
        }
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
        $permission = DB::TABLE('bm_nodes')->find($id);
        return view('Admin.AdminUser.admin-permission-edit',['permission'=>$permission]);
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
        // dd($request->all());
        $data = $request->except('_token','_method');

        $bool = DB::TABLE('bm_nodes')->where('id','=',$id)->update($data);
        if ($bool) {
            return redirect()->back()->with('success','权限节点修改成功');
        }else{
            return redirect()->back()->with('error','权限节点修改失败');
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
    public function del(Request $request){

        $id = $request->input('id');
        if (DB::TABLE('bm_nodes')->delete($id)) {
            echo 1;
        }else{
            echo 0;
        }

        
    }
    public function delBatch(Request $request){
        //批量删除
        $delid = $request->input('delid');
        // echo $delId;
        if ($delid=='') {
            echo "请至少选中一条数据";exit;
        }
        foreach ($delid as $key => $value) {
            DB::TABLE('bm_nodes')->where('id','=',$value)->delete();
        }
        echo 1;

    }
}

<?php
/**
*管理员列表模块
*/
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;

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
        // var_dump($startTime);exit;
        if ($startTime==' 00:00:00'||$endTime==' 00:00:00') {
            $admins=Admins::where('name','like','%'.$k.'%')->paginate(3);
        }else{
            $admins=Admins::whereBetween('created_at',[$startTime,$endTime])->where('name','like','%'.$k.'%')->paginate(3);
        }
        $roleslist = DB::table('bm_roles')->select('id','name')->orderBy('id','asc')->get();
        return view('Admin.AdminUser.admin-list',['admins'=>$admins,'request'=>$request->all(),'roleslist'=>$roleslist]);
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
    public function store(Request $request)
    {
        //
        // echo "执行添加";
        // dd($request->all());exit;
        $data = $request->except(['password2','_token']);

        $data['password']=Hash::make($data['password']);
        $data['status']=0;
        // dd($data);exit;
        if (Admins::create($data)) {
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
        // echo "编辑";
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
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());exit;
        $data = $request->except(['_token','_method','password2']);
        $data['password']=Hash::make($data['password']);
        // var_dump($data);exit;
        if (Admins::where('id','=',$id)->update($data)) {
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
        // echo $id;exit;
        if (Admins::destroy($id)) {
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

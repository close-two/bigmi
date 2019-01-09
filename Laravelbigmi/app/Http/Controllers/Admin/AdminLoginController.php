<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
// 引入第三方验证码类库
use Gregwar\Captcha\CaptchaBuilder;
use session;
class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //登录退出
        // 销毁session
    	$request->session()->pull('id');
        $request->session()->pull('name');
        return redirect('/adminlogin/create');
    }


     // 验证码检测
    public function code(){
        ob_clean();//清除
        $builder = new CaptchaBuilder;
        // 设置图片宽高和字体
        $builder->build($width = 100,$height = 40,$font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存进去session
        session(['admincode'=>$phrase]);
        // 生成图片
        header('Cache-Control:no-cache,must-revalidate');
        header('Content-Type:image/jpeg');
        $builder->output();
        // die;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载后台登录模板
        return view('Admin.Index.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取登录信息验证
        // dd($request->all());exit;
         //获取输入的验证码
        $fcode = $request->input('fcode');
        // 获取系统校验码
        $vcode = session('vcode');
        
        $admin=DB::table('bm_admins')->where('name','=',$request->input('name'))->first();
        // dd($admin);exit;
        if ($admin&&($admin->status==1)) {
        	// echo "that is ok有这个用户";

        	if (Hash::check($request->input('password'),$admin->password)) {
        		// echo "用户名密码正确";
                $rname = DB::table('bm_roles')->select('name')->where('id','=',$admin->rid)->first();
        		session(['id'=>$admin->id]);
                session(['name'=>$admin->name]);
        		session(['rname'=>$rname->name]);

        		// 权限管理第一步
        		// 1.获取后台登录用户的所有权限列表信息
        		$list = DB::select("select n.name,n.mname,n.aname from bm_admins_roles as ar,bm_roles_nodes as rn,bm_nodes as n where ar.rid=rn.rid and rn.nid=n.id and admins_id={$admin->id}");
        		// echo "<pre>";
        		// var_dump($list);exit;

        		// 2初始化权限信息
        		// 后台首页权限每个管理员必须有
                $nodelist['IndexController'][]='index';
        		$nodelist['IndexController'][]='desktop';
        		foreach ($list as $v) {

        			// 权限控制器字段
        			$nodelist[$v->mname][]=$v->aname;
        			// 如果有create则添加store方法,有edit则添加update(两方法共同存在的)
        			if ($v->aname=='create') {
        				$nodelist[$v->mname][]='store';
        			}
        			if ($v->aname=='edit') {
        				$nodelist[$v->mname][]='update';
        			}
        		}
        		// echo "<pre>";
        		// var_dump($nodelist);exit;
        		
        		// 3.把登录用户所有权限列表存储到session里面
        		session(['nodelist'=>$nodelist]);
        		return redirect('/admin')->with('success','登录成功');//提示信息有空再找个地方弹出提示,先不做处理

        	}else{
        		return back()->with('error','密码有误');
        	}
        }else{
        	return back()->with('error','用户名有误或账号已停用');
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

}

<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入第三方类Redis
use Illuminate\Support\Facades\Redis;
use DB;
use Hash;
use Mail;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //登录退出销毁session
        $request->session()->pull('username');
        $request->session()->pull('miid');
        return redirect('/login/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Home.Login.login');
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
        $user = $request->input('user');//先获取提交的名称,可能是邮箱,手机号或者用户id,再判断
        $password = $request->input('password');
        if (strstr($user,'@')) {
            // echo "字符串里面有@则验证邮箱字段";
            $res = DB::TABLE('bm_users')->where('email','=',$user)->first();
            if ($res) {
                if (Hash::check($password,$res->password)) {
                    if ($res->status==2) {
                        session(['miid'=>$res->miid,'username'=>$res->name]);
                        return redirect('/');
                    }else{
                       return back()->with('error','请先去激活用户');
                    }
                }else{
                    return back()->with('error','密码不正确');
                }
            }else{
                return back()->with('error','账号不存在');
            }

        }elseif(preg_match('/^0?1[3|4|5|6|7|8][0-9]\d{8}$/', $user)){
            // echo "字符串是手机号,验证phone字段";
            $res = DB::TABLE('bm_users')->where('phone','=',$user)->first();
            if ($res) {
                if (Hash::check($password,$res->password)) {
                    if ($res->status==2) {
                        session(['miid'=>$res->miid,'username'=>$res->name]);
                        // echo "登录成功";
                        return redirect('/');
                    }else{
                        return back()->with('error','请先去激活用户');
                    }
                }else{
                    return back()->with('error','密码不正确');
                }
            }else{
                return back()->with('error','账号不存在');
            }

        }else{
            // echo "字符串是10位的会员号";
            $res = DB::TABLE('bm_users')->where('miid','=',$user)->first();
            if ($res) {
                if (Hash::check($password,$res->password)) {
                    if ($res->status==2) {
                        session(['miid'=>$user,'username'=>$res->name]);
                        return redirect('/');
                    }else{
                        return back()->with('error','请先去激活用户');
                    }
                }else{
                    return back()->with('error','密码不正确');
                }
            }else{
                return back()->with('error','账号不存在');
            }
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

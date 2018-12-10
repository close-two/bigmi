<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入Hash
use Hash;
// 导入DB
use DB;
class AdminLoginController extends Controller
{
    //登录界面
    public function login(){
        return view('Admin/Index/login');
    }
    // 执行登录
    public function dologin(){
        // var_dump($_POST);
        // echo "执行登录";
        // $data=$request->except(['_method','_token']);
        $data=$_POST;
        // dd($data);
        // 将接收到的数据与数据库对比
        $name=$data['name'];
        $pwd=$data['password'];
        // 判断 当数据库里面有这个用户时获取所有的信息
        if ($user=DB::table('admin_users')->where('name','=',$name)->first()) {
            // 数据库获取的密码
            $hash=$user->password;
            // dd($hash);
            // 将传输过来的密码与数据库的密码进行比较
            if (password_verify($pwd,$hash)) {
                // echo "123";
                // 如果账号密码都相同就将name存入session中
                session(['name' => $name]);
                // echo $value=session('name');
                // 转入首页
                return redirect('/admin');
                // 
            }else{
                return redirect('admin')->with('error','用户名或码错误');
                // alert(":(用户名或码错误");
            }
        }else{
                return redirect('admin')->with('error','用户名或码错误');
                // alert(":(用户名或码错误");
            }
        // dd($user);
            
    }
    // 管理员注销   切换账户也转过来
    public function logout(){
        // 将session中的name清空
        session(['name'=>null]);
        return redirect('/admin');
    }
}

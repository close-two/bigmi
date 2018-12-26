<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Hash;
use Auth;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //个人中心
        // dd($request->session()->all());
        $miid=session('miid');
        $user=User::where('miid','=',$miid)->first();
        $user['phone']=substr_replace($user['phone'],'****',4,4);
        $user['email']=substr_replace($user['email'],'********',2,8);
         /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        return view('Home.Person.person',['user'=>$user,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //修改密保
        // dd(session('miid'));
        // dd($request->all());
        
        $miid=session('miid');
        $answer=$request->except('_token');
        $answer['miid']=$miid;
        // 修改前先删除旧的问题密保
        DB::table('bm_mibao')->where('miid','=',$miid)->delete();
        if(DB::table('bm_mibao')->insert($answer)){
            return redirect('/usersecret')->with('success','修改密保成功QAQ');
        }else{
            return back()->with('error','请认真填写密保,不能为空');
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

    //修改密码
    public function passwordedit(Request $request){
        //
        $miid=session('miid');
        $user=User::where('miid','=',$miid)->first();

        return view('Home.Person.password',['user'=>$user]);
    }

    public function passwordupdate(Request $request){
        // dd($request->all());
       
        $miid=session('miid');
        $user=DB::table('bm_users')->where('miid','=',$miid)->first();
        $password = $request->input('password');
        $newpassword = $request->input('newpassword');
        $res = DB::table('bm_users')->where('miid',$miid)->select('password')->first();
        //校验原密码
        if(!Hash::check($password, $res->password)){
            return back()->with('error','原密码不正确');
        }
        //校验新密码
        if($newpassword!=$request->input('renewpassword')){
            return back()->with('error','两次密码输入不一致');
        }
        //加密
        $update = array(
        'password'  =>bcrypt($newpassword),
        );
        $result = DB::table('bm_users')->where('miid',$miid)->update($update);
        if($result){
            return redirect('/userinfo')->with('success','修改成功');
        }else{
            echo 3;exit;
        }

    }
}

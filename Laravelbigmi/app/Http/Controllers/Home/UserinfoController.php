<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
//导入配置类
 use Config;
 use DB;


class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //个人信息模板
      
        $miid=session('miid');
        $id=User::where('miid',$miid)->first()->id;
        // dd($id);
        $user=User::where('miid',$miid)->first();
        //获取默认地址
        $address=DB::table('bm_user_address')->where('uid','=',$id)->where('status','=',1)->first();
        //
         /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
        $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
        $navdata = PublicController::getNav();

        $showHelp = PublicController::getHelpInfo();

        $showLinks = PublicController::getFriendLink();

        /********************公共头尾数据调用结束**********************************/
        
        // dd($user->email);

        // dd($address);
        // if(){}
        //获取用户收货地址
      
        //获取用户默认地址
        
        // dd($getaddress);
        return view('Home.Person.profile',['user'=>$user,'address'=>$address,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
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
        //
        dd($request->all());
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
        // dd($id);
        // dd($request->all());
        $newinfo=$request->except(['_token','_method']);
        $info=User::where('id','=',$id)->first();
        // dd($newinfo);
        if($request->hasFile('headpic')){
            //获取文件后缀名
            $ext=$request->file('headpic')->getClientOriginalExtension();
            $name=time().rand(1,9999);
            $request->file('headpic')->move(Config::get('app.uploadheadpic'),$name.".".$ext);
             $newinfo['headpic']=trim(Config::get('app.uploadheadpic')."/".$name.".".$ext,'.');
        }
        // dd($info);
        if(User::where("id","=",$id)->update($newinfo)){
            if($info['headpic']){
                unlink('.'.$info->headpic);
                return redirect('/userinfo')->with('success','修改成功');
            }else{
                return redirect('/userinfo')->with('success','修改成功');
            }
                
           
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

    //用户安全
    public function usersecret(Request $request){
        $miid=session('miid');
        // dd($miid);
        $user=User::where('miid','=',$miid)->first();
        $user['phone']=substr_replace($user['phone'],'****',4,4);
        return view('Home.Person.security',['user'=>$user]);
    }

    //密保问题
    public function usermibao(Request $request){
        $miid=session('miid');
        $user=User::where('miid','=',$miid)->first();
        return view('Home.Person.mibao',['user'=>$user]);
    }

    //密保修改答案
    public function lost(Request $request){
      return view('Home.Login.lost');
    }

    public function getuser(Request $request){
        dd($request->all());
    }
}

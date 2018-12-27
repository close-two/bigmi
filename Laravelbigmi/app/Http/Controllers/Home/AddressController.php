<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Useraddress;
use App\Models\User;
use DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $miid=session('miid');
        // dd($miid);
        $user=User::where('miid','=',$miid)->first();
        // dd($user);
        $uid=$user->id;
        // dd($uid);
        // 
        
       
        $address=DB::table('bm_user_address')->where('uid','=',$uid)->get()->toArray();

        // var_dump($address);exit;
        // dd($address);
        

        //省市区
       
        // var_dump($address);exit;
        // dd($address->phone);
        
        /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
        $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
        $navdata = PublicController::getNav();

        $showHelp = PublicController::getHelpInfo();

        $showLinks = PublicController::getFriendLink();

        /********************公共头尾数据调用结束**********************************/

        // $address->phone=substr_replace($address['phone'],'****',4,4);
        //加载地址模板
        // dd($address);
        return view('Home.Person.address',['address'=>$address,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Home.Address.address');
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
        $data=$request->except('_token');
        //拼接地址
        $address=$data['s_province'].$data['s_city'].$data['s_county'];
        // dd($address);
        $data['address']=$address;
        //用户id
        if(!empty($data['id'])){
            $uid=$data['id'];
            $data['uid']=$uid;
            unset($data['id']);
        }else{
            //如果没有地址
            $miid=session('miid');
            $user=DB::table('bm_users')->where('miid',$miid)->first();
            $data['uid']=$user->id;
        }
        
        // dd($data);
        //截取没用
        // $addressinfo=array_slice($data,3);
       
        //删除多余
       
        // dd($data);
        if(DB::table('bm_user_address')->insert($data)){
            return redirect('/useraddress')->with('success','添加地址成功');
        }else{
            return back()->with('error','添加失败');
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

        $address=DB::table('bm_user_address')->where('id',$id)->first();

        // dd($address);
        //修改地址
        // /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
        $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
        $navdata = PublicController::getNav();

        $showHelp = PublicController::getHelpInfo();

        $showLinks = PublicController::getFriendLink();

        /********************公共头尾数据调用结束**********************************/

        return view('Home.Person.addressedit',['address'=>$address,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
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
        $data=$request->except('_token','_method');
        $data['address']=$data['s_province'].$data['s_city'].$data['s_county'];
        // dd($data);
        if(DB::table('bm_user_address')->where('id',$data['id'])->update($data)){
            return redirect('/useraddress')->with('success','修改成功');
        }else{
            return redirect('/useraddress')->with('error','系统错误,紧急修理中');
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

    //ajax删除地址
    public function del(Request $request){
        $id= $request->input('id');
        //执行删除
        if(DB::table('bm_user_address')->where('id','=',$id)->delete()){
            session(['success'=>'删除成功']);
            echo 1;
        }else{
            echo 0;
        }
    }

    //默认地址
    public function status(Request $request){
        //要修改为默认地址的id
        $id=$request->input('id');
        // dd($data);
        // echo $id;
        //寻找当前要修改默认地址的同父(uid)下已经为默认地址的数据
        $miid=session('miid');
        //获取用户id
        $new=DB::table('bm_user_address')->where('id',$id)->first();
        $uid=$new->uid;
        // echo $uid;
        //获取同uid下status为1(默认地址)的数据---->要把默认变0
        

        $default=DB::table('bm_user_address')->where('uid',$uid)->where('status',1)->first();
        //旧默认地址修改status=0
            $default->status=0;
            $old['status']=$default->status;
            DB::table('bm_user_address')->where('id',$default->id)->update($old);
        // var_dump($default);
        if($new->status==0){
            //新
            $new->status=1;
            $data['status']=$new->status;
        }
        // 旧的默认地址1->0
        
        if(DB::table('bm_user_address')->where('id',$id)->update($data)){

            echo '修改的默认地址成功';
        }else{
            echo '修改失败';
        }
    }
}
